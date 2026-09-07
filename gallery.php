<?php include "function.php" ?>
<?php template_header("Gallery | Harur International School", "Explore the Harur International School Gallery featuring school events, academic activities, celebrations, sports, and memorable moments from campus life.")?>
<section class="page-banner" id="about">
    <h1>Gallery</h1>
</section>
<section class="gallery-1">
    <div class="container">
        <div class="heading-center">
            <span class="badge">PRACTICAL LEARNING</span>
            <h2 class="section-title">Learning Through Innovation</h2>   
        </div>
        <div class="row">
                <div class="col-12 col-md-4 col-lg-4">
                    <img src="assets/images/gal-act-1.webp" alt="Activity-1" class="img-fluid gallery-popup-img" data-index="0">
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <img src="assets/images/gal-act-1.webp" alt="Activity-1" class="img-fluid gallery-popup-img" data-index="1">
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <img src="assets/images/gal-act-1.webp" alt="Activity-1" class="img-fluid gallery-popup-img" data-index="2">
                </div>
                
            </div>
    </div>
</section>

<!-- Gallery Lightbox Popup -->
<div class="gallery-lightbox-overlay" id="galleryLightbox">
    <button type="button" class="gallery-lightbox-close" id="galleryLightboxClose" aria-label="Close">&times;</button>
    <button type="button" class="gallery-lightbox-nav nav-prev" id="galleryLightboxPrev" aria-label="Previous image">&#10094;</button>
    <figure class="gallery-lightbox-figure">
        <img src="" alt="" id="galleryLightboxImg">
        <figcaption id="galleryLightboxCaption"></figcaption>
    </figure>
    <button type="button" class="gallery-lightbox-nav nav-next" id="galleryLightboxNext" aria-label="Next image">&#10095;</button>
</div>

<?php template_footer()?>