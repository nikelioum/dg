@extends('layouts.main')
@section('title',$article->title) 
@section('meta_description', $article->short_description)
@section('og_title', $article->title)
@section('og_url', url()->current())
@section('og_image', url('/storage/') . '/' . ltrim($article->main_image, '/'))
@section('og_description', $article->short_description)
@section('content')
<div class="pattern-square"></div>
    <div class="py-xl-9 py-4">
        <div class="container">
            <div class="row">
                  <article class="col-lg-8 offset-lg-2">
                     <h1>{{$article->title}}</h1>
                     <div class="d-flex align-items-center mt-lg-6 mt-4">
                        <div class="me-5">
                           <span class="fs-6">Από</span>
                           <div class="d-flex align-items-center mt-2">
                              <img src="../assets/images/avatar/fallback.jpg" alt="Avatar" class="avatar avatar-xs rounded-circle">
                              <div class="ms-2">
                                 <a href="/" class="text-reset fs-6">DGSolutions</a>
                              </div>
                           </div>
                        </div>
                        <div>
                           <span class="fs-6">Δημοσιεύση</span>
                           <div class="mt-2 text-dark">
                              <span class="fs-6">{{ date('d-m-Y', strtotime($article->created_at)) }}</span>
                           </div>
                        </div>
                     </div>

                     <figure class="my-6">
                        <img src="{{ asset('storage/' . $article->main_image) }}" alt="{{$article->title}}" class="rounded-3 img-fluid w-100">
                     </figure>
                     {!! $article->body!!}
                  </article>
            </div>
        </div>
    </div>
@include('partials.home.cta')
<script>
// Select all images inside .single_service_content
const images = document.querySelectorAll('.single_service_content img');

// Loop through each image and add the img-fluid class
images.forEach(image => {
    image.classList.add('img-fluid');
});
</script>
@endsection
