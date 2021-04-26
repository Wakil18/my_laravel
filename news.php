<?php

  include_once 'template/head.php';
  include_once 'template/header.php';       //        <!-- Top Header_Area -->
  include_once 'template/nav-bar.php';     //	   <!-- Header_Area -->
  //include_once 'template/slide-bar.php';  //    <!-- Slider area -->

?>


<!-- Banner area -->
<section class="banner_area" data-stellar-background-ratio="0.5">
    <h2>Our Gallery </h2>
    <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li><a href="#" class="active">Services</a></li>
    </ol>
</section>
<!-- End Banner area -->

<!-- blog-2 area -->
<section class="blog_tow_area">
    <div class="container">
        <div class="tittle wow fadeInUp">
            <h2>News</h2>
            <h4>WE Offres Multiple Anti Air Pollution Services</h4>
        </div><br><br><br>
        <div class="row blog_tow_row">
            <div class="col-md-4 col-sm-6">
                <div class="renovation" id="news-1">
                    <img src="images/blog/renovation/cns-1.jpg" alt="">
                    <div class="renovation_content">
                        <a class="clipboard" href="#"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                        <a class="tittle" href="#">Exxon Democrats support oil purchases </a>
                        <p>Following a meeting with Big Oil CEOs, Trump announced in a briefing this afternoon new
                            efforts to support the oil and gas industry. He promised to keep the industry in “good
                            shape” and called for allowing oil companies to use the Strategic Petroleum Reserve to store
                            oil until the market improves.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="renovation" id="news-2">
                    <img src="images/blog/renovation/cns-2.jpg" alt="">
                    <div class="renovation_content">
                        <a class="clipboard" href="#"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                        <a class="tittle" href="#">Air Pollution applauds MLGW’s decision to suspend utility disconnects
                            for non-payment during coronavirus crisis </a>
                        <p>As the coronavirus pandemic sweeps across Memphis, the Mid-South, and the country we at
                            Friends of the Earth support and applaud the decision of Memphis Light, Gas & Water to
                            temporarily suspend disconnects for non-payments chronic pulmonary disease disease.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="renovation" id="news-3">
                    <img src="images/blog/renovation/cns-3.jpg" alt="">
                    <div class="renovation_content">
                        <a class="clipboard" href="#"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                        <a class="tittle" href="#">New analysis highlights dangers of fracking bailout. </a>
                        <p>Friends of the Earth released an analysis today addressing the ethical, environmental and
                            financial implications of a bailout for the fracking industry, which could benefit to the
                            tune of billions from proposed stimulus legislation in both the House and the Senate chronic
                            obstructive pulmonary disease, lung cancer and.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End blog-2 area -->



<!-- Start Gallery 1 area -->

<div class="tittle wow fadeInUp">
            <h2>Our Photo Gallery</h2>
<!--            <h4>WE Offres Multiple Anti Air Pollution Services</h4>-->
        </div><br><br><br>
<!-- Container for the image gallery -->
<div class="container">

    <!-- Full-width images with number text -->
    <div class="mySlides">
        <div class="numbertext">1 / 6</div>
        <img src="images/gal/1.jpg" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">2 / 6</div>
        <img src="images/gal/2.jpg" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">3 / 6</div>
        <img src="images/gal/3.jpg" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">4 / 6</div>
        <img src="images/gal/4.jpg" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">5 / 6</div>
        <img src="images/gal/5.jpg" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">6 / 6</div>
        <img src="images/gal/6.jpg" style="width:100%">
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Image text -->
    <div class="caption-container">
        <p id="caption"></p>
    </div>

    <!-- Thumbnail images -->
    <div class="row">
        <div class="column">
            <img class="demo cursor" src="images/gal/1.jpg" style="width:100%" onclick="currentSlide(1)"
                alt="The Woods">
        </div>
        <div class="column">
            <img class="demo cursor" src="images/gal/2.jpg" style="width:100%" onclick="currentSlide(2)"
                alt="Cinque Terre">
        </div>
        <div class="column">
            <img class="demo cursor" src="images/gal/3.jpg" style="width:100%" onclick="currentSlide(3)"
                alt="Mountains and fjords">
        </div>
        <div class="column">
            <img class="demo cursor" src="images/gal/4.jpg" style="width:100%" onclick="currentSlide(4)"
                alt="Northern Lights">
        </div>
        <div class="column">
            <img class="demo cursor" src="images/gal/5.jpg" style="width:100%" onclick="currentSlide(5)"
                alt="Nature and sunrise">
        </div>
        <div class="column">
            <img class="demo cursor" src="images/gal/6.jpg" style="width:100%" onclick="currentSlide(6)"
                alt="Snowy Mountains">
        </div>
    </div>
</div>

<!-- End Gallery 1 area -->



<!-- End Javascript for Gallery 1 area -->
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>

<!-- End Javascript for Gallery 1 area -->



<?php
    include_once 'template/footer.php';  //   <!-- Footer Area -->
?>