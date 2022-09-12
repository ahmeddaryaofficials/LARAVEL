@extends('layouts.front')
@section('title')
Vendor Category
@endsection
@section('content')

<div class="py-5">
    <div class="container">
        <div class="row"> 
            <h3>All Category</h3>
            <div class="owl-carousel featured-carousel owl-theme">
                @foreach ( $cat as $item )
                <div class="item">
                   <a href="{{url('view_category/'.$item->slug)}}">
                   <div class="card-group">
                    <div class="card">
                      <img src="{{asset('assets/uploads/category/'.$item->image)}}" class="card-img-top" alt="..." height="220" width="150">
                      <div class="card-body">
                        <h5 class="card-title">{{$item->name}}</h5>
                        <p class="card-text">{{$item->description}}</p>
                        <p class="card-text"><small class="text-muted">Top Category</small></p>
                      </div>
                    </div>
                    
</div>
</a>
                </div>
            
                @endforeach
       
            </div>

       
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
    $('.featured-carousel').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
</script>
@endsection