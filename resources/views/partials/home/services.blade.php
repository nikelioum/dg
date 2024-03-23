<!--My skill start-->
<section class="my-xl-10 my-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-8 col-12">
                <div class="mb-6 mb-lg-0">
                    <small class="text-uppercase fw-bold ls-md text-body-tertiary">Ολοκληρωμένες Λύσεις</small>

                    <h2 class="my-3">
                        Υπηρεσίες ανάπτυξης
                        <span class="text-primary">Ιστοσελίδων - Eshop - Applications</span>
                    </h2>
                    <p class="mb-5">Η ενότητα των υπηρεσιών μας αποτελεί τον πυρήνα της προσφοράς μας. Στον κόσμο του
                        διαδικτύου, προσφέρουμε ολοκληρωμένες λύσεις ανάπτυξης ιστοσελίδων, εφαρμογών και e-commerce,
                        εστιάζοντας στην προσαρμοσμένη σχεδίαση και την αποτελεσματική λειτουργικότητα.</p>
                    <a href="/services" class="btn btn-primary">ΔΕΙΤΕ ΟΛΕΣ ΤΙΣ ΥΠΗΡΕΣΙΕΣ ΜΑΣ</a>
                </div>
            </div>
            <div class="col-lg-7 offset-lg-1 col-12">
                <div class="row">
                    @foreach ($services->chunk(2) as $chunk)
                        @foreach ($chunk as $service)
                            <div class="col-md-6">
                                <div class="card bg-primary bg-opacity-10 border-0 mb-5 shadow-sm">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <h3>{{ $service->name }}</h3>
                                            <p class="mb-0">{{ $service->short_description }}</p>
                                        </div>
                                        <a href="/service/{{ $service->slug }}"
                                            class="icon-link icon-link-hover link-dark">
                                            Περισσότερα
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</section>
<!--My skill end-->
