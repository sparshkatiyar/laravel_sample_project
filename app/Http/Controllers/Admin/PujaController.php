<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Puja;
use App\Models\PujaEcommerce;
use App\Models\PujaCategory;
use App\Models\PujaRequest;
use Validator;
use Hash;
use Illuminate\Support\Facades\Input;


class PujaController extends Controller
{
    //
    public function pujaCreation(Request $request){
        $validations            =  array(
            'pujaname'          => 'required',
            'pujatype'          => 'required',
            'pujacategory'      => 'required',
            'pujaadvantage'     => 'required',
            'pujadescription'   => 'required',
            
        );       
        $validator =Validator::make($request->all(),$validations);
        if($validator->fails()){
            $response   =[
                'message'   => $validator->errors($validator)->first(),
            ];
            return response()->json($response,400);
        }
        
        $puja = new Puja();
        if($request->file('pujaimage')){
            $file= $request->file('pujaimage');
            // $filename= date('YmdHi')."-".$file->getClientOriginalName();
            $filename= date('YmdHi')."-puja.".$file->extension();
            $file-> move(public_path('web/Image'), $filename);
            $puja->image= $filename;
        }
        $puja->name = $request->get('pujaname');
        $puja->type = $request->get('pujatype');      
        $puja->category = $request->get('pujacategory');
        $puja->advantage = $request->get('pujaadvantage');
        $puja->desc = $request->get('pujadescription');
        $puja->pujasimplified = $request->get('pujadescriptionhindi');
        // $puja->pujasimplified = $request->get('pujasimplified');
        $puja->save();
        \Session::put('PoojaDetail',$puja);
        // return redirect('admin-panel/puja-list');
        return redirect('admin-panel/puja-creation-ecommerce');
    }

    public function pujaCreationEm(Request $request){
        $validations                =  array(
            'pujanameId'            => 'required',
            'baseprice'             => 'required',
            'samagriprice'          => 'required',
            'wsamagriprice'         => 'required',
            'samallpujaprice'       => 'required',
            'mediumpujaprice'       => 'required',
            'largepujaprice'        => 'required',
            'allpujaprice'          => 'required',
            
        );       
        $validator =Validator::make($request->all(),$validations);
        if($validator->fails()){
            $response   =[
                'message'   => $validator->errors($validator)->first(),
            ];
            return response()->json($response,400);
        }  
        
        $checpricepooja=PujaEcommerce::where('id',$request->price_id)->first();
       
        if(empty($checpricepooja))
        {
            
            $poojaprice= PujaEcommerce::where('puja_id',$request->get('pujanameId'))->first();
            if(empty($poojaprice))
            {
                $puja = new PujaEcommerce();
                $puja->puja_id              = $request->get('pujanameId');
                $puja->puja_base_price      = $request->get('baseprice'); 
                $puja->puja_samagri_price   = $request->get('samagriprice');  
                $puja->puja_wsamagri_price   = $request->get('wsamagriprice');  
                $puja->puja_price_samall    = $request->get('samallpujaprice');
                $puja->puja_price_medium    = $request->get('mediumpujaprice');
                $puja->puja_price_large     = $request->get('largepujaprice');
                $puja->puja_price_all       = $request->get('allpujaprice');
                $puja->save();
                return redirect('admin-panel/puja-category');
            }else
            {
                return redirect()->route('pooja.edit.price',$request->get('pujanameId'))->withInput($request->all())->with('error','Already added Pooja Price for this Pooja');
            }
        
        }else
        {
            $poojaprice= PujaEcommerce::where('puja_id',$request->get('pujanameId'))->where('id','!=',$request->price_id)->first();
            if(empty($poojaprice))
            {
            $puja=PujaEcommerce::where('puja_id',$request->get('pujanameId'))->first();
            $puja->puja_id              = $request->get('pujanameId');
            $puja->puja_base_price      = $request->get('baseprice'); 
            $puja->puja_samagri_price   = $request->get('samagriprice');  
            $puja->puja_wsamagri_price   = $request->get('wsamagriprice');  
            $puja->puja_price_samall    = $request->get('samallpujaprice');
            $puja->puja_price_medium    = $request->get('mediumpujaprice');
            $puja->puja_price_large     = $request->get('largepujaprice');
            $puja->puja_price_all       = $request->get('allpujaprice');
            $puja->save();
            return redirect('admin-panel/puja-category-edit/'.$request->get('pujanameId'));
            }else
            {
                return redirect()->route('pooja.edit.price',$request->get('pujanameId'))->withInput($request->all())->with('error','Already added Pooja Price for this Pooja');
            }
        }
        \Session::put('PoojaPrice',$puja);
        // return redirect('admin-panel/puja-list-ecommerce');
        
    }

