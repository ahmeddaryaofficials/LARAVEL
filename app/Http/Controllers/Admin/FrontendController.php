<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendors;
use App\Models\Category;
use App\Models\User;
use DB;
class FrontendController extends Controller
{
    public function index()
    {
        $user=User::where('role_as','0')->get();
        $vendor=User::where('role_as','2')->get();
        $booking=DB::table('booking_now')->get();
        $pending=DB::table('booking_confirmation')->get();
       return view('admin.index',compact('user','vendor','booking','pending'));
    }


}
