
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="route('home')">
        <img style=" margin-right: 15px; height:50px; width:30px; " src="{{ asset('assets/img/GCT_LOGO-removebg-preview.png') }}" alt=""><span>FGM </span>GCTsinga</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="{{ route('home') }}" class="active">Accueil</a></li>

          <li class="dropdown"><a href="#"><span>A propos</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about.html">A propos de nous</a></li>
              <li><a href="{{ route('team') }}">Team</a></li>
              <li><a href="testimonials.html">Temoignage</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <li><a href="services.html">Services</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="{{ route('actu') }}">Actualité</a></li>
          <li><a href="{{ route('contact') }}">Contact</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex">
        <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
        <a href="https://www.facebook.com/missiondupleinevangiletsinga" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
      </div>


      <div class="text-center" style="margin-left: 20px;"><a href="" class=" btn btn-danger btn-get-started">Donation</a></div>
    </div>
  </header>
