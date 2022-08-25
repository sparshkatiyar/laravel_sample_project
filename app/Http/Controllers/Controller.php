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
            return $data->name. ", " .$data->phone." will perform your online pooja on (Date and time of Pooja). Please visit AstroPanditom.com to check details of Pooja. Please Join your pooja through Google Meet (ID and Password). Radhe Radhe…";
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
            return "-(Customer Name) has booked the pooja (name of pooja) for (date and time of pooja) on (date of booking by devotee). Advance paid: Rs___, and Rs___ to be collected by Pandit ji.";
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

    public function sendMail($email)
    {
 
      Mail::to($email)->send(new Subscribe());
 
        if (Mail::failures()) {
            return response()->Fail('Sorry! Please try again latter');
        }else{
            return response()->success('Great! Successfully send in your mail');
        }
    } 

}
