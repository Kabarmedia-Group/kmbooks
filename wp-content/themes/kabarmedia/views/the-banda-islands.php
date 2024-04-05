<?php
/*
Template Name : The Banda Islands
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
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Banda-mock-up-cover.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Banda-mock-up.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Banda-mock-up2.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Banda-mock-up3.jpg" class="d-block w-100" alt="...">
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
                                                    <li data-image="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Banda-mock-up-cover.jpg" class="ui-draggable ui-draggable-handle ui-draggable-disabled"></li>
                                                    <li data-image="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Banda-mock-up.jpg" class="ui-draggable ui-draggable-handle ui-draggable-disabled"></li>
                                                    <li data-image="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Banda-mock-up2.jpg" class="ui-draggable ui-draggable-handle ui-draggable-disabled"></li>
                                                    <li data-image="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Banda-mock-up3.jpg" class="ui-draggable ui-draggable-handle ui-draggable-disabled"></li>
                                                </ul>
                                                </div>
                                            </div>
                                            <div class="horizon-wrapper ">
                                                <div class="horizone-nav">
                                                <div class="prev" style="display: none;">
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/leftarrow.svg" />
                                                </div>
                                                <div class="next" style="display: block;">
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/rightarrow.svg" />
                                                </div>
                                                </div>
                                                <div id="horizon-slider">
                                                <ul style="width: 6000px; height: 600px; left: 0px; top: 0px;">
                                                    <li
                                                    data-image="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Banda-mock-up-cover.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Banda-mock-up.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Banda-mock-up2.jpg"
                                                    class="ui-draggable ui-draggable-handle ui-draggable-disabled"
                                                    ></li>
                                                    <li
                                                    data-image="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Banda-mock-up3.jpg"
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
                        <p class="sub-title fw-bold mb-2">Edited By Jan Russell</p>
                        <h1 class="main-title small-caps mb-lg-4">
                        The Banda<br>  Islands
                        </h1>
                        <p class="description">
                        Anthology of Literature, Art, and Travel
                        </p>
                        <strong><p class="description">
                        The Banda Islands have long fascinated explorers, 
                        anthropologists, writers, photographers, filmmakers, 
                        and artists. These ‘islands of spicerie’ have witnessed 
                        key moments in history, from the beginnings of 
                        global capitalism and colonisation to Indonesia’s 
                        journey towards becoming a nation. Today the region 
                        is one of the last true marine wildernesses in the world.
                        </p></strong>
                        <!-- <p class="description">
                        The Banda Islands anthology features the words and 
                        images of those who have come under the islands’ 
                        spell through the centuries, including:
                        </p>
                        <p class="description">
                        Amitav Ghosh, Giles Milton, Elizabeth Pisani, 
                        Goenawan Mohamad, Des Alwi, Jean Couteau, Oscar 
                        Motuloh, M. Fadli, Tim Severin, John Seabrook, Made 
                        Wianta, Hanafi, Lawrence Blair, Michael Vatikiotis, 
                        Hanna Rambé, Janet DeNeefe, Beatrice Glow, Jay 
                        Subyakto, Phillip Winn, and many more.
                        </p>

                        <div class="d-md-flex gap-md-4 mt-4">
                            <a href="https://www.tokopedia.com/kabarmedia/the-banda-islands-hidden-histories-miracles-of-nature?extParam=whid%3D2720499" target="_blank" class="btn main-button mt-auto preorder-button">Order Now
                            </a>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-12 hero-content1" style="margin-top:-15%;">
                        <p class="sub-title text-uppercase fw-bold mb-2">EDITED BY JAN RUSSELL</p>
                        <h1 class="main-title small-caps mb-lg-4">
                        The Banda Islands
                        </h1>
                        <p class="description">
                        Anthology of Literature, Art, and Travel
                        </p>
                        <strong><p class="description">
                        The Banda Islands have long fascinated explorers, 
                        anthropologists, writers, photographers, filmmakers, 
                        and artists. These ‘islands of spicerie’ have witnessed 
                        key moments in history, from the beginnings of 
                        global capitalism and colonisation to Indonesia’s 
                        journey towards becoming a nation. Today the region 
                        is one of the last true marine wildernesses in the world.
                        </p></strong>
                        <!-- <p class="description">
                        The Banda Islands anthology features the words and 
                        images of those who have come under the islands’ 
                        spell through the centuries, including:
                        </p>
                        <p class="description">
                        Amitav Ghosh, Giles Milton, Elizabeth Pisani, 
                        Goenawan Mohamad, Des Alwi, Jean Couteau, Oscar 
                        Motuloh, M. Fadli, Tim Severin, John Seabrook, Made 
                        Wianta, Hanafi, Lawrence Blair, Michael Vatikiotis, 
                        Hanna Rambé, Janet DeNeefe, Beatrice Glow, Jay 
                        Subyakto, Phillip Winn, and many more.
                        </p>

                        <div class="d-md-flex gap-md-4 mt-4">
                            <a href="https://www.tokopedia.com/kabarmedia/the-banda-islands-hidden-histories-miracles-of-nature?extParam=whid%3D2720499" target="_blank" class="btn main-button mt-auto preorder-button">Order Now
                            </a>
                        </div> -->
                </div>
            </div>

        </section>
         <section class="pb-5 pt-5 bg-white">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-lg-4">
                    <p class="description">
                        The Banda Islands have long fascinated explorers, 
                        anthropologists, writers, photographers, filmmakers, 
                        and artists. These ‘islands of spicerie’ have witnessed 
                        key moments in history, from the beginnings of 
                        global capitalism and colonisation to Indonesia’s 
                        journey towards becoming a nation. Today the region 
                        is one of the last true marine wildernesses in the world.
                        </p>
                        

                    </div>
                    <div class="col-lg-4">
                        <p class="description">
                           The Banda Islands anthology features the words and 
                        images of those who have come under the islands’ 
                        spell through the centuries, including: Amitav Ghosh, Giles Milton, Elizabeth Pisani, 
                        Goenawan Mohamad, Des Alwi, Jean Couteau, Oscar 
                        Motuloh, M. Fadli, Tim Severin, John Seabrook, Made 
                        Wianta, Hanafi, Lawrence Blair, Michael Vatikiotis, 
                        Hanna Rambé, Janet DeNeefe, Beatrice Glow, Jay 
                        Subyakto, Phillip Winn, and many more.
                        </p>
    
                    </div>
                    <div class="col-lg-4 pt-4">
                        <div class="d-md-flex gap-md-4 mt-4 justify-content-md-center">
                             <a href="https://www.tokopedia.com/kabarmedia/the-banda-islands-hidden-histories-miracles-of-nature?extParam=whid%3D2720499" target="_blank" class="btn second-button-order mt-auto preorder-button">Order Now</a>
                        </div>
                    </div>
                </div>
                </div>
        </section>

        
        <section class="quotes py-5" id="quotes">
            <div class="container px-4 px-md-0 position-relative">
                <div class="row mb-3">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h2 class=" second-title small-caps">Reviews</h2>
                        <h2 class="third-title ">
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
                                            Packed with various perspectives on the islands, including colourful local
                                            mythical stories, archaeological information and rich political and social
                                            history. Beautifully produced, it’s particularly great for map lovers and it
                                            includes a reproduction of the earliest map including the Banda Islands…

                                        </p>
                                        <div class="d-flex flex-column mt-auto">
                                            <h5 class="fw-bold mb-0">Travelfish</h5>
                                            <p class="text-davys opacity-50">Website</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card swiper-card border-0 rounded-0">
                                <div class="card-body px-4 d-flex flex-column">
                                    <p class="description mt-5 pt-3">
                                        An excellent book…from the chosen content, to layout, to production.
                                    </p>
                                    <div class="d-flex flex-column mt-auto">
                                        <h5 class="fw-bold mb-0">Tim Severin</h5>
                                        <p class="text-davys opacity-50">British Explorer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card swiper-card border-0 rounded-0">
                                <div class="card-body px-4 d-flex flex-column">
                                    <p class="description mt-5 pt-3">
                                        This is a book to read if you’ve more than a passing interest in Indonesia,
                                        and of course it’s essential reading if you’re heading to the Banda Islands
                                        themselves.
                                    </p>
                                    <div class="d-flex flex-column mt-auto">
                                        <h5 class="fw-bold mb-0">Travelfish</h5>
                                        <p class="text-davys opacity-50">Website</p>
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
<script>var slider = tns({
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
});</script>