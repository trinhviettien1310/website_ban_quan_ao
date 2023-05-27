  <!--footer area start-->
  <div class="footer_area">
      <div class="footer_top">
          <div class="container">
              <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="footer_widget">
                          <h3>Giới Thiệu</h3>
                         
                          <p><?php echo $settings->description; ?></p>                       
                       
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="footer_widget">
                          <h3>Thành viên</h3>
                          <ul>
                              <li>Trịnh Viết Tiến</li>
                              <li>Trương Văn Thiện</li>
                              <li>Nguyễn Phan Gia Huy</li>
                              <li>Nguyễn Phúc Vương</li>

                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                      
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="footer_widget">
                          <h3>Fanpage</h3>
                          <div class="footer-content">
							<!-- Facebook widget -->						
							<div class="footer-static-content"> 
								<div class="fb-page" data-href="https://www.facebook.com/CDCNTD"  data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false">	</div>
							</div>
							
							<div style="clear:both;" ></div>
							<!-- #Facebook widget -->
							<script>
								setTimeout(function(){
									(function(d, s, id) {
										var js, fjs = d.getElementsByTagName(s)[0];
										if (d.getElementById(id)) return;
										js = d.createElement(s); js.id = id;
										js.src = "//connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&appId=263266547210244&version=v2.0";
										fjs.parentNode.insertBefore(js, fjs);
									}(document, 'script', 'facebook-jssdk'));
								}, 5000);
							</script>
							
						</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--footer area end-->

  <!-- zalo chat-->
  <?php echo $__env->make('frontend.layouts.zalo-chat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('frontend.layouts.phone', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- comment facebook-->
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0&appId=958736781539672&autoLogAppEvents=1" nonce="3rr7Oget"></script>

  <!-- all js here -->
  <script src="<?php echo e(asset('frontend\assets\js\vendor\jquery-1.12.0.min.js')); ?>"></script>
  <script src="<?php echo e(asset('frontend\assets\js\popper.js')); ?>"></script>
  <script src="<?php echo e(asset('frontend\assets\js\bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('frontend\assets\js\ajax-mail.js')); ?>"></script>
  <script src="<?php echo e(asset('frontend\assets\js\plugins.js')); ?>"></script>
  <script src="<?php echo e(asset('frontend\assets\js\main.js')); ?>"></script>
  <script src="<?php echo asset('backend/plugins/select2/js/select2.min.js'); ?>"></script>
<!-- toastr -->
<script src="<?php echo asset('backend/plugins/toastr/toastr.min.js'); ?>"></script>
<!-- Page level custom scripts -->


<script>
    toastr.options.closeButton = true;
    <?php if(session('success')): ?>
        var message = "<?php echo e(session('success')); ?>";
        toastr.success(message, {
            timeOut: 3000
        });
    <?php endif; ?>
    <?php if(session('error')): ?>
        var message = "<?php echo e(session('error')); ?>";
        toastr.error(message, {
            timeOut: 3000
        });
    <?php endif; ?>
    setTimeout(function() {
        toastr.clear()
    }, 3000);
    $(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        //Initialize Select2 Elements
        $('.select2').select2();
    });
</script>

<script>
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        document.getElementById("linkzalo").href = "https://zalo.me/0343754517";
    }
</script>

<?php echo $__env->make('frontend.layouts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldPushContent('scripts'); ?><?php /**PATH E:\Ban_quan_ao\web_ban_quan_ao\resources\views/frontend/layouts/footer.blade.php ENDPATH**/ ?>