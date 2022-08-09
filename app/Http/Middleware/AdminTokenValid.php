<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Response;
class AdminTokenValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // return $next($request);
        if(!empty(($request->header('accessToken')))){
            $userDetail = User::where(['role'=>'0', 'access_token' => $request->header('accessToken')])->first();
            if(empty($userDetail)){
                $Response = [
                  'message'  => trans('messages.invalid.accessToken'),
                ];
                 return response()->json(['message'=>'Access token is invalid'],401);
                // return Response::json( $Response , trans('messages.statusCode.INVALID_ACCESS_TOKEN') );
            }else{
                if($userDetail->is_block==1){
                    $response = [
                      'message' =>  "You have been block by admin."
                     ];
                    return response()->json($response,__('messages.statusCode.SHOW_ERROR_MESSAGE'));
                }
            }            
            $request['userDetail'] = $userDetail;
            return $next($request);
        } else {
            $response['message'] = __('messages.required.accessToken');
            return response()->json($response,401);
        }
    }
}
