
    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="row gy-5">
                <!-- Brand Info -->
                <div class="col-lg-4 col-md-12 col-12">
                    <img src="images/Logo-footer.svg" alt="Logo" style="max-width: 80px;">
                    <p class="mt-3 small">
                        From vibrant wall art that energizes interiors to timeless canvas pieces and lifelike portraits,
                        we offer tailored art solutions that reflect your style and story.
                    </p>
                    <p class="mt-4 fw-bold">Follow Us</p>
                    <a href="#" class="me-3 text-decoration-none text-orange fs-5"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-decoration-none text-orange fs-5"><i class="bi bi-instagram"></i></a>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-2 col-12">
                    <h5 class="text-white mb-3">Quick Links</h5>
                    <ul class="list-unstyled small">
                        <li><a href="index.php" class="50 text-decoration-none d-block mb-2">Home</a></li>
                        <li><a href="portfolio.php" class="50 text-decoration-none d-block mb-2">Photos</a></li>
                        <li><a href="video.php" class="50 text-decoration-none d-block mb-2">video</a></li>
                        <li><a href="contact.php" class="50 text-decoration-none d-block">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div class="col-lg-3 col-md-4 col-12">
                    <h5 class="text-white mb-3">Contact Us</h5>
                    <ul class="list-unstyled small">
                        <p> <a class="small mb-2"><i class="bi bi-telephone-fill text-orange me-2"></i>+91 81492
                                94998</a></p>
                        <p><a class="small mb-2"><i class="bi bi-telephone-fill text-orange me-2"></i>+91 79727
                                54479</a></p>
                        <p><a class="small mb-2"><i
                                    class="bi bi-envelope-fill text-orange me-2"></i>info@arthathartist.com</a></p>
                        <p><a class="small"><i class="bi bi-globe2 text-orange me-2"></i>www.arthathartist.com</a></p>
                    </ul>
                </div>

                <!-- Map -->
                <div class="col-lg-3 col-md-6 col-12">
                    <h5 class="text-white mb-3">Location</h5>
                    <div style=" ">
                        <iframe style="border: 2px solid #ff4d00; border-radius: 12px; overflow: hidden;"
                            src="https://www.google.com/maps?q=Kate+Puran+Chowk,+Pune,+India&output=embed" class="map"
                            allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <a id="button" class="bi bi-chevron-double-up d-lg-block d-none show" style="text-decoration: none;"></a>
    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <div class="rigth-button"><a class="btn w-100 text-white"
            href="https://wa.me/8087771333?text=Hello%20RJD%20Nextgen">Whatsapp</a><a href="tel:8459999736"
            class="w-100"><button type="button" class="btn btn-dark">Call
                us</button></a></div>


    <!--End of Tawk.to Script-->


    <!--End of Tawk.to Script-->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/main.js"></script>
    <script src="js/navbar.js"></script>

    <script>
        AOS.init();
    </script>
    
    <script>
        const themeToggle = document.getElementById('toggle-theme');
        const rootElement = document.documentElement;

        // Load theme from localStorage
        const savedTheme = localStorage.getItem('theme') || 'light';
        rootElement.setAttribute('data-theme', savedTheme);
        themeToggle.textContent = savedTheme === 'dark' ? '☀️' : '🌙';

        // Toggle theme
        themeToggle.addEventListener('click', () => {
            const currentTheme = rootElement.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            rootElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            themeToggle.textContent = newTheme === 'dark' ? '☀️' : '🌙';
        });
    </script>