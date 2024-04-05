<?php
/*
Template Name : Retronesia
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



        <section class="hero pb-5" id="hero">
            <div class="container px-4 px-md-0">
                <div class="row align-items-center gap-xl-4">
                    <div class="col-md-8 mb-3 mb-md-0">
                        <div class="hero-image text-end">
                            <div id="Mobile-carousel" class="carousel slide">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/SampulRetronesia.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/RETRONESIA-TEASER-1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/RETRONESIA-TEASER-2.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/RETRONESIA-TEASER-3.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/RETRONESIA-TEASER-4.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/RETRONESIA-TEASER-5.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/RETRONESIA-TEASER-6.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/RETRONESIA-TEASER-7.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/RETRONESIA-TEASER-8.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#Mobile-carousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#Mobile-carousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="rt-container">
                                <div class="col-rt-12">
                                    <div class="horVerSlider">
                                        <div class="close"></div>
                                            <div class="vertical-wrapper">
                                                <div id="vertical-slider">
                                                <ul>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/SampulRetronesia.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/RETRONESIA-TEASER-1.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/RETRONESIA-TEASER-2.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/RETRONESIA-TEASER-3.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/RETRONESIA-TEASER-4.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/RETRONESIA-TEASER-5.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/RETRONESIA-TEASER-6.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/RETRONESIA-TEASER-7.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/RETRONESIA-TEASER-8.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                </ul>
                                                </div>
                                            </div>
                                            <div class="horizon-wrapper ">
                                                <div class="horizone-nav">
                                                <div class="prev" style="display: none;">
                                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/leftarrow.svg" />
                                                </div>
                                                <div class="next" style="display: block;">
                                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/rightarrow.svg" />
                                                </div>
                                                </div>
                                                <div id="horizon-slider">
                                                <ul style="width: 6000px; height: 600px; left: 0px; top: 0px;">
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/SampulRetronesia.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/RETRONESIA-TEASER-1.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/RETRONESIA-TEASER-2.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/RETRONESIA-TEASER-3.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/RETRONESIA-TEASER-4.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/RETRONESIA-TEASER-5.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/RETRONESIA-TEASER-6.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/RETRONESIA-TEASER-7.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/RETRONESIA-TEASER-8.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                </ul>
                                                </div>
                                                <div class="dots">
                                                    <div class="dotwrap"></div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <img src="./assets/images/RETRONESIA-KABAR-MEDIA-COVER.jpg" alt="Retronesia" class="img-fluid rounded-2"> -->
                        </div>
                    </div>
                    <div class="col-md-4 hero-content">
                        <p class="sub-title text-uppercase fw-bold mb-2">Tariq Khalil </p>
                        <h1 class="main-title small-caps">
                            Retronesia
                        </h1>
                        <p class="description">
                            The Years of Building Dangerously
                        </p>
                        <strong><p class="description">
                            Retronesia: The Years of Building Dangerously is the first must-have guide
                            to Indonesia’s most creative architectural period.
                            <br>
                            <br>
                            <br>
                            <br>
                        </p></strong>

                    </div>
                </div>
                <div class="col-md-12 hero-content1" style="margin-top: -15%;">
                        <p class="sub-title text-uppercase fw-bold mb-2">Tariq Khalil </p>
                        <h1 class="main-title small-caps mb-lg-4">
                            Retronesia
                        </h1>
                        <p class="description">
                            The Years of Building Dangerously
                        </p>
                        <strong><p class="description">
                            Retronesia: The Years of Building Dangerously is the first must-have guide
                            to Indonesia’s most creative architectural period.
					</p></strong>
                        
                       
                    </div>
            </div>

        </section>
        <section class="pb-5 pt-5 bg-white">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-lg-4">
                    <p class="description">
                            In the 1950s and 1960s, professional architects were a rarity in Indonesia,
                            but the talent pool was overflowing with adventurers. At a time when retro style
                            revival has never been more popular, Retronesia cuts through cultural amnesia to
                            celebrate virtually unknown treasures of mid-century Modernism across the archipelago.
                        </p>
                        <p class="description">
                            This style atlas systematically examines the cultural and political forces shaping design
                            during 1950s to mid-1960s Indonesia – providing readers with over
                        </p>
                        

                    </div>
                    <div class="col-lg-4">
                        <p class="description">
                            50 curated destinations.
                            Retronesia has crafted oral histories into bite sized biographies to provide compelling
                            accounts of public life and ambition. Meticulously photographed surviving examples give insight
                            into the worlds of work, rest, and play, from classic public housing, futurist state institutions,
                            once-luxurious townhouses and villas, to the faded glamour of volcanic hill station retreats.
                        </p>
                         <p class="description">
                            Retronesia is a travel guide to Indonesia like no other.
                        </p>
                    </div>
                    <div class="col-lg-4 pt-4">
                        <div class="d-md-flex gap-md-4 mt-4 justify-content-md-center">
                            <a href="https://www.tokopedia.com/kabarmedia/retronesia-the-years-of-building-dangerously?extParam=whid%3D2720499" target="_blank" class="btn second-button-order mt-auto preorder-button">Order Now
                            </a>
                        </div>
                    </div>
                </div>
                </div>
        </section>
            
        <section class="author py-5" id="author">
            <div class="container px-4 px-md-0">
                <div class="row align-items-center gap-xl-4">
                    <div class="col-md-6 order-2 order-lg-1 order-md-1 author-content">
                        <p class="second-title small-caps fw-bold mb-2">The Author</p><br>
                        <h2 class="sub-main-title mb-lg-4">
                            Tariq Khalil
                        </h2>
                        <p class="description"><br>
                            Tariq is an enigma who has led a double life…Slim and handsome with dark Indian features,
                            his strong Scottish accent came out of nowhere and hit me like a truck.” Daniel Ziv.
                        </p>
                        <p class="description">
                            Tariq Khalil lives and works in Indonesia. His photography has always related to buildings
                            and their histories. Over a period of two years, he traced and linked the old and new homes
                            of his family on either side of the India–Pakistan border. ‘Places were Home’ was exhibited
                            as a solo show at Asia House London in 2007 then as a group show with ‘Lines of Control’,
                            which travelled across the UK, Dubai, and Karachi.
                        </p>
                        <p class="description">
                            Retronesia has been featured in Kompas, Indonesia’s national daily newspaper, Indonesia’s national
                            weekly Tempo Magazine, BBC Indonesia, the Indonesian Observer, Vice News, the Sydney Morning Herald,
                            and New Mandala. Tariq is also an occasional columnist for Brava magazine, writing about all things retro.
                        </p>
                    </div>
                    <div class="col-md-6 order-1 order-lg-2 order-md-2 text-end">
                        <div class="author-image mb-3 mb-lg-0">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/Tariq-Khalil_Kabar-Media.jpg" alt="Tariq Khalil" class="img-fluid rounded-2 rounded mx-auto d-block">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="quotes py-5" id="quotes">
            <div class="container px-4 px-md-0 position-relative">
                <div class="row mb-3">
                    <div class="col-lg-6 text-center text-lg-start">
                        <p class="second-title small-caps fw-bold mb-2">Reviews</p>
                        <h2 class="third-title ">
                            What They Say
                        </h2>
                        <p class="description">Reactions to the book.</p>
                    </div>
                    <div class="col-md-6 position-relative d-flex align-items-center">
                        <div id="quotes-next" class="swiper-button-next d-none d-lg-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                            </svg>
                        </div>
                        <div id="quotes-prev" class="swiper-button-prev d-none d-lg-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="swiper position-relative">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="col-lg-12 h-100">
                                <div class="card swiper-card border-0 rounded-0">
                                    <div class="card-body px-4 d-flex flex-column">
                                        <p class="description mt-5 pt-3">
                                            Like biting into a durian: Indonesia’s weird architecture of the ’50s and ’60s.
                                        </p>
                                        <div class="d-flex flex-column mt-auto">
                                            <h5 class="fw-bold mb-0">The Sydney Morning Herald</h5>
                                            <p class="text-davys opacity-50">Newspaper</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card swiper-card border-0 rounded-0">
                                <div class="card-body px-4 d-flex flex-column">
                                    <p class="description mt-5 pt-3">
                                        Khalil’s book Retronesia: The Years of Building Dangerously provides a sort of time
                                        travel to the early years of post-independence Indonesia, where everything, including buildings,
                                        seemed to have boundless possibilities.
                                    </p>
                                    <div class="d-flex flex-column mt-auto">
                                        <h5 class="fw-bold mb-0">Vice News</h5>
                                        <p class="text-davys opacity-50">Media's current affairs channel</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card swiper-card border-0 rounded-0">
                                <div class="card-body px-4 d-flex flex-column">
                                    <p class="description mt-5 pt-3">
                                        Tariq Khalil explores…architectural design that is unique, odd, freewheeling and unregulated.
                                    </p>
                                    <div class="d-flex flex-column mt-auto">
                                        <h5 class="fw-bold mb-0">Tempo</h5>
                                        <p class="text-davys opacity-50">Indonesian magazine</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card swiper-card border-0 rounded-0">
                                <div class="card-body px-4 d-flex flex-column">
                                    <p class="description mt-5 pt-3">
                                        This book is unique because when we read it we understand the world of architecture,
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
                            <div class="card swiper-card border-0 rounded-0">
                                <div class="card-body px-4 d-flex flex-column">
                                    <p class="description mt-5 pt-3">
                                        A sophisticated architectural “coffee table book” that works more like a snapshot
                                        of a larger project to write a social history of an architectural style of Indonesia.
                                    </p>
                                    <div class="d-flex flex-column mt-auto">
                                        <h5 class="fw-bold mb-0">New Mandala</h5>
                                        <!-- <p class="text-davys opacity-50">CO-Editor of Bibliography of Bondage</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-lg-none swiper-pagination" id="quotes-dot" style="bottom:-30px;"></div>
            </div>
        </section>

        <section class="other-books py-5" id="books">
            <div class="container px-4 px-md-0 pb-md-5">
                <div class="text mb-5">
                    <h2 class="second-title small-caps">
                        Other Books
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
                                                <h5 class="fw-semibold mb-0">'.$value->post_title.'</h5>
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

        <section class="events pt-5 position-relative z-10" id="contact">
            <div class="container px-4 px-md-0">
                <div class="bg-blue py-5">
                    <div class="text-center mb-5">
                        <h2 class="second-title small-caps text-light">
                            Events
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-md-4 text-center text-white mb-5 mb-md-0 border-right">
                            <div class="events-icon mx-auto d-flex align-items-center justify-content-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                </svg>
                            </div>
                            <h5 class="fw-bold">Schedule an Event</h5>
                            <a class="events-link" href="mailto:books@kabarmedia.com">books@kabarmedia.com</a>
                        </div>
                        <div class="col-md-4 text-center text-white mb-5 mb-md-0 border-right">
                            <div class="events-icon mx-auto d-flex align-items-center justify-content-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                </svg>
                            </div>
                            <h5 class="fw-bold">Contact Agent</h5>
                            <a class="events-link" href="mailto:sineadruiseal@gmail.com">sineadruiseal@gmail.com</a>
                        </div>
                        <div class="col-md-4 text-center text-white">
                            <div class="events-icon mx-auto d-flex align-items-center justify-content-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-rolodex" viewBox="0 0 16 16">
                                    <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                    <path d="M1 1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h.5a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h.5a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H6.707L6 1.293A1 1 0 0 0 5.293 1H1Zm0 1h4.293L6 2.707A1 1 0 0 0 6.707 3H15v10h-.085a1.5 1.5 0 0 0-2.4-.63C11.885 11.223 10.554 10 8 10c-2.555 0-3.886 1.224-4.514 2.37a1.5 1.5 0 0 0-2.4.63H1V2Z" />
                                </svg>
                            </div>
                            <h5 class="fw-bold">Contact Author</h5>
                            <a class="events-link" href="mailto:books@kabarmedia.com">books@kabarmedia.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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