@extends('layouts.admin')

@section('content')
<div class='card'>

<div class="card-body">
    <form action="{{ url('update_Category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
    @csrf

            <div class="row">

    <div class="col-md-6 mb-3 ">
        <label class="form-label">Name.</label>
        <div class="input-group input-group-outline">

            <input value="{{$category->name}}" name="name" type="text" class="form-control">
          </div>
      </div>
      <div class="col-md-6 mb-3 ">
        <label class="form-label">Slug</label>
        <div class="input-group input-group-outline">

            <input name="slug" type="text" class="form-control" value="{{$category->slug}}" >
          </div>
      </div>
      <div class="col-md-12 mb-3 ">
        <label class="form-label">Description</label>
        <div class="input-group input-group-outline">

            <textarea  name           ="description" type="text" class="form-control"  > {{ $category->description}}</textarea>
          </div>
      </div>
      <div class="form-check">
        <input  class="form-check-input" type="checkbox" value="" name="status" {{$category->status ==0 ? "checked" :""}} >
        <label class="form-check-label" for="flexCheckChecked">
          Status
        </label>
      </div>
      <div class="form-check">
        <input  class="form-check-input" type="checkbox" value="" name="popular" {{$category->popular ==0 ? "checked" :""}}>
        <label class="form-check-label" for="flexCheckChecked">
          Popular
        </label>
      </div>
      <div class="col-md-6 mb-3 ">
        <label class="form-label">Meta Title</label>
        <div class="input-group input-group-outline">

            <input value="{{$category->meta_title}}" name="meta_title" type="text" class="form-control">
          </div>
      </div>
      <div class="col-md-12 mb-3 ">
        <label class="form-label">Meta Description</label>
        <div class="input-group input-group-outline">

            <textarea  name="meta_descrip" type="text" class="form-control" >{{ $category->meta_descrip }}</textarea>
          </div>
      </div>
      <div class="col-md-6 mb-3 ">
        <label class="form-label">Meta Keywords</label>
        <div class="input-group input-group-outline">

            <input value="{{$category->meta_keywords}}" name="meta_keywords" type="text" class="form-control">
          </div>
      </div>
      </div>



        <img src="{{asset('assets/uploads/category/'.$category->image)}}" alt="">



      <div class="col-md-6 mb-3 ">
        <label class="form-label"> Image</label>
        <div class="input-group input-group-outline">

            <input  name="image" type="file" >
          </div>
      </div           >
      <div class="mb-3">
       <button type="submit" class="btn btn-primary">Updatee</button>
      </div>
    </div>
    </form>

</div>
</div>
@endsection
