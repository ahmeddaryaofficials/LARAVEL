@extends('layouts.front')
@section('title')
view
@endsection
@section('content')
<div class="py-5">
    <div class="container">
        <div class="row"> 
            <h3>{{$category->name}}</h3>
              <div class="row">
                @foreach ( $vendor as $item )
                
                <div class="col-md-3 mb-3 ">
                   
                    <div class="card" style="width: 15rem; height: 20rem">
                        <a href="{{url('view_category/'.$category->slug.'/'.$item->meta_title)}}">
                        <img src="{{asset('assets/uploads/vendors/'.$item->image)}}" class="card-img-top" alt="..." height="220">
                        <div class="card-body">
                          <h5 class="card-title">{{$item->vendor_name}}</h5>
                          <div class="row">
                          
                          <p class="card-text">
                            @if ($item->cate_id == 10)
                              Starting from
                          @endif
                            {{$item->selling_price}} rs</p>
                        </div>
                        </div>
                    </a>
                      </div>
                    
                </div>
                @endforeach
       
            </div>

       
        </div>
    </div>
</div>
@endsection