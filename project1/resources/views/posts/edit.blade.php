@extends('layouts.app')
@include('navbar')
@include('sidebar')
@include('footer')

@section('title', '投稿更新')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card mt-3">
          <div class="card-body pt-0">
            @include('error_card_list')
            <div class="card-text">
              <form method="POST" action="{{ route('posts.update', ['post' => $post]) }}">
                @method('PATCH')
                @include('posts.form')
                <input type="submit" name="commit" value="更新する" class="btn btn-primary" data-disable-with="更新する" />
                <a class="btn btn-primary" href="{{ route('posts.detail', $post->id)}}">キャンセル</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection