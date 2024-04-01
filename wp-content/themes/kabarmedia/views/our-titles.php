<?php
/*
Template Name : Our Titles
*/
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
<?php
$post_data = get_post();

if (isset($post_data)) {
    foreach ($post_data as $key => $value) {
        if ($post_data->post_name == 'our-titles') {
            $contents = $post_data->post_content;
        } else {
            $contents = '';
        }
    }
}

$getBooks = getBooks()['books'];

?>
<?php echo $contents; ?>
<style>
    .carousel-inner,
.carousel-item {
    width: 100%;
}
.btn.main-button{
    padding: 12px 50px;
}
.row{
}
.carousel-caption{
    left: 10%;
    position: absolute;
  top: 50%;
  transform: translateY(-50%);
}
    @media (min-width: 768px) and (max-width: 992px){
        .buku, .buku-banda{
             padding-top:27%;
            }
		.buku-retro{
			padding-top: 27%;
		}
    }

    @media (min-width: 1024px) and (max-width: 1199px){
        .buku,.buku-banda{
        padding-top:27%;
        }
        .buku-retro{
            padding-top: 27%;
        }
    }
    @media (min-width: 1200px) {
         .buku, .buku-retro{
        padding-top:21%;
        }
        .buku-banda{
         padding-top:21%   
        }
    }
</style>

<!-- <section class="hero d-flex align-items-center position-relative pb-md-5 pb-lg-0" id="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-3 mb-md- px-4 px-md-0">
                <div class="hero-content">
                    <h1 class="main-title mb-lg-4">
                        We are a Publishing & Communication Company Based in Indonesia
                    </h1>
                    <p class="description fw-semibold mb-5 pe-5">
                        Founded in 2005 with the vision of creating<br class="d-none d-lg-block">
                        high-quality media to share engaging stories of <br class="d-none d-lg-block">
                        people and places.
                    </p>
                    <a href="#" type="button" class="btn main-button">
                        Learn More
                    </a>
                </div>
            </div>
            <div class="col-md-6 px-0 ps-lg-4">
                <div class="hero-image text-center">
                    <picture>
                        <source media="(min-width:900px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/all-book-1.png">
                        <source media="(min-width:768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/all-book-1.png">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/all-book-mobile.png" alt="all-book" class="w-100">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</section> -->



