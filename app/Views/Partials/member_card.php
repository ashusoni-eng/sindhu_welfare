<?php
    extract($member);
    $photoPath  = FCPATH . 'members/' . $photo;
    $finalPhoto = (is_file($photoPath) && ! empty($photo)) ? $photo : 'default.png';
?>
<div class="col-lg-4 col-md-6 wow fadeInUp member-card-sm text-center" data-wow-delay="0.1s">
    <a href="<?php echo base_url('member/profile/' . $id); ?>">
        <div class="team-item rounded">
            <img class="img-fluid" src="/members/<?php echo esc($finalPhoto) ?>" alt="" />
            <div class="text-center p-4">
                <h5><?php echo esc($name) ?></h5>
                <span><?php echo ucfirst(esc($member_type)) ?></span>
            </div>
            <div class="team-text text-center bg-white p-4">
                <h5><?php echo esc($office_name ?? $name) ?></h5>
                <p><?php echo ucfirst(esc($office_name ? 'Ogranization' : 'Member')) ?></p>
            </div>
        </div>
    </a>
</div>

