@csrf
<div class="form-group">
  <label for="title">商品名</label>
  <input class="form-control" placeholder="20文字以内" type="text" name="title" value="{{ $post->title ?? old('title') }}">
</div>
<div class="form-group">
  <label for="title">カテゴリー</label>

  <select name="category_id">
  @foreach(config('cate') as $index => $name)
    <option value="{{ $index }}" @if(old('category_id') == $index) selected @endif>{{ $name }}</option>
  @endforeach
  </select>
</div>
<div class="form-group">
  <label for="description">商品説明</label><br>
  <textarea class="form-control" placeholder="300文字以内" type="text" name="description" rows="4">{{ $post->description ?? old('description') }}</textarea>
</div>
<div class="form-group">
<label for="post_pic1">投稿写真</label><br>
  <input type="file" name="pic1" accept="image/jpeg,image/gif,image/png" >
</div>