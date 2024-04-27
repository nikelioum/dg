<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=662ca71aa65df900205b9556&product=sticky-share-buttons&source=platform" async="async"></script>
<section class="mb-xl-9 my-4">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-5 col-md-7 col-12">
                <div class="row g-2 g-sm-3 align-items-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <form>
                            <label for="searchInput" class="form-label visually-hidden">Αναζήτηση Άρθρου</label>
                            <input type="search" class="form-control" id="searchInput" placeholder="Κατασκεύη Ιστοσελίδας...">
                        </form>
                    </div>
                    {{-- <div class="col-lg-6 col-md-6 col-12">
                        <label for="categoryList" class="form-label visually-hidden">Search Category</label>
                        <select class="form-select" id="categoryList">
                            <option selected="" disabled="" value="">Select Category</option>
                            <option value="Digital">Digital</option>
                            <option value="Design">Design</option>
                            <option value="Business">Business</option>
                            <option value="Startup">Startup</option>
                        </select>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="row gy-lg-7 gy-5">
        @foreach($articles as $article)
            <article class="col-lg-4 col-md-6 col-12">
                <figure class="mb-4 zoom-img">
                    <a href="/blog/{{$article->slug}}">
                        <img src="{{ asset('storage/' . $article->main_image) }}" alt="{{$article->title}}" class="img-fluid rounded-3">
                    </a>
                </figure>

                    @php
                        $tags = explode(',', $article->tags);
                    @endphp
                    @foreach ($tags as $tag)
                        <a href="#!"
                    class="badge bg-primary-subtle text-primary-emphasis rounded-pill text-uppercase">{{$tag}}</a>
                    @endforeach

                <h3 class="my-3 lh-base h4">
                    <a href="blog-single.html" class="text-reset">{{$article->title}}</a>
                </h3>
                <div class="d-flex align-items-center justify-content-between mb-3 mb-md-0">
                    <div class="d-flex align-items-center">
                        <img src="assets/images/avatar/fallback.jpg" alt="Avatar"
                            class="avatar avatar-xs rounded-circle">
                        <div class="ms-2">
                            <a href="/" class="text-reset fs-6">DGSolutions</a>
                        </div>
                    </div>
                    <div class="ms-3"><span class="fs-6">{{ date('d-m-Y', strtotime($article->created_at)) }}</span></div>
                </div>
            </article>
        @endforeach
        </div>
        <div class="sharethis-sticky-share-buttons"></div>
    </div>
</section>
