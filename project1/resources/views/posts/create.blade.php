@extends('layouts.app')
@include('navbar')
@include('sidebar')
@include('footer')

@section('content')
<div class="panel-body">

<div class="d-flex flex-column align-items-center mt-3">
  <div class="col-12 col-md-8 col-lg-9">
    <div class="card">
      <div class="card-header">
        新規投稿
      </div>

      @include('error_card_list')

      <div class="card-body">
        <form class="upload-images p-0 border-0" id="new_post" enctype="multipart/form-data" action="{{ url('posts')}}" accept-charset="UTF-8" method="POST">
        {{csrf_field()}}
            @include('posts.form')
          <input type="submit" name="commit" value="投稿する" class="btn btn-primary" data-disable-with="投稿する" />
        </form>
      </div>
    </div>
  </div>
</div>
</div>

<script type="text/javascript">
  $('#post_image').bind('change', function() {
    var size_in_megabytes = this.files[0].size/1024/1024;
    if (size_in_megabytes > 1) {
      alert('ファイルサイズの最大は1MBまでです。違う画像を選んでください。');
    }
  });
</script>
@endsection