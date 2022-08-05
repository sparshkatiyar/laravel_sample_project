<?php

namespace App\Http\Controllers;


use App\Mail\Subscribe;
use App\Models\Subscriber;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class SubscriberController extends Controller
{
    //
    public function subscribe(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:subscribers'
        ]);

        if ($validator->fails()) {
            return new JsonResponse(['success' => false, 'message' => $validator->errors()], 422);
        }  

        $email = $request->all()['email'];
            $subscriber = Subscriber::create([
                'email' => $email
            ]
        ); 

        if ($subscriber) {
            Mail::to($email)->send(new Subscribe($email));
            return new JsonResponse(
                [
                    'success' => true, 
                    'message' => "Thank you for subscribing to our email, please check your inbox"
                ], 
                200
            );
        }
    }

    public function booking(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:subscribers'
        ]);

        if ($validator->fails()) {
            return new JsonResponse(['success' => false, 'message' => $validator->errors()], 422);
        }  

        $email = $request->all()['email'];
            $subscriber = Subscriber::create([
                'email' => $email
            ]
        ); 

        if ($subscriber) {
            Mail::to($email)->send(new Subscribe($email));
            return new JsonResponse(
                [
                    'success' => true, 
                    'message' => "Dear Customer
                    Thank you for booking puja at AstroPandit Om.
                    Pandit ji will be assigned and intimated to you shortly.
                    Radhe Radhe...
                    AstroPanditOm Team
                    "
                ], 
                200
            );
        }
    }

    public function bookingConfirm(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:subscribers'
        ]);

        if ($validator->fails()) {
            return new JsonResponse(['success' => false, 'message' => $validator->errors()], 422);
        }  

        $email = $request->all()['email'];
            $subscriber = Subscriber::create([
                'email' => $email
            ]
        ); 

        if ($subscriber) {
            Mail::to($email)->send(new Subscribe($email));
            return new JsonResponse(
                [
                    'success' => true, 
                    'message' => "(Customer Name) has booked (name of pooja) for (date and time of pooja) on (date of booking by devotee). Advance paid: Rs___, and Rs___ to be collected by Pandit ji.
                    "
                ], 
                200
            );
        }
    }
    public function bookingPandit(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:subscribers'
        ]);

        if ($validator->fails()) {
            return new JsonResponse(['success' => false, 'message' => $validator->errors()], 422);
        }  

        $email = $request->all()['email'];
            $subscriber = Subscriber::create([
                'email' => $email
            ]
        ); 

        if ($subscriber) {
            Mail::to($email)->send(new Subscribe($email));
            return new JsonResponse(
                [
                    'success' => true, 
                    'message' => "Dear Customer, 
                    (Name of Pandit and mobile no.) is assigned for your pooja. 
                    Radhe Radhe…
                    AstroPanditOm Team
                    
                    "
                ], 
                200
            );
        }
    }

    
}
