

@extends('vendorlayouts.vendor')

@section('content')
<div class='card'>
<div class="card-header">
    <h3>Gallery</h3>
</div>

<div class="card-body">
    <form action="{{ url('/upload_gallery')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="row">

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


      <div class="container">




        <div class="row text-center text-lg-start">
@foreach ($gallery as $item )


          <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
              <img class="img-fluid img-thumbnail" src="{{asset('assets/uploads/vendors/'.$item->ven_id.'/'.$item->image.'')}}" alt="">
            </a>
          </div>
          @endforeach
        </div>

      </div>



</div>
<script>
$( document ).ready(function() {
    $("#image").change(function(){
          var image= $('#image').val();
          console.log(image)
        });
});
</script>
@endsection
