  <!-- Navigation -->
  <div class = "container">
  <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-static-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}">Naughty or Nice</a>
      
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
<!--       <div class="collapse navbar-collapse" id="navbarResponsive"> -->
      
      	
<!--         <ul class="navbar-nav ml-auto my-2 my-lg-0"> -->
<!--           <li class="nav-item"> -->
<!--             <a class="nav-link js-scroll-trigger" href="#page-section2">Sample</a> -->
<!--           </li> -->
<!--           <li class="nav-item"> -->
<!--             <a class="nav-link js-scroll-trigger" href="#page-section3">Sample</a> -->
<!--           </li> -->
<!--           <li class="nav-item"> -->
<!--             <a class="nav-link js-scroll-trigger" href="#page-section4">Sample</a> -->
<!--           </li> -->
<!--           <li class="nav-item"> -->
<!--             <a class="nav-link js-scroll-trigger" href="#page-section5">Sample</a> -->
<!--           </li> -->
<!--         </ul> -->
        
        <!-- Right Side Of Navbar -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-right ml-auto my-2 my-lg-0">
        <!-- Authentication Links -->
        @guest
        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Regist</a></li>
        @else
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#page-section2">Sample</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#page-section3">Sample</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#page-section4">Sample</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#page-section5">Sample</a>
          </li>
          
          
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="https://iocaffcdn.phphub.org/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/60/h/60" class="img-responsive img-circle" width="30px" height="30px">
              {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="">Personel</a>
              <a class="dropdown-item" href="">Modify</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" id="logout" href="#">
                <form action="{{ route('logout') }}" method="POST">
                  {{ csrf_field() }}
                  <button class="btn btn-block btn-danger" type="submit" name="button">Quit</button>
                </form>
              </a>
            </div>
            </li>
            @endguest
      </ul>
        </div>
        </div>
        
<!--       </div> -->
    </div>
  </nav>