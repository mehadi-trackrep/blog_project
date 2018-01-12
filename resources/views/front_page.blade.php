@extends('layouts.base')


@section('content')
	
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Personal Posts</h1>
              <span class="subheading">First blog project using laravel</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

          <div class="post-preview">
            <!-- TITLE -->
            <h2 class="post-title">    
              Man must explore, and this is exploration at its greatest
            </h2>
            <!-- small portion of POST -->
            <h6 class="post-subtitle">
              We have to explore the world and have to gather knowledge to our surroundings enviornment.
              Moreover, we have the egarness to know about present condition of world about politics, health, education and more other similar topics.
            </h6>
            <p class="post-meta">Posted by
              <a href="#">Mehadi hasan</a>
              on September 24, 2017
            </p>
            <h4 class="post-subtitle">
              <a class='btn btn-primary btn-sm float-right'  href="post.html">Read more</a>
            </h4>
          </div>

          <br><br><hr>

          <div class="post-preview">
            <h2 class="post-title">
              Second post about politics
            </h2>
            <!-- small portion of POST -->
            <h6 class="post-subtitle">
              We have to explore the world and have to gather knowledge to our surroundings enviornment.
              Moreover, we have the egarness to know about present condition of world about politics, health, education and more other similar topics.
            </h6>
            <p class="post-meta">Posted by
              <a href="#">Hasan Md. Mehadi</a>
              on September 24, 2017
            </p>
            <h4 class="post-subtitle">
              <a class='btn btn-primary btn-sm float-right'  href="post.html">Read more</a>
            </h4>
          </div>

          <br><br><hr><br><br>

          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-success float-right" href="{{route('posts.index')}}" role="button"><span>Older Posts &rarr;</span></a>
          </div>
        </div>
      </div>
    </div>

    <hr>
@endsection