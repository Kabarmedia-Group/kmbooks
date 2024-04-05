<?php
/*
Template Name : Work
*/
?>
<?php
$post_data = get_post();

if (isset($post_data)) {
    foreach ($post_data as $key => $value) {
        if ($post_data->post_name == 'work') {
            $contents = $post_data->post_content;
        } else {
            $contents = '';
        }
    }
}

?>
<!-- <section id="homeHero" class="position-relative">
    <div class="home-hero-image position-relative vh-100 w-100 bg-info overflow-hidden"><img class="h-100 object-fit-cover" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/work/hero-work.png" alt="hero-background" /></div>
        <div class="position-absolute top-0 h-75 w-100 text-center">
            <div class="container mx-auto position-relative top-0 h-100 d-flex flex-column justify-content-end">
                <div class="hero-content text-white">
                    <h1 class="main-title small-caps">Work</h1>
                   
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="position-relative h-100">
    <img class="w-100 h-100 object-fit-cover" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/work/hero-work.png" alt="hero-background" />
    <div class="container">
        <h1 class="hero-caption main-title small-caps text-white">Work</h1>
    </div>
</section>

<section id="books" class="pt-5">
    <div class="container position-relative px-20">
        <div class="row mb-5">
            <div class="col-lg-8 text-center mx-auto">
                <h2 class="third-title small-caps">
               Our Books
                </h2>
            </div>
        </div>
        <div class="row g-4 mb-5">
            <div class="col-md-3">
                <div class="card-books">
                    <a href="/work/Backup-26022024/retronesia">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/work/retronesia-cover.png" class="card-img-top" alt="retronesia">
                    </a>
                   
                    <div class="card-body p-2">
                        <h5 class="card-title-book fw-bold">Retronesia</h5>
                        <p class="author">by Tariq Khalil</p>
                        <p class="description card-text">The Years of Building Dangerously is the first must-have guide to Indonesia's mostcreative architectural period.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-books">
                    <a href="/work/Backup-26022024/the-banda-islands">
                       <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/work/banda-cover.png" class="card-img-top" alt="banda-cover">
                    </a>
                    <div class="card-body p-2">
                        <h5 class="card-title-book fw-bold">The Banda Island</h5>
                        <p class="author">Edited by Jan Russell</p>
                        <p class="description card-text">An anthology of art, photography, travelogue and fiction inspired by Indonesia's storied Spice Islands.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-books">
                    <a href="/work/Backup-26022024/buku-kuku-ku">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/work/bukukuku-cover.png" class="card-img-top" alt="buku-kuku-ku">
                    </a>
                    <div class="card-body p-2">
                        <h5 class="card-title-book fw-bold">Buku Kuku Ku</h5>
                        <p class="author">by Cipta Croft-Cusworth</p>
                        <p class="description card-text">Part memoir, part fantasy, a story of the land of Dasuatika and a lonely prince's quest to find his lost father.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-books">
                    <a href="/work/Backup-26022024/mountains-more-ancient">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/work/mma-cover.png" class="card-img-top" alt="mma">
                    </a>
                    <div class="card-body p-2">
                        <h5 class="card-title-book fw-bold">Mountains More Ancient</h5>
                        <p class="author">by Isna Marifa</p>
                        <p class="description card-text">It is 1751, and nine-year-old Wulan finds herself half a world away from her home in Java: torn from her adored grandparents, her chattering cousins, the sounds and smells of the landscape that she loves.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-books">
                    <a href="/work/Backup-26022024/penjor-of-bali">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/work/penjor-cover.png" class="card-img-top" alt="penjor-of-bali">
                    </a>
                    <div class="card-body p-2">
                        <h5 class="card-title-book fw-bold">Penjor of Bali</h5>
                        <p class="author">by Susan Ruddy</p>
                        <p class="card-text">Through the graceful arch of the penjor I glimpsed
                                            the world of the Balinese. I saw a culture enriched by
                                            the beauty of the ephemeral and the daily practice of
                                            gratitude for the gifts of life.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-books">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/work/the-litle-star-cover.png" class="card-img-top" alt="retronesia">
                    <div class="card-body p-2">
                        <h5 class="card-title fw-bold">The Little Star</h5>
                        <p class="author">by Ronald Stones </p>
                        <p class="card-text">Illustrated children’s book about a little star who struggles to find his purpose in life until he realises that the ‘why’ is more important than the ‘how’.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-books">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/work/asian-anto-cover.png" class="card-img-top" alt="retronesia">
                    <div class="card-body p-2">
                        <h5 class="card-title fw-bold">Asian Anthologies</h5>
                        <p class="author">lorem ipsum</p>
                        <p class="card-text">Unheard voices and evocative tales from a vast and fascinating continent: each anthology is a journey of discovery in the company of master storytellers.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="print" class="bg-blue pt-5">
    <div class="container px-4 px-md-0" >
        <div class="col-lg-8 text-center mx-auto">
            <h3 class="third-title small-caps" style="color:#BCAC9F;">
               Books for Organizations
            </h3>
            <h2 class="main-title small-caps text-white">The Power of Prints</h2>
        </div>
        <div class="row g-4 mb-5 pt-5 pb-5">
            <div class="col-md-3">
                <div class="card-books">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/work/world-bank.png" class="card-img-top" alt="world-bank">
                    <div class="card-body p-2 text-white">
                        <h5 class="card-title-book fw-bold">World Bank Project Report</h5>
                        <p class="description card-text text-white">A bilingual Report on the Roadmap for Water Investment, prepared by The World Bank, and designed by Kabar Media with the goal of presenting research results with elegant clarity.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-books">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/work/the-art-hospitality.png" class="card-img-top" alt="the-art-hospitality">
                    <div class="card-body p-2 text-white">
                        <h5 class="card-title-book fw-bold">The Art of Hospitality</h5>
                        <p class="description card-text text-white">Unheard voices and evocative tales from a vast and fascinating continent: each anthology is a journey of discovery in the company of master storytellers.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-books">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/work/taking-times.png" class="card-img-top" alt="taking-times-of-frankfurt">
                    <div class="card-body p-2 text-white">
                        <h5 class="card-title-book fw-bold">Taking Times to Frankfurt</h5>
                        <p class="description card-text text-white">A coffee table book to mark 25 eventful and pioneering years of Thiess operations in Indonesia: the successes, the challenges, and the personalities who played pivotal roles in the development of the organisation.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-books">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/work/the-bali-china.png" class="card-img-top" alt="the-bali-china">
                    <div class="card-body p-2 text-white">
                        <h5 class="card-title-book fw-bold">The Bali-China Connection</h5>
                        <p class="description card-text text-white">It is 1751, and nine-year-old Wulan finds herself half a world away from her home in Java: torn from her adored grandparents, her chattering cousins, the sounds and smells of the landscape that she loves.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-books">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/work/history-of-resilience.png" class="card-img-top" alt="history-of-resilience">
                    <div class="card-body p-2 text-white">
                        <h5 class="card-title-book fw-bold">A History of Resilience</h5>
                        <p class="description card-text text-white">A coffee table book to mark 25 eventful and pioneering years of Thiess operations in Indonesia: the successes, the challenges, and the personalities who played pivotal roles in the development of the organisation.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-books">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/work/innovative-development.png" class="card-img-top" alt="innovative-development">
                    <div class="card-body p-2 text-white">
                        <h5 class="card-title-book fw-bold">Innovative Developments</h5>
                        <p class="ddescription card-text  text-white">It is 1751, and nine-year-old Wulan finds herself half a world away from her home in Java: torn from her adored grandparents, her chattering cousins, the sounds and smells of the landscape that she loves.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-books">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/work/building-indonesia.png" class="card-img-top" alt="building-indonesia">
                    <div class="card-body p-2 text-white">
                        <h5 class="card-title-book fw-bold">Building Indonesia</h5>
                        <p class="description card-text text-white">It is 1751, and nine-year-old Wulan finds herself half a world away from her home in Java: torn from her adored grandparents, her chattering cousins, the sounds and smells of the landscape that she loves.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="films">
    <div class="container pt-3 pb-5">
        <div class="text-center mx-auto">
            <h4 class="third-title small-caps">
               Film & Animation
            </h4>
            <h3 class="second-title">Share Your Stories Through Videos, Explainers, and Branded Films</h3>
            <div id="video-gallery" class="video-gallery pb-3 p-5">
            <!-- Container untuk menampilkan video -->
            </div>
            <button id="load-more-btn" class="btn main-button text-center">See more</button>
        </div>    
    </div>
