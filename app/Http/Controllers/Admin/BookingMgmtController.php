<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Pandit;
use App\Models\PujaEcommerce;
use App\Models\UserAddress;
use App\Models\Puja;


class BookingMgmtController extends Controller
{
    public function index(){
        $bookingList = Booking::all();
        $panditList = Pandit::all();
        foreach(@$bookingList as $booking){
            $booking->ecomm_puja_id     = PujaEcommerce::find($booking->ecomm_puja_id);
            $booking->ecomm_puja_id->puja_id     = Puja::find($booking->ecomm_puja_id->puja_id);            
            $booking->address_id        = UserAddress::find($booking->address_id);
            $booking->pandit_id         = Pandit::find($booking->pandit_id);
        } 
        // dd($bookingList);
        return view('admin/booking-list' ,compact('bookingList','panditList'));
    }

    public function assignPandit(Request $request){
        if($request->booking_id){
            // dd($request);
            $panditAss = Booking::where("id",$request->booking_id)->update(["pandit_id"=>$request->pandit_id]);
            $bookingList = Booking::all();
            $panditList = Pandit::all();
            foreach(@$bookingList as $booking){
                $booking->ecomm_puja_id     = PujaEcommerce::find($booking->ecomm_puja_id);
                $booking->ecomm_puja_id->puja_id     = Puja::find($booking->ecomm_puja_id->puja_id);            
                $booking->address_id        = UserAddress::find($booking->address_id);
                $booking->pandit_id         = Pandit::find($booking->pandit_id);
            } 
            return view('admin/booking-list' ,compact('bookingList','panditList'));
            // $panditAss
        }
    }
}
