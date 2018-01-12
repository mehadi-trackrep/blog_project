@extends('layouts.base')


@section('content')

      <!-- Page Header -->
    <header class="masthead" style="background-image: url('./img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Giving personal Posts</h1>
              <span class="subheading">Share opinions or information</span>
            </div>
          </div>
        </div>
      </div>
    </header>


    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

          <p>Want to get in touch? Fill out the form below to post some information and spread out that over all persons</p>

          <form action="/posts" method="POST" name="sentMessage" id="contactForm" novalidate>
    {{ csrf_field() }}
            <div class="control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Name</label>
                <input type="tel" class="form-control" placeholder="Name" name="name" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>

            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Post title</label>
                <input type="text" class="form-control" name="post_title" placeholder="Post title" id="phone" required data-validation-required-message="Please enter your post title.">
                <p class="help-block text-danger"></p>
              </div>
            </div>

            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Email Address</label>
                <input type="email" class="form-control" name="email" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>

            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Information</label>
                <textarea rows="5" class="form-control" name="information" placeholder="Information" id="message" required data-validation-required-message="Please enter your information."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>

            <br>

            <div class="form-group">
              <input type="submit" class="btn btn-primary float-right" id="sendMessageButton" value='Send'>
            </div>
          </form>

          <br><br><hr>

        </div>
      </div>
    </div>

@endsection