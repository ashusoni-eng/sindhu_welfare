


<?php echo $this->extend('layouts/main'); ?>


<?php echo $this->section('content'); ?>

<div class="container-xxl py-5 d-flex justify-content-center flex-column align-items-center">
    <?= view('Partials/member_card', ['member' => $member]); ?>

    <div class="mt-4">
        <a href="<?= base_url('member/profile/' . $member['id']) ?>" class="btn btn-primary me-2 px-5">
            View Profile
        </a>
        <a href="<?= base_url('members/all') ?>" class="btn btn-secondary px-5">
            Back
        </a>
    </div>
</div>


<?php echo $this->endSection(); ?>