@extends('layouts.front')
@section('title')
welcome to Dawat
@endsection
@section('content')
@include('layouts.inc.slider')
<div class="py-5">
    <div class="container">
        <div class="row">
            <h3>Featureds Vendors</h3>
            <div class="owl-carousel featured-carousel owl-theme">
                @foreach ( $featured_vendor as $item )
                <div class="item">
                    <a href="{{url('view_category/'.$item->cate_id.'/'.$item->meta_title)}}">
                    <div class="card" style="width: 18rem; height: 20rem">
                        <img src="{{asset('assets/uploads/vendors/'.$item->image)}}" class="card-img-top" alt="..." height="70%" width="100%">
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
                      </div>
                    </a>
                </div>
                @endforeach

            </div>


        </div>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="row">
            <h3>All Category</h3>
            <div class="owl-carousel featured1-carousel owl-theme">
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

<!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 link-secondary">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3 text-secondary"></i>Dawat
            </h6>
            <p>
             Which manage everything
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">html/css</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Heroku</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->

          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3 text-secondary"></i>Karachi, Sindh, Pakistan</p>
            <p>
              <i class="fas fa-envelope me-3 text-secondary"></i>
              info@dawatbooking.online
            </p>
            <p><i class="fas fa-phone me-3 text-secondary"></i> + 92 301 0216250</p>
            <p><i class="fas fa-print me-3 text-secondary"></i> + 92 301 0216250</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
        <img  src="{{asset('assets/uploads/logo/footer.png')}}" alt="">
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
@endsection


@section('scripts')
<script>
    $('.featured-carousel').owlCarousel({
    loop:true,
    margin:5,
    nav:true,
    dots:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
$('.featured1-carousel').owlCarousel({
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
