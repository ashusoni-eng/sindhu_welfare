<!-- Footer Start -->
<div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4 d-flex align-items-center gap-2">
                    <div>
                        <img class="img-fluid me-3 footerLogo" src="/assets/img/logo.png" alt="" />
                    </div>
                    <div>
                        <?= config('App')->siteName; ?>
                    </div>
                </h5>
                <p>
                    <?= config('App')->siteName; ?>, Gwalior is dedicated to preserving cultural heritage, promoting spiritual
                    values, and supporting community well-being.
                </p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square me-1" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Address</h5>
                <p>
                    <i class="fa fa-map-marker-alt me-3"></i><?php echo config('App')->address; ?>
                </p>
                <p><i class="fa fa-phone-alt me-3"></i><?php echo config('App')->phone; ?></p>
                <p><i class="fa fa-envelope me-3"></i><?php echo config('App')->email; ?></p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Quick Links</h5>
                <a class="btn btn-link" href="<?= base_url('/') ?>">Home</a>
                <a class="btn btn-link" href="<?= base_url('/members/dice-and-working-committee') ?>">Dais & Working
                    Committee</a>
                <a class="btn btn-link" href="<?= base_url('members/all') ?>">Members</a>
                <a class="btn btn-link" href="<?= base_url('gallery') ?>">Gallery</a>
                <a class="btn btn-link" href="<?= base_url('events') ?>">Upcoming Events</a>
                <a class="btn btn-link" href="<?= base_url('contact') ?>">Contact Us</a>
            </div>

            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Newsletter</h5>
                <p>Subscribe our newsletter to get latest events and news</p>
                <div class="position-relative mx-auto" style="max-width: 400px">
                    <form action="<?= base_url('email/subscribe') ?>" id="email-form">
                        <input name="email" class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="email"
                            placeholder="Your email" required />
                        <button type="submit" id="sendButton"
                            class="btn btn-secondary py-2 position-absolute top-0 end-0 mt-2 me-2">
                            SignUp
                            <span class="spinner-border spinner-border-sm ms-2 d-none" role="status" aria-hidden="true"
                                id="btnSpinner"></span>
                        </button>
                    </form>
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="error1">
                        Something went wrong from our side, Please try again!
                    </div>
                    <div class="alert alert-success mt-2 d-none" role="alert" id="success1">
                        Thank you for subscribe.
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#"><?php echo config('App')->name . ' @' . date('Y'); ?></a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    Designed & Developed By <a href="https://primetechlogix.vercel.app/" class="text-white">PrimeTechLogix</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#email-form').on('submit', function(e) {
            e.preventDefault();

            $('#sendButton').prop('disabled', true);
            $('#btnSpinner').removeClass('d-none');

            $.ajax({
                url: $(this).attr('action'),
                type: "POST",
                data: $(this).serialize(),
                success: function(res) {
                    $('#btnSpinner').addClass('d-none');
                    $('#sendButton').prop('disabled', false);

                    if (res.status) {
                        $("#error1").addClass('d-none');
                        $("#success1").removeClass('d-none');
                        $('#email-form')[0].reset();
                    } else {
                        $("#success1").addClass('d-none');
                        $("#error1").removeClass('d-none');
                    }
                },
                error: function() {
                    $('#btnSpinner').addClass('d-none');
                    $('#sendButton').prop('disabled', false);
                    $("#success1").addClass('d-none');
                    $("#error1").removeClass('d-none');
                }
            });
        });
    });
</script>
