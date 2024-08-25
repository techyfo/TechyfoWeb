<div class="card mb-4 shadow-sm">
    <img class="card-img-top" src="{{getImageUrl($post->thumbnail,600,400,firstString($post->title))}}" alt="{{$post->title}}">
    <div class="card-body">
        <h5 class="card-title"><a href="{{route('page_or_post',['slug'=>$post->slug])}}">{{$post->title}}</a></h5>
        <p class="card-text">
            <small class="text-muted">By {{ $post->author->name??'Admin' }} on {{ \Carbon\Carbon::parse($post->published_at)->format('d M Y') }}</small>
        </p>
        <p class="card-text">{{getPostDescription($post,160)}}</p>
        <a href="{{route('page_or_post',['slug'=>$post->slug])}}" class="btn btn-primary">Read More</a>
    </div>
    <div class="card-footer text-muted">
        Category: <a href="{{route('category',['slug' => $category->slug])}}">{{$category->name}}</a>
    </div>
</div>
