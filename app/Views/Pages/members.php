<?php echo $this->extend('layouts/main'); ?>


<?php echo $this->section('content'); ?>

<?php echo $this->include('Partials/members'); ?>


<div class="container-xxl py-5">
    <div class="container">

        <table class="table table-striped table-hover table-bordered" id="membersTable">
            <thead class="bg-primary text-white">
                <tr>
                    <th>SN</th>
                    <th scope="col">Name</th>
                    <th scope="col">Organization</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (! empty($teams)): ?>
                <h3 class="text-center">Coordinators</h3>
                <?php foreach ($teams as $i => $team): ?>
                <tr>
                    <td><?php echo $i + 1; ?></td>
                    <td class="fw-bold">Mr. <?php echo $team['name']; ?></td>
                    <td class="fw-bold"><?php echo $team['office_name'] ?? '--'; ?></td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="<?php echo base_url('members/single/' . $team['id']); ?>">View</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>




<?php echo $this->endSection(); ?>
