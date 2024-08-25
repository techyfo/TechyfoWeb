@extends('layouts.website_master')
@section('custom_css')
@endsection

@section('content')
    @include('website.includes.breadcrumb',['title' => $title,])
    <!-- =======================
    Main content START -->
    <section class="section">
        <div class="container" data-sticky-container>
            <div class="row">
                <!-- Main Post START -->
                <div class="col-md-8 col-12">
                    <!-- Title -->
                   
                    <div class="row gy-4">
                        <!-- Card item START -->
                        @if($posts->count()<1)
                            <h2 class="text-center text-danger">No Post Available</h2>
                        @else
                            @foreach($posts as $post)
                                <div class="col-sm-6">@include('website.includes.post_single_grid_item',['post'=>$post,'category'=>$post->categories->first()])</div>
                            @endforeach
                                <div class="col-12 text-center mt-5">
                                    @if ($posts->onFirstPage())
                                        <button class="btn btn-primary-soft" disabled><i class="bi bi-arrow-left-circle ms-2 align-middle"></i> Previous Page</button>
                                    @else
                                        <a type="button" href="{{ $posts->previousPageUrl() }}" class="btn btn-primary-soft"><i class="bi bi-arrow-left-circle ms-2 align-middle"></i> Previous Page</a>
                                    @endif

                                    @if($posts->hasMorePages())
                                        <a type="button" href="{{ $posts->nextPageUrl() }}" class="btn btn-primary-soft">Next Page <i class="bi bi-arrow-right-circle ms-2 align-middle"></i></a>
                                    @else
                                        <button class="btn btn-primary-soft" disabled> Next Page<i class="bi bi-arrow-left-circle ms-2 align-middle"></i></button>
                                    @endif
                                </div>
                        @endif

                    </div>
                </div>
                <!-- Main Post END -->
                <!-- Sidebar START -->
                <div class="col-md-4 ">
                   <div class="sidebar">
                    <!-- search widget -->
                        <div class="search-widget">
                            <form action="#">
                                <div class="input-group">
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class="mdi mdi-24px mdi-magnify"></i></button>
                                </div>
                            </form>
                        </div>
                    <!-- category widget -->
                        <div class="widget-default">
                            <div class="widget-header">
                                <h6 class="widget-title">Categories</h6>
                            </div>
                            <div class="widget-content">
                                <div class="category-widget">
                                    <ul>
                                        @foreach(getCategories(5) as $category)
                                        <li><a href="{{route('category',['slug'=>$category->slug])}}"><i class="lni lni-chevron-right mr-1"></i>{{$category->name}}</a></li>
                                        
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <!-- popular post -->
                        <div class="widget-default">
                            <div class="widget-header">
                                <h6 class="widget-title">Recent Post</h6>
                            </div>
                            <div class="widget-content">
                                <div class="sidebar-post">
                                    <!-- Recent post item -->
                                      @foreach(recentPosts(5) as $post)
                                        <div class="post-single">
                                            <div class="d-flex align-items-center">
                                                <a href="{{route('page_or_post',['slug'=>$post->slug])}}"><img style="max-width:100px" src="{{getImageUrl($post->thumbnail,100,70,shortenText($post->title))}}" alt="{{$post->title}}"></a>
                                                <p><span>{{ \Carbon\Carbon::parse($post->published_at)->format('d M Y') }}</span> <span>by <a href="{{route('author',['slug'=>$post->author->slug??'admin'])}}">{{$post->author->name??'Admin'}}</a></span></p>
                                            </div>
                                            <a href="{{route('page_or_post',['slug'=>$post->slug])}}" class="post-title">{{$post->title}}</a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    <!-- tags -->
                        <div class="widget-default mb-0">
                            <div class="widget-header">
                                <h6 class="widget-title">Popular Tags</h6>
                            </div>
                            <div class="widget-content">
                                <div class="tags-widget">
                                    @php $tags = explode(',', $post->tags); @endphp
                                    
                                    <ul>
                                        @foreach($tags as $tag)
                                            <li><a href="#">{{ trim($tag) }}</a></li>
                                        @endforeach
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
              
                    </div>
                </div>
                
                <!-- Sidebar END -->
            </div> <!-- Row end -->
        </div>
    </section>
    <!-- =======================
    Main content END -->
    @include('website.includes.featured_section')
@endsection
@section('custom_js')
@endsection
