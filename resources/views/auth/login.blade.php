@extends('common.master_plain')

@section('title', 'Login')

@section('content')
<div class="container-fluid">

    @include('common.header_institute')

    <div class="row">
        <div class='col-lg-4 col-md-4 col-sm-3'></div>
        <div class='col-lg-4 col-md-4 col-sm-6'>
            <div id="well-login" class='well well-lg well-box'>

                <legend>Login</legend>

                @if($errors->any())
                    <div class="alert alert-dismissible alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        @foreach($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <form role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : ' label-floating' }}">
                        <label for="email" class="control-label">Email</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : ' label-floating' }}">
                        <label for="password" class="control-label">Password</label>
                        <input id="password" type="password" class="form-control" name="password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <a href="{{ url('/password/reset') }}">Forgot Password?</a>
                    </div>

                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox">
                                <span class="checkbox-label"> Remember Me</span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group collapse in text-center">
                        <button type="submit" class="btn btn-raised btn-primary">Login</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
