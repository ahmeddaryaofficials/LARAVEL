<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendors;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class VendorController extends Controller
{
    public function index()
    {
        $vendors= Vendors::all();
        return view('admin.vendors.index',compact('vendors'));
    }
    public function add()

    {
        $category= Category::all();
        return view('admin.vendors.add',compact('category'));


    }
    public function insert(Request $request)
    {
        $this->validate($request,[
            'vendor_username'=>'required|unique',
            'vendor_password'=>'required'
         ]);
         if ($validator->fails()) {
            return redirect('/add_vendors')
                     ->withErrors($validator)
                     ->withInput();
          }
        $vendors = new Vendors();
        $user = new User();
        if($request->hasFile('image'))
        {
        $file =$request->file('image');
        $ext=$file->getClientOriginalExtension();
        $filename = time().'.'.$ext;
        $file->move('assets/uploads/vendors/',$filename);
        $vendors->image =$filename;
        }
        $ran=rand(2,50000);
        $user->id =$ran;
        $vendors->id =$ran;
        $user->role_as=2;
        $vendors->min = $request->input('min');
        $vendors->max = $request->input('max');
        $vendors->locaation = $request->input('location');
        $vendors->cate_id = $request->input('cate_id');
        $vendors->vendor_name = $request->input('vendor_name');
        $user->name = $request->input('vendor_name');
        $vendors->vendor_username = $request->input('vendor_username');
        $user->email = $request->input('vendor_username');
        $vendors->vendor_password = $request->input('vendor_password');
        $user->password = Hash::make($request->input('vendor_password'));
        $vendors->small_descrip = $request->input('small_descrip');
        $vendors->description = $request->input('description');
        $vendors->original_price = $request->input('original_price');
        $vendors->selling_price = $request->input('selling_price');
        $vendors->status = $request->input('status')==TRUE ? '1':'0';
        $vendors->trending = $request->input('trending')==TRUE ? '1':'0';
        $vendors->meta_title = $request->input('meta_title');
        $vendors->meta_descrip = $request->input('meta_descrip');
        $vendors->meta_keywords = $request->input('meta_keywords');
        $vendors->save();
        $user->save();

        return redirect('/vendors')->with('status','Vendors added successfully');
    }
    public function edit($id)
    {
        $vendors =Vendors::find($id);
        $category= Category::all();
      return view('admin.vendors.edit',compact('vendors','category'));
    }
    public function update(request $request ,$id)
    {
        $vendors =Vendors::find($id);
        $user =User::find($id);
     if($request->hasFile('image'))
     {


        $file =$request->file('image');
        $ext=$file->getClientOriginalExtension();
        $filename = time().'.'.$ext;
        $file->move('assets/uploads/vendors/',$filename);
        $vendors->image =$filename;
     }

     $vendors->locaation = $request->input('location');
        $vendors->vendor_name = $request->input('vendor_name');
        $user->name =$request->input('vendor_name');
        $vendors->vendor_username = $request->input('vendor_username');
        $user->email = $request->input('vendor_username');
        $vendors->vendor_password = $request->input('vendor_password');
        $user->password = Hash::make($request->input('vendor_password'));
        $vendors->small_descrip = $request->input('small_descrip');
        $vendors->description = $request->input('description');
        $vendors->original_price = $request->input('original_price');
        $vendors->selling_price = $request->input('selling_price');
        $vendors->status = $request->input('status')==TRUE ? '1':'0';
        $vendors->trending = $request->input('trending')==TRUE ? '1':'0';
        $vendors->meta_title = $request->input('meta_title');
        $vendors->meta_descrip = $request->input('meta_descrip');
        $vendors->meta_keywords = $request->input('meta_keywords');
        $vendors->update();
        $user->update();
     return redirect('/vendors')->with('status',"upadate succesfully");

    }
    public function delete($id)
    {
        $Vendors =Vendors::find($id);
        $user =User::find($id);
      $Vendors->delete();
      $user->delete();
      return redirect('/vendors');
    }
}
