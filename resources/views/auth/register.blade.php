@extends('layouts.app')
@section('banner')
  <section id="inner-banner">

    <div class="container">

      <h1>Register Your Account</h1>

    </div>

  </section>
@endsection
@section('content')
<!--SIGNUP SECTION START-->

    <section class="signup-section">

      <div class="container">

        <div class="holder">

          <div class="thumb"><img src="images/signup.png" alt="img"></div>

          <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="input-box"> <i class="fa fa-pencil"></i>

              <input type="text" name="name" value="{{ old('name') }}" placeholder="Nombre">

            </div>

            <div class="input-box"> <i class="fa fa-envelope-o"></i>

              <input type="text" name="email" value="{{ old('email') }}" placeholder="Email">

            </div>
            <div class="input-box"> <i class="fa fa-unlock"></i>

              <input type="text" name="password" placeholder="Password">

            </div>

            <div class="input-box"> <i class="fa fa-unlock"></i>

              <input type="text" name="password_confirmation" placeholder="Confirm Password">

            </div>

            <div class="select-box">

              <div class="selector">

                <select class="full-width">

                  <option value="1">Select You’re</option>

                  <option value="2">Select You’re</option>

                  <option value="3">02</option>

                  <option value="4">03</option>

                </select>

              </div>

            </div>

            <div class="upload-box">

              <div class="hold"><a href="#">Maximum file size 20 MB</a> <span class="btn-file"> Browse File

                <input type="file">

                </span> </div>

            </div>

            <div class="check-box">

              <input id="id3" type="checkbox" />

              <strong>I’ve read <a href="#">Terms</a> &amp; <a href="#">Conditions</a></strong> </div>

            <input type="submit" value="Sign up">

            <em>Already a Member? <a href="#">LOG IN NOW</a></em>

          </form>

        </div>

      </div>

    </section>

    <!--SIGNUP SECTION END--> 
@endsection
