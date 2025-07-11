<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px">
            <h1 class="display-6 mb-5">Dais Members</h1>
        </div>
        <div class="row g-4">

            <?php if (!empty($members)): ?>        

            <div class="row g-4 president">
                <?php for ($i = 0; $i <= 0 && isset($members[$i]); $i++): ?>
                <?= view('Partials/member_card', ['member' => $members[$i]]) ?>
                <?php endfor; ?>
            </div>

            <div class="row g-4 president">
                <?php for ($i = 1; $i <= 7 && isset($members[$i]); $i++): ?>
                <?= view('Partials/member_card', ['member' => $members[$i]]) ?>
                <?php endfor; ?>
            </div>


            <?php endif; ?>


        </div>
    </div>
</div>
<!-- Team End -->
