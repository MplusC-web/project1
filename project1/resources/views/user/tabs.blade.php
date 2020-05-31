<ul class="nav nav-tabs nav-justified mt-3">
  <li class="nav-item">
    <a class="nav-link text-muted {{ $hasPosts ? 'active' : '' }}"
      href="{{ route('user.show', $user->id)}}">
      投稿
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-muted {{ $hasLikes ? 'active' : '' }}"
      href="{{ route('user.likes', $user->id)}}">
      いいね
    </a>
  </li>
</ul>