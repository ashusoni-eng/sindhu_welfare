  <!-- Topbar Start -->
  <div class="container-fluid bg-dark text-white-50 py-2 px-0  topbar">
      <div class="row gx-0 align-items-center">
          <div class="col-8 px-1 text-start">              
              <div class="h-100 d-inline-flex align-items-center me-4">
                  <!-- <small class="far fa-user me-2"></small> -->
                    <div class="d-flex align-items-center bg-primary rounded">
                        <img class="flex-shrink-0 rounded-circle me-3" src="/assets/img/coordinator.jpg" style="width:2.6rem"
                            alt="" />
                        <span class="text-white hiddenOnMobile">Coordinated by Mr. Vikas Dawani</span>
                        <small class="text-white hiddenOnDesktop">Coordinated by<br> Mr. Vikas Dawani</small>
                    </div>                  
              </div>              
          </div>
          <div class="col-4 text-end" style="padding-right:2rem;">
              <div class="h-100 d-inline-flex align-items-center">
                  <a class="text-white-50 ms-4" href="<?= config('App')->fb; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>                  
                  <a class="text-white-50 ms-4" href="<?= config('App')->insta; ?>" target="_blank"><i class="fab fa-instagram"></i></a>

                  <a class="text-white-50 ms-4" href="javascript:void(0);" id="themeToggleBtn" title="Change Colors"><i class="fas fa-palette"></i></a>
              </div>
          </div>
      </div>
  </div>
  <!-- Topbar End -->
