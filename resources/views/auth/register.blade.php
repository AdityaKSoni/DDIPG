@extends('common.master_plain')

@section('title', 'Register')

@section('content')
<div class="container-fluid">

    @include('common.header_institute')

    <div class="row">
        <div class='col-lg-4 col-md-4 col-sm-3'></div>
        <div class='col-lg-4 col-md-4 col-sm-6'>
            <div id="well-login" class='well well-lg well-box'>
                <legend>Register</legend>

                @if($errors->any())
                    <div class="alert alert-dismissible alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        @foreach($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <form role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : ' label-floating' }}">
                        <label for="name" class="control-label">Name</label>
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : ' label-floating' }}">
                        <label for="email" class="control-label">Email Address</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : ' label-floating' }}">
                        <label for="password" class="control-label">Password</label>
                        <input id="password" type="password" class="form-control password-strength" name="password">
                        <p><span class="password-status"></span></p>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : ' label-floating' }}">
                        <label for="password-confirm" class="control-label">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                        <a data-toggle="modal" href="#password-guidelines">Password Guidelines</a>
                    </div>

                    <div class="form-group collapse in text-center">
                        <button type="submit" class="btn btn-raised btn-primary">Register</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

    @include('common.modals.password-guidelines')

@endsection
