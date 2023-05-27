<?php $__env->startSection('main-content'); ?>

<div class="card">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary float-left">Thêm Mới Loại Bài Viết</h6>
    </div>
    <div class="card-body">
      <form method="post" action="<?php echo e(route('post-category.store')); ?>">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Tên loại</label>
          <input id="inputTitle" type="text" name="title" placeholder="Enter title"  value="<?php echo e(old('title')); ?>" class="form-control">
          <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <span class="text-danger"><?php echo e($message); ?></span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="form-group">
          <label for="status" class="col-form-label">Trạng thái</label>
          <select name="status" class="form-control">
              <option value="1"><?php echo e(_('Hoạt Động')); ?></option>
              <option value="0"><?php echo e(_('Ngừng Hoạt Động')); ?></option>
          </select>
          <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <span class="text-danger"><?php echo e($message); ?></span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group mb-3">
          <button type="reset" class="btn btn-warning">Làm mới</button>
           <button class="btn btn-success" type="submit">Lưu</button>
        </div>
      </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\PHP_Laravel\web_ban_quan_ao\resources\views/backend/postcategory/create.blade.php ENDPATH**/ ?>