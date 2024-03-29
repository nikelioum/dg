@extends('layouts.main')
@section('title','sadsadas')
@section('meta_description', 'fdgfdgfd')
@section('og_title', 'gfdgfdgdfg')
@section('og_url', url()->current())
@section('og_image', 'dsfdsfs')
@section('og_description', 'sdfsdfds')
@section('content')
<!--404 error start-->
<div class="container d-flex flex-column overflow-hidden">
    <div class="row align-items-center justify-content-center min-vh-100 text-center">
        <div class="col-lg-6 col-12">
            <div class="position-relative mb-7">
                <div class="scene d-none d-lg-block" data-relative-input="true">
                    <div class="position-absolute top-0" data-depth="0.5">
                        <img src="../assets/images/error/stars.svg" alt />
                    </div>
                </div>
                <div class="scene d-none d-lg-block" data-relative-input="true">
                    <div class="position-absolute" data-depth="0.1">
                        <img src="../assets/images/error/rocket.svg" alt />
                    </div>
                </div>
                <div class="scene d-none d-lg-block" data-relative-input="true">
                    <div class="position-absolute top-0 start-50 translate-middle"
                        style="margin-top: -80px; margin-left: -80px" data-depth="0.1">
                        <img src="../assets/images/error/globe.svg" alt />
                    </div>
                </div>
                <div class="scene d-none d-lg-block" data-relative-input="true">
                    <div class="position-absolute start-50" data-depth="0.1">
                        <img src="../assets/images/error/astronut.svg" alt
                            style="top: -110px; position: absolute; bottom: 0" />
                    </div>
                </div>
                <div class="position-relative z-n1">
                    <img src="../assets/images/error/404-number.svg" alt class="img-fluid" />
                </div>
                <div class="scene d-none d-lg-block" data-relative-input="true">
                    <div class="position-absolute start-100 bottom-0" style data-depth="0.1">
                        <img src="../assets/images/error/planet.svg" alt />
                    </div>
                </div>
            </div>

            <h2>Η σελίδα δεν βρέθηκε</h2>
            <p>Η σελίδα που αναζητήσατε δεν υπάρχει</p>

            <a href="/" class="btn btn-primary">ΕΠΙΣΤΡΟΦΗ ΣΤΗΝ ΑΡΧΙΚΗ</a>
        </div>
    </div>
</div>
<div class="position-absolute end-0 bottom-0 m-4 d-none">
    <div class="dropdown">
        <button class="btn btn-light btn-icon rounded-circle d-flex align-items-center" type="button"
            aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <i class="bi theme-icon-active"></i>
            <span class="visually-hidden bs-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bs-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
                    aria-pressed="false">
                    <i class="bi theme-icon bi-sun-fill"></i>
                    <span class="ms-2">Light</span>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
                    aria-pressed="false">
                    <i class="bi theme-icon bi-moon-stars-fill"></i>
                    <span class="ms-2">Dark</span>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto"
                    aria-pressed="true">
                    <i class="bi theme-icon bi-circle-half"></i>
                    <span class="ms-2">Auto</span>
                </button>
            </li>
        </ul>
    </div>
</div>
<!--404 error end-->
@endsection
