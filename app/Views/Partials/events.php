<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-6 mb-4">Latest Society Events</h1>
            <p class="lead">Stay updated with our latest cultural programs, gatherings, and welfare activities for the Sindhi community in Gwalior.</p>
        </div>
        <div class="row g-4 justify-content-center">
            <?php if (! empty($events)): ?>
                <?php foreach ($events as $event): ?>
                    <?php echo view('Partials/event_card', ['event' => $event]); ?>
                <?php endforeach; ?>
            <?php endif; ?>
         </div>
    </div>
</div>
