
  @extends('layouts.front')
@section('title')
gallery
@endsection
@section('content')
<div class="container">




    <div id="panel" class="row text-center text-lg-start">
@foreach ($gallery as $item )


      <div class="col-lg-3 col-md-4 col-6">
        <a id="open"   class="d-block mb-4 h-100" >
            <input id="img" value="{{$item->image}}" type="text" style="display:none">
          <img  class="img-fluid img-thumbnail" src="{{asset('assets/uploads/vendors/'.$item->ven_id.'/'.$item->image.'')}}" alt="">
        </a>
      </div>

      @endforeach
    </div>

  </div>

  <style>
         @media (min-width: 1281px) {

#panel {
    margin-top: 24%;
}

}
@media only screen
and (min-device-width : 320px)
and (max-device-width : 480px)
{
    #panel {
    margin-top: 24%;
}

}
@media only screen
and (min-device-width : 360px)
and (max-device-width : 640px)
{
    #panel {
    margin-top: 24%;
}

}
@media only screen
and (min-device-width : 768px)
and (max-device-width : 1024px)
{
    #panel {
    margin-top: 12%;
}

}
@media only screen
and (min-width: 1030px)
and (max-width: 1366px)
{
    #panel {
    margin-top: 12%;
}

}
  </style>
@endsection
