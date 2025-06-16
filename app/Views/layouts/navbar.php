<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="<?php echo base_url('/') ?>" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0">
            <img class="img-fluid me-3" src="/assets/img/logo.png" alt="" />
        </h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
            <a href="<?php echo base_url('/') ?>" class="nav-item nav-link active">Home</a>
            <a href="<?php echo base_url('/about') ?>" class="nav-item nav-link">About Us</a>
            <!-- <a href="service.html" class="nav-item nav-link">Our Vision</a> -->
            <a href="<?php echo base_url('/gallery') ?>" class="nav-item nav-link">Gallery</a>
            <a href="<?php echo base_url('members/all') ?>" class="nav-item nav-link">Members</a>
            <a href="contact.html" class="nav-item nav-link">Events</a>
            <!-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu bg-light border-0 m-0">
                    <a href="feature.html" class="dropdown-item">Features</a>
                    <a href="appointment.html" class="dropdown-item">Appointment</a>
                    <a href="team.html" class="dropdown-item">Team Members</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div> -->
        </div>
    </div>
    <a href="<?php echo base_url('/contact') ?>" class="btn btn-primary px-3 d-none d-lg-block">Contact Us</a>
</nav>
<!-- Navbar End -->
