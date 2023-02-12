@extends('layouts.front')
@section('title')
wait
@endsection
@section('content')
<div id="wait" class="container mt-5 mb-3">
  <h1 id="main">response wihtin 24h please wait</h1>
  <h3 id="main2">thankyou so much for booking </h3>
  <a id="home" href="/" class="btn btn-dark"> go back to home</a>
</div>
<style>
#wait
{
    margin-top: 100px;
    justify-content: center;
    vertical-align: center;
    padding: 20px;
    text-align: center
}
#main2{
    margin-top:3%
}
#home{
    margin-top: 3%
}
</style>
@endsection
