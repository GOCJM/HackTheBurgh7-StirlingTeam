@extends('layouts.app')

@section('page-title', $user->name)
@section('page-class', 'profile-page')
@section('headScript')
    function countCharBio(val) {
        var len = val.value.length;
        if (len >= 500) {
            val.value = val.value.substring(0, 500);
        } else {
            $('#charNumBio').text(500 - len);
        }
    };
@stop

@section('content')
    {!! Form::model($user, ['method' => 'PATCH', 'route' => ['profile.update', $user->name], 'files' =>true, 'enctype'=>'multipart/form-data']) !!}
        <div class="container" style="margin-top: -77px;">
            <div class="row mt-2">
                <div class="col" align="center">
                    <h4>Avatar</h4>
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail img-circle img-raised">
                            <img src="{{$user->avatar ?? asset('img/default-img.png')}}">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail img-circle img-raised"></div>
                        <div>
                            <span class="btn btn-raised btn-round btn-default btn-file">
                                <span class="fileinput-new">Add Photo</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" id="avatar" name="avatar" onchange="document.getElementById('avatarImg').src = window.URL.createObjectURL(this.files[0])"/>
                            </span>
                            <br />
                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col" align="center">
                    <div class="form-group bmd-form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                        <span class="bmd-help">Enter your name</span>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col" align="center">
                    <div class="form-group bmd-form-group">
                        <textarea onkeyup="countCharBio(this)" maxlength="500" rows="5" type="text" class="form-control" id="bio" name="bio" placeholder="Bio"></textarea>
                        <span class="bmd-help">Enter a bio to let everyone know more about you</span>
                        <div id="charNumBio"></div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col" align="center">
                    <button type="submit" class="btn btn-success"><i class="fad fa-save"></i> Update Profile</button>
                </div>
            </div>
        </div>
    {!! Form::close() !!}
@stop
