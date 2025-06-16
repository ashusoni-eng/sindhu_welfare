<section class="hero-gallery-section">
    <div class="container">
        <h1>Moments That Inspire Change</h1>
        <p>Witness the impact of our work and the lives we've touched through our vibrant photo gallery. Each image
            tells a story of hope, community, and progress.</p>
    </div>
</section>

<section class="container my-5">
    <h2 class="text-center mb-5 gallery-main-heading">Our Work in Pictures</h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        <?php if (! empty($gallery)): ?>
        <?php foreach ($gallery as $photo): ?>
            <?= view('Partials/gallery_card', ['photo' => $photo]); ?>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>

<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0 pb-0">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img src="/assets/img/event1.jpeg" class="img-fluid" id="modalImage" alt="Enlarged Image">
            </div>
        </div>
    </div>
</div>
