@extends('layouts.main')
@section('title',$service->name)
@section('meta_description', $service->short_description)
@section('og_title', $service->name)
@section('og_url', url()->current())
@section('og_image', url('/storage/') . '/' . ltrim($service->main_image, '/'))
@section('og_description', $service->short_description)
@section('content')
@include('partials.services.single_header')
    <div class="container single_service_content">
        <div class="row">
            <div class="col-md-12">
                {!! $service->body !!}
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
