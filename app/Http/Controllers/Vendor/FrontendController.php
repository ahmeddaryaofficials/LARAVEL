<?php

namespace App\Http\Controllers\Vendor;
use DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendors;
use Illuminate\Support\Facades\Auth;
class FrontendController extends Controller
{
    public function index()
    {
        $id=Auth::user()->id;
        $vendors =Vendors::find($id);
       return view('vendor.index',compact('vendors'));
    }
  public function get_inquiry()
  {
    $booking = DB::table('booking_confirmation')->where('cate_id', Auth::user()->id)->get();
    return view('vendor.booking_pending',compact('booking'));
  }
  public function change_availibility(Request $request)
  {
    $update=DB::table('booking_confirmation')
        ->where('id', $request->booking_id)  // find your user by their email  // optional - to ensure only one record is updated.
        ->update(array('booking_availibility' => 1));

    return ['status' => 200 , 'message' => 'available banquet on this date'];
  }

}
