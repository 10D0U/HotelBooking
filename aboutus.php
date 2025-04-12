<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mingalar Hotel - About Us</title>

    <?php require('./inc/links.php'); ?>

    <style>
        .box {
            border-top-color: var(--teal) !important;
        }
    </style>

    <!-- Swiper.js CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body class="bg-light">

    <?php require('./inc/header.php'); ?>

    <div class="my-5 px-4">
        <div class="fw-bold h-font fs-3 text-center">ABOUT US</div>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Welcome to Mingalar Hotel, where comfort meets elegance and every guest is treated like family. Located in the heart of Yangon, our hotel blends modern amenities with warm hospitality to create a truly memorable experience. Whether you're traveling for business or leisure, we offer thoughtfully designed rooms, top-tier facilities, and personalized service to make your stay exceptional. Our team is passionate about providing a welcoming atmosphere, ensuring that from check-in to check-out, your time with us is relaxing, enjoyable, and unforgettable.
        </p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">Meet Our General Manager</h3>
                <p>At the heart of our hotel’s success is our dedicated General Manager, Mr. John Smith, whose passion for hospitality and guest satisfaction drives everything we do. With over 20 years of experience in the industry, he ensures every guest enjoys a seamless and memorable stay. His leadership fosters a welcoming atmosphere where comfort, cleanliness, and excellent service are our top priorities.</p>
            </div>
            <div class="col-lg-6 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="./images/aboutus/about.jpg" class="w-100" alt="About Us Image" />
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="./images/aboutus/hotel.svg" width="70px" />
                    <h4 class="mt-3">100+ ROOMS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="./images/aboutus/customers.svg" width="70px" />
                    <h4 class="mt-3">1000+ CUSTOMERS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="./images/aboutus/rating.svg" width="70px" />
                    <h4 class="mt-3">400+ REVIEWS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="./images/aboutus/staff.svg" width="70px" />
                    <h4 class="mt-3">200+ STAFFS</h4>
                </div>
            </div>
        </div>
    </div>

    <h3 class="my-5 fw-bold h-font fs-3 text-center">Management Team</h3>

    <div class="container px-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="./images/aboutus/team1.png" class="w-100" />
                    <h5 class="mt-2">Olivia Carter</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="./images/aboutus/team2.png" class="w-100" />
                    <h5 class="mt-2">Liam Patel</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="./images/aboutus/team3.jpg" class="w-100" />
                    <h5 class="mt-2">Ethan Ross</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="./images/aboutus/team4.png" class="w-100" />
                    <h5 class="mt-2">Sophia Martinez</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="./images/aboutus/team5.png" class="w-100" />
                    <h5 class="mt-2">James Bennett </h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="./images/aboutus/team6.png" class="w-100" />
                    <h5 class="mt-2">Daniel Kim </h5>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <?php require('./inc/footer.php'); ?>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidespeed: 4,
            spaceBetween: 40,
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>
</body>

</html>