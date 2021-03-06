@extends('layouts.app')

@section('title', 'Home')
@section('header-title', 'Welcome!')
@section('header-desc', 'Simplify your experience on the web during the COVID 19 pandemic!')
@section('page-class', 'index-page')

@section('content')
    <div class="blogs-1" id="blogs-1">
        <div class="container">
            <div class="row">
            <div class="col-md-10 ml-auto mr-auto">
                <h2 class="title">Learning Resources</h2>
                <br>
                <div class="card card-plain card-blog">
                <div class="row">
                    <div class="col-md-5">
                    <div class="card-header card-header-image">
                        <a href="#pablito">
                        <img class="img" src="./assets/img/examples/card-blog4.jpg">
                        </a>
                    <div class="colored-shadow" style="background-image: ; opacity: 1;"></div></div>
                    </div>
                    <div class="col-md-7">
                    <h6 class="card-category text-info">Tutorials</h6>
                    <h3 class="card-title">
                        <a href="#pablo">Learn as much as you want</a>
                    </h3>
                    <p class="card-description">
                        We provide many tutorials to show you how to develop basic technical skills that can make your life easier when navigating the web.
                    </p>
                    </div>
                </div>
                </div>
                <div class="card card-plain card-blog">
                <div class="row">
                    <div class="col-md-7">
                    <h6 class="card-category text-danger">
                        Quick Fire!
                    </h6>
                    <h3 class="card-title">
                        <a href="#pablo">Test your knowledge of Keyboard Shortcuts</a>
                    </h3>
                    <p class="card-description">
                        We have provided games in the form of quizzes to allow you to test your reaction skills and knowledge of keyboard shortcuts. You can gain points and climb the leaderboard. How fast are you? Let's find out!
                        <a href="#pablo"> Read More </a>
                    </p>
                    </div>
                    <div class="col-md-5">
                    <div class="card-header card-header-image">
                        <img class="img img-raised" src="./assets/img/office2.jpg">
                    <div class="colored-shadow" style="background-image: url(&quot;https://demos.creative-tim.com/material-kit-pro/assets/img/office2.jpg&quot;); opacity: 1;"></div></div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@stop
