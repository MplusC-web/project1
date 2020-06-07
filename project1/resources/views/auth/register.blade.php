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
        <h3>＼新規登録／</h2>
        <p class="text-secondary">人気の100均グッズをチェックしよう</p>
      </div>

      @include('error_card_list')

      <form method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <div class="form-group">
          <input class="form-control" placeholder="ユーザー名　　英数字3〜16文字" type="text" name="name" value="{{ old('name') }}" required autofocus>
        </div>
        <div class="form-group">
          <input class="form-control" placeholder="メールアドレス" autocomplete="email" type="email" name="email" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
          <input class="form-control" placeholder="パスワード" autocomplete="off" type="password" name="password" required>
        </div>
        <div class="form-group">
          <input class="form-control" placeholder="パスワードの確認" autocomplete="off" type="password" name="password_confirmation" required>
        </div>
        <div class="actions">
          <input type="submit" name="commit" value="登録する" class="btn btn-primary w-100">
        </div>
      </form>
      <br>
      <p class="devise-link">
        アカウントをお持ちですか？
        <a href="/users/sign_in">サインインする</a>
        <div class="form-group">
        <a href="{{ route('login.twitter') }}" class="btn btn-block btn-info">
        <i class="fab fa-twitter mr-1"></i>Twitterでログイン</a>
        </div>
      </p>
    </div>
  </div>
</div>
@endsection
