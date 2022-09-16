<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Pandit;
use App\Models\PujaEcommerce;
use App\Models\UserAddress;
use App\Models\Puja;
use App\Models\User;
use stdClass;


class BookingMgmtController extends Controller
{
    public function index(){
        $bookingList = Booking::where('pandit_id',null)->orderBy('id', 'DESC')->paginate(5);      
        $panditList = Pandit::all();
        foreach(@$bookingList as $booking){
            $booking->ecomm_puja_id                 = PujaEcommerce::find($booking->ecomm_puja_id);
            $booking->ecomm_puja_id->puja_id        = Puja::find($booking->ecomm_puja_id->puja_id);            
            $booking->address_id                    = UserAddress::find($booking->address_id);
            $booking->user_details                  = User::find($booking->user_id);
            $booking->pandit_id                     = Pandit::find($booking->pandit_id);
        } 
      
        return view('admin/booking-list' ,compact('bookingList','panditList'));
    }

    public function assigned(){
        $bookingList = Booking::where('pandit_id',"!=",null)->orderBy('id', 'DESC')->paginate(5);
        $panditList = Pandit::all();
        foreach(@$bookingList as $booking){
            $booking->ecomm_puja_id     = PujaEcommerce::find($booking->ecomm_puja_id);
            $booking->ecomm_puja_id->puja_id     = Puja::find($booking->ecomm_puja_id->puja_id);            
            $booking->address_id        = UserAddress::find($booking->address_id);
            $booking->pandit_id         = Pandit::find($booking->pandit_id);
        } 
      
        // dd($bookingList);
        return view('admin/assigned-puja' ,compact('bookingList','panditList'));
    }

    public function assignPandit(Request $request){
        if($request->booking_id){
            // dd($request);
            $panditAss = Booking::where("id",$request->booking_id)->update(["pandit_id"=>$request->pandit_id]);
            $bookingDeatails = Booking::where("id",$request->booking_id)->first();
            $PujaDeatails = PujaEcommerce::find($bookingDeatails->ecomm_puja_id);
            $PujaBase =  Puja::find($PujaDeatails->puja_id);
            $addressDetails =  UserAddress::find($bookingDeatails->address_id);
            $bookingList = Booking::all();
            $panditList = Pandit::all();
            // dd($bookingDeatails);
            foreach(@$bookingList as $booking){
                $booking->ecomm_puja_id     = PujaEcommerce::find($booking->ecomm_puja_id);
                $booking->ecomm_puja_id->puja_id     = Puja::find($booking->ecomm_puja_id->puja_id);            
                $booking->address_id        = UserAddress::find($booking->address_id);
                $booking->pandit_id         = Pandit::find($booking->pandit_id);
            } 
            $panditDetails  = Pandit::find($request->pandit_id)->first();
            // dd($panditDetails->name);
            $user               = User::find($booking->user_id);
            $obj                = new stdClass();
            $obj->name          = $panditDetails->name;
            $obj->phone         = "+91 88106 40406";
            $type               = 3;
            $emailowner         = env('COMPANY_MAIL', 'info@astropanditom.com');

            $mail_data_user     = new stdClass();
            $mail_data_user->pandit_name = $panditDetails->name;
           
            $mail_data_owner    = new stdClass();
            $mail_data_owner->user_name = $user->first_name;
            $mail_data_owner->pandit_name = $panditDetails->name;
            $mail_data_owner->pooja_name = $PujaBase->name;
            $mail_data_owner->pooja_id  = $bookingDeatails->booking_id;;
            $mail_data_owner->pooja_date = $bookingDeatails->deliver_date;
       
            $mail_data_owner->pay_advanced = $panditDetails->name;
            $mail_data_owner->pay_balance = $panditDetails->name;

            $mail_data_pandit    = new stdClass();
            $mail_data_pandit->pooja_name = $PujaBase->name;
            $mail_data_pandit->pooja_id = $bookingDeatails->booking_id;
            $mail_data_pandit->user_name = $user->first_name;
            $mail_data_pandit->user_mobile = $user->mobile_number;
            $mail_data_pandit->pooja_date = $bookingDeatails->deliver_date;
            // $mail_data_pandit->pooja_time = $panditDetails->name;
            $mail_data_pandit->address = $addressDetails->address;
            $mail_data_pandit->pay_advanced = $panditDetails->name;
            $mail_data_pandit->pay_balance = $panditDetails->name;
        
            $mailInfouser       = $this->emailTemplate(3,$mail_data_user);
            $mailInfoowner      = $this->emailTemplate(4,$mail_data_owner);
            $mailInfopandit     = $this->emailTemplate(5,$mail_data_pandit);
            // dd($mailInfopandit);
     
            $subject="Pandit ji is Assigned for pooja";
            $details_user='<!DOCTYPE html>
            <html>
            <body>
            '.$mailInfouser.'
            <p>Astro Pandit</p>
            </body>
            </html>';
           
            
            $details_owner='<!DOCTYPE html>
            <html>
            <body>
            '.$mailInfoowner.'
            <p>Astro Pandit</p>
            </body>
            </html>';

            $details_pandit='<!DOCTYPE html>
            <html>
            <body>
            '.$mailInfopandit.'
            <p>Astro Pandit</p>
            </body>
            </html>';
            $emailuser              = $user->email;
            $emailowner             = env('COMPANY_MAIL', 'info@astropanditom.com');
            $emailpandit            = $panditDetails->email;
          
            $mailReulstuser         = $this->sendMail($emailuser,$subject,$details_user);
            $mailReulstowner        = $this->sendMail($emailowner,$subject,$details_owner);
            $mailReulstopandit      = $this->sendMail($emailpandit,$subject,$details_pandit);
            
            $msg = $this->smsToUser($type,$obj);          
            $smr = $this->sendSMS($msg,$user->mobile_number,$user->country_code);
     

            return redirect('/admin-panel/pooja-booking');
            
        
        }
    }
}
