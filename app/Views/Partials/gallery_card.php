
<div class="col">
    <!-- <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#imageModal" data-img-src="/assets/img/event1.jpeg"> -->
    <div class="gallery-item">
        <a href="<?= $photo['album_url'] ?>" target="_blank">
            <img src="/assets/img/gallery/<?= $photo['thumbnail'] ?>" class="img-fluid" alt="Community Event"  onerror="this.onerror=null; this.src='/assets/img/gallery/dummy.jpeg';">
        </a>
        <div class="gallery-overlay">
            <h5><?= date('d-M-Y', strtotime($photo['date'])) ?></h5>
            <p><?= $photo['title'] ?></p>
        </div>
    </div>
</div>
