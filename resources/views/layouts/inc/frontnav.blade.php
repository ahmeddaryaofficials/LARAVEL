<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">DAWAT.PK</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('categorys')}}">Categories</a>
          </li>


          @if (Route::has('login'))
          <li class="nav-item">
              @auth
                  <a href="{{ url('/home') }}" class="  nav-link">Home</a>
              @else

                  <a href="{{ route('login') }}" class="nav-link text-sm  ">Log in</a>
                </li>
                <li class="nav-items">
                      <a href="{{ route('register') }}" class="nav-link   ">Register</a>
                    </li>

              @endauth

      @endif
        </ul>

      </div>
    </div>
  </nav>
