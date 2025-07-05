<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-6 mb-4">Our Coordinators</h1>            
        </div>
        <div class="row g-4 justify-content-center">
            <?php if (! empty($chairmens)): ?>
                <?php foreach ($chairmens as $chairmen): ?>
                    <?php echo view('Partials/chairmen_card', ['chairmen' => $chairmen]); ?>
                <?php endforeach; ?>
            <?php endif; ?>
         </div>
    </div>
</div>
