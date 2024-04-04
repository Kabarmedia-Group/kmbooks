<?php
/*
Template Name : Buku Kuku-Ku
*/
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
<?php
$post_data = get_post();

if (isset($post_data)) {
    foreach ($post_data as $key => $value) {
        if ($post_data->post_name == 'buku-kuku-ku') {
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
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/Buku-Kuku-Ku-Teaser1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/Buku-Kuku-Ku-Teaser2.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/Buku-Kuku-Ku-Teaser3.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/Buku-Kuku-Ku-Teaser4.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/Buku-Kuku-Ku-Teaser5.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/Buku-Kuku-Ku-Teaser6.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/Buku-Kuku-Ku-Teaser7.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/Buku-Kuku-Ku-Teaser8.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/Buku-Kuku-Ku-Teaser9.jpg" class="d-block w-100" alt="...">
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
                                    <div class="horVerSlider"  data-desktop="800" data-tabportrait="600" data-tablandscape="600" data-mobilelarge="375" data-mobilelandscape="500" data-mobileportrait="375">
                                        <div class="close"></div>
                                            <div class="vertical-wrapper">
                                                <div id="vertical-slider">
                                                <ul>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/Buku-Kuku-Ku-Teaser1.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/Buku-Kuku-Ku-Teaser2.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/Buku-Kuku-Ku-Teaser3.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/Buku-Kuku-Ku-Teaser4.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/Buku-Kuku-Ku-Teaser5.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/Buku-Kuku-Ku-Teaser6.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/Buku-Kuku-Ku-Teaser7.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/Buku-Kuku-Ku-Teaser8.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/Buku-Kuku-Ku-Teaser9.jpg"
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
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/Buku-Kuku-Ku-Teaser1.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/Buku-Kuku-Ku-Teaser2.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/Buku-Kuku-Ku-Teaser3.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/Buku-Kuku-Ku-Teaser4.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/Buku-Kuku-Ku-Teaser5.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/Buku-Kuku-Ku-Teaser6.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/Buku-Kuku-Ku-Teaser7.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/Buku-Kuku-Ku-Teaser8.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?= esc_url(get_template_directory_uri()); ?>/assets/images/Buku-Kuku-Ku-Teaser9.jpg"
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
                        </div>
                    </div>
                    <div class="col-md-4 hero-content">
                        <p class="sub-title text-uppercase fw-bold mb-2">Cipta Croft-Cusworth</p>
                        <h1 class="main-title small-caps mb-lg-4">
                            Buku 
                            <br>Kuku-ku 
                        </h1>
                        <p class="description">
                        Graphic Memoir
                        </p>
                        <strong><p class="description">
                        More than a memoir of finding hope in the darkest 
                        hours, Buku Kuku-Ku is a book about finding meaning 
                        in life, and in death. Through poetry and illustration, 
                        this graphic novel explores the feelings of longing 
                        and loss that Cipta Croft-Cusworth experienced 
                        when his father passed away in 1997. 
                        </p></strong>
                        
                    </div>
                </div>
                <div class="col-md-12 hero-content1">
                        <p class="sub-title text-uppercase fw-bold mb-2">Cipta Croft-Cusworth</p>
                        <h1 class="main-title small-caps mb-lg-4">
                            Buku 
                            Kuku-ku 
                        </h1>
                        <p class="description">
                        Graphic Memoir
                        </p>
                        <strong><p class="description">
                        More than a memoir of finding hope in the darkest 
                        hours, Buku Kuku-Ku is a book about finding meaning 
                        in life, and in death. Through poetry and illustration, 
                        this graphic novel explores the feelings of longing 
                        and loss that Cipta Croft-Cusworth experienced 
                        when his father passed away in 1997. From the day 
                        his father died, Cipta began to draw, obsessively, 
                        creating a new world in response to the tumultuous 
                        times in which he was enveloped, a world centred 
                        around the quest for the missing crown of Emanon in 
                        a land named Dasuatika, where a prince embarks on 
                        a journey to find his long-lost father.
                        </p></strong>

                    </div>
            </div>

        </section>
         <section class="pb-5 pt-5 bg-white">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-lg-4">
                    <p class="description">
                        From the day 
                        his father died, Cipta began to draw, obsessively, 
                        creating a new world in response to the tumultuous 
                        times in which he was enveloped, a world centred 
                        around the quest for the missing crown of Emanon in 
                        a land named Dasuatika, where a prince embarks on 
                        a journey to find his long-lost father.
                        </p>
                        

                    </div>
                    <div class="col-lg-4">
                       <p class="description">
                        In Dasuatika live several characters who embody 
                        different aspects of the author’s personality. Each 
                        character faces their own difficulties and their own 
                        calling to the quest to find salvation. Buku Kuku-Ku is 
                        a story about a crucial phase in the author’s journey, 
                        a time when he had to find a way to save the 
                        characters he created in order to save himself.
                        </p>

    
                    </div>
                    <div class="col-lg-4 pt-4">
                        <div class="d-md-flex gap-md-4 mt-4">
                              <a href="https://www.tokopedia.com/kabarmedia/buku-kuku-ku?extParam=whid%3D2720499" target="_blank" class="btn second-button-order mt-auto preorder-button">Order Now
                            </a>
                        </div>
                    </div>
                </div>
                </div>
        </section>

        <section class="author py-5" id="author">
            <div class="container px-4 px-md-0">
                <div class="row align-items-center gap-xl-4">
                    <div class="col-md-8 order-2 order-lg-1 order-md-1 author-content">
                        <p class="second-title small-caps fw-bold mb-2">The Author</p>
                        <h2 class="sub-main-title  mb-lg-4 " style="white-space: nowrap;">
                            Cipta Croft-Cusworth
                        </h2>
                        <p class="description">
                            Cipta Croft-Cusworth was born in England and raised in Indonesia, the son of Indonesian
                            writer Lilimunir and English chess master Michael Croft-Cusworth. He is has been an actor,
                            film director, and theme park designer, and is the founder of the Good Guys Never Win toy
                            company.
                        </p>
                        <p class="description">
                            For two decades after his father’s death, Cipta continued to draw, creating a world full of
                            characters that helped him to give a new meaning to existence.
                        </p>
                        <p class="description">
                            Through these illustrations and the English and Indonesian poetry that he wrote to accompany
                            them, a story developed that eventually found its full form in this volume, Buku Kuku-Ku: a
                            book of personal philosophy characterised by the author’s steadfast faith in black magic and
                            ‘tenaga dalam’.
                        </p>
                    </div>
                    <div class="col-md-4 order-1 order-lg-2 order-md-2 text-end">
                        <div class="author-image mb-3 mb-lg-0">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/Cipta_Croft-Cusworth2.jpg" alt="Cipta"
                                class="img-fluid rounded-2">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="trailer py-5" id="trailer">
            <div class="container px-4 px-md-0">
                <div class="row">
                    <div class="col-lg-12">
                        <video src="<?= esc_url(get_template_directory_uri()); ?>/assets/videos/Buku KukuKu Ad.mp4" width="100%" controls></video>
                    </div>
                </div>
            </div>
        </section>

        <section class="quotes py-5" id="quotes">
            <div class="container px-4 px-md-0 position-relative">
                <div class="row mb-3">
                    <div class="col-lg-6 text-center text-lg-start">
                        <p class="second-title small-caps fw-bold mb-2">Reviews</p>
                        <h2 class="third-title">
                            What They Say
                        </h2>
                        <p class="description">Reactions to the book.</p>
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
                            <div class="col-lg-12 h-100">
                                <div class="card swiper-card border-0 rounded-0">
                                    <div class="card-body px-4 d-flex flex-column">
                                        <p class="description mt-5 pt-3">
                                            This book is not a how-to on overcoming grief. But it shows you the journey
                                            and the richness of the world anguish and pain can build. It is a reminder
                                            that all of us have a world built upon dreams, beliefs and imagination.

                                        </p>
                                        <div class="d-flex flex-column mt-auto">
                                            <h5 class="fw-bold mb-0 text-capitalize">Christine Gneuss</h5>
                                            <p class="text-davys opacity-50">Head of Organic Growth and Traffic
                                                Generation at Zenius</p>
                                        </div>
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
        <!-- <section class="other-book py-5" id="other-books">
            <div class="container px-4 px-md-0 position-relative">
                <div class="row mb-3">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h2 class="second-title">
                            Other Books 
                        </h2>
                    </div>
                   
                </div>
                <div class="swiper position-relative">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card-image">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/top-view-hardcover-book-banda.png" alt="banda-hard-cover"class="w-100">
                            </div>
                            <div class="card-body px-0 mb-4">
                                <h3 class="third-title">The Banda Islands</h3>
                                <p class="author">Edited by Jan Russell</p>
                                <p class="description fw-semibold mb-0 w-100">
                                    An anthology of art, photography, travelogue and fiction inspired by Indonesia's
                                    storied Spice Islands. From the beginnings of global capitalism and colonisation to Indonesia’s journey towards becoming a nation.
                                    
                            </div>
                            <br>
                            <div class="d-flex gap-3">
                                <a href="https://books.kabarmedia.com/the-banda-islands/" target="_blank"
                                    class="btn main-button mt-auto w-100">Learn More
                                </a>
                                <a href="https://www.tokopedia.com/kabarmedia/the-banda-islands-hidden-histories-miracles-of-nature?extParam=whid%3D2720499"
                                    target="_blank" class="btn second-button mt-auto w-100">Buy now
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-image">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/top-view-hardcover-book-retronesia.png"alt="retronesia-hard-cover" class="w-100">
                            </div>
                            <div class="card-body px-0 mb-4">
                                <h3 class="third-title">Retronesia</h3>
                                <p class="author">by Tariq Khalil</p>
                                <p class="description fw-semibold mb-0 w-100">
                                    Part memoir, part fantasy, a story of the
                                    land of Dasuatika and a lonely
                                    prince's quest to find his lost father.

                                   This graphic novel explores the feelings of longing and loss that Cipta Croft-Cusworth experienced when his father passed away in 1997.
                                </p>
                            </div>
                            <div class="d-flex gap-3">
                                <a href="https://books.kabarmedia.com/retronesia/" target="_blank"
                                    class="btn main-button mt-auto w-100">Learn More
                                </a>
                                <a href="https://www.tokopedia.com/kabarmedia/retronesia-the-years-of-building-dangerously?extParam=whid%3D2720499"
                                    target="_blank" class="btn second-button mt-auto w-100">Buy now
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-image">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/MMA Mock Up for Website copy.jpg" alt="banda-hard-cover"class="w-100">
                            </div>
                            <div class="card-body px-0 mb-4">
                                <h3 class="third-title">Mountains More Ancient</h3>
                                <p class="author">by Isna Marifa</p>
                                <p class="description fw-semibold mb-0 w-100">
                                It is 1751, and nine-year-old Wulan finds herself half a
                                world away from her home in Java: torn from her adored
                                grandparents, her chattering cousins, the sounds and
                                smells of the landscape that she loves.
                                </p>
                            </div>
                            <br>
                            <div class="d-flex gap-3">
                                <a href="https://books.kabarmedia.com/mountains-more-ancient/" target="_blank"
                                    class="btn main-button mt-auto w-100">Learn More
                                </a>
                                <a href="https://www.tokopedia.com/kabarmedia/mountains-more-ancient-by-isna-marifa?extParam=whid%3D2720499"
                                    target="_blank" class="btn second-button mt-auto w-100">Buy now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->


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
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                                    class="bi bi-calendar" viewBox="0 0 16 16">
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                </svg>
                            </div>
                            <h5 class="fw-bold">Schedule an Event</h5>
                            <a class="events-link" href="mailto:books@kabarmedia.com">books@kabarmedia.com</a>
                        </div>
                        <div class="col-md-4 text-center text-white mb-5 mb-md-0 border-right">
                            <div class="events-icon mx-auto d-flex align-items-center justify-content-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                                    class="bi bi-person" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                </svg>
                            </div>
                            <h5 class="fw-bold">Contact Agent</h5>
                            <a class="events-link" href="mailto:sineadruiseal@gmail.com">sineadruiseal@gmail.com</a>
                        </div>
                        <div class="col-md-4 text-center text-white">
                            <div class="events-icon mx-auto d-flex align-items-center justify-content-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                                    class="bi bi-person-rolodex" viewBox="0 0 16 16">
                                    <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                    <path
                                        d="M1 1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h.5a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h.5a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H6.707L6 1.293A1 1 0 0 0 5.293 1H1Zm0 1h4.293L6 2.707A1 1 0 0 0 6.707 3H15v10h-.085a1.5 1.5 0 0 0-2.4-.63C11.885 11.223 10.554 10 8 10c-2.555 0-3.886 1.224-4.514 2.37a1.5 1.5 0 0 0-2.4.63H1V2Z" />
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