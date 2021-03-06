@extends('layouts.app')

@section('title', 'Home')
@section('header-title', 'Welcome!')
@section('header-desc', 'Simplify your experience on the web during the COVID 19 pandemic!')
@section('page-class', 'index-page')

@section('content')
    <div class="cd-section" id="blogs">
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
                                        <a href="{{route('quiz.index')}}"><img class="img" src="{{ asset('img/computerSkills.png') }}"></a>
                                        <div class="colored-shadow"
                                            style="background-image: url({{ asset('img/computerSkills.png') }}); opacity: 1;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <h3 class="card-title">
                                        <a href="#">Test your knowledge of Keyboard Shortcuts.</a>
                                    </h3>
                                    <p class="card-description">
                                        This game will allow you test your reaction skills and knowledge of keyboard
                                        shortcuts to gain points and climb the leaderboard. How fast are you? Let's find
                                        out!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-plain card-blog">
                            <div class="row">
                                <div class="col-md-7">
                                    <h3 class="card-title">
                                        <a href="#">6 insights into the French Fashion landscape</a>
                                    </h3>
                                    <p class="card-description">
                                        Like so many organizations these days, Autodesk is a company in transition. It was
                                        until recently a traditional boxed software company selling licenses. Today, it’s
                                        moving to a subscription model. Yet its own business model disruption is only part
                                        of the story — and…
                                    </p>
                                </div>
                                <div class="col-md-5">
                                    <div class="card-header card-header-image">
                                        <a href="#"><img class="img img-raised" src="{{ asset('img/checkMark.png') }}"></a>
                                        <div class="colored-shadow"
                                            style="background-image: url({{ asset('img/checkMark.png') }}); opacity: 1;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
