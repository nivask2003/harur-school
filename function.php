<?php
function template_header($title, $metadesc)
{
    $metadesc = trim(htmlspecialchars($metadesc));
    $title = htmlspecialchars($title);

      // Detect the current page so the matching nav item can be highlighted
    $current = basename($_SERVER['PHP_SELF']);

    // Pages that belong to each dropdown group
    $about_pages     = ['about-us.php', 'management_leadership.php', 'chairman-message.php', 'principal-message.php'];
    $academics_pages = ['curriculam.php', 'academics-excellence.php', 'extra-curricular.php', 'activity.php'];
    $admission_pages = ['admission.php', 'admission-form.php'];

    // Top-level active states
    $home_active       = ($current === 'home.php') ? ' active' : '';
    $about_active      = in_array($current, $about_pages) ? ' active' : '';
    $academics_active  = in_array($current, $academics_pages) ? ' active' : '';
    $facilities_active = ($current === 'facilities.php') ? ' active' : '';
    $admission_active  = in_array($current, $admission_pages) ? ' active' : '';
    $gallery_active    = ($current === 'gallery.php') ? ' active' : '';
    $career_active     = ($current === 'career-form.php') ? ' active' : '';
    $contact_active    = ($current === 'contact.php') ? ' active' : '';

    // Dropdown item-level active states
    $about_us_item        = ($current === 'about-us.php') ? ' active' : '';
    $management_item         = ($current === 'management_leadership.php') ? ' active' : '';
    $chairman_message_item        = ($current === 'chairman_message.php') ? ' active' : '';
    $principal_message_item     = ($current === 'principal_message.php') ? ' active' : '';

    $curriculam_item      = ($current === 'curriculam.php') ? ' active' : '';
    $academics_exc_item   = ($current === 'academics-excellence.php') ? ' active' : '';
    $extra_curricular_item = ($current === 'extra-curricular.php') ? ' active' : '';
    $activity_item        = ($current === 'activity.php') ? ' active' : '';

    $admission_proc_item  = ($current === 'admission.php') ? ' active' : '';
    $admission_form_item  = ($current === 'admission-form.php') ? ' active' : '';

    echo <<< EOT
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="$metadesc">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
                       <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <title>$title</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
            <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>

    <body>
        <header>
        <div class="top-header">
            <section class="admission-announcement">
                <div class="announcement-track">
                    <div class="announcement-content">
                        <span class="icon">
                            <i class="bi bi-megaphone-fill"></i>
                        </span>

                        <span>
                            🎓 Admissions Open for the Academic Year 2026–2027 | Pre-KG to Grade XII
                        </span>



                        <!-- Duplicate for seamless loop -->
                        <span class="icon">
                            <i class="bi bi-megaphone-fill"></i>
                        </span>

                        <span>
                            🎓 Admissions Open for the Academic Year 2026–2027 | Pre-KG to Grade XII
                        </span>


                    </div>
                </div>
            </section>
        </div>
        <div class="middle-header">
            <img src="assets/images/logo-home.webp" alt="" class="img-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="bottom-header header-sticky">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link{$home_active}" aria-current="page" href="home.php">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle{$about_active}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    About
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item{$about_us_item}" href="about-us.php">About Us</a></li>
                                    <li><a class="dropdown-item{$management_item}" href="management_leadership.php">Management Leadership</a></li>
                                    <li><a class="dropdown-item{$chairman_message_item}" href="chairman_message.php">Chairman's Message</a></li>
                                    <li><a class="dropdown-item{$principal_message_item}" href="principal_message.php">Principal's Message</a></li>
                                    
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Academics</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Facilities</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAdmission" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Admission
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownAdmission">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Career</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Mandatory Disclosure</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Contact</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
        <main>
    EOT;
}

function template_footer()
{
    echo <<< EOT
                </main>

                <section class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4>About Us</h4>
                        <p>Harur International School is a Senior Secondary CBSE institution committed to academic excellence, character development, innovation, and holistic education in a safe and inspiring learning environment.</p>
                    </div>

                    <div class="col-md-3">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Academics</a></li>
                            <li><a href="#">Facilities</a></li>
                            <li><a href="#">Student Life</a></li>
                            <li><a href="#">Admissions</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4>Contact Us</h4>
                        <p class="hh"><b>Address:</b></p>
                        <p>Harur - Salem Main Road,<br>H. Doddampatti, Harur,<br>Dharmapuri District - 636 903</p>
                        <p class="hh"><b>Office & WhatsApp :</b></p>
                        <p><a href="tel:+917558149222">+91 7558149222</a></p>
                        <p class="hh"><b>Contact Number :</b></p>
                        <p><a href="tel:+91 7558146222">+91 7558146222</a> |<a href="+917558145222">+91 7558145222</a></p>
                    </div>

                    <div class="col-md-3">
                        <h4>Contact Location</h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.1910730894715!2d78.46892!3d12.030363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bac6ff148f19081%3A0x58e748077c536f9c!2sHarur%20International%20School!5e0!3m2!1sen!2sin!4v1787305538968!5m2!1sen!2sin" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                    </div>
                </div>
                <div class="row copy">
                    <p>© Harur International School. All Rights Reserved.</p>
                </div>


            </div>
        </section>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

            <script>
                AOS.init({
                    duration: 800,
                    once: true
                });
            </script>

                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        var header = document.querySelector('.bottom-header');
                        if (!header) return;

                        var stickyPoint = header.offsetTop;
                        var headerHeight = header.offsetHeight;
                        var lastScrollY = window.scrollY;
                        var ticking = false;

                        function updateHeaderState() {
                            var currentScrollY = window.scrollY;

                            // Toggle the sticky (fixed) state once we've scrolled past the header
                            if (currentScrollY > stickyPoint) {
                                if (!header.classList.contains('header-sticky')) {
                                    header.classList.add('header-sticky');
                                    document.body.style.paddingTop = headerHeight + 'px';
                                }
                            } else {
                                if (header.classList.contains('header-sticky')) {
                                    header.classList.remove('header-sticky');
                                    document.body.style.paddingTop = '';
                                }
                            }

                            // Hide the header when scrolling down, reveal it when scrolling up.
                            // Only kicks in once we've scrolled past the header itself, so it
                            // doesn't flicker while still at the top of the page.
                            if (currentScrollY > headerHeight) {
                                if (currentScrollY > lastScrollY) {
                                    header.classList.remove('header-hidden');
                                } else {
                                    header.classList.remove('header-hidden');
                                }
                            } else {
                                header.classList.remove('header-hidden');
                            }

                            lastScrollY = currentScrollY;
                            ticking = false;
                        }

                        window.addEventListener('scroll', function () {
                            if (!ticking) {
                                window.requestAnimationFrame(updateHeaderState);
                                ticking = true;
                            }
                        }, { passive: true });

                        updateHeaderState();
                    });
                </script>

            </body>
            </html>
    EOT;
}
