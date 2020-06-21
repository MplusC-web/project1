@extends('layouts.app')
@include('navbar')
@include('sidebar')
@include('footer')

@section('content')
<div class="row">
<img class="img-fluid" src="/images/banner.jpg">
</div>
  <div class="row">
  @foreach($posts as $post)
    <div class="col-12 col-md-6 col-lg-6 py-4">
      <div class="card h-80">
        <img class="card-img-top" src="/storage/post_images/{{ $post->id }}.jpg">
        <div class="card-body px-3 py-2">
          <div class="row">
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
          <div class="row px-3 py-2">
          <h4 class="card-title">{{ $post->title }}</h4>
            <p class="card-text">
            {{ \Illuminate\Support\Str::limit($post->description, 90) }}
            </p>
          </div>
          <div class="row card-footer">
            <div class="col-4 col-md-4 col-lg-4">
              <span class="mr-2">
              <div class="light-color post-time no-text-decoration">{{ $post->created_at->format('Y.m.d') }}</div>
              </span>
            </div>
            <div class="col-8 col-md-8 col-lg-8 clearfix">
              <div class="float-right">
                <a class="btn btn-primary" href="/posts/{{ $post->id }}">tS詳細を見る</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endforeach
  </div>
  <div class="d-flex justify-content-center">
  {{ $posts->links() }}
  </div>
@endsection