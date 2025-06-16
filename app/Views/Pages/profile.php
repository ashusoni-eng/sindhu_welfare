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
                        <img src="/members/<?php echo esc($photo) ?>" alt="<?php echo esc($member['name']) ?>" class="img-fluid rounded-circle" style="width: 200px; height: 200px; object-fit: contain; border: 3px solid #953700;background-color: #D7CED1">
                    </div>

                    <div class="row mb-2">
                        <div class="col-sm-4 text-sm-end"><strong>Name:</strong></div>
                        <div class="col-sm-8"><?php echo format_father_name($member['name']) ?? '' ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 text-sm-end"><strong>Date of Birth:</strong></div>
                        <div class="col-sm-8"><?php echo esc($member['dob']) ?? '--' ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 text-sm-end"><strong>Wife:</strong></div>
                        <div class="col-sm-8"><?php echo esc($member['wife']) ? 'Mrs. ' . esc($member['wife']) : '--' ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 text-sm-end"><strong>Date of Marriage:</strong></div>
                        <div class="col-sm-8"><?php echo esc($member['date_of_marriage']) ?? '--' ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 text-sm-end"><strong>Father's Name:</strong></div>
                        <div class="col-sm-8"><?php echo format_father_name($member['father_name'] ?? '') ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 text-sm-end"><strong>Mother's Name:</strong></div>
                        <div class="col-sm-8"><?php echo format_mother_name(esc($member['mother_name']) ?? '') ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 text-sm-end"><strong>Qualification:</strong></div>
                        <div class="col-sm-8"><?php echo esc($member['qualification']) ?? '--' ?></div>
                    </div>
                    <hr class="my-4">
                    <div class="row mb-2">
                        <div class="col-sm-4 text-sm-end"><strong>Residential Address:</strong></div>
                        <div class="col-sm-8"><?php echo esc($member['residencial_address']) ?? '--' ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 text-sm-end"><strong>Residential Phone:</strong></div>
                        <div class="col-sm-8"><?php echo esc($member['residencial_phone']) ?? '--' ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 text-sm-end"><strong>Mobile:</strong></div>
                        <div class="col-sm-8"><?php echo esc($member['mobile']) ?? '--' ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 text-sm-end"><strong>Email:</strong></div>
                        <div class="col-sm-8"><a href="mailto:<?php echo esc($member['email']) ?? '--' ?>"><?php echo esc($member['email']) ?? '--' ?></a></div>
                    </div>
                    <hr class="my-4">
                    <div class="row mb-2">
                        <div class="col-sm-4 text-sm-end"><strong>Organization/Shop:</strong></div>
                        <div class="col-sm-8"><?php echo esc($member['office_name']) ?? '--' ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 text-sm-end"><strong>Office Phone:</strong></div>
                        <div class="col-sm-8"><?php echo esc($member['office_phone']) ?? '--' ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4 text-sm-end"><strong>Office Address:</strong></div>
                        <div class="col-sm-8"><?php echo esc($member['office_address']) ?? '--' ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>