<?php $current = uri_string(); ?>


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="<?php echo base_url('/'); ?>" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0">
            <img class="img-fluid me-3" src="/assets/img/logo.png" alt="" />
        </h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
            <a href="<?= base_url('/') ?>" class="nav-item nav-link <?= $current === '' ? 'active' : '' ?>">Home</a>
            <a href="<?= base_url('about') ?>"
                class="nav-item nav-link <?= $current === 'about' ? 'active' : '' ?>">About Us</a>
            <a href="<?= base_url('gallery') ?>"
                class="nav-item nav-link <?= $current === 'gallery' ? 'active' : '' ?>">Gallery</a>
            <a href="<?= base_url('members/all') ?>"
                class="nav-item nav-link <?= $current === 'members/all' ? 'active' : '' ?>">Members</a>
            <a href="<?= base_url('events') ?>"
                class="nav-item nav-link <?= $current === 'events' ? 'active' : '' ?>">Events</a>
        </div>
    </div>
    <a href="<?php echo base_url('/contact'); ?>" class="btn btn-primary px-3 d-none d-lg-block">Contact Us</a>
</nav>
<!-- Navbar End -->
