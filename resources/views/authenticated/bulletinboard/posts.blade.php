@extends('layouts.sidebar')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
@section('content')
<div class="board_area w-100  m-auto d-flex">
  <div class="post_view w-75 mt-5">
    <p class="w-75 m-auto">投稿一覧</p>
    @foreach($posts as $post)
    <div class="post_area border w-75 m-auto p-3">
      <p><span>{{ $post->user->over_name }}</span><span class="ml-3">{{ $post->user->under_name }}</span>さん</p>
      <p><a href="{{ route('post.detail', ['id' => $post->id]) }}">{{ $post->post_title }}</a></p>
      <div class="post_bottom_area d-flex">
        <div>
@foreach($post->subCategories as $sub_category)
      <span class="category_btn">{{ $sub_category->sub_category}}</span>
@endforeach
</div>
        <div class="d-flex post_status">
          <div class="mr-5">
            <i class="fa fa-comment"></i><span class="comment_counts{{ $post->id }}">{{ $post_comment->commentCounts($post->id)}}</span>
          </div>
          <div>
            @if(Auth::user()->is_Like($post->id))
            <p class="m-0"><i class="fas fa-heart un_like_btn" post_id="{{ $post->id }}"></i><span class="like_counts{{ $post->id }}">{{ $like->likeCounts($post->id)}}</span></p>
            @else
            <p class="m-0"><i class="fas fa-heart like_btn" post_id="{{ $post->id }}"></i><span class="like_counts{{ $post->id }}">{{ $like->likeCounts($post->id)}}</span></p>
            @endif
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="other_area w-25">
    <div class="m-4">
      <div class=""><a href="{{ route('post.input') }}" class="btn btn-primary w-100 mb-1 post-btn">投稿</a></div>
      <div class="">
        <input type="text" placeholder="キーワードを検索" class=" post-search" name="keyword" form="postSearchRequest">
        <input type="submit" class=" btn post-search-btn" value="検索" form="postSearchRequest">
      </div>
      <input type="submit" name="like_posts" class="category_btn good_btn" value="いいねした投稿" form="postSearchRequest">
      <input type="submit" name="my_posts" class="category_btn my_btn" value="自分の投稿" form="postSearchRequest">

     <div class="search-category">カテゴリー検索</div>

      <div class="accordion-single js-acc-single">
      @foreach($categories as $category)
      <div class="accordion-single-item js-acc-item">
      <li class="main_categories accordion-single-title js-acc-single-trigger" category_id="{{ $category->id }}"><span>{{ $category->main_category }}</span></li>
      @foreach ($category->subCategories as $sub_category)
  <p> <input type="submit" class="category_btn accordion-single-content" name="category_word" value="{{ $sub_category->sub_category }}" form="postSearchRequest"></p>
        @endforeach
   </div>
        @endforeach
    </div>
  </div>
  <form action="{{ route('post.show') }}" method="get" id="postSearchRequest"></form>
</div>
@endsection
