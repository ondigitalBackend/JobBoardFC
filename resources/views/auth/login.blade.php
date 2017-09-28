@extends('layouts.app')
@section('banner')
<section id="inner-banner">

    <div class="container">

      <h1>Login To Your Account</h1>

    </div>

  </section>
@endsection

@section('content')
  <div id="main"> 

    

    <!--SIGNUP SECTION START-->

        <section class="signup-section">

      <div class="container">

        <div class="holder">

          <div class="thumb"><img src="{{ asset('images/signup.png') }}" alt="img"></div>

          <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="input-box"> <i class="fa fa-user"></i>

              <input type="text" name="email" placeholder="Email">

            </div>

            <div class="input-box"> <i class="fa fa-unlock"></i>

              <input type="text" name="password" placeholder="Contraseña">

            </div>

            <div class="check-box">

              <input id="id3" type="checkbox" />

              <strong>Remember Me</strong> </div>

            <input type="submit" value="Sign up">

            <a href="{{ route('password.request') }}" class="login">¿Olvidaste tu contraseña?</a> <b>OR</b>

            <div class="login-social">

              <h4>Log in with Your Social Account</h4>

              <ul>

                <li> <a href="#" class="fb"><i class="fa fa-facebook"></i>Facebook Login</a> </li>

                <li> <a href="#" class="gp"><i class="fa fa-google-plus"></i>Google Plus Login</a> </li>

                <li> <a href="#" class="tw"><i class="fa fa-twitter"></i>Twitter Login</a> </li>

              </ul>

              <em>You Don’t have an Account? <a href="#">SIGN UP NOW</a></em> </div>

          </form>

        </div>

      </div>

    </section>



    <!--SIGNUP SECTION END--> 

    

  </div>
@endsection
