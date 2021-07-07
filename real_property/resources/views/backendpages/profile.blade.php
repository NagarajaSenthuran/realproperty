@extends('layouts.adminlayout')
@section('pagetitle', 'Profile')
@section('content')
    <!--============== Dashboard Start ==============-->
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <div class="col-xl-11 col-lg-11">
                        <h2 class="m-0 font-weight-bold text-center" style="color:#ff7f50;">PROFILE</h2>
                        @if(Session::has('success_message'))
                        <div class="alert alert-success">
                            <span class="fa fa-ok"></span>
                            {!! session('success_message') !!}
                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            <form method="POST" action="{{ route('profile.edit') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row justify-content-md-center">
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                        <label for="name" class="col-md-12 control-label color-b">Name</label>
                                        <div class="col-md-12">
                                            <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($profile)->name) }}" minlength="1" placeholder="Enter name here...">
                                            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                        <label for="email" class="col-md-12 control-label color-b">Email</label>
                                        <div class="col-md-12">
                                            <input class="form-control" name="email" type="email" id="email" value="{{ old('email', optional($profile)->email) }}" minlength="1" placeholder="Enter email here...">
                                            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                                        <label for="phone" class="col-md-12 control-label color-b">Phone</label>
                                        <div class="col-md-12">
                                            <input class="form-control" name="phone" type="text" id="phone" value="{{ old('phone', optional($profile)->phone) }}" minlength="1" placeholder="Enter phone here...">
                                            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                                        <label for="address" class="col-md-12 control-label color-b">Address</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control" name="address" cols="40" rows="5" id="address" minlength="1" placeholder="Enter address here...">{{ old('address', optional($profile)->address) }}</textarea>
                                            {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                                        {{--<label class="col-md-12 control-label" for="image" style="background-image: url('{{ asset($profile->image)}}');">Image</label>--}}
                                        <label class="col-md-12 control-label color-b" for="image">Profile Image</label>
                                        <div class="col-md-4">
                                        <img src="{{asset($profile->image)}}" width="150px" height="100px" alt="Image"/>
                                        <input type="file" name="image" class="form-control form-control-user">
                                            {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-md-offset-2 col-md-10">
                                            <input class="btn btn-org" type="submit" value="Add">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============== Dashboard End ==============-->

    
@endsection