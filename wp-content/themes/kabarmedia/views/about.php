<?php
/*
Template Name : About
*/
?>
<!-- <?php
$post_data = get_post();

if (isset($post_data)) {
    foreach ($post_data as $key => $value) {
        if ($post_data->post_name == 'about') {
            $contents = $post_data->post_content;
        } else {
            $contents = '';
        }
    }
}



?>
<?php echo $contents; ?> -->



<!-- <section id="hero" class="hero d-flex align-items-center position-relative pb-md-5 pb-lg-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="mb-3 mb-md- px-4 px-md-0">
                <div class="hero-content text-center">
                <h1 class="main-title mb-lg-4">About Kabar Media</h1>
                <p class="description fw-semibold mb-5 pe-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus lectus sit amet porta gravida. Mauris malesuada nisi vitae bibendum fringilla. Pellentesque consequat mi lectus, eu porta sapien pharetra in.</p>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- <section id="homeHero" class="position-relative">
    <div class="home-hero-image position-relative vh-100 w-100 bg-info overflow-hidden">
        <img class="w-100 h-100 object-fit-cover" src="https://temp-books.kabarmedia.com/wp-content/uploads/2024/03/image-13.png" alt="hero-background" />
    </div>
    <div class="position-absolute top-0 h-75 w-100 d-flex align-items-center justify-content-center text-center">
        <div class="container mx-auto position-relative top-0 h-100">
            <div class="hero-content text-white">
                <h1 class="main-title small-caps">About Kabar Media</h1>
               
            </div>
        </div>
    </div>
</section> -->

<section class="position-relative h-100">
    <img class="w-100 h-100 object-fit-cover" src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/about/Hero-about.png" alt="hero-background" />
    <div class="container">
        <h1 class="hero-caption main-title small-caps text-white">About Kabar Media</h1>
    </div>
</section>


<section id="about" class="about position-relative">
    <div class="home-hero-image position-relative vh-100 w-100 bg-info overflow-hidden d-flex align-items-center justify-content-center" style="background-image: url('https://temp-books.kabarmedia.com/wp-content/uploads/2024/03/background-about.png'); background-size: cover; background-position: center;">
        </div>

    <div class="position-absolute top-0 h-100 w-100 ">
        <div class="container mx-auto position-relative top-0 h-100 d-flex flex-column justify-content-center">
           <div class="row align-items-center">
              <div class="col-md-6 mb-3 mb-md- px-4 px-md-0">
                 <div class="hero-content">
                    <h1 class="second-title small-caps mb-lg-4">Stories that Connect</h1>
                    <p class="description fw-normal pe-5">Kabar Media is a publishing and communications firm based 
                        in Indonesia. Our company was founded in 2005 with the vision of creating high-quality media to share engaging stories of people and places, and we soon began to offer services that evolved from magazine publishing to strategic branding and print and video production.</p>
                    <p class="description fw-normal mb-5 pe-5"> Our in-house editing and design team works closely with clients and individuals to craft their stories, collaborating with writers, photographers, and artists to develop the best medium for bringing each story to life.</p>
                </div>
             </div>
          </div>
</section>

<section id="mission" class="mission bg-blue d-flex align-items-center position-relative pb-md-5 pb-lg-0 pt-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="mb-3 mb-md- px-4 px-md-0 text-white">
                <div class="hero-content text-center">
                <h1 class="third-title small-caps mb-lg-4">Our Mission</h1>
                <p class="description fw-normal mb-5 text-white">We want to amplify the voices of Southeast Asian writers and those who tell stories about this diverse and culturally rich region. Whether you write in English or dream of seeing your work translated, our team is dedicated to guiding you from the initial spark of an idea to a beautifully published book. 
                    Every author’s journey is unique, and we’re here to support you, every step of the way.
                    We would love to hear about your book idea and discuss how we can collaborate to bring your story to life.</p>
                <div class="gap-md-4 mt-4 pb-3"><a class="btn second-button-shop mt-auto" href="mailto:books@kabarmedia.com" rel="noopener">Write to Us</a>
                </div>

                </div>
            </div>
           
        </div>
    </div>
</section>

