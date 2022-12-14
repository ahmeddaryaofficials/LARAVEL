<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
       return view('admin.category.index',compact('category'));
    }
    
    public function add()
    {
        return view('admin.category.add');

    }
    public function insert(Request $request)
    {
        $category = new category();
        if($request->hasFile('image'))
        {
        $file =$request->file('image');
        $ext=$file->getClientOriginalExtension();
        $filename = time().'.'.$ext;
        $file->move('assets/uploads/category/',$filename);
        $category->image =$filename;
        }
        
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status')==TRUE ? '1':'0';
        $category->popular = $request->input('popular')==TRUE ? '1':'0';
        $category->meta_title = $request->input('meta_title');
        $category->meta_descrip = $request->input('meta_descrip');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->save();

        return redirect('/dashboard')->with('status','category added successfully');
    }
    public function edit($id)
    {
        $category =category::find($id);
      return view('admin.category.edit',compact('category'));
    }
    public function update(request $request ,$id)
    {
        $category =category::find($id);
     if($request->hasFile('image'))
     {
       
        $file =$request->file('image');
        $ext=$file->getClientOriginalExtension();
        $filename = time().'.'.$ext;
        $file->move('assets/uploads/category/',$filename);
        $category->image =$filename;
     }
     $category->name = $request->input('name');
     $category->slug = $request->input('slug');
     $category->description = $request->input('description');
     $category->status = $request->input('status')==TRUE ? '1':'0';
     $category->popular = $request->input('popular')==TRUE ? '1':'0';
     $category->meta_title = $request->input('meta_title');
     $category->meta_descrip = $request->input('meta_descrip');
     $category->meta_keywords = $request->input('meta_keywords');
     $category->update();
     return redirect('/categories')->with('status',"upadate succesfully");

    }
    public function delete($id)
    {
        $category =category::find($id);

      $category->delete();
      return redirect('/categories');
    }
}
