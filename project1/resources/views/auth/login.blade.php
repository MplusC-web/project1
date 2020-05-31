@extends('layouts.app')
@include('navbar')
@include('sidebar')
@include('footer')


@section('content')
<div class="row">
<img class="img-fluid" src="/images/banner.jpg">
</div>

<div class="main">
  <div class="card devise-card">
    <div class="form-wrap">
      <div class="form-group text-center">
        <h3>＼ログイン／</h3>
        <p class="text-secondary">人気の100均グッズをチェックしよう</p>
      </div>
      <div class="form-group">
      <a href="{{ route('login.twitter') }}" class="btn btn-block btn-info">
        <i class="fab fa-twitter mr-1"></i>Twitterでログイン</a>
      </div>
      @include('error_card_list')

      <form class="new_user" id="new_user" action="{{ route('login') }}" accept-charset="UTF-8" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <input id="email" type="email" class="form-control" name="email"  placeholder="メールアドレス" value="{{ old('email') }}" required autofocus>
        </div>

        <div class="form-group">
          <input id="password" type="password" class="form-control" name="password" placeholder="パスワード" required>
        </div>
        <input type="hidden" name="remember" id="remember" value="on">
        @if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
          {{ __('パスワードをお忘れの方はこちらへ') }}
        </a>
        @endif

        <div class="actions">
          <input type="submit" name="commit" value="サインインする" class="btn btn-primary w-100">
        </div>
      </form>

      <br>

      <p class="devise-link">
        アカウントをお持ちでないですか？
        <a href="{{ route('register') }}">登録する</a>
      </p>
    </div>
  </div>
</div>
@endsection





@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
ss