<section id="services" class="services bg-darkgrey pt-5 pb-5">
    <div class="container position-relative px-20">
        <div class="row mb-5">
            <div class="col-lg-8 text-center mx-auto">
                <h2 class="third-title small-caps">
               Our Services
                </h2>
                <p class="description mb-3">We offer comprehensive publishing services tailored to your unique journey:</p>
            </div>
        </div>
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                 <div class="card h-100">
                    <div class="card-body p-lg-5">
                        <div class="mb-4">
                            <img :src="image" alt="feature2-icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/about/idea-development.png">
                        </div>
                        <h5 class="card-title-services text-uppercase fw-semibold">Idea Development</h5>
                        <p class="description">Have an idea but not sure where to start? Our editorial team can help shape your concept into a compelling narrative.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                 <div class="card h-100">
                    <div class="card-body p-lg-5">
                         <div class="mb-4">
                            <img :src="image" alt="feature2-icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/about/manuscript.png">
                        </div>
                        <h5 class="card-title-services text-uppercase fw-semibold">Manuscript Guidance</h5>
                        <p class="description">From first draft to final manuscript, we provide feedback, editing, and support to ensure your unique voice shines through.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                 <div class="card h-100">
                    <div class="card-body p-lg-5">
                         <div class="mb-4">
                            <img :src="image" alt="feature2-icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/about/translation-services.png">
                        </div>
                        <h5 class="card-title-services text-uppercase fw-semibold">Translation Services</h5>
                        <p class="description">If you write in a language other than English, our expert translators will faithfully bring your story to an English-speaking audience.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                 <div class="card h-100">
                    <div class="card-body p-lg-5">
                         <div class="mb-4">
                            <img :src="image" alt="feature2-icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/about/design-layout.png">
                        </div>
                        <h5 class="card-title-services text-uppercase fw-semibold">Design and Layout</h5>
                        <p class="description">Our designers are skilled in creating visually stunning books that complement and enhance your narrative.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                 <div class="card h-100">
                    <div class="card-body p-lg-5">
                         <div class="mb-4">
                            <img :src="image" alt="feature2-icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/about/publication-services.png">
                        </div>
                        <h5 class="card-title-services text-uppercase fw-semibold"> Publication</h5>
                        <p class="description">We make your book available in both print and digital formats.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                 <div class="card h-100">
                    <div class="card-body p-lg-5">
                         <div class="mb-4">
                            <img :src="image" alt="feature2-icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/about/marketing-services.png">
                        </div>
                        <h5 class="card-title-services text-uppercase fw-semibold">Marketing, Launch, & Distribution</h5>
                        <p class="description">From book tours to social media campaigns, we identify effective strategies to get your book noticed. Our network of distributors can make your book available in both traditional and online bookstores worldwide.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="reputation" class="reputation bg-blue">
    <div class="container px-4 px-md-0" >
        <div class="row align-items-center">
            <div class="col-md-6 mb-3 mb-md-0">
                <div class="hero-image text-center"><img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/about/share-vision.png" alt="Hard Cover" /></div>
                </div>
            <div class="col-md-6">
                <h3 class="third-title small-caps fw-bold mb-2" style="color:#BCAC9F;">Reputation. Mission. Achievement.</h3>
                <h1 class="main-title mb-lg-4 text-white">Share Your Vision</h1>
                <p class="description fw-normal text-white">An engaging publication or film creates a definitive expression of who you are as an organisation: your philosophy, vision, achievements, and the legacy you want to leave.</p>
                <p class="description fw-normal text-white">Let Kabar Media be your partner on your storytelling journey. Through an initial discussion we will discover whether print or film is the best medium for your story – maybe it can best be told through a multichannel campaign.</p>
                <p class="description fw-normal text-white">If this is the case, we can work with you to devise and execute a cross-platform strategy. We can also explore how to balance your offline and online communication in order to heighten the impact of each approach.</p>
            </div>
        </div>
    </div>
</section>

