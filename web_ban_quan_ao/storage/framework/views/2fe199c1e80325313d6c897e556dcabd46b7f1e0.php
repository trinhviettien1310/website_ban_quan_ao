<?php $__env->startSection('title','Order Detail'); ?>

<?php $__env->startSection('main-content'); ?>
<div class="card">
  <h5 class="card-header">Cập Nhật Đơn Hàng</h5>
  <div class="card-body">
    <form action="<?php echo e(route('order.update',$order->id)); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <?php echo method_field('PATCH'); ?>
      <div class="form-group">
        <label for="status">Trạng Thái :</label>
        <select name="trangthaitt" id="" class="form-control">
          <option value="1"   <?php echo e((($order->trangthaitt=='1')? 'selected' : '')); ?>>Chờ Tiếp Nhận</option>
          <option value="2"  <?php echo e((($order->trangthaitt=='2')? 'selected' : '')); ?>>Đã Tiếp Nhận</option>
          <option value="3"   <?php echo e((($order->trangthaitt=='3')? 'selected' : '')); ?>>Đang Giao</option>
          <option value="4"  <?php echo e((($order->trangthaitt=='4')? 'selected' : '')); ?>>Đã Giao</option>
          <option value="0"  <?php echo e((($order->trangthaitt=='0')? 'selected' : '')); ?>>Đã Hủy</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Cập Nhật</button>
    </form>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .order-info,.shipping-info{
        background:#ECECEC;
        padding:20px;
    }
    .order-info h4,.shipping-info h4{
        text-decoration: underline;
    }

</style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\PHP_Laravel\web_ban_quan_ao\resources\views/backend/order/edit.blade.php ENDPATH**/ ?>