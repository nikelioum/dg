<!--Project we done start-->
<section class="my-xl-9 my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="text-center mb-xl-7 mb-5">
                    <small class="text-uppercase ls-md fw-semibold">Projects</small>
                    <h2 class="my-3">Πρόσφατα Έργα</h2>
                    <p class="mb-0">Ενδεικτικές Ιστοσελίδες - Eshop που έχουμε σχεδιάσει </p>
                </div>
            </div>
        </div>
        <div class="table-responsive-lg">
            <div class="row flex-nowrap pb-4 pb-lg-0 me-5 me-lg-0">
                @foreach($portfolios as $portfolio)
                <div class="col-lg-4 col-md-6 col-12">
                    <div>
                        <figure class="lift position-relative btn-arrow mb-4">
                            <a href="/our-work/{{$portfolio->slug}}">
                                <img src="{{ asset('storage/' . $portfolio->main_image) }}" alt="{{$portfolio->name}}"
                                    class="img-fluid rounded-3" />

                                <div class="icon-shape icon-lg bg-white rounded-circle icon-arrow shadow-lg">
                                    <i class="bi bi-arrow-up-right"></i>
                                </div>
                            </a>
                        </figure>

                        <h2 class="lh-base h4">
                            <a href="/our-work/{{$portfolio->slug}}" class="text-reset">{{$portfolio->name}}</a>
                        </h2>
                        <p class="mb-0 text-body-tertiary fw-medium">
                            {{$portfolio->short_description}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center my-5">
                    <a href="/our-work" class="btn btn-primary">ΔΕΙΤΕ ΟΛΑ ΤΑ PROJECTS</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Project we done end-->
