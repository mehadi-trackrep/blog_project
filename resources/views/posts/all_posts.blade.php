@extends('layouts.base')


@section('content')
    
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>All Posts</h1>
              <span class="subheading">All posts are following</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

@foreach($posts as $post)
          <div class="post-preview">

            <h2 class="post-title">    
              {{$post->post_title}}
            </h2>
            <!-- small portion of POST -->
            <p class="post-subtitle">
                {{$post->information}}
            </p>
            <p class="post-meta">Posted by
              <a href="#">{{$post->name}}</a>
{{
  $timestemp = $post->updated_at,
  $year = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $timestemp)->year,
  $month = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $timestemp)->month,
  $day = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $timestemp)->day
}}
               on {{$month}} {{$day}},  {{$year}}
            </p>
          </div>

          <br><br><hr>
@endforeach

          <br><br><hr><br><br>

        </div>
      </div>
    </div>

    <hr>
@endsection