</section>

<section id="partners">
    <div class="container pt-3 pb-5">
        <div class="mx-auto">
            <h2 class="third-title small-caps">Partners We’ve Worked With</h2>
        </div>
         <div class="row g-4 mb-5 pt-5">
            <div class="col-md-3">
                <div class="card-books p-5 text-center">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/work/asean.png"  alt="asean">
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-books p-5 text-center">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/work/american-express.png"  alt="american-express">
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-books p-5 text-center">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/work/eria.png"  alt="eria">
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-books p-5 text-center">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/work/undp.png"  alt="undp">
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-books p-5 text-center">
                    <a href="/work/Backup-26022024/penjor-of-bali">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/work/icbc.png"  alt="icbc">
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-books p-5 text-center">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/work/ciputra.png"  alt="ciputra">
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-books p-5 text-center">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/work/the-world-bank.png"  alt="the-world-bank">
                </div>
            </div>
             <div class="col-md-3">
                <div class="card-books p-5 text-center">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/work/rosewood.png"  alt="rosewood">
                </div>
            </div>
        </div>
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
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const videoGallery = document.getElementById("video-gallery");
  const loadMoreBtn = document.getElementById("load-more-btn");
  const videoIds = [
    // Daftar ID video YouTube Anda
    "pyuqTJke7To?si=noul4BxyO-5N9HKW",
    "n6a43F9b1Yw?si=yM9hx44qbz_8A_YR",
    "y8lL_EiK9js?si=1vyLyDInjZyyWCdi",
    "z094LEfS314?si=PYBzfP3amyeK8JV8",
    "sSHK84Va8bk?si=n_cvloXrrgq3ZPo2",
    "-oTblQR5-MM?si=Luxz1CnHelu-mXIJ",
    // Tambahkan ID video lainnya di sini
    "A2vbQxE3DZM?si=GVA6BcRclzZIZC5E",
    "ozzKvXk_vAM?si=UYGcrb6cg8f4eVaf",
    "ft0CXag7xUY?si=KV3eiz_3unnWcq5d",
    "tjjedcoYvL0?si=M6gxYj4FkWxNHGlC",
    "MuZCsRmYRrA?si=LGcqhBwP_rEXvxlJ",
    "ZCCgcWuWNyo?si=OKXmEjGn4_D7DJdp",
    "vJ0tmWQOZ7M?si=NwjnSGTpSFSCus6t",
    "STmprka1fws?si=L6aUAyY3gB_TmIuv",
    "mXttKAMYRr8?si=arrkb6mPoZJgLqE1",
    "CYXUsWijuV8?si=AzCFJhPOXvN8vahY",
    "sR6j9kqJYEY?si=VFRWHXGRQSW6Ggd-",
    "UhjQ6H9DwYQ?si=LMFETKEips5apL2_",
    "Jxf1itK77Uo?si=Ux2zvGIfNVBc5Bzj",
    "uu89vPXyEXQ?si=-wbbdeAu9yXKlJp_",
  ];
  let currentIndex = 0;
  const videosPerPage = 6;

  // Fungsi untuk menampilkan video
  function displayVideos(startIndex, count) {
    for (let i = startIndex; i < startIndex + count && i < videoIds.length; i++) {
      const videoElement = document.createElement("iframe");
      videoElement.src = `https://www.youtube.com/embed/${videoIds[i]}`;
      videoElement.setAttribute("allowfullscreen", "");
      videoGallery.appendChild(videoElement);
    }
  }

  // Tampilkan video awal
  displayVideos(currentIndex, videosPerPage);
  currentIndex += videosPerPage;

  // Tambahkan event listener untuk tombol "Load More"
  loadMoreBtn.addEventListener("click", function () {
    displayVideos(currentIndex, videosPerPage);
    currentIndex += videosPerPage;

    // Sembunyikan tombol "Load More" jika sudah tidak ada video lagi
    if (currentIndex >= videoIds.length) {
      loadMoreBtn.style.display = "none";
    }
  });
});

</script>