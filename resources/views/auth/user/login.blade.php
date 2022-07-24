@extends('layouts.master')

@section('title', 'Login')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Login</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Login Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>Login</h2>
                        <form action="{{ route('post.user.login') }}" method="post">
                            @csrf
                            <div class="group-input">
                                <label for="username">Email address *</label>
                                <input name="email" type="text" id="username">
                            </div>
                            @if ($errors->has('email'))
                                <span style="color: red">{{ $errors->first('email') }}</span>
                            @endif
                            <div class="group-input">
                                <label for="pass">Password *</label>
                                <input name="password" type="password" id="pass">
                            </div>
                            @if ($errors->has('password'))
                                <span style="color: red">{{ $errors->first('password') }}</span>
                            @endif
                            <div class="group-input gi-check">
                                <div class="gi-more">
                                    <label for="save-pass">
                                        Save Password
                                        <input type="checkbox" name="" id="save-pass">
                                        <span class="checkmark"></span>
                                    </label>
                                    <a href="#" class="forget-pass">Forget your Password</a>
                                </div>
                            </div>
                            <button name="submit" type="submit" class="site-btn login-btn">Sign In</button>
                        </form>
                        <div class="switch-login">
                            <a href="{{ route('get.user.register') }}" class="or-login">Or Create An Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Section End -->
@endsection
