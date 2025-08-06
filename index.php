<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <title>Arthath Artist</title>
    <!-- Favicon (Basic) -->
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
</head>

<body>
    <main class="bg-custom">
               <!--start top header-->
        <?php include_once("include/header.php") ?>

        <section class="hero-section">
            <div class="container">
                <h1>
                    Discover the Perfect <span class="highlight">Wall Artist</span> for Every Style
                </h1>
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

        <section class="about-arthath py-5">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Image Section -->
                    <div class="col-xl-7 col-lg-6 col-md-6 position-relative text-end">
                        <div>
                            <img src="images/about.png" class="img-fluid rounded" alt="Arthath Artist Work" />
                        </div>
                        <div>
                            <div class="tag-box position-absolute m-3 p-3 bg-white">
                                <h3 class="mb-0 fw-bold text-dark">New Work</h3>
                                <h3 class="text-orange fw-bold">Release</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Right Text Section -->
                    <div class="col-xl-5 col-lg-6 col-md-6 mt-4 mt-md-0 section-title">
                        <div class="px-lg-5 px-1">
                            <p class="text-muted fw-bold fs-5 mb-1 fw-semibold">Everything</p>
                            <h2 class="fw-bold text-orange mb-5">About Arthath</h2>
                            <p>At <strong>Arthath Artist</strong>, we transform spaces and emotions through art.
                                Specializing in wall murals, canvas paintings, and custom sketches, we bring creative
                                visions to life with a blend of imagination, skill, and passion.
                                Whether it's beautifying a home, elevating a commercial space, or delivering
                                personalized
                                art
                                pieces, every project is crafted with attention to detail and artistic excellence.</p>
                            <button class="btn  rounded-pill mt-3 explore-btn">
                                <span class="me-2"><i class="bi bi-arrow-up-right-circle"></i></span>Explore me
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class=" portfolio_section section-title">
            <div class="container py-5">
                <div class="row mb-4">
                    <div class="col-12">
                        <h6 class="text-muted fw-bold fs-5 mb-1 fw-semibold">Explore My Finest Creations</h6>
                        <h2 class="portfolio-title">Portfolio</h2>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Item 1 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="card product-card">
                            <img src="images/portfolio/Radha.png" class="product-image" alt="Radha" />
                            <div class="sale-badge">Sale</div>
                            <div class="add-to-cart">add to cart</div>
                            <div class="product-info text-center">
                                <h6>Radha</h6>
                                <span>₹3555</span>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="card product-card">
                            <img src="images/portfolio/fantasy.png" class="product-image" alt="Fantasy" />
                            <div class="sale-badge">Sale</div>
                            <div class="add-to-cart">add to cart</div>
                            <div class="product-info text-center">
                                <h6>Fantasy</h6>
                                <span>₹7999</span>
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="card product-card">
                            <img src="images/portfolio/Peacock.png" class="product-image" alt="Peacock Love" />
                            <div class="sale-badge">Sale</div>
                            <div class="add-to-cart">add to cart</div>
                            <div class="product-info text-center">
                                <h6>Peacock Love</h6>
                                <span>₹4999</span>
                            </div>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="card product-card">
                            <img src="images/portfolio/Abstract.png" class="product-image" alt="Abstract" />
                            <div class="sale-badge">Sale</div>
                            <div class="add-to-cart">add to cart</div>
                            <div class="product-info text-center">
                                <h6>Abstract</h6>
                                <span>₹5999</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container py-5">
                <h4 class="section-title pb-3">Latest Creations</h4>
                <div class="row g-4">
                    <!-- Card 1 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="creation-card">
                            <img src="images/portfolio/Frame-1.png" alt="Creation 1">
                            <div class="creation-caption">Street Wall Art</div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="creation-card">
                            <img src="images/portfolio/Frame-2.png" alt="Street Wall Art">
                            <div class="creation-caption">Street Wall Art</div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="creation-card">
                            <img src="images/portfolio/Frame-3.png" alt="Mural Art">
                            <div class="creation-caption">Street Wall Art</div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="creation-card">
                            <img src="images/portfolio/Frame-4.png" alt="Interior Mural">
                            <div class="creation-caption">Street Wall Art</div>
                        </div>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a href="contact.php" class="btn button_primary px-3"><i class="bi bi-arrow-up-right-circle"></i>
                        View All</a>
                </div>

        </section>

        <section>
            <div class="container testimonial-section section-title">
                <div class="row mb-4">
                    <div class="col-lg-12 text-start">
                        <p class="text-muted fw-bold fs-5 mb-1 fw-semibold">A Showcase of Masterpieces<br>That Define My
                            Craft</p>
                        <h2 class="testimonial-heading">Client’s Say</h2>
                    </div>
                </div>

                <div class="row align-items-center">
                    <!-- Left Image -->
                    <div class="col-md-7 col-12">
                        <img src="images/testimonial-img1.png" alt="Testimonial Art" class="testimonial-image ">
                    </div>

                    <!-- Right Testimonial -->
                    <div class="col-md-5 col-12">
                        <div class="owl-carousel" id="testimonial_section">
                            <div class="testimonial-quote-box">
                                <div class="quote-icon"><i class="bi bi-quote"></i></div>
                                <p class="testimonial-content">
                                    I was impressed with your communication throughout the whole process, the speed of
                                    delivery, the robust packaging, and the artwork itself. It looks great on the wall.
                                    I would highly recommend you, and will definitely use you again.
                                </p>
                                <p class="testimonial-author py-0">Michael C.</p>

                            </div>
                            <div class="testimonial-quote-box">
                                <div class="quote-icon"><i class="bi bi-quote"></i></div>
                                <p class="testimonial-content">
                                    I was impressed with your communication throughout the whole process, the speed of
                                    delivery, the robust packaging, and the artwork itself. It looks great on the wall.
                                    I would highly recommend you, and will definitely use you again.
                                </p>
                                <p class="testimonial-author py-0">Michael C.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container testimonial-section section-title pb-5">
                <div class="row mb-4">
                    <div class="col-lg-12 text-start">
                        <p class="text-muted fw-bold fs-5 mb-1 fw-semibold">Our Valuable</p>
                        <h2 class="testimonial-heading">Clients</h2>
                    </div>
                </div>

                <div class="row align-items-center">
                    <!-- Left Image -->
                    <div class="col-md-12">

                        <div class="owl-carousel" id="clints_section">
                            <div>
                                <img src="images/clients/logo1.png" alt="" style="height: 70px;" class="">
                            </div>
                            <div>
                                <img src="images/clients/logo2.png" alt="" style="height: 70px;" class="">
                            </div>
                            <div>
                                <img src="images/clients/logo3.png" alt="" style="height: 70px;" class="">
                            </div>
                            <div>
                                <img src="images/clients/logo4.png" alt="" style="height: 70px;" class="">
                            </div>
                            <div>
                                <img src="images/clients/logo5.png" alt="" style="height: 70px;" class="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

        <!--start top header-->
        <?php include_once("include/footer.php") ?>
</body>

</html>