<?php
/*
Template Name : Penjor of Bali
*/
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
<?php
$post_data = get_post();

if (isset($post_data)) {
    foreach ($post_data as $key => $value) {
        if ($post_data->post_name == 'penjor-of-bali') {
            $contents = $post_data->post_content;
        } else {
            $contents = '';
        }
    }
}

$getBooks = getBooks()['books'];

?>

<?php echo $contents; ?>

<!--         <section class="quotes py-5" id="quotes">
            <div class="container px-4 px-md-0 position-relative">
                <div class="row mb-3">
                    <div class="col-lg-6 text-center text-lg-start">
                        <p class="sub-title text-uppercase fw-bold mb-2">Reviews</p>
                        <h2 class="second-title">
                            What They Say
                        </h2>
                        <p class="description">Reactions to the novel.</p>
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
                                            This is an important novel: it reminds us that history is also made by the
                                            activities and stories of &apos;little&apos; people, those who find it
                                            difficult
                                            to determine their own destinies.
                                        </p>
                                        <div class="d-flex flex-column mt-auto">
                                            <h5 class="fw-bold mb-0">Febi Indriani</h5>
                                            <p class="text-davys opacity-50">Journalist & Writer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card swiper-card border-0 rounded-0">
                                <div class="card-body px-4 d-flex flex-column">
                                    <p class="description mt-5 pt-3">
                                        Mountains to Call Home shines a welcome light on this unilluminated period of
                                        Indonesian and Dutch-colonial histories…Isna Marifa&apos;s poetic prose and her
                                        sympathetic descriptions of the &apos;little people&apos; who provided the labor
                                        for this colonial enterprise, makes for a haunting, unforgettable story.
                                    </p>
                                    <div class="d-flex flex-column mt-auto">
                                        <h5 class="fw-bold mb-0">John H. McGlynn</h5>
                                        <p class="text-davys opacity-50">The Lontar Foundation</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card swiper-card border-0 rounded-0">
                                <div class="card-body px-4 d-flex flex-column">
                                    <p class="description mt-5 pt-3">
                                        Isna Marifa has given life to a slice of the history of colonial oppression in
                                        Java and the Cape of Good Hope, South Africa. This novel combines thorough
                                        research with literary craft, resulting in a meaningful and flowing narrative.
                                    </p>
                                    <div class="d-flex flex-column mt-auto">
                                        <h5 class="fw-bold mb-0">Putu Oka Sukanta</h5>
                                        <p class="text-davys opacity-50">Poet & Novelist</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card swiper-card border-0 rounded-0">
                                <div class="card-body px-4 d-flex flex-column">
                                    <p class="description mt-5 pt-3">
                                        This novel enables me to walk in the footsteps of my Malay forefathers from the
                                        ancient world of the Nusantara, as well as my Afro-Malay forebears who
                                        crisscrossed this African landscape as enslaved agricultural workers
                                    </p>
                                    <div class="d-flex flex-column mt-auto">
                                        <h5 class="fw-bold mb-0">Mogamat Kamedian</h5>
                                        <p class="text-davys opacity-50">CO-Editor of Bibliography of Bondage</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-lg-none swiper-pagination" id="quotes-dot" style="bottom:-30px;"></div>
            </div>
        </section> -->

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
                <h2 class="second-title text-light">
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
<script>
    // Submit Form to Google Sheet
    const preOrderFormURL =
        "https://script.google.com/macros/s/AKfycbynJvNRsfRuVprp4_wpqpXr-otB8eC5sxwnUA-8TjNPNEPGkqub0p06edXR0nCgVQQT/exec";
        const preOrderForm = document.forms["pre-order-form"];
        const preOrderButton = document.querySelector(".submit-button");
        const spinnerButton = document.querySelector(".spinner-button");
        const directButton = document.querySelector(".redirect-button");
        const thanksMessage = document.querySelector(".thanks-message");

        preOrderForm.addEventListener("submit", async (e) => {
        e.preventDefault();

        preOrderButton.classList.toggle("d-none");
        spinnerButton.classList.toggle("d-none");

        await fetch(preOrderFormURL, {
            method: "POST",
            body: new FormData(preOrderForm),
        })
        .then((response) => {
            spinnerButton.classList.toggle("d-none");
            console.log("Success!", response);
            preOrderForm.classList.toggle("d-none");
            directButton.classList.toggle("d-none");
            thanksMessage.classList.toggle("d-none");
        })
        .catch((error) => {
            preOrderButton.classList.toggle("d-none");
            spinnerButton.classList.toggle("d-none");
            console.log("Error!", error.message);
        });
        preOrderForm.reset();
        });

        // Button for submit data by Package
        const preorderButtons = document.querySelectorAll(".preorder-button");
        const packageInput = document.querySelector("#package");

        preorderButtons.forEach((preOrderButton) => {
        preOrderButton.addEventListener("click", () => {
            const package = preOrderButton.dataset.package;
                packageInput.value = package;
            });
        });

        const preOrderFormIntURL =
        "https://script.google.com/macros/s/AKfycbynJvNRsfRuVprp4_wpqpXr-otB8eC5sxwnUA-8TjNPNEPGkqub0p06edXR0nCgVQQT/exec";
        const preOrderFormInt = document.forms["pre-order-formInt"];
        const preOrderButtonInt = document.querySelector(".submit-buttonInt");
        const spinnerButtonInt = document.querySelector(".spinner-buttonInt");
        const directButtonInt = document.querySelector(".redirect-buttonInt");
        const thanksMessageInt = document.querySelector(".thanks-messageInt");

        preOrderFormInt.addEventListener("submit", async (e) => {
        e.preventDefault();

        preOrderButtonInt.classList.toggle("d-none");
        spinnerButtonInt.classList.toggle("d-none");

        await fetch(preOrderFormIntURL, {
            method: "POST",
            body: new FormData(preOrderFormInt),
        })
        .then((response) => {
            spinnerButtonInt.classList.toggle("d-none");
            console.log("Success!", response);
            preOrderFormInt.classList.toggle("d-none");
            directButtonInt.classList.toggle("d-none");
            thanksMessageInt.classList.toggle("d-none");
        })
        .catch((error) => {
            preOrderButtonInt.classList.toggle("d-none");
            spinnerButtonInt.classList.toggle("d-none");
            console.log("Error!", error.message);
        });
        preOrderFormInt.reset();
        });


</script>