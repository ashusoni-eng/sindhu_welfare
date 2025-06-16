<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px">
            <h1 class="display-6 mb-5">Dice Members</h1>
        </div>
        <div class="row g-4">

            <?php if (! empty($members)): ?>
                <?php foreach ($members as $member): ?>

                    <?= view('Partials/member_card', ['member' => $member]); ?>

                <?php endforeach; ?>

            <?php endif; ?>

        </div>
    </div>
</div>
<!-- Team End -->
