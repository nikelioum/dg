<!doctype html>
<html lang="el">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="assets/libs/swiper/swiper-bundle.min.css" />
    <!-- Favicon icon-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicon/site.html" />
    <link rel="mask-icon" href="assets/images/favicon/block-safari-pinned-tab.svg" color="#8b3dff" />
    <link rel="shortcut icon" href="assets/images/favicon/favicon.ico" />
    <meta name="msapplication-TileColor" content="#8b3dff" />
    <meta name="msapplication-config" content="assets/images/favicon/tile.xml" />

    <!-- Color modes -->
    <script src="../assets/js/vendors/color-modes.js"></script>

    <!-- Libs CSS -->
    <link href="../assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />
    <link href="../assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />

    <!-- Scroll Cue -->
    <link rel="stylesheet" href="../assets/libs/scrollcue/scrollCue.css" />

    <!-- Box icons -->
    <link rel="stylesheet" href="../assets/fonts/css/boxicons.min.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="../assets/css/theme.min.css" />
    <link rel="stylesheet" href="../assets/css/custom.css" />

    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta_description')">

    <!-- Open Graph tags for Facebook -->
    <meta property="og:title" content="@yield('og_title')" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="@yield('og_url')" />
    <meta property="og:image" content="@yield('og_image')" />
    <meta property="og:description" content="@yield('og_description')" />

    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="309dbdf8-3422-46b9-9188-f67fcf6bc7d9" type="text/javascript" async></script>

</head>

<body>
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')

    <!-- Scroll top -->
    <div class="btn-scroll-top">
        <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
            <path
                d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
        </svg>
    </div>
    <!-- Libs JS -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="../assets/libs/headhesive/dist/headhesive.min.js"></script>

    <!-- Theme JS -->
    <script src="../assets/js/theme.min.js"></script>

    <script src="../assets/libs/parallax-js/dist/parallax.min.js"></script>
    <script src="../assets/js/vendors/parallax.js"></script>
    <script src="../assets/libs/rellax/rellax.min.js"></script>
    <script src="../assets/js/vendors/rellax.js"></script>
    <!-- Swiper JS -->
    <script src="../assets/libs/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/js/vendors/swiper.js"></script>
    <script src="../assets/libs/scrollcue/scrollCue.min.js"></script>
    <script src="../assets/js/vendors/scrollcue.js"></script>
    <script src="../assets/js/vendors/pricing.js"></script>
</body>

</html>
