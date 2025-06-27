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
                                <p class="fs-5 text-body mb-5">
                                    Preserving Sindhi culture and serving the community with devotion.
                                </p>
                            </div>
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
                                <p class="fs-5 text-body mb-5">
                                    Committed to religious, cultural, and social upliftment.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->

<?php echo $this->include('Partials/about'); ?>

<!-- Facts Start -->
<div class="container-fluid overflow-hidden my-5 px-lg-0">
    <div class="container facts px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 facts-text wow fadeIn" data-wow-delay="0.1s">
                <div class="h-100 px-4 ps-lg-0">
                    <h1 class="text-white mb-4">Welcome to the Sindhu Welfare Society, Gwalior</h1>
                    <p class="text-light mb-5">
                        Dedicated to fostering unity, preserving our rich Sindhi traditions, and supporting the well-being of the Sindhi community in Gwalior. The Sindhu Welfare Society is a vibrant hub where members can connect, share, celebrate our culture, participate in events, and support one another. Explore our initiatives, view upcoming events, browse our photo galleries, and find out how you can be a part of our growing family.
                    </p>
                    <a href="" class="align-self-start btn btn-secondary py-3 px-5">Explore Events</a>
                </div>
            </div>
            <div class="col-lg-6 facts-counter wow fadeIn" data-wow-delay="0.5s">
                <div class="h-100 px-4 pe-lg-0">
                    <div class="row g-5">
                        <div class="col-sm-6">
                            <h1 class="display-5" data-toggle="counter-up">1234</h1>
                            <p class="fs-5 text-primary">Valued Members</p>
                        </div>
                        <div class="col-sm-6">
                            <h1 class="display-5" data-toggle="counter-up">1234</h1>
                            <p class="fs-5 text-primary">Years of Community Service</p>
                        </div>
                        <div class="col-sm-6">
                            <h1 class="display-5" data-toggle="counter-up">1234</h1>
                            <p class="fs-5 text-primary">Cultural Programs Organized</p>
                        </div>
                        <div class="col-sm-6">
                            <h1 class="display-5" data-toggle="counter-up">1234</h1>
                            <p class="fs-5 text-primary">Active Volunteers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->


<?php echo $this->include('Partials/events'); ?>

<?php echo $this->include('Partials/dice_members'); ?>

<?php echo $this->include('Partials/contact_form'); ?>



<?php echo $this->endSection(); ?>
