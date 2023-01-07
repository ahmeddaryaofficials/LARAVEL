<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\Vendors;
use App\Models\Category;
class MobileController extends Controller
{
    public function fetch($id)
    {
       $vendors =Vendors::where('cate_id',$id)->get();
          return response()->json($vendors);
    }
}
