<?php include 'DataBase.php' ?>

<html>

<section class="hero-wrap js-fullheight" style="height: 643px;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center"
             style="height: 643px;">
            <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center fadeInUp ftco-animated">
                <div class="text text-center">
                    <span class="subheading"><?= $iam[0][$lang] ?> </span>
                    <h1>Radu Nicolae</h1>
                    <h2 style="font-size: 2rem;"> <?= $iam[1][$lang] ?>
                        <span
                                class="txt-rotate"
                                data-period="2000"
                                data-rotate='[ "Web Developer.", "Web Designer.", "Javascript Developer.",  "Java Developer."]'></span>
                    </h2>
                </div>
            </div>
        </div>

        <div class="mouse">
            <a href="#" class="mouse-icon">
                <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
            </a>
        </div>
</section>

</html>
