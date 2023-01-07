<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
class BookingController extends Controller
{
    public function booking_availibility(Request $request){


        $userId = Auth::id();
        if($userId =='')
        {
            return [
              'status'=> 500,
              'message' => 'you must have login first',
            ];
        }
        else{
            $vendor_id= $request->vendor_id;
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
