<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Twilio\Rest\Client;
use DB;
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

    public function sendOtp($otp,$mobile,$countryCode) {

        $AccountSid   =  "AC248fda92be8423797941d80a75acdf25";
        $AuthToken    =  "a55b2e19802fb6394cc6687cd25e0e61";
        $client       =  new Client($AccountSid, $AuthToken);
        $contact      =  $countryCode.$mobile;//'+919899728180';
        try{       
            DB::beginTransaction();     
            $client->account->messages->create(
                $contact,
                array(
                    // 'from' => "+18186503828", 
                    
                    'from' => "+15744062664",
                    'body' => "Astro pandit one time  OTP ".$otp." for signin !."
                )
            );
            // print_r($sms);die;   -----
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

}
