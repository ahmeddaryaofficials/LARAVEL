@extends('layouts.front')
@section('title')
    {{ $vendor->vendor_name }}
@endsection
@section('content')
    <div class="container">
        <div class="container bootdey">
            <div class="col-md-12">
                <section class="panel">
                 {{-- alert --}}
                 <div class="alert alert-danger alert-div" role="alert" style="display:none">
                   <p class="message">abc</p>
                  </div>
                    <div class="panel-body">
                        <div class="col-md-6">


                            <div class="pro-img-details">
                                <img src="{{ asset('assets/uploads/vendors/' . $vendor->image) }}" alt="">
                            </div>

                        </div>
                        <div class="col-md-6">
                            <h4 class="pro-d-title">
                                <input type="text" class="vendor_id" id="vendor_id" value="{{ $vendor->id }}" style="display: none"/>
                                <a href="#" class="">
                                    {{ $vendor->vendor_name }}
                                </a>
                            </h4>
                            <p>
                                {{ $vendor->description }}
                            </p>
                            <div class="product_meta">
                                <span class="tagged_as"><strong>Location:</strong> <a rel="tag"
                                        href="#">{{ $vendor->locaation }}</a> <a rel="tag"
                                        href="#"></a>.</span>
                                <span class="tagged_as"><strong>Minimum guest:</strong> <a rel="tag"
                                        href="#">{{ $vendor->min }}</a> <a rel="tag" href="#"></a>.</span>
                                <span class="tagged_as"><strong>Maximum guest:</strong> <a rel="tag"
                                        href="#">{{ $vendor->max }}</a> <a rel="tag" href="#"></a>.</span>
                                @if ($vendor->cate_id == 7)
                                    <span class="tagged_as"><strong>Facilities:</strong> <a rel="tag"
                                            href="#">Secured Environment</a>, <a rel="tag"
                                            href="#">Waiters</a>, <a rel="tag" href="#">V.I.P Guest
                                            table</a>, <a rel="tag" href="#">Valet parking</a>, <a rel="tag"
                                            href="#">Standby Generator</a>, <a rel="tag" href="#">Special
                                            Lighting</a>, <a rel="tag" href="#">Photo Session</a>, <a
                                            rel="tag" href="#">Spacious Bridal Room</a>, <a rel="tag"
                                            href="#">V.I.P Crockery & Cutlery</a></span>
                                @endif
                                @if ($vendor->cate_id == 10)
                                    <span class="tagged_as"><strong>Menu:</strong> <a rel="tag" href="#">Chicken
                                            biryani</a>, <a rel="tag" href="#">Beef biryani</a></span>
                                @endif
                                <span class="tagged_as"><strong>Select Date:</strong> <input type="text" id="datepicker">
                            </div></span>
                        </div>
                        <div class="m-bot15"> <strong>Price : </strong> <span
                                class="amount-old">{{ $vendor->original_price }}rs</span> <span
                                class="pro-price">{{ $vendor->selling_price }}rs</span></div>
                        <div class="form-group">
                            <!-- <label>Quantity</label>
                                  <input type="quantiy" placeholder="1" class="form-control quantity"> -->
                        </div>
                        <p>
                            <button class="btn btn-round btn-primary send_inquiry" type="button" ><i class="fa fa-shopping-cart" ></i> Send booking inquiry</button>
                            <button class="btn btn-round btn-danger chat" type="button"><i class="fa fa-shopping-cart" onclick="chat_now()"></i> chat
                                now</button>
                            @if ($vendor->cate_id == 7)
                                <button class="btn btn-round btn-success" type="button"><i class="fa fa-shopping-cart"></i>
                                    Photo Gallery</button>
                            @endif
                        </p>
                    </div>
            </div>
            </section>
        </div>
    </div>


    {{-- <div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">

						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="{{asset('assets/uploads/vendors/'.$vendor->image)}}" height="400"/></div> --}}
    {{-- <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div> --}}
    {{-- </div> --}}
    {{-- <ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						</ul> --}}

    {{-- </div>
					<div class="details col-md-6">
						<h3 class="product-title">{{$vendor->vendor_name}}</h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">{{$vendor->location}}</span>
						</div>
						<p class="product-description">{{$vendor->description}}</p>
						<h4 class="price" >@if ($vendor->cate_id == 10 || $vendor->cate_id == 11) Staring from : @else Current Price : @endif <span>Rs {{$vendor->selling_price}}</span></h4>
						<p class="vote"><strong>MIN : </strong>{{$vendor->min}} <strong>persons</strong></p>
                        <p class="vote"><strong>MAX : </strong>{{$vendor->max}} <strong>persons</strong></p>


						<div class="action">
							<button class="add-to-cart btn btn-default" type="button">Book Now</button>
							<button class="like btn btn-default" type="button"><span class="fa fa-book"></span></button>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
    <style type="text/css">
        body {

            background: #fff;
        }

        /*panel*/
        .panel {
            border: none;
            box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.75);
        }

        .panel-heading {
            border-color: #eff2f7;
            font-size: 16px;
            font-weight: 300;
        }

        .panel-title {
            color: #2A3542;
            font-size: 14px;
            font-weight: 400;
            margin-bottom: 0;
            margin-top: 0;
            font-family: 'Open Sans', sans-serif;
        }

        /*product list*/

        .prod-cat li a {
            border-bottom: 1px dashed #d9d9d9;
        }

        .prod-cat li a {
            color: #3b3b3b;
        }

        .prod-cat li ul {
            margin-left: 30px;
        }

        .prod-cat li ul li a {
            border-bottom: none;
        }

        .prod-cat li ul li a:hover,
        .prod-cat li ul li a:focus,
        .prod-cat li ul li.active a,
        .prod-cat li a:hover,
        .prod-cat li a:focus,
        .prod-cat li a.active {
            background: none;
            color: #ff7261;
        }

        .pro-lab {
            margin-right: 20px;
            font-weight: normal;
        }

        .pro-sort {
            padding-right: 20px;
            float: left;
        }

        .pro-page-list {
            margin: 5px 0 0 0;
        }

        .product-list img {
            width: 100%;
            border-radius: 4px 4px 0 0;
            -webkit-border-radius: 4px 4px 0 0;
        }

        .product-list .pro-img-box {
            position: relative;
        }

        .adtocart {
            background: #fc5959;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            -webkit-border-radius: 50%;
            color: #fff;
            display: inline-block;
            text-align: center;
            border: 3px solid #fff;
            left: 45%;
            bottom: -25px;
            position: absolute;
        }

        .adtocart i {
            color: #fff;
            font-size: 25px;
            line-height: 42px;
        }

        .pro-title {
            color: #5A5A5A;
            display: inline-block;
            margin-top: 20px;
            font-size: 16px;
        }

        .product-list .price {
            color: #fc5959;
            font-size: 15px;
        }

        .pro-img-details {
            margin-left: -15px;
            width: 100%;
  height: 40%;
  object-fit: cover;
        }

        .pro-img-details img {
            width: 100%;
            height: 30%;
        }

        .pro-d-title {
            font-size: 16px;
            margin-top: 10px;
        }

        .product_meta {
            border-top: 1px solid #eee;
            border-bottom: 1px solid #eee;
            padding: 10px 0;
            margin: 15px 0;
        }

        .product_meta span {
            display: block;
            margin-bottom: 10px;
        }

        .product_meta a,
        .pro-price {
            color: #fc5959;
        }

        .pro-price,
        .amount-old {
            font-size: 18px;
            padding: 0 10px;
        }

        .amount-old {
            text-decoration: line-through;
        }

        .quantity {
            width: 120px;
        }

        .pro-img-list {
            margin: 10px 0 0 -15px;
            width: 100%;
            display: inline-block;
        }

        .pro-img-list a {
            float: left;
            margin-right: 10px;
            margin-bottom: 10px;
        }

        .pro-d-head {
            font-size: 18px;
            font-weight: 300;
        }
        .alert-div{
            position: absolute !important;
    z-index: 999999 !important;
    right: 15px !important;
    padding: 1em !important;
    font-size: 18px;
    top: 62px !important;
    border: 2px solid !important
        }
    </style>
    <script>
       $(".chat").click(function(){

        window.location.replace("/chatify/"+$('#vendor_id').val());
       })
//         $(".send_inquiry").click(function(){
//   alert("The paragraph was clicked.");
// });
$(".send_inquiry").click(function(){
if($('#datepicker').val() != '')
{
          $.ajax({
      url: "/send_inquiry", //Define Post URL
      type:"POST",
      data:{
    "_token":$('meta[name="csrf-token"]').attr('content'),
    "vendor_id":$('#vendor_id').val(),
       "date": $('#datepicker').val(),
      },
     success:function(response){
          if(response.status == 500)
          {
            $('.message').html("You must have login first")
        $('.alert-div').show();
        setTimeout(function() {
                    $('.alert-div').fadeOut('fast');

                }, 5000);
          }
          if(response.status == 200)
          {
            $('.message').html("Send inquiry succesfullyx")
        $('.alert-div').css("background-color","green").css("color","white").show();
        setTimeout(function() {
                    $('.alert-div').fadeOut('fast');

                }, 5000);
          }
        }

      //Display Response Success Message
  });
}
else{
    $('.message').html("Select the date first")
        $('.alert-div').show();
        setTimeout(function() {
                    $('.alert-div').fadeOut('fast');

                }, 5000);
}
});
    </script>
    </div>
@endsection
