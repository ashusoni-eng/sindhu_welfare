<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px">
            <h1 class="display-6 mb-5">Past Presidents</h1>
        </div>
        <div class="row g-4">
            <?php if (!empty($former_presidents)): ?>

            <div class="row g-4 president">
                <?php for ($i = 0; $i <= 6 && isset($former_presidents[$i]); $i++): ?>
                <?= view('Partials/member_card', ['member' => $former_presidents[$i]]) ?>
                <?php endfor; ?>
            </div>


            <?php endif; ?>


        </div>
    </div>
</div>
<!-- Team End -->
