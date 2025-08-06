<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <title>RJD Nextgen - Creative Web Design & Development Company</title>
    <meta name="description"
        content="RJD Nextgen offers expert web design, development, SEO, digital marketing, and UI/UX services to grow your business online.">
    <meta name="keywords"
        content="RJD Nextgen, Web Design, Web Development, UI UX Design, SEO, Digital Marketing, Responsive Website, Website Redesign, Logo Design, Graphic Design">
    <meta name="author" content="RJD Nextgen">

    <!-- Open Graph Meta (Facebook, LinkedIn) -->
    <meta property="og:title" content="RJD Nextgen - Creative Web Design & Development Company">
    <meta property="og:description"
        content="We help brands grow online with responsive websites, SEO, and modern design.">
    <meta property="og:image" content="https://yourdomain.com/images/og-image.jpg">
    <!-- Replace with actual image URL -->
    <meta property="og:url" content="https://yourdomain.com/">
    <meta property="og:type" content="website">

    <!-- Favicon (Basic) -->
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/iinternal.css">

    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/validation.css" />


</head>

<body>
    <main class="bg-custom">
        <!--start top header-->
        <?php include_once("include/header.php") ?>

        <section class="hero-section">
            <div class="container">
                <h1 style="color: #FF5100;">
                    Contact
                </h1>
                <h4> <a href="index.html" class="text-decoration-none text-white"> Arthat Artist</a> <span>/</span>
                    Contact</h4>
                <div class="hero-buttons">
                    <button class="btn-custom">
                        <i class="bi bi-telephone-fill"></i> Connect
                    </button>
                    <button class="btn-custom">
                        <i class="bi bi-whatsapp"></i> Whats app
                    </button>
                </div>
            </div>
        </section>






        <section class="contact-section container">
            <div class="row align-items-start">
                <!-- Left Column -->
                <div class="col-md-6 contact-info">
                    <small>CONTACT US</small>
                    <h2 class="mt-2 mb-4">Let’s start Working<br />together</h2>

                    <p class="mb-1">Have Question?</p>
                    <h5 class="fs-5"><strong>+91 81492 94998</strong></h5>

                    <p class="mb-1">Write email</p>
                    <h5 class="fs-5"><strong>info@arthatartist.com</strong></h5>

                    <p class="mb-1">Visit office</p>
                    <h5 class="fs-5"><strong>Katepuram chowk, New sangvi,<br>Pune - Maharashtra</strong></h5>
                </div>

                <!-- Right Column -->
                <div class="col-md-6 contact-form">
                    <div class="validateContainer">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="validateField ">
                                        <input type="text" placeholder="Your Name"
                                            class=" form-control validateRequired" />
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="validateField ">
                                        <input type="email" name="email"
                                            class="form-control validateRequired validateEmail"
                                            placeholder="Enter Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="validateField">
                                        <input type="text" name="phone"
                                            class="form-control validateRequired validateNumber validateMobileNoLimit"
                                            placeholder="Enter Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="validateField ">
                                        <select name="services" class="form-control validateRequired">
                                            <option selected disabled>Sort Popular</option>
                                            <option>Web Design</option>
                                            <option>Art Service</option>
                                            <option>Business Query</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="validateField "> <textarea class="form-control  validateRequired"
                                    name="comments" rows="5" placeholder="text..."></textarea>
                            </div>
                            <button type="submit" class="btn button_primary">Send Message</button>
                        </form>
                    </div>

                </div>
            </div>
        </section>



    </main>


  


    <!--start top header-->
    <?php include_once("include/footer.php") ?>
</body>

</html>