<section id="publishing" class="publishing">
    <div class="container pt-5 pb-5">
        <div class="col-lg-8 text-center mx-auto">
            <h2 class="third-title small-caps">
                Publishing Services
            </h2>
        </div>
        <div class="align-items-center row pt-5">
            <div class="col-lg-6">
                <div class="knowledge-image position-relative">
                    <picture>
                         <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/about/author.png" class="img-fluid w-100"> 
                    </picture>
                </div>
            </div>
            <div class="col-lg-6 mb-4 pe-lg-5">
                <h2 class="third-title mb-4 pt-3">
                    For Authors
                </h2>
                 <p class="subcaption">Share Your Story</p>
                <p class="description knowledge-text mb-4">
                    At Kabar Media, we work with you closely to publish the story you’re burning to tell – at any stage of development and whether intended just for family and friends or to be shared with the world at large.
                    You may work with words or perhaps you tell your stories through images — in either case, we find the medium most suited to expressing the uniqueness of your vision, whatever the genre.
                </p>
                    <!-- <a href="https://films.kabarmedia.com/knowledge" class="btn main-button rounded-1">Read More</a> -->
            </div>
        </div>
        <div class="align-items-center row pt-5">
            <div class="col-lg-6">
                <div class="knowledge-image position-relative">
                    <picture>
                         <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/about/organisation.png" class="img-fluid w-100"> 
                    </picture>
                </div>
            </div>
            <div class="col-lg-6 mb-4 pe-lg-5">
                <h2 class="third-title mb-4 pt-3">
                    For Organisations
                </h2>
                <p class="description knowledge-text mb-4">
                    As an organisation, your story is one of your greatest assets: it can persuade your audience, preserve your reputation, and reach out to new partners and supporters who see their values reflected in yours.
                    We work across channels to tell stories about businesses and institutions that illuminate their purpose and present empathetic insights into their activities, getting to the heart of each organisation through research and interviews and creating text, photography, and film that memorably express their identity and ethos.
                </p>
                    <!-- <a href="https://films.kabarmedia.com/knowledge" class="btn main-button rounded-1">Read More</a> -->
            </div>
        </div>
        <div class="align-items-center row pt-5">
            <div class="col-lg-6">
                <div class="knowledge-image position-relative">
                    <picture>
                         <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/about/content-develop.png" class="img-fluid w-100"> 
                    </picture>
                </div>
            </div>
            <div class="col-lg-6 mb-4 pe-lg-5">
                <h2 class="third-title mb-4 pt-3">
                    Content Development
                </h2>
                <p class="subcaption">From Concept to Final Draft</p>
                <p class="description knowledge-text mb-4">
                    Taking communication ideas all the way from concept to conclusion, we conduct research and interviews, often translating from multiple languages, and we determine the optimal medium and type of content to be tailored to specific audiences.
                    We work closely with clients to create targeted content strategies, developing books, factual films, informational materials, and online and offline campaigns.
                </p>
                    <!-- <a href="https://films.kabarmedia.com/knowledge" class="btn main-button rounded-1">Read More</a> -->
            </div>
        </div>
        <div class="align-items-center row pt-5">
            <div class="col-lg-6">
                <div class="knowledge-image position-relative">
                   <picture>
                         <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/about/quality-product.png" class="img-fluid w-100"> 
                    </picture>
                </div>
            </div>
            <div class="col-lg-6 mb-4 pe-lg-5">
                <h2 class="third-title  mb-4 pt-3">
                    Quality Production
                </h2>
                <p class="description knowledge-text mb-4">
                    Printing is a costly, time-consuming, and effortful process — so why not ensure the best results?
                    At Kabar Media, we care about the details. From paper selection to pre-press, final proofs, colour grading, finishing, and binding, we oversee each print production from start to finish. This involves meticulous, in-person monitoring of the entire process, in close collaboration with our carefully selected printing partners, whether in Jakarta, Singapore, or Hong Kong.
                </p>
                    <!-- <a href="https://films.kabarmedia.com/knowledge" class="btn main-button rounded-1">Read More</a> -->
            </div>
        </div>
    </div>
</section>

