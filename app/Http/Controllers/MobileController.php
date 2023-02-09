<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\User;
use IlluminateSupportFacadesValidator;
use App\Models\Vendors;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;
class MobileController extends Controller
{
    public function fetch($id)
    {
       $vendors =Vendors::where('cate_id',$id)->get();
          return response()->json($vendors);
    }


    public function login(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user=DB::table('users')->where('email',$request->email)->where('role_as','0')->first();
        if($user != '' && Hash::check($request->password,$user->password))
        {

            return [ "status" => true , "message" => "login successfull" , "data" => $user];
        }
        else{
            return [ "status" => false , "message" => "login failed"];
        }

    }


    public function Register(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            'name' => ['required']
        ]);

        $user = new user();

        $user->name=$request->name;
        $user->email =$request->email;
        $user->password =Hash::make($user->password);
        $user->role_as =0;
        $user->avatar = 'avatar.png';
        $user->dark_mode=0;
        $user->messenger_color ='#2180f3';
        $user->save();

        return ["status" => true , "message" => "Registration Successfull"];
    }

    public function send_inquiry(Request $request)
    {
        $userId = $request->user_id;
        if($userId =='')
        {
            return [
              'status'=> 500,
              'message' => 'you must have login first',
            ];
        }
        else{
            $vendor_id= $request->cate_id;
            $booking_date = $request->date;
            $data=array('cate_id'=>$vendor_id,"user_id"=>$userId,"date"=>$booking_date,"booking_availibility" => 0);
            DB::table('booking_confirmation')->insert($data);
            return [
                'status' => 200,
                'message' => 'send inquiry successfully'
            ];
        }
    }
}
