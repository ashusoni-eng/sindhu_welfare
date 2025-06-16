 <?php
    extract($event);
    $imagePath  = FCPATH .  '/assets/img/events/' . $image;
    $finalimage = (is_file($imagePath) && ! empty($image)) ? $image : 'default.png';
?>

 <div class="col-lg-4 col-md-6">
     <div class="event-card h-100">
         <img src="/assets/img/events/<?php echo esc($finalimage) ?>" alt="<?= esc($finalimage); ?>" class="event-image">
         <div class="event-content">
             <h4 class="event-title"><?= esc($title); ?></h4>
             <p class="event-short-description"><?= esc($description); ?></p>
             <div class="event-info">
                 <p class="event-date-time"><strong>Date:</strong><?= esc($date); ?></p>
                 <p class="event-date-time"><strong>Time:</strong> <?= esc($time); ?> onwards</p>
                 <p class="event-location"><strong>Venue:</strong> <?= esc($location); ?></p>
             </div>
         </div>
     </div>
 </div>
