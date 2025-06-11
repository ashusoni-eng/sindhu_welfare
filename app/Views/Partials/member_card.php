 <?php extract($member); ?>
 <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
     <a href="<?php echo base_url('member/profile'); ?>">
         <div class="team-item rounded">
             <img class="img-fluid" src="/assets/img/team-1.jpg" alt="" />
             <div class="text-center p-4">
                 <h5><?= esc($name) ?></h5>
                 <span><?= ucfirst(esc($member_type)) ?></span>
             </div>
             <div class="team-text text-center bg-white p-4">
                 <h5><?= esc($office_name ?? $name) ?></h5>
                 <p><?= ucfirst(esc($office_name ? 'Ogranization' : 'Member')) ?></p>                
             </div>
         </div>
     </a>
 </div>
