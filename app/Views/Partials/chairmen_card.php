 <?php
    extract($chairmen);
    $finalimage = 'default.png';
    if($member_type == 'past president') {
        $finalimage = 'ambulance.jpeg';
    }else if($member_type == 'birthday chairmen') {
        $finalimage = 'birthday.jpeg';
    }else{
        $finalimage = 'anniversary.jpeg';
    }
?>

 <div class="col-lg-4 col-md-6">
     <div class="event-card h-100">
         <img src="/assets/img/events/<?php echo esc($finalimage) ?>" alt="<?= esc($finalimage); ?>" class="event-image">
         <div class="event-content">
             <h4 class="event-title"><?= esc($member_type == 'past president' ? 'Ambulance Chairmen' : ucwords($member_type)); ?></h4>             
             <div class="event-info">
                 <p class="event-date-time"><strong>Name:</strong><?= esc($name); ?></p>       
                 <p class="event-date-time"><strong>Mobile:</strong><?= esc($mobile); ?></p>                 
             </div>
         </div>
     </div>
 </div>
