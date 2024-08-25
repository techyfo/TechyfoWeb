@if(getFeaturedPosts(7)->count()>1)
<section class="pt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Title -->
                <div class="mb-4 d-md-flex justify-content-between align-items-center">
                    <h2 class="m-0"><i class="bi bi-megaphone"></i> Featured Posts</h2>
                </div>
                <div class="tiny-slider arrow-hover arrow-blur arrow-dark arrow-round">
                    <div class="tiny-slider-inner"
                         data-autoplay="true"
                         data-hoverpause="true"
                         data-gutter="24"
                         data-arrow="true"
                         data-dots="false"
                         data-items-xl="4"
                         data-items-md="3"
                         data-items-sm="2"
                         data-items-xs="1">
                        @foreach(getFeaturedPosts(7) as $post)
                            @include('website.includes.slider_post_item',['post' => $post,'category'=>$post->categories->first()])
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif