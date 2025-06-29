<div class="container-fluid appointment my-1 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                <h1 class="display-6 text-white mb-5">
                    Questions? Get in Touch with Sindhu Welfare Society!
                </h1>
                <p class="text-white mb-5">
                   The Sindhu Welfare Society is your dedicated point of contact in Gwalior for all things related to our vibrant Sindhi community. From cultural events and celebrations to welfare initiatives, youth programs, and membership information, we're here to connect and support you. Please get in touch using the form or call us directly with your queries or suggestions.
                </p>
                <div class="bg-white rounded p-3">
                    <div class="d-flex align-items-center bg-primary rounded p-3">
                        <img class="flex-shrink-0 rounded-circle me-3" src="/assets/img/contact.jpg" style="width:6%"
                            alt="" />
                        <h5 class="text-white mb-0">
                            Email Us:
                            <?php echo config('App')->email; ?>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-white rounded p-5">
                    <form>
                        <div class="row g-3">
                            <div class="col-sm-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="gname"
                                        placeholder="Gurdian Name" />
                                    <label for="gname">Your Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="gmail"
                                        placeholder="Gurdian Email" />
                                    <label for="gmail">Your Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="cname"
                                        placeholder="Child Name" />
                                    <label for="cname">Your Mobile</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 80px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">
                                    Submit Enquiry
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
