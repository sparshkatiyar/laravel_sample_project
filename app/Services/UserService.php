<?php

namespace App\Services;

class UserService 
{
    public function errorMessage($message){
    	$response = ['message'=>$message];
    	return response()->json($response,400);
    }
   
    public function successMessageWithoutToken($message,$data){
    	$response = ['message'=>$message,'data'=>$data];
    	return response()->json($response,200);
    }
    public function successOnlyMessage($message){
    	$response = ['message'=>$message];
    	return response()->json($response,200);
    }
    public function notFoundMessage(){
    	$response = ['message'=>"Not found"];
    	return response()->json($response,404);
    }
}
