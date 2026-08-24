<?php
function template_header($title, $metadesc)
{
    $metadesc = trim(htmlspecialchars($metadesc));
    $title = htmlspecialchars($title);
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
            <!-- Mobile/Tablet header: logo + menu icon only, shown below top-header -->
            <div class="mobile-header d-lg-none">
                <div class="mobile-header-inner">
                    <div class="logo">
                        <img src="assets/images/logo.webp" alt="" class="img-fluid">
                    </div>
                    <button class="navbar-toggler mobile-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="bi bi-list"></i>
                    </button>
                </div>
            </div>
            <div class="middle-header d-none d-lg-block">
                <div class="row">
                    <div class="col-md-4 col-lg-4 logo">
                        <img src="assets/images/logo.webp" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-8 col-lg-8 header-content">
                        <ul class="list">
                            <li class="icon-box">
                                <div class="icon">
                                    <i class="bi bi-telephone"></i>
                                </div>
                                <div class="box">
                                    <h4 class="text-white">Call Us</h4>
                                    <p><a href="tel:+917558149222" class="link">+91 7558149222</a></p>
                                </div>


                            </li>
                            <li class="icon-box">
                                <div class="icon">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div class="box">
                                    <h4 class="text-white">Email Us</h4>
                                    <p><a href="mailto:principal@harurinternationalschool.com" class="link">principal@harurinternationalschool.com </a>
                                    </p>
                                </div>

                            </li>
                            <li class="cta-button">
                                <a href="" class="btn"><i class="bi bi-mortarboard-fill me-2"></i>Admission Enquiry</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="bottom-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <button class="navbar-toggler d-none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        About
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#">Academics</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#">Facilities</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Admission
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
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

                <script>
                document.addEventListener("DOMContentLoaded", function () {

                    const animatedElements = document.querySelectorAll(".animate-box");

                    const observer = new IntersectionObserver(function (entries) {

                        entries.forEach(function (entry) {

                            if (entry.isIntersecting) {

                                const element = entry.target;
                                const animation = element.getAttribute("data-animate");

                                if (animation) {
                                    element.classList.add(
                                        "animate__animated",
                                        animation
                                    );
                                }

                                observer.unobserve(element);
                            }

                        });

                    }, {
                        threshold: 0.15
                    });

                    animatedElements.forEach(function (element) {
                        observer.observe(element);
                    });

                });
                </script>

            </body>
            </html>
    EOT;
}
