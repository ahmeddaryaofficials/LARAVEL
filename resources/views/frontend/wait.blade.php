@extends('layouts.front')
@section('title')
wait
@endsection
@section('content')
<div class="py-5">
<div id="wait" class="container">
  <h1 id="main">response wihtin 24h please wait</h1>
  <h3 id="main2">thankyou so much for booking </h3>
  <a id="home" href="/" class="btn btn-dark"> go back to home</a>
</div>
</div>
<style>
      @media (min-width: 1281px) {

        #wait {
    margin-top: 24% !important;
    justify-content: center;
    vertical-align: center;
    padding: 20px;
    text-align: center
}

}
@media only screen
and (min-device-width : 320px)
and (max-device-width : 480px)
{
    #wait {
    margin-top: 24%  !important;
    justify-content: center;
    vertical-align: center;
    padding: 20px;
    text-align: center
}

}
@media only screen
and (min-device-width : 360px)
and (max-device-width : 640px)
{
    #wait {
    margin-top: 24%  !important;
    justify-content: center;
    vertical-align: center;
    padding: 20px;
    text-align: center
}

}
@media only screen
and (min-device-width : 768px)
and (max-device-width : 1024px)
{
    #wait {
    margin-top: 12%  !important;
    justify-content: center;
    vertical-align: center;
    padding: 20px;
    text-align: center
}

}
@media only screen
and (min-width: 1030px)
and (max-width: 1366px)
{
    #wait {
    margin-top: 12%  !important;
    justify-content: center;
    vertical-align: center;
    padding: 20px;
    text-align: center
}

}

#main2{
    margin-top:3%
}
#home{
    margin-top: 3%
}
</style>
@endsection
