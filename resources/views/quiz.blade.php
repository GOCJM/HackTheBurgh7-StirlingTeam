@extends('layouts.quiz-app')

@section('title', 'Quiz')

@section('page-class', 'profile-page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col ml-auto mr-auto">
                <div class="card card-signup">
                    <h2 class="card-title text-center">Quick Fire Quiz</h2>
                    <div class="card-body" style="height: 85vh">
                        <div class="row">
                            <div class="center">
                                <h1 id="question"></h1>
                                <p id="points"></p>
                            </div>
                        </div>
                        {{-- <div class="row">
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="material-icons">code</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Fully Coded in HTML5</h4>
                                    <p class="description">
                                        We've developed the website with HTML5 and CSS3. The client has access to the code
                                        using GitHub.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="info info-horizontal">
                                <div class="icon icon-info">
                                    <i class="material-icons">group</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Built Audience</h4>
                                    <p class="description">
                                        There is also a Fully Customizable CMS Admin Dashboard for this product.
                                    </p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop
