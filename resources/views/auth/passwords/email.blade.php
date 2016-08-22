@extends('common.master_plain')

@section('title', 'Reset Password')

<!-- Main Content -->
@section('content')
<div class="container-fluid">

    @include('common.header_institute')

    <div class="row">
        <div class='col-lg-4 col-md-4 col-sm-3'></div>
        <div class='col-lg-4 col-md-4 col-sm-6'>
            <div id="well-login" class='well well-lg well-box'>
                <legend>Reset Password</legend>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form role="form" method="POST" action="{{ url('/password/email') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : ' label-floating' }}">
                        <label for="email" class="control-label">Email Address</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group collapse in text-center">
                        <button type="submit" class="btn btn-raised btn-primary">Reset</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
@endsection