<section id="story" class="bg-blue story">
    <div class="container px-4 px-md-0 pt-5 pb-3" >
        <div class="col-lg-8 mx-auto">
            <h3 class="third-title text-center small-caps fw-bold mb-2" style="color:#BCAC9F;">Cross-Platform Communication</h3>
            <h2 class="main-title text-center fw-bold mb-2 text-white">How We Can Tell Your Story</h2>
         <div class="align-items-center row pt-5 justify-content-center mx-auto p-5">
            <div class="col-lg-6 mb-4 pe-lg-5">
                <p class="sub-sub-title fw-bold text-white">Print Publications</p>
                     <ul class="description text-white">
                        <li>Commemorative books</li>
                        <li>Institutional histories</li>
                        <li>Biographies</li>
                        <li>Reports</li>
                        <li>Magazines</li>
                        <li>Company Profiles</li>
                    </ul>
            </div>
            <div class="col-lg-6 mb-4 pe-lg-5">
                <p class="sub-sub-title fw-bold text-white pt-4">Film & Digital</p>
                     <ul class="description text-white">
                        <li>Documentaries (shorts and features)</li>
                        <li>Branded films</li>
                        <li>TVCs and PSAs</li>
                        <li>Animations and Explainers</li>
                        <li>Webinars and Learning Modules</li>
                        <li>E-books, Apps and cross-media transpositions</li>
                    </ul>
            </div>
        </div>
        </div>
    </div>
</section>

