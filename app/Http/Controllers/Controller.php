<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

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

        $AccountSid   =  "ACa6a569c4337f2f1589e1973d761274ee";
        $AuthToken    =  "6a0037b16047f0046151ab60ae87f599";
        $client       =  new Client($AccountSid, $AuthToken);
        $contact      =  $countryCode.$mobile;//'+919899728180';
        try{       
            //DB::beginTransaction();     
            // $client->account->messages->create(
            //     $contact,
            //     array(
            //         'from' => "+18186503828", 
            //         // 'from' => "+15744062664",
            //         'body' => $otp." is the OTP for Flip Application."
            //     )
            // );
            //print_r($sms);die;   -----
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
