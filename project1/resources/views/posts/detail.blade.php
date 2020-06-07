@extends('layouts.app')
@include('navbar')
@include('sidebar')
@include('footer')

@section('content')
<div class="row">
<img class="img-fluid" src="/images/banner.jpg">
</div>
<div class="col-md-10 col-md-2 mx-auto">
  <div class="card-wrap">
    <div class="row card">
      <img class="card-img-top" src="/storage/post_images/{{ $post->id }}.jpg">
      <div class="row card-body px-3 py-2">
        <div class="col-4 col-md-4 col-lg-4">
        @if ($post->user->profile_photo)
          <a href="{{ route('user.show', $post->user_id)}}"><img class="post-profile-icon round-img2" src="{{ asset('storage/user_images/' . $post->user->profile_photo) }}"/></a>
        @else
          <img class="post-profile-icon round-img2" src="{{ asset('/images/blank_profile.png') }}"/>
        @endif
        </div>
        <div class="col-8 col-md-8 col-lg-8 clearfix">
          <div class="float-right">
          <post-like
            :initial-is-liked-by='@json($post->isLikedBy(Auth::user()))'
            :initial-count-likes='@json($post->count_likes)'
            :authorized='@json(Auth::check())'
            endpoint="{{ route('posts.like', ['post' => $post]) }}"
          >
          </post-like>
          </div>
        </div>
      </div>
      <div class="row px-4 py-2">
        <h4 class="card-title">{{ $post->title }}詳細</h4>
        <p class="card-text">
          {{ $post->body }}
        </p>
        <div class="col-9 col-md-9 col-lg-9">
          <span class="mr-2">
            <div class="post-time2 no-text-decoration">{{ $post->created_at->format('Y.m.d') }}</div>
          </span>
          <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-text="お気に入り100均グッズ共有サイト｜いいねメモ" data-show-count="false">Tweet</a>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div class="col-3 col-md-3 col-lg-3 clearfix">
          <div class="float-right">
          @if( Auth::id() === $post->user_id )
          <!-- dropdown -->
          <div class="ml-auto card-text">
            <div class="dropdown">
              <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <button type="button" class="btn btn-link text-muted m-0 p-2">
                  <i class="fas fa-ellipsis-v"></i>
                </button>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="{{ route('posts.edit', ['post' => $post]) }}">
                  <i class="fas fa-pen mr-1"></i>投稿を更新する
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $post->id }}">
                  <i class="fas fa-trash-alt mr-1"></i>投稿を削除する
                </a>
              </div>
            </div>
          </div>
          <!-- dropdown -->
          <!-- modal -->
          <div id="modal-delete-{{ $post->id }}" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <form method="POST" action="{{ route('posts.destroy', ['post' => $post]) }}">
                  @csrf
                  @method('DELETE')
                  <div class="modal-body">
                    {{ $post->title }}を削除します。よろしいですか？
                  </div>
                  <div class="modal-footer justify-content-between">
                    <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                    <button type="submit" class="btn btn-danger">削除する</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- modal -->
          @endif
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-md-12 col-lg-12">
      <div id="app">
　　　   <comment-form
            :authorized='@json(Auth::check())'
            :post-id="{{ $post->id }}"
        >
        </comment-form>

　　　   <comment-list
            :post-id="{{ $post->id }}"
        >
        </comment-list>

      </div>
    </div>
  </div>
</div>
@endsection
