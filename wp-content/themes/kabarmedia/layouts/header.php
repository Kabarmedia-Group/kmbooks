<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="<?= esc_url(get_template_directory_uri()); ?>/assets/images/favicon.ico">
    <title>Our Titles</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
    <link href="<?= esc_url(get_template_directory_uri()); ?>/bootstrap-5.2.1-dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= esc_url(get_template_directory_uri()); ?>/swiper-8.3.2/swiper-bundle.min.css" />
    <script src="<?= esc_url(get_template_directory_uri()); ?>/swiper-8.3.2/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="<?= esc_url(get_template_directory_uri()); ?>/assets/css/style.css">
    <meta name="robots" content="noindex">
    <meta name="robots" content="nofollow">
    <meta name="robots" content="noindex,nofollow">
</head>

<body>
    <header class="fixed-top">
        <nav class="navbar" id="nav">
            <div class="container px-4 px-md-0">
                <div class="nav-brand z-10">
                    <a href="https://temp-books.kabarmedia.com/">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/kmdarkergrey-1.svg" alt="Kabar Media Logo" class="img-fluid">
                    </a>
                </div>
                <div class="navlink d-none d-lg-flex gap-4">
                    <a href="#" class="text-davys fs-6 fw-semibold">Overview</a>
                    <a href="#new" class="text-davys fs-6 fw-semibold">New</a>
                    <a href="#books" class="text-davys fs-6 fw-semibold">Books</a>
                    <a href="#events" class="text-davys fs-6 fw-semibold">Events</a>
                    <a href="#quotes" class="text-davys fs-6 fw-semibold">Reviews</a>
                    <a href="#contact" class="text-davys fs-6 fw-semibold">Contact</a>
                </div>
                <div class="navlink d-none d-lg-flex gap-4">
                    <a href="https://www.tokopedia.com/kabarmedia" target="_blank"
                        class="btn main-button py-2 px-3 fs-6 mt-auto">Shop
                        Now
                    </a>
                </div>

                <div class="hamburger-menu d-inline-block position-relative d-lg-none" onclick="myFunction(this)">
                    <div class="top"></div>
                    <div class="middle"></div>
                    <div class="bottom"></div>
                </div>
                <div class="mobile-navlink d-lg-none position-absolute bg-lightgrey top-0 w-100 vh-100 pt-5 z-30">
                    <div class="mx-auto text-center mt-2 mobile-nav-brand">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/kmdarkergrey.svg" alt="Kabar Media Logo" class="img-fluid mx-auto">
                    </div>
                    <div class="px-4">
                        <hr>
                    </div>
                    <div class="px-4 d-flex flex-column pt-3">
                        <a onclick="myFunction(this)" href="#" class="mb-3 text-davys fs-3 fw-bold">Overview</a>
                        <a onclick="myFunction(this)" href="#new" class="mb-3 text-davys fs-3 fw-bold">New</a>
                        <a onclick="myFunction(this)" href="#books" class="mb-3 text-davys fs-3 fw-bold">Books</a>
                        <a onclick="myFunction(this)" href="#events" class="mb-3 text-davys fs-3 fw-bold">Events</a>
                        <a onclick="myFunction(this)" href="#quotes" class="mb-3 text-davys fs-3 fw-bold">Reviews</a>
                        <a onclick="myFunction(this)" href="#contact" class="mb-3 text-davys fs-3 fw-bold">Contact</a>
                        <a href="https://www.tokopedia.com/kabarmedia" target="_blank"
                            class="btn main-button mt-auto">Shop
                            Now
                        </a>
                    </div>
                </div>
            </div>
        </nav>
</header>
   