@extends('layouts.main')
@section('title','sadsadas')
@section('meta_description', 'fdgfdgfd')
@section('og_title', 'gfdgfdgdfg')
@section('og_url', url()->current())
@section('og_image', 'dsfdsfs')
@section('og_description', 'sdfsdfds')
@section('content')
@include('partials.services.header')
@include('partials.services.services')
@include('partials.home.cta')
@endsection
