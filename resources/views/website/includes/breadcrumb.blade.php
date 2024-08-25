<!--  Inner Banner Start -->
<section class="inner-banner">
    <div class="inner-text">
        <h1>{{$title??'-'}}</h1>
        <nav aria-label="breadcrumb" class="sticky-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active">{{$title??'-'}}</li>
            </ol>
        </nav>
    </div>
    <div id="particles-1" class="particles"></div>
</section>
<!-- Inner Banner Ends -->
