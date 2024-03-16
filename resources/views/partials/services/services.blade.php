<!--Service start-->
<section class="mb-xl-9 my-4">
    <div class="container">
        <div class="row g-7">
        @foreach($services as $service)
            <div class="col-sm-6 col-md-6">
                <div class="">
                    <div class="position-relative mb-7">
                        <img src="{{ asset('storage/' . $service->main_image) }}" alt="{{$service->name}}" class="rounded-3 img-fluid">
                        <div class="position-absolute top-md-100 start-md-0 top-100 start-50 translate-middle">
                            <div
                                class="p-3 icon-xl icon-shape rounded bg-primary border border-2 border-white ms-md-10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" class="bi bi-vector-pen text-white-stable" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M10.646.646a.5.5 0 0 1 .708 0l4 4a.5.5 0 0 1 0 .708l-1.902 1.902-.829 3.313a1.5 1.5 0 0 1-1.024 1.073L1.254 14.746 4.358 4.4A1.5 1.5 0 0 1 5.43 3.377l3.313-.828L10.646.646zm-1.8 2.908-3.173.793a.5.5 0 0 0-.358.342l-2.57 8.565 8.567-2.57a.5.5 0 0 0 .34-.357l.794-3.174-3.6-3.6z">
                                    </path>
                                    <path fill-rule="evenodd"
                                        d="M2.832 13.228 8 9a1 1 0 1 0-1-1l-4.228 5.168-.026.086.086-.026z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-lg-4">
                    <h2 class="mb-3 h3">{{$service->name}}</h2>
                    <p class="mb-5">
                        {{$service->short_description}}
                    </p>
                    @php
                        $tags = explode(',', $service->tags);
                    @endphp
                    <div class="d-flex flex-wrap gap-2 mb-4">
                    @foreach ($tags as $tag)
                        <span class="badge bg-primary-subtle text-primary-emphasis rounded-pill p-2 px-3">{{$tag}}</span>
                    @endforeach
                    </div>

                    <a href="/service/{{$service->slug}}" class="icon-link icon-link-hover btn btn-primary">
                        Περισσότερα
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                            class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>
<!--Service end-->
