<nav class="navbar navbar-expand-lg navbar-dark bg-dark custom-navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="/" style="letter-spacing: 10px; margin-top:10px; margin-left:5px">DAWAT.PK</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
            @if (Route::has('login'))
            <li class="nav-item">
                @auth
                <a href="{{ url('/user_confirm_booking') }}" class=" nav-link">confirm booking</a>

                @else

                    <a href="{{ route('login') }}" class="nav-link text-sm  ">Log in</a>
                  </li>
                  <li class="nav-items">
                        <a href="{{ route('register') }}" class="nav-link   ">Register</a>
                      </li>

                @endauth

        @endif
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('categorys')}}">Categories</a>
          </li>



        </ul>

      </div>
    </div>
  </nav>

<style>
    .custom-navbar{
        border-radius: 0 !important;
        vertical-align: center;
    }
</style>
