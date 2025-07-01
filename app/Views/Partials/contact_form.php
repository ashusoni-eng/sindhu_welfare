<div class="container-fluid appointment my-1 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                <h1 class="display-6 text-white mb-5">
                    Questions? Get in Touch with <?= config('App')->siteName; ?>!
                </h1>
                <p class="text-white mb-5">
                    The <?= config('App')->siteName; ?> is your dedicated point of contact in Gwalior for all things related to
                    our vibrant Sindhi community. From cultural events and celebrations to welfare initiatives, youth
                    programs, and membership information, we're here to connect and support you. Please get in touch
                    using the form or call us directly with your queries or suggestions.
                </p>
                <div class="bg-white rounded p-3">
                    <div class="d-flex align-items-center bg-primary rounded p-3">
                        <img class="flex-shrink-0 rounded-circle me-3" src="/assets/img/contact.jpg" style="width:10%"
                            alt="" />
                        <h6 class="text-white mb-0 email">
                            Email Us:
                            <?php echo config('App')->email; ?>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-white rounded p-5">
                    <div class="alert alert-danger" role="alert" id="error">
                        Something went wrong from our side, Please try again!
                    </div>

                    <div class="alert alert-success" role="alert" id="success">
                        Thank You, Your message has been sent.
                    </div>
                    <form name="frm-contact" id="frm-contact">
                        <div class="row g-3">
                            <div class="col-sm-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="gname" placeholder="Gurdian Name"
                                        name="name" required />
                                    <label for="gname">Your Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="gmail"
                                        placeholder="Gurdian Email" name="email" />
                                    <label for="gmail">Your Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="cname" placeholder="Child Name"
                                        name="mobile" required />
                                    <label for="cname">Your Mobile</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 80px" name="message"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit" id="sendButton">
                                    Submit Enquiry
                                    <span class="spinner-border spinner-border-sm ms-2 d-none" role="status"
                                        aria-hidden="true" id="btnSpinner"></span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $("#error").hide();
    $("#success").hide();
    $('#frm-contact').on('submit', function(e) {
        e.preventDefault();

        $('#sendButton').prop('disabled', true);
        $('#btnSpinner').removeClass('d-none');

        $.ajax({
            url: "<?php echo base_url('contact/send'); ?>",
            type: "POST",
            data: $(this).serialize(),
            success: function(res) {
                if (res.status) {
                    $("#error").hide();
                    $("#success").show();
                    $('#btnSpinner').addClass('d-none');
                    $('#sendButton').prop('disabled', false);
                    $('#frm-contact')[0].reset();
                } else {
                    $("#success").hide();
                    $("#error").show();
                    $('#btnSpinner').addClass('d-none');
                    $('#sendButton').prop('disabled', false);
                }
            },
            error: function() {
                alert('Something went wrong!');
            }
        });
    });
</script>
