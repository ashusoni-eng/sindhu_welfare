<?php echo $this->extend('layouts/main'); ?>


<?php echo $this->section('content'); ?>

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item ">
                <!-- <img class="w-100 homeImg" src="/assets/img/home3.jpg" alt="Image" />           -->
                <picture>
                    <source srcset="/assets/img/home1.jpg" media="(max-width: 600px)">
                    <img src="/assets/img/home3.jpg" alt="Description of image" class="w-100 homeImg">
                </picture>

                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <h1 class="display-3 text-dark mb-4 animated slideInDown">
                                    Unity, Culture, Service, Devotion
                                </h1>
                                <p class="fs-5 text-body ">
                                    Preserving and serving the community with devotion.
                                </p>
                            </div>
                        </div>
                        <div class="founder fw-bold">
                            <h5><?= config('App')->founderPrefix ?></h5>
                            <h5><?= config('App')->founderName ?></h5>
                            <p class="fs-6 text-primary ">
                                Founder Chairman <br>
                                (<?= config('App')->founderDOB ?> – <?= config('App')->founderDOE ?>)<br>                                
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item active">
                <!-- <img class="w-100 homeImg" src="/assets/img/home3.jpg" alt="Image" /> -->
                <picture>
                    <source srcset="/assets/img/home12.jpg" media="(max-width: 600px)">
                    <img src="/assets/img/home11.jpg" alt="Description of image" class="w-100 homeImg">
                </picture>
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <h1 class="display-3 text-dark mb-4 animated slideInDown">
                                    Empowering Community Through Values
                                </h1>
                                <p class="fs-5 text-body ">
                                    Committed to religious, cultural, and social upliftment.
                                </p>
                            </div>
                        </div>
                        <div class="founder fw-bold">
                            <h5><?= config('App')->founderPrefix ?></h5>
                            <h5><?= config('App')->founderName ?></h5>
                            <p class="fs-6 text-primary ">
                                Founder Chairman <br>
                                (<?= config('App')->founderDOB ?> – <?= config('App')->founderDOE ?>)<br>                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<?php echo $this->include('Partials/about'); ?>

<?php echo $this->include('Partials/former_president'); ?>


<?php echo $this->include('Partials/dice_members'); ?>

<?php echo $this->include('Partials/facts'); ?>



<?php echo $this->include('Partials/contact_form'); ?>



<?php echo $this->endSection(); ?>
