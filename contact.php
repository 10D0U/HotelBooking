<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mingalar Hotel - CONTACT</title>

    <?php require('./inc/links.php'); ?>

    <style>
        .pop:hover {
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>

    <!-- Swiper.js CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body class="bg-light">

    <?php require('./inc/header.php'); ?>

    <div class="my-5 px-4">
        <div class="fw-bold h-font fs-3 text-center">CONTACT US</div>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            We’re here to help you with any questions, bookings, or special requests. Whether you're planning your stay or need assistance during your visit, our team is just a message or call away. You can also fill out our contact form, and we’ll get back to you as soon as possible. Your comfort is our priority!
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.0029002261285!2d96.17821567607908!3d16.826212218727044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193978d4e0949%3A0x7841537a0c3361f3!2sMingalar%20Hotel!5e0!3m2!1sen!2smm!4v1744296880471!5m2!1sen!2smm" height="320px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Address</h5>
                    <a href="https://maps.app.goo.gl/bRH2Yt56HzwRSbWS8" target="_blank" class="d-inline-block text-decoration-none text-dark mb-3">
                        <i class="bi bi-geo-alt-fill"></i> 458 Waizayandar Road, Yangon
                    </a>
                    <h5 class="mt-4">Call us</h5>
                    <a href="tel: +959123456789" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>+959-123456789
                    </a> <br>
                    <a href="tel: +959987654321" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>+959-987654321
                    </a>
                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: tendou895@gmail.com" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i> info@hotelmingalar.com
                    </a>


                    <h5 class="mt-4">Follow us</h5>
                    <a href="#" class="d-inline-block mb-3 text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block mb-3 text-dark fs-5 me-2">
                        <i class="bi bi-twitter-x"></i>
                    </a>
                    <a href="#" class="d-inline-block">
                        <span class="badge bg-light text-dark fs-5">
                            <i class="bi bi-instagram me-1"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form>
                        <h5>Send a message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Subject</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Message</label>
                            <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                        </div>
                        <button type="submit" class="btn text-white custom-bg shadow-none mt-3">
                            <i class="bi bi-send-fill"></i> SEND NOW
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php require('./inc/footer.php'); ?>

</body>

</html>