@extends('layouts.website_master')
@section('content')
    @include('website.includes.breadcrumb',['title' => $page->title,])
    <section class="section portfolio-section">
        <div class="container">
            {!! $page->body !!}
        </div>
    </section>
@endsection
@section('meta_seo')
    <meta name="keywords" content="{{$page->meta_keywords}}">
    <meta name="author" content="{{env('APP_NAME')}}">
    @if($page->thumbnail)
    <meta property="og:image" content="{{asset('uploads/'.$page->thumbnail)}}">
    @endif
@endsection
