<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Twilio\Rest\Client;
use DB;
use Mail;
use App\Mail\Subscribe;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function base46toimage($img)
 	{
 		$image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $file = 'images/'.uniqid() . '.jpg';        
        Storage::disk('s3')->put($file, $image_base64);
        return $file;
 	}

    public function Productbase46toimage($img)
    { 
 
        $image = $img;
        $imageName = time().'.'.$image->getClientOriginalName();
        $filepath='images/product/'.$imageName;
        Storage::disk('s3')->put($filepath, file_get_contents($image));
        $file = $filepath;
        return $file;
    }

    public function submitBarCode($product_id,$code){
        $value = 100+$product_id ;
       
        $valueData = "09".rand(100000,999999)."".$value;
        
        $barcode = new \Com\Tecnick\Barcode\Barcode();
        $targetPath = public_path('barcode_images');
        
        if (! is_dir($targetPath)) {
            mkdir($targetPath, 0777, true);
        }
        $productData = $code;
        //dd($productData);
        $barcode = new \Com\Tecnick\Barcode\Barcode();
        $bobj = $barcode->getBarcodeObj('C128', "{$productData}", 450, 70, 'black', array(
            0,
            0,
            0,
            0
        ))->setBackgroundColor('white');
        
        $imageData = $bobj->getPngData();
        $timestamp = time();
        $imageNames = $timestamp . '.png'; 
        file_put_contents($targetPath."/". $imageNames, $imageData);
        Product::where('id',$product_id)->update(['bar_image'=>$imageNames,'barcode'=>$productData]);
        //return redirect('getBarCode');
    }

    public function sendOtp($msg,$mobile,$countryCode) {

        $AccountSid   =  "AC248fda92be8423797941d80a75acdf25";
        $AuthToken    =  "a55b2e19802fb6394cc6687cd25e0e61";
        $client       =  new Client($AccountSid, $AuthToken);
        $contact      =  $countryCode.$mobile;//'+919899728180';
        try{       
            DB::beginTransaction();     
            $client->account->messages->create(
                $contact,
                array(
                    'from' => "+17086690939",
                    'body' => $msg
                )
            );
            // print_r($sms);die;  
            $response     =  [
                'message' => 'success',
                'status'  => 1,
            ];
            return $response;

        } catch(Exception $e){
            $response = [
                'message' => $e->getMessage(),
                'status'  => 0,
            ];
            return $response;
        }
    }
    public function sendOrderSMS($msg,$mobile,$countryCode) {

        $AccountSid   =  "AC248fda92be8423797941d80a75acdf25";
        $AuthToken    =  "a55b2e19802fb6394cc6687cd25e0e61";
        $client       =  new Client($AccountSid, $AuthToken);
        $contact      =  $countryCode.$mobile;//'+919899728180';
        try{       
            DB::beginTransaction();     
            $client->account->messages->create(
                $contact,
                array(
                    'from' => "+17086690939",
                    'body' => $msg
                )
            );
            // print_r($sms);die;  
            $response     =  [
                'message' => 'success',
                'status'  => 1,
            ];
            return $response;

        } catch(Exception $e){
            $response = [
                'message' => $e->getMessage(),
                'status'  => 0,
            ];
            return $response;
        }
    }
    public function sendSMS ($msg,$mobile,$countryCode) {

        $AccountSid   =  "AC248fda92be8423797941d80a75acdf25";
        $AuthToken    =  "a55b2e19802fb6394cc6687cd25e0e61";
        $client       =  new Client($AccountSid, $AuthToken);
        $contact      =  $countryCode.$mobile;//'+919899728180';
        try{       
            // DB::beginTransaction();     
            $messages = $client->account->messages->create(
                $contact,
                array(
                    'from' => "+17086690939",
                    'body' => $msg
                )
            );
            // print_r($messages->body);die;  
            $response     =  [
                'message' => 'success',
                'status'  => 1,
            ];
            return $response;

        } catch(Exception $e){
            $response = [
                'message' => $e->getMessage(),
                'status'  => 0,
            ];
            return $response;
        }
    }

    public function smsToUser($type,$data){
        if($type == 1){
            return "Thank you for booking puja at AstroPandit Om.Pandit ji will be assigned and intimated to you shortly.Radhe Radhe ";
        }
       
        elseif($type == 2){
            return $data->user_name. ", " .$data->pandit_name."for (Customer name), (Name of Pandit) has been assigned. Date and time of Pooja are (date, time). Advance paid: Rs___, and Balance____.";
        }
        elseif($type == 3){
            return $data->name. ", " .$data->phone." will perform your online pooja on (Date and time of Pooja). Please visit https://astropanditom.com to check details of Pooja. Please Join your pooja through Google Meet (ID and Password). Radhe Radhe…";
        }
        elseif($type == 4){
            return "Your auspicious pooja has been successfully completed. Thanks for choosing AstroPandit Om. Hope to serve you again. Radhe Radhe... ";
        }

        
    }

    public function smsToOwner($type,$data){
        if($type ==1){
            return "Thank you for booking puja at AstroPandit Om.Pandit ji will be assigned and intimated to you shortly.Radhe Radhe...";
        }
        elseif($type ==2){
            return $data->user_name."- has booked the pooja ".$data->puja_name." for ".$data->delivery." on (".$data->today."). Advance paid: Rs INR/- ".$data->advanced_paid.", and Rs INR/- ".$data->collect_price." to be collected by Pandit ji.";
        }
        elseif($type ==3){
            return $data->puja_name. "for ".$data->user_name. " has been successfully completed by Mr ".$data->pandit_name." on ".$data->date." and ".$data->time." of Pooja done. Full amount has been collected. Radhe Radhe... ";
        }
    }

    public function smsToPandit($type,$data){
        if($type ==1){
            return "(Name of Pandit and mobile no.) is assigned for your pooja. Please visit AstroPanditom.com to check details of Pooja and Samagri.Radhe Radhe…";
        }
        elseif($type==2){
            return "-(name of pooja and pooja ID no) for (Customer name and mobile no.) on (Date and time of Pooja) at (address) to be done. Collect Rs__after puja. Samagri: (Details of Samagri to be picked up from website)Radhe Radhe…";
        }
        elseif($type==3){
            return $data->puja_name. " for ".$data->user_name. "phone".$data->phone . "on ".$data->date."time " .$data->time." of Pooja) is to be done. Samagri: (Details of Samagri to be picked up from website). Google Meet (ID and Password).Radhe Radhe… ";
        }
    }

    public function emailTemplate($type,$data){
        if($type == 1){
            return "<p>Dear Customer</p>
            <p>Thank you for booking puja at AstroPandit Om.</p>
            <p>Pandit ji will be assigned and intimated to you shortly.</p>
            <p>Radhe Radhe...</p>
            <p>AstroPanditOm Team</p>
            ";
        }
        elseif($type==2){
            return '<p>'.$data->user_name." has booked '.$data->puja_name.' for '.$data->delivery. 'on '.$data->today.'. Advance paid: Rs'.$data->advanced_paid.', and Rs'.$data->collect_price.' to be collected by Pandit ji.";
        }
        elseif($type==3){
            return "Dear Customer, 
            (Name of Pandit and mobile no.) is assigned for your pooja. 
            Radhe Radhe…
            AstroPanditOm Team
            ";
        }
        elseif($type==4){
            return "For pooja (name of pooja and pooja ID no) for (Customer name), (Name of Pandit) has been assigned. Date and time of Pooja are (date, time). Advance paid: Rs___, and Rs___ to be collected by Pandit ji after pooja.
            Radhe Radhe…
            AstroPanditOm Team            
            ";
        }
        elseif($type==5){
            return "name of pooja and pooja ID no) for (Customer name and mobile no.) on (Date and time of Pooja) at (address) to be done. Collect Rs__after puja. Samagri: (Details of Samagri to be picked up from website)
            Radhe Radhe…
            AstroPanditOm Team
                        
            ";
        }
        elseif($type==6){
            return "For pooja (puja name and ID no) for (Customer name), (Name of Pandit) has been assigned for Online Pooja on (Date and time of pooja). Full amount of Rs___ has been collected. Google Meet (ID and Password)
            Radhe Radhe…";
        }
        elseif($type==7){
            return "(name of pooja and pooja ID no) for (Customer name and mobile no.) on (Date and time of Pooja) is to be done. Samagri: (Details of Samagri to be picked up from website). Google Meet (ID and Password). 
            Radhe Radhe…
            ";
        }
        elseif($type==8){
            return "(name of pooja and pooja ID no) for (Customer name and mobile no.) on (Date and time of Pooja) is to be done. Samagri: (Details of Samagri to be picked up from website). Google Meet (ID and Password). 
            Radhe Radhe…
            ";
        }
    }
    
    public function stateList(){
        $indian_all_states  = array (
            'AP' => 'Andhra Pradesh',
            'AR' => 'Arunachal Pradesh',
            'AS' => 'Assam',
            'BR' => 'Bihar',
            'CT' => 'Chhattisgarh',
            'GA' => 'Goa',
            'GJ' => 'Gujarat',
            'HR' => 'Haryana',
            'HP' => 'Himachal Pradesh',
            'JK' => 'Jammu & Kashmir',
            'JH' => 'Jharkhand',
            'KA' => 'Karnataka',
            'KL' => 'Kerala',
            'MP' => 'Madhya Pradesh',
            'MH' => 'Maharashtra',
            'MN' => 'Manipur',
            'ML' => 'Meghalaya',
            'MZ' => 'Mizoram',
            'NL' => 'Nagaland',
            'OR' => 'Odisha',
            'PB' => 'Punjab',
            'RJ' => 'Rajasthan',
            'SK' => 'Sikkim',
            'TN' => 'Tamil Nadu',
            'TR' => 'Tripura',
            'UK' => 'Uttarakhand',
            'UP' => 'Uttar Pradesh',
            'WB' => 'West Bengal',
            'AN' => 'Andaman & Nicobar',
            'CH' => 'Chandigarh',
            'DN' => 'Dadra and Nagar Haveli',
            'DD' => 'Daman & Diu',
            'DL' => 'Delhi',
            'LD' => 'Lakshadweep',
            'PY' => 'Puducherry',
        );
        return $indian_all_states;
    }

    public function panditSkill($type){
        if($type == 1){
            $skill_primary = array(
                "Vedic Pooja-Path", 
                "Karamkand Visheshgya",
                "Kathavachak",
                "Puja-path Consultation",
                "Gemstone consultation",
                "Puja Muhurat Consultation",
                "Bhajan/Sandhya- Sangeetmay Path",
            );
            return $skill_primary;
        }
        elseif($type == 2){
            $skill_primary = array(
                "Vedic Astrology", 
                "KP Astrology",
                "Numerology",
                "Tarot card reading",
                "Lal Kitab",
                "Nadi Astrology",
                "Prasanna KundliReiki Healing",
                "Palmistry",
            );
            return $skill_primary;
        }
        elseif($type == 3){
            $skill_primary = array(
                "Life Coach", 
                "Spiritual Healer",
                "Motivational Speaker",
                "Individual Coaching",
                "Leadership Speaker",
                "Life Skills Training",
                "Career Counselling",
              
            );
            return $skill_primary;
        }
        elseif($type == 4){
            $skill_secondary = array(
                "Birth Chart Analysis", 
                "Gemstone Consultation",
                "Vastu Consultation",
                "Kundali Matching",
                "Marriage Consultation",
                "Career and Business Advice",
                "Love and Relationship Advice",
                "Spiritual/Reiki healing",
              
            );
            return $skill_secondary;
        }
    }

    public function sendMail($email,$subject,$details)
    {
        $details = [
            'subject'=>$subject,
            'title' => 'Astropandit',
            'body' => $details
              ];
           if(\Mail::to($email)->send(new \App\Mail\Subscribe($details)))
           {
            return 1;
           } else 
           {
            return 2;
           }
    //   Mail::to($email)->send(new Subscribe());
 
    //     if (Mail::failures()) {
    //         return response()->Fail('Sorry! Please try again latter');
    //     }else{
    //         return response()->success('Great! Successfully send in your mail');
    //     }
    } 

}
