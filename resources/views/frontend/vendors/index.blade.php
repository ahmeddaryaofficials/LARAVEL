@extends('layouts.front')
@section('title')
view
@endsection
@section('content')
{{-- <div class="container mt-5 mb-3">
    <div class="row">
        @foreach ( $vendor as $item )
        <div class="col-md-4">

            <div class="card p-3 mb-2">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon"> <img src="{{asset('assets/uploads/vendors/'.$item->image)}}" alt="rover" /> </div>
                        <div class="ms-2 c-details">
                            <h6 class="mb-0">{{$item->vendor_name}}</h6> <span>Starting from : {{$item->selling_price}}</span>
                        </div>
                    </div>
                    <div class="badge"> <span>@if ($item->cate_id == 7)
                        Banquet

                    @endif
                    @if ($item->cate_id ==10)
                        Caters
                    @endif

                </span> </div>
                </div>
                <div class="mt-5">
                    <h3 class="heading">{{$item->vendor_name}}<br><p>{{$item->locaation}}</p></h3>

                </div>
            </div>

        </div>
        @endforeach


    </div>
</div>
<style>
    body {
    background-color: #fff
}

.card {
    border: none;
    border-radius: 10px;
    box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.25);
}

.c-details span {
    font-weight: 300;
    font-size: 13px
}

.icon {
    width: 50px;
    height: 50px;
    background-color: #ffffff;
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 39px
}

.badge span {
    margin-top: 10px;
    background-color: #2c6877;
    width: 60px;
    height: 25px;
    padding-bottom: 3px;
    border-radius: 5px;
    display: flex;
    color: #fed85d;
    justify-content: center;
    align-items: center
}

.progress {
    height: 10px;
    border-radius: 10px
}

.progress div {
    background-color: red
}

.text1 {
    font-size: 14px;
    font-weight: 600
}

.text2 {
    color: #a5aec0
}
</style> --}}

<div class="py-5">

    <h3 style="margin-top: 100px">Sub Category-{{$category->name}}</h3>
    <div class="container">



        @foreach ( $vendor as $item )

        <div class="card">
            <a href="{{url('view_category/'.$category->id.'/'.$item->meta_title)}}">
          <div class="card-header">
            <img src="{{asset('assets/uploads/vendors/'.$item->image)}}" alt="rover" />
          </div>
          <div id="{{$item->vendor_name}}" class="card-body">
            <span class="tag tag-teal">{{$item->vendor_name}}</span>
            <h4 style="margin-top: 5px ;margin-bottom:10px">
                {{$item->small_descrip}}
            </h4>
            <div class="user">
              <img src="{{asset('assets/uploads/vendors/'.$item->image)}}" alt="user" />
              <div class="user-info">
                <h5 class="card-text" style="margin-top:10px">

                      Starting from

                   <strong> {{$item->selling_price}} Rs</strong></h5>
              </div>
            </div>
          </div>
        </div>
        @endforeach
    </div>





</div>

    </script>
<style>
@import url("https://fonts.googleapis.com/css2?family=Roboto&display=swap");
* {
  box-sizing: border-box;
}

.container {
  display: flex;
  width: 98%;
  justify-content: center;
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
