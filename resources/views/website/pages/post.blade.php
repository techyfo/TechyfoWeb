@extends('layouts.website_master')

@section('custom_css')

@endsection
@section('content')

@include('website.includes.breadcrumb',['title' => $post->title,])
<style>
    #post-body p,#post-body h1, #post-body h2, #post-body h3, #post-body h4,#post-body h5,#post-body h6,#post-body ul{
        margin-top:15px!important;
    }
    #post-body ul{
        list-style-type: circle;
        padding:20px!important;
    }
    #post-body ol{
        list-style-type: lower-alpha;
        padding:20px!important;
    }
</style>
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- Main Content START -->
                <div class="col-md-8" id="post-body">
                    <a href="{{route('category',['slug'=>$post->categories->first()->slug??'all'])}}" class="badge bg-danger bg-opacity-10 text-white mb-2">{{$post->categories->first()->name??'Unknown'}}</a>
                    <span class="ms-2 small">Updated: {{$post->updated_at->format('d M Y')}}</span>
                    <h1 class="display-5">{{$post->title}}</h1>

                    <div class="ratio ratio-16x9 overflow-hidden rounded my-4">
                        <!-- HTML video START -->
                        @if($post->type == 'video')
                            <div class="player-wrapper rounded overflow-hidden">
                                <div tabindex="0" class="plyr plyr--full-ui plyr--video plyr--html5 plyr--fullscreen-enabled plyr--paused plyr--stopped plyr__poster-enabled"><div class="plyr__controls"><button class="plyr__controls__item plyr__control" type="button" data-plyr="play" aria-label="Play"><svg class="icon--pressed" aria-hidden="true" focusable="false"><use xlink:href="#plyr-pause"></use></svg><svg class="icon--not-pressed" aria-hidden="true" focusable="false"><use xlink:href="#plyr-play"></use></svg><span class="label--pressed plyr__sr-only">Pause</span><span class="label--not-pressed plyr__sr-only">Play</span></button><div class="plyr__controls__item plyr__progress__container"><div class="plyr__progress"><input data-plyr="seek" type="range" min="0" max="100" step="0.01" value="0" autocomplete="off" role="slider" aria-label="Seek" aria-valuemin="0" aria-valuemax="0" aria-valuenow="0" id="plyr-seek-3029" aria-valuetext="00:00 of 00:00" style="--value: 0%;"><progress class="plyr__progress__buffer" min="0" max="100" value="0" role="progressbar" aria-hidden="true">% buffered</progress><span class="plyr__tooltip">00:00</span></div></div><div class="plyr__controls__item plyr__time--current plyr__time" aria-label="Current time">00:00</div><div class="plyr__controls__item plyr__volume"><button type="button" class="plyr__control" data-plyr="mute"><svg class="icon--pressed" aria-hidden="true" focusable="false"><use xlink:href="#plyr-muted"></use></svg><svg class="icon--not-pressed" aria-hidden="true" focusable="false"><use xlink:href="#plyr-volume"></use></svg><span class="label--pressed plyr__sr-only">Unmute</span><span class="label--not-pressed plyr__sr-only">Mute</span></button><input data-plyr="volume" type="range" min="0" max="1" step="0.05" value="1" autocomplete="off" role="slider" aria-label="Volume" aria-valuemin="0" aria-valuemax="100" aria-valuenow="100" id="plyr-volume-3029" aria-valuetext="100.0%" style="--value: 100%;"></div><button class="plyr__controls__item plyr__control" type="button" data-plyr="captions"><svg class="icon--pressed" aria-hidden="true" focusable="false"><use xlink:href="#plyr-captions-on"></use></svg><svg class="icon--not-pressed" aria-hidden="true" focusable="false"><use xlink:href="#plyr-captions-off"></use></svg><span class="label--pressed plyr__sr-only">Disable captions</span><span class="label--not-pressed plyr__sr-only">Enable captions</span></button><div class="plyr__controls__item plyr__menu"><button aria-haspopup="true" aria-controls="plyr-settings-3029" aria-expanded="false" type="button" class="plyr__control" data-plyr="settings"><svg aria-hidden="true" focusable="false"><use xlink:href="#plyr-settings"></use></svg><span class="plyr__sr-only">Settings</span></button><div class="plyr__menu__container" id="plyr-settings-3029" hidden=""><div><div id="plyr-settings-3029-home"><div role="menu"><button data-plyr="settings" type="button" class="plyr__control plyr__control--forward" role="menuitem" aria-haspopup="true" hidden=""><span>Captions<span class="plyr__menu__value">Disabled</span></span></button><button data-plyr="settings" type="button" class="plyr__control plyr__control--forward" role="menuitem" aria-haspopup="true" hidden=""><span>Quality<span class="plyr__menu__value">undefined</span></span></button><button data-plyr="settings" type="button" class="plyr__control plyr__control--forward" role="menuitem" aria-haspopup="true"><span>Speed<span class="plyr__menu__value">Normal</span></span></button></div></div><div id="plyr-settings-3029-captions" hidden=""><button type="button" class="plyr__control plyr__control--back"><span aria-hidden="true">Captions</span><span class="plyr__sr-only">Go back to previous menu</span></button><div role="menu"></div></div><div id="plyr-settings-3029-quality" hidden=""><button type="button" class="plyr__control plyr__control--back"><span aria-hidden="true">Quality</span><span class="plyr__sr-only">Go back to previous menu</span></button><div role="menu"></div></div><div id="plyr-settings-3029-speed" hidden=""><button type="button" class="plyr__control plyr__control--back"><span aria-hidden="true">Speed</span><span class="plyr__sr-only">Go back to previous menu</span></button><div role="menu"><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="0.5"><span>0.5×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="0.75"><span>0.75×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="true" value="1"><span>Normal</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1.25"><span>1.25×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1.5"><span>1.5×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1.75"><span>1.75×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="2"><span>2×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="4"><span>4×</span></button></div></div></div></div></div><button class="plyr__controls__item plyr__control" type="button" data-plyr="fullscreen"><svg class="icon--pressed" aria-hidden="true" focusable="false"><use xlink:href="#plyr-exit-fullscreen"></use></svg><svg class="icon--not-pressed" aria-hidden="true" focusable="false"><use xlink:href="#plyr-enter-fullscreen"></use></svg><span class="label--pressed plyr__sr-only">Exit fullscreen</span><span class="label--not-pressed plyr__sr-only">Enter fullscreen</span></button></div><div class="plyr__video-wrapper"><video class="player-html" crossorigin="anonymous" poster="assets/images/videos/poster.jpg" data-poster="assets/images/videos/poster.jpg">
                                            <source src="assets/images/videos/video.mp4" type="video/mp4">
                                        </video>
                                        <div class="plyr__poster" style="background-image: url({{getImageUrl($post->thumbnail??null)}});">

                                        </div>
                                    </div>
                                    <div class="plyr__captions"></div><button type="button" class="plyr__control plyr__control--overlaid" data-plyr="play" aria-label="Play">
                                        <svg aria-hidden="true" focusable="false">
                                            <use xlink:href="#plyr-play"></use>
                                        </svg>
                                        <span class="plyr__sr-only">Play</span>
                                    </button>
                                </div>
                            </div>
                        @else
                        <img src="{{getImageUrl($post->thumbnail??'null')}}" alt="" class="img-fluid">
                        @endif

                    </div>
                    @if(generateTableOfContents($post->body))
                    <div class="table-of-contents card shadow my-2">
                        <div class="card-header" >
                            <h2>Table of Contents</h2>
                        </div>
                        <div class="card-body">
                            <ul class="">
                                {!! generateTableOfContents($post->body) !!}
                            </ul>
                        </div>
                    </div>
                    @endif
                    
                    {!! addIdsToHeadings($post->body) !!}
                    {{--  <livewire:comments-section :postId="$post->id" /> --}}
                </div>
                <!-- Main Content END -->
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
                
                    </div>
                </div>
                
                <!-- Sidebar END -->
            </div>
        </div>
    </section>
@endsection
@section('custom_js')
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            // Get all links in the document
            var links = document.querySelectorAll('a');

            // Smooth scroll to top with space for all links
            links.forEach(function(link) {
                link.addEventListener('click', function(e) {
                    // Check if the href attribute starts with "#"
                    if (link.getAttribute('href').startsWith('#')) {
                        e.preventDefault();
                        var scrollAmount = 100; // Adjust the amount of space as needed
                        var scrollToPosition = window.scrollY - scrollAmount;
                        var targetId = link.getAttribute('href').substring(1); // Remove the "#" from the href
                        var targetElement = document.getElementById(targetId);
                        if (targetElement) {
                            var targetPosition = targetElement.getBoundingClientRect().top + window.scrollY;
                            window.scrollTo({
                                top: targetPosition - scrollAmount,
                                behavior: 'smooth'
                            });
                        }
                    }
                });
            });
        });
    </script>
@endsection
