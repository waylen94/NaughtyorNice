  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 navbar-static-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}">Naughty or Nice</a>
      
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarResponsive">
      
      	
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
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
        </ul>
        
        <!-- Right Side Of Navbar -->
      <ul class="navbar-nav navbar-right">
        <!-- Authentication Links -->
        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Regist</a></li>
      </ul>
        
        
      </div>
    </div>
  </nav>