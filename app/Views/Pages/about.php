<?php echo $this->extend('layouts/main'); ?>


<?php echo $this->section('content'); ?>

<?php echo $this->include('Partials/about'); ?>

<?php  $this->include('Partials/latest_gallery'); ?>

<?php echo $this->include('Partials/contact_form'); ?>

<?php echo $this->endSection(); ?>