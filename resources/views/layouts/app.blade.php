<!doctype html>
<html>
<head>
@include('partials.head')
</head>
<body class="theme-style-1">
<!--WRAPPER START-->
<div id="wrapper"> 

  <!--HEADER START-->
  <header id="header"> 

    <!--BURGER NAVIGATION SECTION START-->
    <div class="cp-burger-nav"> 

      <!--BURGER NAV BUTTON-->

      <div id="cp_side-menu-btn" class="cp_side-menu"><a href="#" class=""><img src="{{ asset('images/menu-icon.png') }}" alt="img"></a></div>

      <!--BURGER NAV BUTTON--> 

      

      <!--SIDEBAR MENU START-->

      <div id="cp_side-menu"> <a href="#" id="cp-close-btn" class="crose"><i class="fa fa-close"></i></a>

        <div class="cp-top-bar">

          <h4>For any Queries: +800 123 4567</h4>

          <div class="login-section"> <a href="login.html" class="btn-login">Log in</a> <a href="signup.html" class="btn-login">Signup</a> </div>

        </div>

        <strong class="logo-2"><a href="index.html"><img src="{{ asset('images/sidebar-logo.png') }}" alt="img"></a></strong>

        <div class="content mCustomScrollbar">

          <div id="content-1" class="content">

            <div class="cp_side-navigation">

              <nav>

                <ul class="navbar-nav">

                  <li class="active"><a href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Home<span class="caret"></span></a>

                    <ul class="dropdown-menu" role="menu">

                      <li><a href="index-1.html">Home 1</a></li>

                      <li><a href="index-2.html">Home 2</a></li>

                      <li><a href="index-3.html">Home 3</a></li>

                      <li><a href="index-4.html">Home 4</a></li>

                    </ul>

                  </li>

                  <li class="dropdown"><a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Jobseeker<span class="caret"></span></a>

                    <ul class="dropdown-menu" role="menu">

                      <li><a href="candidates-listings.html">Jobseeker Listing</a></li>

                      <li><a href="candidate-details.html">Jobseeker Details</a></li>

                      <li><a href="job-seekers.html">Jobseeker From</a></li>

                    </ul>

                  </li>

                  <li><a href="employers.html">Employers</a></li>

                  <li class="dropdown"><a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Jobs<span class="caret"></span></a>

                    <ul class="dropdown-menu" role="menu">

                      <li><a href="jobs.html">Latest Jobs</a></li>

                      <li><a href="jobs-detail.html">Jobs Details</a></li>

                      <li><a href="job-seekers.html">Jobs Form</a></li>

                    </ul>

                  </li>

                  <li class="dropdown"><a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Companies<span class="caret"></span></a>

                    <ul class="dropdown-menu" role="menu">

                      <li><a href="companies.html">Companies</a></li>

                      <li><a href="company-detail.html">Company Details</a></li>

                    </ul>

                  </li>

                  <li class="dropdown"><a href="#">Categories</a></li>

                  <li class="dropdown"><a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blogs<span class="caret"></span></a>

                    <ul class="dropdown-menu" role="menu">

                      <li><a tabindex="-1" href="#">Post a Job</a></li>

                      <li><a tabindex="-1" href="companies.html">Companies</a></li>

                      <li><a tabindex="-1" href="#">Resumes</a></li>

                    </ul>

                  </li>

                  <li><a href="#">Features</a> </li>

                  <li><a href="contact.html">Contact</a> </li>

                </ul>

              </nav>

            </div>

          </div>

        </div>

        <div class="cp-sidebar-social">

          <ul>

            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>

            <li><a href="#"><i class="fa fa-twitter"></i></a></li>

            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>

            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>

          </ul>

        </div>

        <strong class="copy">JobInn &copy; 2016, All Rights Reserved</strong> </div>

      <!--SIDEBAR MENU END--> 

      

    </div>
    <!--BURGER NAVIGATION SECTION END-->

    <!--NAVIGATION START-->
    <div class="container"> 


      <div class="navigation-col">

        <nav class="navbar navbar-inverse">

          <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

            <strong class="logo"><a href="index.html"><img src="{{ asset('images/logo.png') }}" alt="logo"></a></strong> </div>

          <div id="navbar" class="collapse navbar-collapse">

            <ul class="nav navbar-nav" id="nav">

              <li><a href="#">Home</a>

                <ul>

                  <li><a href="index.html">Home 1</a></li>

                  <li><a href="index-2.html">Home 2</a></li>

                  <li><a href="index-3.html">Home 3</a></li>

                  <li><a href="index-4.html">Home 4</a></li>

                </ul>

              </li>

              <li><a href="candidates-listings.html">Jobseekers</a>

                <ul>

                  <li><a href="candidates-listings.html">Jobseeker Listing</a></li>

                  <li><a href="candidate-details.html">Jobseeker Details</a></li>

                  <li><a href="job-seekers.html">Jobseeker From</a></li>

                </ul>

              </li>

              <li><a href="employers.html">Employers</a></li>

              <li><a href="jobs.html">Jobs</a>

                <ul>

                  <li><a href="jobs.html">Latest Jobs</a></li>

                  <li><a href="jobs-detail.html">Jobs Details</a></li>

                  <li><a href="job-seekers.html">Jobs Form</a></li>

                </ul>

              </li>

              <li><a href="companies.html">Companies</a>

                <ul>

                  <li><a href="companies.html">Companies</a></li>

                  <li><a href="company-detail.html">Company Details</a></li>

                </ul>

              </li>

              <li><a href="#">Features</a>

                <ul>

                  <li><a href="blog-full.html">Blogs<i class="fa fa-caret-right"></i></a>

                    <ul>

                      <li><a href="blog-medium.html">Blog Medium</a></li>

                      <li><a href="blog-post.html">Blog Post</a></li>

                      <li><a href="blog-detail.html">Blog Detail</a></li>

                      <li><a href="#">Post a Job</a></li>

                    </ul>

                  </li>

                  <li><a href="companies.html">Companies</a></li>

                  <li><a href="#">Resumes</a></li>

                  <li><a href="price.html">Job Plans &amp; Pricing</a></li>

                  <li><a href="testimonials.html">Testimonials</a></li>

                  <li><a href="privacy-policy.html">Privacy Policy</a></li>

                  <li><a href="our-terms.html">Our Terms</a></li>

                  <li><a href="login.html">Login</a></li>

                  <li><a href="signup.html">Register</a></li>

                  <li><a href="privacy-policy.html">Privacy Policy</a></li>

                </ul>

              </li>

              <li><a href="contact.html">Contact</a></li>

            </ul>

          </div>

        </nav>

      </div>


    </div>
    <!--NAVIGATION END--> 

    <!--USER OPTION COLUMN START-->
    <div class="user-option-col">
      <div class="thumb">
        @guest
        <div class="dropdown">

          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <img src="{{ asset('images/user-img.png') }}" alt="img"></button>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">

            <li><a href="{{ route('login') }}">Login</a></li>

            <li><a href="{{ route('register') }}">Register</a></li>

          </ul>

        </div>
        @else
        <div class="dropdown">

          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <img src="{{ asset('images/user-img.png') }}" alt="img">{{ Auth::user()->name }}</button>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">

            <li><a href="#">Edit Profile</a></li>

            <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>

          </ul>

        </div>
        @endguest

      </div>

      <div class="dropdown-box">

        <div class="dropdown">

          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <img src="{{ asset('images/option-icon.png') }}" alt="img"> </button>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">

            <li> <a href="#" class="login-round"><i class="fa fa-sign-in"></i></a> <a href="#" class="btn-login">Log in with Jobinn</a> </li>

            <li> <a href="#" class="login-round"><i class="fa fa-user-plus"></i></a> <a href="#" class="btn-login">Log in with Jobinn</a> </li>

          </ul>

        </div>

      </div>

    </div>
    <!--USER OPTION COLUMN END--> 

    </header>
    <!--HEADER END--> 

    <!--BANNER START-->
    @yield('banner')
    <!--BANNER END--> 

    <!--MAIN START-->
    @yield('content')
    <!--MAIN END--> 

    <!--FOOTER START-->
    @include('partials.footer')
    <!--FOOTER END--> 

</div>
<!--WRAPPER END--> 

<!--SCRIPTS START-->
@include('partials.scripts')
<!--SCRIPTS END-->
</body>
</html>