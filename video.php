<?php include('conn.php'); ?>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/iinternal.css">


</head>

<body>
    <main class="bg-custom">
        <!--start top header-->
        <?php include_once("include/header.php") ?>


        <section class="hero-section">
            <div class="container">
                <h1 style="color: #FF5100;">
                    Portfolio
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
        <section class="tabber_section section-title ">
            <div class="container mt-3">
                <div class="row">

                    <!-- <div class="col-lg-12 text-start">
                        <p class="text-muted fw-bold fs-5 mb-1 fw-semibold">Our Portfolio</p>
                        <h2 class="testimonial-heading">Portfolio</h2>
                    </div> -->
                    <div class="col-lg-12 text-dark">
                        <!-- Nav pills -->
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link btn " href="portfolio.php">
                                    <i class="bi bi-image me-1"></i> Photo
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn active">
                                    <i class="bi bi-camera-video me-1"></i> Video
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>




        <section class=" portfolio_section section-title py-5">
            <div class="container ">

                <div class="row g-4" id="blogContainer">
                    <!-- Item 1 -->
                    <div class="row">
                        <?php
                        $videoQuery = $conn->query("SELECT * FROM videos ORDER BY created_at DESC LIMIT 3");
                        while ($video = $videoQuery->fetch_assoc()) {
                            // Extract YouTube Video ID
                            preg_match(
                                "/(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=))([^\?&\"'>]+)/",
                                $video['link'],
                                $matches
                            );
                            $videoID = $matches[1] ?? '';

                            if ($videoID) {
                                $embedURL = "https://www.youtube.com/embed/" . htmlspecialchars($videoID);
                                echo '
                            <div class="col-md-4 col-sm-6 mb-4 blog-item">
                            <div class="card product-card h-100 shadow-sm">
                                <iframe class="card-img-top" src="' . $embedURL . '" frameborder="0" allowfullscreen style="height: 200px;"></iframe>
                                <div class="card-body">
                                <h5 class="card-title">' . htmlspecialchars($video['title']) . '</h5>
                                </div>
                            </div>
                            </div>';
                            }
                        }
                        ?>
                    </div>

                </div>
                <!-- Pagination -->
                <nav class="mt-4">
                    <ul class="pagination justify-content-center" id="pagination"></ul>
                </nav>
            </div>
        </section>



    </main>

    <?php include_once("include/footer.php") ?>


    <script>
        const itemsPerPage = 12;
        let currentPage = 1;

        const items = document.querySelectorAll(".blog-item");
        const totalPages = Math.ceil(items.length / itemsPerPage);

        function showPage(page) {
            items.forEach((item, index) => {
                item.style.display = (index >= (page - 1) * itemsPerPage && index < page * itemsPerPage) ? "block" : "none";
            });
        }

        function setupPagination() {
            const pagination = document.getElementById("pagination");
            pagination.innerHTML = "";

            for (let i = 1; i <= totalPages; i++) {
                const li = document.createElement("li");
                li.className = "page-item" + (i === currentPage ? " active" : "");
                li.innerHTML = `<a class="btn button_primary mx-1" href="#">${i}</a>`;
                li.addEventListener("click", function(e) {
                    e.preventDefault();
                    currentPage = i;
                    showPage(currentPage);
                    setupPagination();
                });
                pagination.appendChild(li);
            }
        }

        // Init
        showPage(currentPage);
        setupPagination();
    </script>
</body>

</html>