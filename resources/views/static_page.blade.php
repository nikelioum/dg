@extends('layouts.main')
@section('title','sadsadas')
@section('meta_description', 'fdgfdgfd')
@section('og_title', 'gfdgfdgdfg')
@section('og_url', url()->current())
@section('og_image', 'dsfdsfs')
@section('og_description', 'sdfsdfds')
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
