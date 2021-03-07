@extends('layouts.app')

@section('page-title', $user->name)
@section('page-class', 'profile-page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 ml-auto mr-auto">
                <div class="profile">
                    <div class="avatar">
                        @isset($user->avatar)
                            <img src="{{asset($user->avatar)}}" alt="" class="img-raised rounded-circle img-fluid">
                        @else
                            <img src="{{asset('img/default-img.png')}}" alt="" class="img-raised rounded-circle img-fluid">
                        @endisset
                    </div>
                    <div class="name">
                        <h3 class="title">{{$user->name}}</h3>
                        @if (Auth::id() === $user->id)
                            <a href="{{route('profile.edit', $user->name)}}" class="btn btn-primary"><i class="fad fa-edit fa-2x"></i></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="description text-center">
            <p>{{$user->bio ?? 'Not Set'}}</p>
        </div>
    </div>
@stop
