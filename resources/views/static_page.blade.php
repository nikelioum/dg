@extends('layouts.main')

@section('title', $static_page->title)
@section('meta_description', $static_page->short_description)
@section('og_title', $static_page->title)
@section('og_url', url()->current())
@section('og_image', 'dsfdsfs')
@section('og_description', $static_page->short_description)

@section('content')
    @include('partials.static_page.header')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {!! $static_page->body !!}
            </div>
        </div>
    </div>
@endsection