    public function pujaCreationedit($pujaid){
        $pujaList = Puja::all();
        $pujaecomm=PujaEcommerce::where('puja_id',$pujaid)->first();
        return view('admin/puja-creation-ecomm',compact('pujaList','pujaecomm'));
    }

    public function pujaCategory(){
        // $category_all = PujaCategory::select('name_desc')->where('id',3)->get()->first();
        $allpooja = Puja::get();
        return view('admin/puja-category',compact('allpooja'));
    }

    public function pujaCategoryedit($poojacatid){
        // $category_all = PujaCategory::select('name_desc')->where('id',3)->get()->first();
        $allpooja = Puja::get();
        $poojacat = PujaCategory::where('pooja_id',$poojacatid)->first();
        return view('admin/puja-category',compact('allpooja','poojacat'));
    }
    public function pujadelete($poojaid){
         Puja::where('id',$poojaid)->delete();
         PujaEcommerce::where('puja_id',$poojaid)->delete();
         PujaCategory::where('pooja_id',$poojaid)->delete();
         return redirect()->back()->with('success','Pooja details deleted successfully');
    }

    public function pujaCategoryUpdate(Request $request){
        $checlpooja=PujaCategory::where('pooja_id',$request->pujaname)->first();
        if(empty($checlpooja))
        {
            
            $saveCategory = new PujaCategory;
            $saveCategory->pooja_id = $request->pujaname ?? '';
            $saveCategory->standard_pooja = $request->standard_pooja ?? '';
            $saveCategory->premium_pooja = $request->premium_pooja ?? '';
            $saveCategory->grand_pooja = $request->grand_pooja ?? '';
            $saveCategory->category_samagri = $request->standard_category_samagri ?? '';
            $saveCategory->category_wsamagri = $request->standard_category_wsamagri ?? '';
            $saveCategory->category_all = $request->standard_category_all ?? '';
            $saveCategory->premium_category_samagri = $request->premium_category_samagri ?? '';
            $saveCategory->premium_category_wsamagri = $request->premium_category_wsamagri ?? '';
            $saveCategory->premium_category_all = $request->premium_category_all ?? '';

            $saveCategory->grand_category_samagri = $request->grand_category_samagri ?? '';
            $saveCategory->grand_category_wsamagri = $request->grand_category_wsamagri ?? '';
            $saveCategory->grand_category_all = $request->grand_category_all ?? '';
            $saveCategory->created_at = \Carbon\Carbon::now();
            $saveCategory->updated_at = \Carbon\Carbon::now();
            $saveCategory->save();          
            return redirect()->back()->with('success','Pooja category details added successfully');
        }else
        {
            $saveCategory = PujaCategory::where('pooja_id',$request->pujaname)->first();
           $saveCategory->pooja_id = $request->pujaname ?? '';
            $saveCategory->standard_pooja = $request->standard_pooja ?? '';
            $saveCategory->premium_pooja = $request->premium_pooja ?? '';
            $saveCategory->grand_pooja = $request->grand_pooja ?? '';
            $saveCategory->category_samagri = $request->standard_category_samagri ?? '';
            $saveCategory->category_wsamagri = $request->standard_category_wsamagri ?? '';
            $saveCategory->category_all = $request->standard_category_all ?? '';
            $saveCategory->premium_category_samagri = $request->premium_category_samagri ?? '';
            $saveCategory->premium_category_wsamagri = $request->premium_category_wsamagri ?? '';
            $saveCategory->premium_category_all = $request->premium_category_all ?? '';

            $saveCategory->grand_category_samagri = $request->grand_category_samagri ?? '';
            $saveCategory->grand_category_wsamagri = $request->grand_category_wsamagri ?? '';
            $saveCategory->grand_category_all = $request->grand_category_all ?? '';
            $saveCategory->updated_at = \Carbon\Carbon::now();
            $saveCategory->save();          
            return redirect()->back()->with('success','Pooja category details edited successfully');
        }
        
       
        
    }
    public function requestList()
    {
        $pujaList = PujaRequest::orderBy('id', 'DESC')->paginate(5);              
        
        return view('admin/puja-request',compact('pujaList'));
    }
}
