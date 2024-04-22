<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Khmer:wght@100..900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Khmer:wght@100..900&display=swap" rel="stylesheet">

<style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    * {
        box-sizing: border-box;
        font-family: "Noto Serif Khmer", serif;
        font-optical-sizing: auto;
        font-weight: 600;
        font-style: normal;
        font-variation-settings:
            "wdth" 100;
    }

    body {
        background-image: linear-gradient(180deg, #eee, #fff 100px, #fff);
        color: #5a5a5a;
    }

    .custom-heading {
        line-height: 1.6;
    }

    .section {
        padding: 80px 0px;
    }

    .container {
        /* max-width: 960px; */
        max-width: 1080px;
    }

    .pricing-header {
        max-width: 700px;
    }

    /* NAVBAR */
    #navbar {
        position: fixed;
        top: 0px;
        width: 100%;
        z-index: 9999;
    } 

    a[id="navA"] {
        color: #fff;
    }

    a[id="navA"]:hover {
        color: #0dcaf0 !important;
        text-decoration: underline !important;
    }

    .navbar-logo {
        width: 70px;
        height: 70px;
    }


    .navbar-container {
        width: 100%;
        padding: 22px 0 12px 0;
        justify-content: center;
        align-items: center;
        display: flex; 
    }

    .navbar-menu {
        max-width: 1200px;
        width: 100%;
    }

    .navbar-bg-overlay {
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        position: absolute;
        z-index: -1;
        
        background-color: transparent;
        background-image: linear-gradient(180deg, #000000 0%, #00000000 100%);
        opacity: 0.6;
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    .navbar-animation {
        /* height: 80px; */
        background-color: aqua;
        animation: slideDown 0.35s ease-out;
    }

    @keyframes slideDown {
        from {
            height: 80px;
            /* transform: translateY(-100%);
            background-color: transparent; */
        }
        to {
            height: 60px;
            /* transform: translateY(0);
            background-color: blue; */
        }
    }

    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
        /* margin-bottom: 4rem; */
    }

    /* Since positioning the image, we need to help out the caption */
    .carousel-caption {
        bottom: 5rem;
        z-index: 10;
    }

    /* Declare heights because of positioning of img element */
    .carousel-item {
        height: 38.6rem;
        height: 100vh;
    }

    .carousel-img-container {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        overflow: hidden;
    }

    .carousel-img-container > img {
        position: absolute;
        top: 0;
        left: 0;
        object-fit: cover;
        object-position: 50% 50%;
        width: 100%;
        height: 100%;
        transform-style: preserve-3d;
        backface-visibility: hidden;
        will-change: transform, opacity;
    }

    .carousel-img-bg-overlay {
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        position: absolute;

        background-color: transparent;
        background-image: linear-gradient(180deg, #000000 0%, #000000A3 100%);
        opacity: 0.5;
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .col-lg-4 {
        margin-bottom: 1.5rem;
        text-align: center;
    }
    .marketing h2 {
        font-weight: 400;
    }
    /* rtl:begin:ignore */
    .marketing .col-lg-4 p {
        margin-right: .75rem;
        margin-left: .75rem;
    }
    /* rtl:end:ignore */


    /* Featurettes
    ------------------------- */

    .featurette-divider {
        margin: 3rem 0; /* Space out the Bootstrap <hr> more */
    }

    /* Thin out the marketing headings */
    .featurette-heading {
        font-weight: 300;
        line-height: 1.4;
        /* rtl:remove */
        letter-spacing: -.05rem;
    }


    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (min-width: 40em) {
    /* Bump up size of carousel content */
    .carousel-caption p {
        margin-bottom: 1.25rem;
        font-size: 1.25rem;
        line-height: 1.4;
    }

    .featurette-heading {
        font-size: 50px;
    }
    }

    @media (min-width: 62em) {
    .featurette-heading {
        margin-top: 7rem;
    }
    }


    /*  */
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
        font-size: 3.5rem;
        }
    }
</style>