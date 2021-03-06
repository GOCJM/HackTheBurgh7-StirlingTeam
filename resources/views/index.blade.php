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
                    <h2 class="title">Learning Facilities</h2>
                    <br>
                    <div class="card card-plain card-blog">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="card-header card-header-image">
                                    <a href="#"><img class="img" src="{{asset('img/computerSkills.png')}}"></a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h6 class="card-category text-info">Quick Fire</h6>
                                <h3 class="card-title"><a href="#pablo">Autodesk looks to future of 3D printing with Project Escher</a></h3>
                                <p class="card-description">Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses. Today, it’s moving to a subscription model. Yet its own business model disruption is only part of the story — and…
                                    <a href="#pablo"> Read More </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-plain card-blog">
                        <div class="row">
                            <div class="col-md-7">
                                <h6 class="card-category text-danger">Trending</h6>
                                <h3 class="card-title"><a href="#pablo">6 insights into the French Fashion landscape</a></h3>
                                <p class="card-description">Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses. Today, it’s moving to a subscription model. Yet its own business model disruption is only part of the story — and…
                                <a href="#pablo"> Read More </a>
                                </p>
                                <p class="author">
                                by
                                <a href="#pablo">
                                    <b>Mike Butcher</b>
                                </a>, 2 days ago
                                </p>
                            </div>
                            <div class="col-md-5">
                                <div class="card-header card-header-image">
                                    <img class="img img-raised"  href="#"><img class="img" src="{{asset('img/checkMark.png')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
