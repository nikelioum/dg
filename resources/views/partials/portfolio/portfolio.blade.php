<section class="gallery mb-xl-9 my-4">
    <div class="container">
        <div class="row">
            <div class="mb-4">
                <ul class="nav nav-lb-tab gallery-filter">
                    <li class="nav-item">
                        <a class="nav-link filter-item active" data-filter="all" aria-current="page" href="#">Όλες οι κατηγορίες</a>
                    </li>
                    @foreach($categories as $category)
                    <li class="nav-item">
                        <a class="nav-link filter-item" href="#" data-filter="{{$category}}">{{$category}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            @foreach($portfolios as $portfolio)
            @php
                $categories = explode(',', $portfolio->category);
                $categories = array_map('trim', $categories);
                $formattedCategories = implode(' ', $categories);
            @endphp
            <div class="gallery-item {{ $formattedCategories }} show">
                <figure class="lift position-relative btn-arrow mb-5">
                    <a href="/our-work/{{$portfolio->slug}}" class="gallery-item-inner">
                        <img src="{{ asset('storage/' . $portfolio->main_image) }}" alt="{{$portfolio->name}}"
                            class="img-fluid rounded-3 portfolio-main-image">
                        <div class="icon-shape icon-lg bg-white rounded-circle icon-arrow shadow-lg">
                            <i class="bi bi-arrow-up-right"></i>
                        </div>
                    </a>
                </figure>

                <div class="mb-5">
                    <h2 class="lh-base h4">
                        <a href="/our-work/{{$portfolio->slug}}" class="text-reset">{{$portfolio->name}}</a>
                    </h2>
                    <p class="mb-0">{{$portfolio->short_description}}
                    </p>
                </div>

                <a href="/our-work/{{$portfolio->slug}}" class="btn btn-outline-dark">
                    ΔΕΙΤΕ ΤΟ PROJECT
                    <span class="ms-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-up-right-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M0 8a8 8 0 1 0 16 0A8 8 0 0 0 0 8zm5.904 2.803a.5.5 0 1 1-.707-.707L9.293 6H6.525a.5.5 0 1 1 0-1H10.5a.5.5 0 0 1 .5.5v3.975a.5.5 0 0 1-1 0V6.707l-4.096 4.096z">
                            </path>
                        </svg>
                    </span>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<script src="assets/js/vendors/filter-gallery.js"></script>
