@extends('layouts.main')
@section('title', $portfolio->name . ' | Τα Έργα μας | DGSolutions')
@section('meta_description', $portfolio->short_description)
@section('og_title', $portfolio->name)
@section('og_url', url()->current())
@section('og_image', url('/storage/') . '/' . ltrim($portfolio->main_image, '/'))
@section('og_description', $portfolio->short_description)
@section('content')
    @include('partials.portfolio.single_header')
    <div class="container single_portfolio_content">
        <div class="row">
            <div class="col-md-6">
                <img class="rounded-3 img-fluid" src="{{ asset('storage/' . $portfolio->main_image) }}"
                    alt="{{ $portfolio->name }}">
            </div>
            <div class="col-md-6">
                <div
                    class="border-bottom my-5 pb-5 d-flex flex-column flex-lg-row align-items-center justify-content-lg-between">
                    <div class="me-lg-9">
                        <p class="ms-4 mb-0">
                            <span class="text-dark fw-bold">Επωνυμία: </span>
                            {{ $portfolio->name }}
                        </p>
                    </div>
                </div>
                <div
                    class="border-bottom mb-5 pb-5 d-flex flex-column flex-lg-row align-items-center justify-content-lg-between">
                    <div class="me-lg-9">
                        <p class="ms-4 mb-0">
                            <span class="text-dark fw-bold">Περιγραφή: </span>
                            {{ $portfolio->short_description }}
                        </p>
                    </div>
                </div>
                <div
                    class="border-bottom mb-5 pb-5 d-flex flex-column flex-lg-row align-items-center justify-content-lg-between">
                    <div class="me-lg-9">
                        <p class="ms-4 mb-0">
                            <span class="text-dark fw-bold">Κατηγορία: </span>
                            {{ $portfolio->category }}
                        </p>
                    </div>
                </div>
                <div class="me-lg-9 d-flex flex-column flex-lg-row align-items-center justify-content-lg-between">
                    <a class="ms-4 btn btn-primary" href="{{ $portfolio->url }}" target="_blank">ΔΕΙΤΕ ΤΟ PROJECT</a>
                </div>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-md-12">
                {!! $portfolio->body !!}
            </div>
        </div>
    </div>
    @include('partials.home.cta')
@endsection
