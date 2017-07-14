@extends('auth.layout')

@section('content')


<h2>注册</h2>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    {{--<label for="name" class="col-md-4 control-label">Name</label>--}}

                    {{--<div class="col-md-6">--}}
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="输入昵称">

                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    {{--</div>--}}
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                    {{--<div class="col-md-6">--}}
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="输入邮箱">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    {{--</div>--}}
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                    {{--<div class="col-md-6">--}}
                        <input id="password" type="password" class="form-control" name="password" placeholder="输入密码">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    {{--</div>--}}
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

                    {{--<div class="col-md-6">--}}
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="确认密码">

                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                        @endif
                    {{--</div>--}}
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-user"></i> 注册
                        </button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary">
                            <i class="fa fa-btn fa-sign-in"></i> <a href="{{ url('/login') }}">登录</a>
                        </button>
                    </div>
                </div>

            </form>

@endsection
