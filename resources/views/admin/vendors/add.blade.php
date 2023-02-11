@extends('layouts.admin')

@section('content')
<div class='card'>

<div class="card-body">
    <form action="{{ url('/insert_vendors')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="row">
          <div class="col-md-6 mb-3 ">
            <label class="form-label">Vendors</label>
            <div class="input-group input-group-outline">
          <select name="cate_id" class="form-select" >
            <option selected>Select</option>
            @foreach ($category as $item )
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
          </select>
            </div>
          </div>
    <div class="col-md-6 mb-3 ">
        <label class="form-label">Vendors Name</label>
        <div class="input-group input-group-outline">

            <input name="vendor_name" type="text" class="form-control">
          </div>
      </div>
      <div class="col-md-6 mb-3 ">
        <label class="form-label">Username</label>
        <div class="input-group input-group-outline">

            <input name="vendor_username" type="text" class="form-control">
          </div>
      </div>
      <div class="col-md-6">
        <label class="form-label">Password</label>
        <div class="input-group input-group-outline">
        <input  type="password" class="form-control @error('password') is-invalid @enderror" name="vendor_password" required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
      <div class="col-md-12 mb-3 ">
        <label class="form-label">small Description</label>
        <div class="input-group input-group-outline">

            <textarea name="small_descrip" type="text" class="form-control"></textarea>
          </div>
      </div>

      <div class="col-md-12 mb-3 ">
        <label class="form-label">Location</label>
        <div class="input-group input-group-outline">

            <textarea name="location" type="text" class="form-control"></textarea>
          </div>
      </div>
      <div class="col-md-6 mb-3 ">
        <label class="form-label">MIN GUEST</label>
        <div class="input-group input-group-outline">

            <input name="max" type="text" class="form-control">
          </div>
      </div>
      <div class="col-md-6 mb-3 ">
        <label class="form-label">MAX GUEST</label>
        <div class="input-group input-group-outline">

            <input name="min" type="text" class="form-control">
          </div>
      </div>
      <div class="col-md-12 mb-3 ">
        <label class="form-label">Description</label>
        <div class="input-group input-group-outline">

            <textarea name="description" type="text" class="form-control"></textarea>
          </div>
      </div>
      <div class="col-md-6 mb-3 ">
        <label class="form-label">Original Price</label>
        <div class="input-group input-group-outline">

            <input name="original_price" type="text" class="form-control">
          </div>
      </div>
      <div class="col-md-6 mb-3 ">
        <label class="form-label">Selling Price</label>
        <div class="input-group input-group-outline">

            <input name="selling_price" type="text" class="form-control">
          </div>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" name="status" >
        <label class="form-check-label" for="flexCheckChecked">
          Status
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" name="trending" >
        <label class="form-check-label" for="flexCheckChecked">
          Trending
        </label>
      </div>
      <div class="col-md-6 mb-3 ">
        <label class="form-label">Meta Title</label>
        <div class="input-group input-group-outline">

            <input name="meta_title" type="text" class="form-control">
          </div>
      </div>
      <div class="col-md-12 mb-3 ">
        <label class="form-label">Meta Description</label>
        <div class="input-group input-group-outline">

            <textarea name="meta_descrip" type="text" class="form-control"></textarea>
          </div>
      </div>
      <div class="col-md-6 mb-3 ">
        <label class="form-label">Meta Keywords</label>
        <div class="input-group input-group-outline">

            <input name="meta_keywords" type="text" class="form-control">
          </div>
      </div>
      </div>
      <div class="col-md-6 mb-3 ">
        <label class="form-label">Image</label>
        <div class="input-group input-group-outline">

            <input name="image" type="file" >
          </div>
      </div>
      <div class="mb-3">
       <button type="submit" class="btn btn-primary">submit</button>
      </div>
    </div>
    </form>

</div>
</div>
@endsection
