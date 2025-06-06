<?php echo $this->extend('layouts/main'); ?>


<?php echo $this->section('content'); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-7">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h4 class="mb-0 text-white">Member Profile</h4>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="/assets/img/team-1.jpg" alt="Anand Bhatia's Profile Photo" class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover; border: 3px solid #007bff;">
                    </div>

                    <div class="row mb-2">
                        <div class="col-sm-4 text-sm-end"><strong>Name:</strong></div>
                        <div class="col-sm-8">Anand Bhatia</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 text-sm-end"><strong>Date of Birth:</strong></div>
                        <div class="col-sm-8">08/10/1972</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 text-sm-end"><strong>Wife:</strong></div>
                        <div class="col-sm-8">Mrs Rinku Bhatia</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 text-sm-end"><strong>Date of Marriage:</strong></div>
                        <div class="col-sm-8">11/12/1999</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 text-sm-end"><strong>Father's Name:</strong></div>
                        <div class="col-sm-8">Mr. G.S. Bhatia</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 text-sm-end"><strong>Mother's Name:</strong></div>
                        <div class="col-sm-8">Late Smt Savitri Bhatia</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 text-sm-end"><strong>Qualification:</strong></div>
                        <div class="col-sm-8">Graduate</div>
                    </div>
                    <hr class="my-4">
                    <div class="row mb-2">
                        <div class="col-sm-4 text-sm-end"><strong>Residential Address:</strong></div>
                        <div class="col-sm-8">206, Virendra Villa, Patel Nagar, City Centre</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 text-sm-end"><strong>Residential Phone:</strong></div>
                        <div class="col-sm-8">+91 9301102936</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 text-sm-end"><strong>Mobile:</strong></div>
                        <div class="col-sm-8">+91 9301102936</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 text-sm-end"><strong>Email:</strong></div>
                        <div class="col-sm-8"><a href="mailto:anandbhatia92688@gmail.com">anandbhatia92688@gmail.com</a></div>
                    </div>
                    <hr class="my-4">
                    <div class="row mb-2">
                        <div class="col-sm-4 text-sm-end"><strong>Organization/Shop:</strong></div>
                        <div class="col-sm-8">Bhatia Food Products</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 text-sm-end"><strong>Office Phone:</strong></div>
                        <div class="col-sm-8">+91 9301102936</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 text-sm-end"><strong>Office Address:</strong></div>
                        <div class="col-sm-8">Dairyman Icecream Parlour, Central Mini Mall, Near Achleshwar Temple, Gwalior</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>