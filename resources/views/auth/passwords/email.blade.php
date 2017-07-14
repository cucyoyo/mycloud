@extends('auth.layout')

<!-- Main Content -->
@section('content')
    <h2>忘记密码</h2>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}


            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                   placeholder="输入邮箱">

            @if ($errors->has('email'))
                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif

        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-envelope"></i> 发送邮件重置密码
                </button>
            </div>
        </div>

    </form>
    <div class="form-group">
        <div class="col-md-12">
            <button class="btn btn-primary">
                <i class="fa fa-btn fa-sign-in"></i> <a href="{{ url('/login') }}">登录</a>
            </button>
        </div>
        <br>
        <br>
        <div class="col-md-12">
            <button class="btn btn-primary">
                <i class="fa fa-btn fa-sign-in"></i> <a href="{{ url('/register') }}">注册</a>
            </button>
        </div>
    </div>
@endsection
