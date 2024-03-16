@extends('layouts.main')
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
