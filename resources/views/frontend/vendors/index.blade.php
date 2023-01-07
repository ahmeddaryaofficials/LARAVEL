@extends('layouts.front')
@section('title')
view
@endsection
@section('content')



<div class="py-5">
    <div class="container">
        @foreach ( $vendor as $item )

        <div class="card">
            <a href="{{url('view_category/'.$category->slug.'/'.$item->meta_title)}}">
          <div class="card-header">
            <img src="{{asset('assets/uploads/vendors/'.$item->image)}}" alt="rover" />
          </div>
          <div class="card-body">
            <span class="tag tag-teal">{{$item->vendor_name}}</span>
            <h4 style="margin-top: 5px ;margin-bottom:10px">
                {{$item->small_descrip}}
            </h4>
            <div class="user">
              <img src="{{asset('assets/uploads/vendors/'.$item->image)}}" alt="user" />
              <div class="user-info">
                <h5 class="card-text" style="margin-top:10px">

                      Starting from

                   <strong> {{$item->selling_price}} rs</strong></h5>
              </div>
            </div>
          </div>
        </div>
        @endforeach
    </div>





</div>
<style>
@import url("https://fonts.googleapis.com/css2?family=Roboto&display=swap");
* {
  box-sizing: border-box;
}

.container {
  display: flex;
  width: 1040px;
  justify-content: space-evenly;
  flex-wrap: wrap;
}
.card {
  margin: 10px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
  overflow: hidden;
  width: 300px;
}
.card-header img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}
.card-body {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  padding: 20px;
  min-height: 95px;
}

.tag {
  background: #cccccc;
  border-radius: 50px;
  font-size: 12px;
  margin: 0;
  color: #fff;
  padding: 2px 10px;
  text-transform: uppercase;
  cursor: pointer;
}
.tag-teal {
  background-color: #2c6678;
}
.tag-purple {
  background-color: #5e76bf;
}
.tag-pink {
  background-color: #cd5b9f;
}

.card-body p {
  font-size: 13px;
  margin: 0 0 40px;
}
.user {
  display: flex;
  margin-top: auto;
}

.user img {
  border-radius: 50%;
  width: 40px;
  height: 40px;
  margin-right: 10px;
}
.user-info h5 {
  margin: 0;
}
.user-info small {
  color: #545d7a;
}

</style>
@endsection
