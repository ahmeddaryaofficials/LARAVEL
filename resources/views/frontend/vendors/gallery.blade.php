
  @extends('layouts.front')
@section('title')
gallery
@endsection
@section('content')
<div class="container">




    <div id="panel" class="row text-center text-lg-start">
@foreach ($gallery as $item )


      <div class="col-lg-3 col-md-4 col-6">
        <a href="#" class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="{{asset('assets/uploads/vendors/'.$item->ven_id.'/'.$item->image.'')}}" alt="">
        </a>
      </div>
      @endforeach
    </div>

  </div>
  <style>
         @media (min-width: 1281px) {

.col-6 {
    margin-top: 24%;
}

}
@media only screen
and (min-device-width : 320px)
and (max-device-width : 480px)
{
    .col-6 {
    margin-top: 24%;
}

}
@media only screen
and (min-device-width : 360px)
and (max-device-width : 640px)
{
    .col-6 {
    margin-top: 24%;
}

}
@media only screen
and (min-device-width : 768px)
and (max-device-width : 1024px)
{
    .col-6 {
    margin-top: 12%;
}

}
@media only screen
and (min-width: 1030px)
and (max-width: 1366px)
{
    .col-6 {
    margin-top: 12%;
}

}
  </style>
@endsection
