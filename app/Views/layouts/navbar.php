<?php $current = uri_string(); ?>


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="<?php echo base_url('/'); ?>" class="navbar-brand d-flex align-items-center">
        <img class="img-fluid me-3" src="/assets/img/logo.png" alt="" />
        <div>
            <h1 class="mt-2 headingMain">
                <?= config('App')->name ?>
                <span class="hiddenOnMobile"><?= config('App')->nameSuffix ?></span>
            </h1>
            <h1 class="mt-2 headingMain hiddenOnDesktop">
                <?= config('App')->nameSuffix ?>
            </h1>
        </div>
    </a>

    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
        <div class="navbar-nav  bg-light rounded pe-4 py-3 py-lg-0">
            <a href="<?= base_url('/') ?>" class="nav-item nav-link <?= $current === '' ? 'active' : '' ?>">Home</a>
            <a href="<?= base_url('/members/dice-and-working-committee') ?>"
                class="nav-item nav-link <?= $current === 'members/dice-and-working-committee' ? 'active' : '' ?>">Dice
                & Working Committee</a>
            <a href="<?= base_url('members/all') ?>"
                class="nav-item nav-link <?= $current === 'members/all' ? 'active' : '' ?>">Members</a>
            <a href="<?= base_url('gallery') ?>"
                class="nav-item nav-link <?= $current === 'gallery' ? 'active' : '' ?>">Gallery</a>
            <a href="<?= base_url('events') ?>"
                class="nav-item nav-link <?= $current === 'events' ? 'active' : '' ?>">Upcoming Events</a>
            <a href="<?= base_url('contact') ?>"
                class="nav-item nav-link <?= $current === 'contact' ? 'active' : '' ?>">Contact Us</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->


<?php $current = uri_string(); ?>
