<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use App\Models\Vendors;
use App\Models\Category;
class FrontendController extends Controller
{
    public function index()
    {
        $featured_vendor =Vendors::where('trending','0')->take(15)->get();
        $cat =Category::where('status','0')->get();
          return view('frontend.index',compact('featured_vendor','cat'));
    }
    public function vr()
    {
      return view('vr.vr');
    }
    public function wait()
    {
       return view('frontend.wait');
    }
    public function categorys()
    {
        $cat =Category::where('status','0')->get();
       return view('frontend.vendor',compact('cat'));
    }
    public function view($slug)
    {
     if(Category::where('slug',$slug)->exists())
     {
         $category = Category::where('slug',$slug)->first();
         $vendor =Vendors::where('cate_id',$category->id)->where('status','0')->get();
         return view('frontend.vendors.index',compact('category','vendor'));
     }
     else{
        return('/')->with('status','slug doesnot exists');
     }
    }
    public function vendorview($cate_slug,$ven_meta)
    {
        if(Category::where('slug',$cate_slug)->exists())
        {
          if(Vendors::where('meta',$ven_meta))
          {
                $vendor =Vendors::where('meta_title',$ven_meta)->first();
                return view('frontend.vendors.view',compact('vendor'));
          }
          else{
            return redirect('/');
          }
        }
        else
        {
            return redirect('/');
        }
    }
    public function confirm_booking()
    {
      $confirm_booking=  DB::table('booking_confirmation')
        ->join('vendors', function ($join) {
            $join->on('booking_confirmation.cate_id', '=', 'vendors.id')
                 ->where('booking_confirmation.booking_availibility', '=', 1)
                 ->where('booking_confirmation.user_id', '=', Auth::user()->id);
        })
        ->get();

      return view('frontend.booking_confirm',compact('confirm_booking'));
    }

}
