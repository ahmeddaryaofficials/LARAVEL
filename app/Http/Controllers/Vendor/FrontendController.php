<?php

namespace App\Http\Controllers\Vendor;

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
}
