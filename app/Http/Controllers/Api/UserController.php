<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Response;
class UserController extends Controller
{
    public function getuser(Request $request){
        if($request->method() == 'GET'){
            $customer = Customer::get();
            return response()->json(['status' => true, 'data'=>$customer]);

        }
    }

    public function postuser(Request $request){
        if($request->method() == 'POST'){
            $customer = new Customer([
                'name' => $request ->input('name'),
                'email' => $request ->input('email'),
                'mobile_no' =>$request ->input('mobile_no'),
                'address' =>$request ->input('address'),
            ]);

           if($customer -> save()){
            return response()->json(['status' => true, 'msg'=>"Added successfully."]);

           }else{
            return response()->json(['status' => false, 'msg'=>"Added error."]);

           }

        }
    }
}
