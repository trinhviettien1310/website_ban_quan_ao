<?php $__env->startSection('title','E-SHOP || Banner Edit'); ?>
<?php $__env->startSection('main-content'); ?>
<div class="card shadow mb-4">
  <div class="row">
      
  </div>
 <div class="card-header py-3">
   <h6 class="m-0 font-weight-bold text-primary float-left">Cập Nhật Banner</h6>
  
 </div>
<div class="card">
    <div class="card-body">
      <form method="post" action="<?php echo e(route('banner.update',$banner->id)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PATCH'); ?>
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Tiêu đề <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="title" placeholder="Enter title"  value="<?php echo e($banner->title); ?>" class="form-control">
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
          <label for="inputDesc" class="col-form-label">Mô tả</label>
          <textarea class="form-control" id="description" name="description"><?php echo e($banner->description); ?></textarea>
          <?php $__errorArgs = ['description'];
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
        <label for="inputPhoto" class="col-form-label">Hình ảnh <span class="text-danger">*</span></label>
        <div class="input-group">
            <span class="input-group-btn">
                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                <i class="fa fa-picture-o"></i>Chọn ảnh
                </a>
            </span>
          <input id="thumbnail" class="form-control" type="text" name="photo" value="<?php echo e($banner->photo); ?>">
        </div>
        <div id="holder" style="margin-top:15px;max-height:100px;"></div>
          <?php $__errorArgs = ['photo'];
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
          <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
          <select name="status" class="form-control">
            <option value="1" <?php echo e((($banner->status=='1') ? 'selected' : '')); ?>><?php echo e(_('Hoạt Động')); ?></option>
            <option value="0" <?php echo e((($banner->status=='0') ? 'selected' : '')); ?>><?php echo e(_('Ngừng Hoạt Động')); ?></option>
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
           <button class="btn btn-success" type="submit">Cập nhật</button>
        </div>
      </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('backend/summernote/summernote.min.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="<?php echo e(asset('backend/summernote/summernote.min.js')); ?>"></script>
<script>
    $('#lfm').filemanager('image');

    $(document).ready(function() {
    $('#description').summernote({
      placeholder: "Write short description.....",
        tabsize: 2,
        height: 150
    });
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Ban_quan_ao\web_ban_quan_ao\resources\views/backend/banner/edit.blade.php ENDPATH**/ ?>