<section class="packages py-5" id="books">
        <div class="container px-4 px-md-0 pb-md-5">
            <div class="mb-5">
                <h2 class="third-title small-caps">
                   Our Books
                </h2>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="my-slider">
                        <?php 
                        foreach ($getBooks as $value) {
                            echo '<div>
                                    <div class="card border-0 overflow-hidden bg-transparent">
                                                        <img src="'.get_the_post_thumbnail_url($value->ID).'"
                                        alt="brandon" class="img-fluid w-100 rounded-bottom" />
                                        <div class="mt-2">
                                            <h5 class="second-title fw-semibold mb-0">'.$value->post_title.'</h5>
                                            <h6 class="text-black-50 fw-medium">'.$value->post_content.'</h>
                                        </div>
                                    </div>
                                </div>';
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
</section>


<section class="events bg-lightgrey pb-md-0" id="events">
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/event-indiebook.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block position-absolute" style="text-align:left;">
                    <div class="row">
                        <div class="col-md-8 px-4">
                            <h3 class="third-title fw-bold mb-2 small-caps">Events</h3>
                            <h2 class="main-title mb-lg-4">
                                Indie Book Day
                                <br>
                                2024
                            </h2>
                            <p class="description fw-normal mb-5 pe-md-5 text-white">
                            Embrace the Spirit of IndieBookDay: Unveiling <br>Exclusive Tokopedia Deals! 
                            Delight in a 33% <br>Discount on Our Diverse Selection of Books.<br>
                            Explore Thrilling Tales, Inspiring Stories, and <br>Thought-Provoking Literature Awaits!
                            </p>
                            <a href="https://indiebookday.kabarmedia.com/" type="button" class="btn main-button">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/event-penjor.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block position-absolute" style="text-align:left;">
                    <div class="row">
                        <div class="col-md-8 px-4">
                            <h3 class="third-title fw-bold mb-2 small-caps">Events</h3>
                            <h2 class="main-title">
                            Meet the Author
                            </h2>
                            <p class="third-title fw-semibold">at Periplus Artasedana Sanur</p>
                            <p class="description fw-normal pe-md-5 text-white">
                            A discussion about Bali's Iconic Penjor with author Susan Ruddy 
                            <br>Friday, 22nd March 2024
                            <br>14.00 - 16.00 WITA
                            </p>
                            <a href="https://www.instagram.com/kabarmediabooks/" type="button" class="btn main-button">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/event-ubud.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block position-absolute" style="text-align:left;">
                    <div class="row">
                        <div class="col-md-8  px-4">
                            <h3 class="third-title fw-bold mb-2 small-caps">Events</h3>
                            <h2 class="main-title mb-lg-4">
                                Ubud Writers & Readers Festival 2024
                            </h2>
                            <p class="description fw-normal mb-5 pe-md-5 text-white">
                                From literary lunch to remember to intimate<br>
                                cocktail feasts with Festival headliners &#8211; there is <br>
                                plenty to devour in Ubud&apos;s in-places at one of our <br> Special Events.
                            </p>
                            <a href="https://www.ubudwritersfestival.com/" type="button" class="btn main-button">
                                Learn More
                            </a>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>


<section class="events-mobile pb-5 pb-md-0" id="events">
    <div class="container ">
        <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row align-items-center">
                    <div class="col-md-6 px-4 order-2 md-order-1">
                        <p class="sub-title text-uppercase fw-bold mb-2 mt-4">Events</p>
                        <h2 class="main-title mb-lg-4">
                            Indie Book Day 2024
                        </h2>
                        <p class="description fw-semibold mb-5 pe-md-5">
                        Indiebookday diadakan pertama kali pada tahun 2013 dan telah menarik perhatian 
                        besar di berbagai negara berbahasa Jerman. Pada tahun 2014 - 2023, pembaca, 
                        penerbit, dan toko buku di Inggris, Belanda, Italia, Portugal, bahkan Brasil 
                        telah ikut turut serta. Di tahun 2024, inilah saatnya buat Indonesia untuk ikut!
                        </p>
                        <a href="https://www.ubudwritersfestival.com/" type="button" class="btn main-button">
                            Learn More
                        </a>
                    </div>
                    <div class="col-md-6 px-0 ps-md-2 order-1 order-md-2">
                        <picture>
                            <source media="(min-width:900px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/event-indiebook-desktop.png">
                            <source media="(min-width:768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/event-background-tablet.png">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/event-indiebook-mobile.png" alt="all-book" class="w-100">
                        </picture>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row align-items-center">
                    <div class="col-md-6 px-4 order-2 md-order-1">
                        <p class="sub-title text-uppercase fw-bold mb-2 mt-4">Events</p>
                        <h2 class="main-title mb-lg-4">
                            Meet the Author at Periplus Artasedana Sanur
                        </h2>
                        <p class="description fw-semibold mb-5 pe-md-5">
                        A discussion about Bali's Iconic Penjor with author Susan Ruddy.
                        </p>
                        <a href="https://www.ubudwritersfestival.com/" type="button" class="btn main-button">
                            Learn More
                        </a>
                    </div>
                    <div class="col-md-6 px-0 ps-md-2 order-1 order-md-2">
                        <picture>
                            <source media="(min-width:900px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/event-penjor-desktop.png">
                            <source media="(min-width:768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/event-background-tablet.png">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/event-penjor-mobile.png" alt="all-book" class="w-100">
                        </picture>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row align-items-center">
                    <div class="col-md-6 px-4 order-2 md-order-1">
                        <p class="sub-title text-uppercase fw-bold mb-2 mt-4">Events</p>
                        <h2 class="main-title mb-lg-4">
                            Ubud Writers & Readers Festival
                        </h2>
                        <p class="description fw-semibold mb-5 pe-md-5">
                        From literary lunch to remember to intimate cocktail feasts with Festival 
                        headliners – there is plenty to devour in Ubud’s in-places at one of our Special Events.
                        </p>
                        <a href="https://www.ubudwritersfestival.com/" type="button" class="btn main-button">
                            Learn More
                        </a>
                    </div>
                    <div class="col-md-6 px-0 ps-md-2 order-1 order-md-2">
                        <picture>
                            <source media="(min-width:900px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/event-background-desktop.png">
                            <source media="(min-width:768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/event-background-tablet.png">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/event-ubud-mobile.png" alt="all-book" class="w-100">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </div>
</section>


<section class="quotes" id="quotes">
    <div class="container px-4 px-md-0 position-relative">
        <div class="row mb-3">
            <div class="col-lg-6 text-center text-lg-start">
                <h2 class="third-title small-caps py-5">
                    Our Customer
                </h2>
            </div>
            <div class="col-md-6 position-relative d-flex align-items-center">
                <div id="quotes-next" class="swiper-button-next d-none d-lg-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                    </svg>
                </div>
                <div id="quotes-prev" class="swiper-button-prev d-none d-lg-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="swiper position-relative">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card swiper-card bg-darkgrey border-0 rounded-0">
                        <div class="card-body px-4 d-flex flex-column content-all">
                            <p class="description fw-normal mt-5 pt-3">
                                This book is unique because when we read it we understand the world of architecture, 
                                anthropology, archeology and history all at once...

                            </p>
                            <div class="d-flex flex-column mt-auto">
                                <h5 class="fw-bold mb-0">Kompas</h5>
                                <p class="text-davys opacity-50">Newspaper</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card swiper-card bg-darkgrey border-0 rounded-0">
                        <div class="card-body px-4 d-flex flex-column content-all">
                            <p class="description fw-normal mt-5 pt-3">
                                A sophisticated architectural "coffea table book" that works more lile a snapshot of a 
                                large project to write a social history of an architectural style of Indonesia.

                            </p>
                            <div class="d-flex flex-column mt-auto">
                                <h5 class="fw-bold mb-0">New Mandala</h5>
                                <p class="text-davys opacity-50">CO-Editor of Bibliography of Bondage</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card swiper-card bg-darkgrey border-0 rounded-0">
                        <div class="card-body px-4 d-flex flex-column content-all">
                            <p class="description fw-normal mt-5 pt-3">
                                Like biting into a durian: Indonesia&apos;s weird architecture of the &apos;50s
                                and
                                &apos;60s.
                            </p>
                            <div class="d-flex flex-column mt-auto">
                                <h5 class="fw-bold mb-0">The Sydney orning Herald</h5>
                                <p class="text-davys opacity-50">Newspaper</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card swiper-card bg-darkgrey border-0 rounded-0">
                        <div class="card-body px-4 d-flex flex-column content-all">
                            <p class="description fw-normal mt-5 pt-3">
                                Khalil&apos;s book Retronesia: The Years of Building Dangerously provides a sort
                                of
                                time
                                travel to the early years of post-independence Indonesia, where everything,
                                including buildings,
                                seemed to have boundless possibilities.
                            </p>
                            <div class="d-flex flex-column mt-auto">
                                <h5 class="fw-bold mb-0">Vice News</h5>
                                <p class="text-davys opacity-50">The Lontar Foundation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card swiper-card bg-darkgrey border-0 rounded-0">
                        <div class="card-body px-4 d-flex flex-column content-all">
                            <p class="description fw-normal mt-5 pt-3">
                                Tariq Khalil explores…architectural design that is unique, odd, freewheeling and
                                unregulated.
                            </p>
                            <div class="d-flex flex-column mt-auto">
                                <h5 class="fw-bold mb-0">Tempo</h5>
                                <p class="text-davys opacity-50">Indonesian magazine</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card swiper-card bg-darkgrey border-0 rounded-0">
                        <div class="card-body px-4 d-flex flex-column content-all">
                            <p class="description fw-normal mt-5 pt-3">
                                This book is unique because when we read it we understand the world of
                                architecture,
                                anthropology, archeology and history all at once…
                            </p>
                            <div class="d-flex flex-column mt-auto">
                                <h5 class="fw-bold mb-0">Kompas</h5>
                                <p class="text-davys opacity-50">Newspaper</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card swiper-card bg-darkgrey border-0 rounded-0">
                        <div class="card-body px-4 d-flex flex-column content-all">
                            <p class="description fw-normal mt-5 pt-3">
                                A sophisticated architectural “coffee table book” that works more like a
                                snapshot
                                of a larger project to write a social history of an architectural style of
                                Indonesia.
                            </p>
                            <div class="d-flex flex-column mt-auto">
                                <h5 class="fw-bold mb-0">New Mandala</h5>
                                <p class="text-davys opacity-50">CO-Editor of Bibliography of Bondage</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-lg-none swiper-pagination" id="quotes-dot" style="bottom:-30px;"></div>
    </div>
</section>

<section class="contact py-5 position-relative" id="contact">
    <div class="container bg-blue px-4 px-md-0 text-center">
        <div class="contact-content">
            <h2 class="third-title small-caps text-light mb-4">
                Stay in Touch
            </h2>
            <p class="description text-white align-items-center justify-content-center mb-5">Sign up for occasional
                bulletins from Kabar Media with news and insights
                into the <br>world of publishing and communications. You can unsubscribe at any time.</p>
            <div class="row">
                <div class="col-md-8 col-lg-9 mx-auto">
                <div id="successForm" class="alert alert-success d-none" role="alert">
                        Thank you for contacting us, we will contact you soon!
                    </div>
                    <form name="contactForm" id="contactForm" method="post" action="">
                        <div class="mb-3">
                            <input type="text" name="name" id="name" class="form-control py-3 px-3 rounded-1"
                                placeholder="Enter your name" />
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" id="email" class="form-control py-3 px-3 rounded-1"
                                placeholder="Enter your email address" />
                        </div>
                        <div class="mb-4">
                            <textarea name="message" id="message" rows="8" class="form-control rounded-1 px-3"
                                placeholder="Enter your message"></textarea>
                        </div>
                        <button type="submit" id="submit" class="btn third-button">Send Message</button>
                    </form>
                    <!-- <form name="subscribeForm" class="d-flex gap-3">
                        <input type="email" name="email" id="email" class="form-control rounded-0 border-white"
                            placeholder="Enter email address">
                        <button type="submit" class="btn third-button">Subscribe</button>
                    </form> -->
                </div>
            </div>
        </div>
    </div>
</section>
<script src="<?= esc_url(get_template_directory_uri()); ?>/assets/js/subscribes.js"></script>
<script>
var slider = tns({
    container: ".my-slider",
    swipeAngle: false,
    speed: 400,
    items: 1,
    gutter: 16,
    controls: false,
    loop: false,
	mouseDrag: true,
    slideBy: "page",
    nav: false,
    responsive: {
        640: {
            gutter: 20,
            items: 2.3,
        },
        700: {
            gutter: 30,
        },
        900: {
            items: 3,
        },
    },
});
</script>
<script>
    const scriptURL ='https://script.google.com/macros/s/AKfycbzRMmJ0JZU9drOtOkaEPMp5XYDw30hQsPksDNgb1T2I_U-si7Zb8wi-o07IPFuTMFNYgw/exec';
    const form = document.forms['contactForm']

    form.addEventListener('submit', e =>{
        e.preventDefault()
        fetch(scriptURL,{ method: 'POST', body: new FormData(form)})
            .then(response => console.log('success!', response))
            .catch(error => console.error('error!', error.message))
            form.reset();   
    })
     
</script>