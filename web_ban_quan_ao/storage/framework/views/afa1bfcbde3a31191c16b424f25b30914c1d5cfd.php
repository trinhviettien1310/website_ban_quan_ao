
<?php $__env->startSection('main-content'); ?>
<?php $__env->startSection('title', 'Về chúng tôi'); ?>
<div class="card">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary float-left">Về chúng tôi</h6>
    </div>
    <div class="card-body">
        <form method="post" action="<?php echo e(route('about-us.update')); ?>">
            <?php echo csrf_field(); ?> <div class="form-group">
                <label for="description" class="col-form-label">Giới Thiệu<span class="text-danger"></span></label>
                <textarea class="form-control" id="description" name="description"><?php echo e($data->description); ?></textarea>
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

            <div class="form-group mb-3">
                <button class="btn btn-success" type="submit">Cập nhật</button>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('backend/summernote/summernote.min.css')); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="<?php echo e(asset('backend/summernote/summernote.min.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

<script>
    $(document).ready(function() {
        $('#description').summernote({
            placeholder: "Giới thiệu.....",
            tabsize: 2,
            height: 150
        });
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Ban_quan_ao\web_ban_quan_ao\resources\views/backend/about-us/show.blade.php ENDPATH**/ ?>