<section id="faq" class="faq">
    <div class="container">
        <div class="container px-20">
            <div class="row mb-5 pt-5">
                <div class="col-lg-6 mb-3">
                    <h2 class="third-title small-caps">
                       /Faq
                    </h2>
                </div>
            </div>
        <div class="row mb-5">
            <div class="col-lg-6">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item rounded-3 overflow-hidden mb-3">
                        <h4 class="accordion-header">
                            <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                <span class="participant-number bg-fire-engine-red text-white rounded-pill d-flex justify-content-center align-items-center me-2">1</span><span>Frequently Asked Questions (FAQs)</span>
                            </button>
                        </h4>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" style="">
                            <div class="accordion-body">
                                <p>
                                Ask us anything! If you don’t find the information you’re looking for below, we encourage you to reach out to us <a href="mailto:books@kabarmedia.com">directly</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item rounded-3 overflow-hidden mb-3">
                        <h4 class="accordion-header">
                            <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                <span class="participant-number bg-fire-engine-red text-white rounded-pill d-flex justify-content-center align-items-center me-2">2</span><span>What types of books does Kabar Media Books specialize in?</span>
                            </button>
                        </h4>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" style="">
                            <div class="accordion-body">
                                <p>
                                    Our focus is on stories from Southeast Asia or about the region, written in English or translated into English. This includes genres like travel, culture, history, contemporary and historical fiction, biographies, memoir and more. We are also interested in previously published books that could be translated into Indonesian.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item rounded-3 overflow-hidden mb-3">
                        <h4 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                <span class="participant-number bg-fire-engine-red text-white rounded-pill d-flex justify-content-center align-items-center me-2">3</span><span>I’m not a native English speaker. Can I still submit my manuscript?</span>
                            </button>
                        </h4>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Absolutely! At the moment, we can review manuscripts with an identifiable Southeast Asian theme in the following languages: English, Indonesian, German, French, Spanish. We are also interested in manuscripts on other themes that have the potential to be translated for the Indonesian market.</p>
                            </div>
                        </div>

                    </div>
                    <div class="accordion-item rounded-3 overflow-hidden mb-3">
                        <h4 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                <span class="participant-number bg-fire-engine-red text-white rounded-pill d-flex justify-content-center align-items-center me-2">4</span><span>How does the submission process work?</span>
                            </button>
                        </h4>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>You can start by sending us a summary of your book idea or a sample of your manuscript through our email address. Our editorial team will review your submission and contact you to discuss the next steps.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item rounded-3 overflow-hidden mb-3">
                        <h4 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                <span class="participant-number bg-fire-engine-red text-white rounded-pill d-flex justify-content-center align-items-center me-2">5</span><span>Do you offer editing and proofreading services?</span>
                            </button>
                        </h4>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p> Yes, we provide comprehensive editing and proofreading services. Our team will work closely with you to refine and polish your manuscript while preserving your unique voice and style.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item rounded-3 overflow-hidden mb-3">
                        <h4 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                <span class="participant-number bg-fire-engine-red text-white rounded-pill d-flex justify-content-center align-items-center me-2">6</span><span>Can I be involved in the design and layout process of my book?</span>
                            </button>
                        </h4>
                        <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Definitely. We believe that authors should have a say in how their book looks and feels. Our design team will collaborate with you to ensure the final product aligns with your vision.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="accordion accordion-flush" id="accordionFlushExample-two">
                    <div class="accordion-item rounded-3 overflow-hidden mb-3">
                        <h4 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                <span class="participant-number bg-fire-engine-red text-white rounded-pill d-flex justify-content-center align-items-center me-2">7</span><span>What is your policy on royalties and rights?</span>
                            </button>
                        </h4>
                        <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample-two">
                            <div class="accordion-body">
                                <p>We offer competitive royalties and a transparent rights agreement. Specific terms will be discussed in detail once your manuscript is accepted for publication.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item rounded-3 overflow-hidden mb-3">
                        <h4 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                <span class="participant-number bg-fire-engine-red text-white rounded-pill d-flex justify-content-center align-items-center me-2">8</span><span>How long does the publication process take?</span>
                            </button>
                        </h4>
                        <div id="flush-collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample-two">
                            <div class="accordion-body">
                                <p>
                                    The timeline varies depending on the complexity of the project, but typically, it takes 12 months from manuscript acceptance to publication. We ensure every step is taken with care and quality.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item rounded-3 overflow-hidden mb-3">
                        <h4 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive3" aria-expanded="false" aria-controls="flush-collapseFive3">
                                <span class="participant-number bg-fire-engine-red text-white rounded-pill d-flex justify-content-center align-items-center me-2">9</span><span>Do you help with marketing and book launches?</span>
                            </button>
                        </h4>
                        <div id="flush-collapseFive3" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample-3">
                            <div class="accordion-body">
                                <p>
                                    Yes, we offer marketing and launch support tailored to each book. This includes book tours, social media promotion, press releases and more, to ensure your book reaches the widest possible audience.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item rounded-3 overflow-hidden mb-3">
                        <h4 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix3" aria-expanded="false" aria-controls="flush-collapseSix3">
                                <span class="participant-number bg-fire-engine-red text-white rounded-pill d-flex justify-content-center align-items-center me-2">10</span><span>How can I get my book distributed?</span>
                            </button>
                        </h4>
                        <div id="flush-collapseSix3" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample-3">
                            <div class="accordion-body">
                                <p>
                                    We have a network of distribution channels to ensure your book is available to readers worldwide, both in print and digital formats.
                                </p>
                            </div>
                        </div>
                    </div>
                     <div class="accordion-item rounded-3 overflow-hidden mb-3">
                        <h4 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven3" aria-expanded="false" aria-controls="flush-collapseSeven3">
                                <span class="participant-number bg-fire-engine-red text-white rounded-pill d-flex justify-content-center align-items-center me-2">11</span><span>How are the books funded?</span>
                            </button>
                        </h4>
                        <div id="flush-collapseSeven3" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample-3">
                            <div class="accordion-body">
                                <p>
                                    We work closely with authors to find the best ways to fund the publication and marketing of their books. Some publications are entirely or partially funded by the author, some use hybrid sources of funding, and some are backed by us. If you don’t feel financially secure enough to fund your own book, we understand – you’ve been busy writing! If it’s a manuscript we’re passionate about, we’ll find a way.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                 
    </div>
</section>

<!-- <section id="author" class="authors">
    <div class="container">
        <div class="mb-3">
            <h2 class="second-title small-caps ">
                Author-Publisher Partnership
            </h2>
        </div>
        <div class="row gx-lg-5">
            <div class="col-md-3">
                <div class="card">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/about/isna-marifa-2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Isna Marifa</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/about/Tariq-Khalil_Kabar-Media-2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Tariq Khalil</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/about/Cipta_Croft-Cusworth2-2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Cipta Croft Cusworth</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="card" >
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/about/Susan-Ruddy2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Susan Ruddy</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section> -->

<section id="contact" class="contact py-5 position-relative">
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
                </div>
            </div>
        </div>
    </div>
</section>
