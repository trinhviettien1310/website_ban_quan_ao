<?php $__env->startSection('title','E-SHOP || DASHBOARD'); ?>
<?php $__env->startSection('main-content'); ?>
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Bảng Điều Khiển</h1>
  </div>

<!-- Content Row -->
  <div class="row">

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-4 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                             Sản Phẩm</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($countProduct); ?></div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-hotel fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-4 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                              Đơn Hàng</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($countOrder); ?></div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-4 mb-4">
          <div class="card border-left-info shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Đơn Hàng Đã Hủy
                          </div>
                          <div class="row no-gutters align-items-center">
                              <div class="col-auto">
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo e($countOrderCane); ?></div>
                              </div>
                          </div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-spinner fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Pending Requests Card Example -->
      <div class="col-xl-3 col-md-4 mb-4">
          <div class="card border-left-warning shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                             Đơn Hàng Đã Giao</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($countOrderSuccess); ?></div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-check fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="row">

    
  
    <!-- Pie Chart -->
    
  <!-- Content Row -->
  <!-- Content Row -->

</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Ban_quan_ao\web_ban_quan_ao\resources\views/backend/index.blade.php ENDPATH**/ ?>