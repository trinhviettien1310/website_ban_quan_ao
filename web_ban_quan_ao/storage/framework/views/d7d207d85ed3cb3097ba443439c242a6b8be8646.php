<?php $__env->startSection('main-content'); ?>
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary float-left">Thêm Mới Khuyến Mãi</h6>
        </div>
        <div class="card-body">
            <form method="post" action="<?php echo e(route('coupon.store')); ?>">
                <?php echo e(csrf_field()); ?>

                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="inputTitle" class="col-form-label">Tên Khuyến Mãi<span
                                    class="text-danger">*</span></label>
                            <input id="inputTitle" type="text" name="title" placeholder="Enter Coupon Code"
                                value="<?php echo e(old('title')); ?>" class="form-control">
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
                    </div>

                    <div class="col-4">

                        <div class="form-group">
                            <label for="inputTitle" class="col-form-label">Mã Giảm Giá<span
                                    class="text-danger">*</span></label>
                            <input id="inputTitle" type="text" name="code" placeholder="Mã giảm giá"
                                value="<?php echo e(old('code')); ?>" class="form-control">
                            <?php $__errorArgs = ['code'];
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
                    </div>

                    <div class="col-4">
                        <div class="form-group">
                            <label for="inputTitle" class="col-form-label">Giá Khuyến Mãi<span
                                    class="text-danger">*</span></label>
                            <input id="inputTitle" type="number" name="value" placeholder="Enter Coupon value"
                                value="<?php echo e(old('value')); ?>" class="form-control">
                            <?php $__errorArgs = ['value'];
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

                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="" class="col-form-label">Ngày Bắt Đầu</label>
                            <input class="form-control" type="datetime-local" id="birthdaytime" name="ngaybatdau"
                                value="<?php echo e(old('ngaybatdau')); ?>">
                            <?php $__errorArgs = ['ngaybd'];
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
                    </div>

                    <div class="col-4">
                        <div class="form-group">
                            <label for="" class="col-form-label">Ngày Kết Thúc</label>
                            <input class="form-control" type="datetime-local" id="birthdaytime" name="ngayketthuc"
                                value="<?php echo e(old('ngayketthuc')); ?>">
                            <?php $__errorArgs = ['ngaykt'];
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
                    </div>

                    <div class="col-4">
                        <div class="form-group">
                            <label for="status" class="col-form-label">Trạng thái <span
                                    class="text-danger">*</span></label>
                            <select name="status" class="form-control">
                                <option value="1">Hoạt Động</option>
                                <option value="0">Không Hoạt Động</option>
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
                    </div>
                </div>

                <div class="form-group mb-3">
                    <button type="reset" class="btn btn-warning">Làm mới</button>
                    <button class="btn btn-success" type="submit">Lưu</button>
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
    <script>
        $('#lfm').filemanager('image');

        $(document).ready(function() {
            $('#summary').summernote({
                placeholder: "Mô tả về chương trình khuyến mãi.....",
                tabsize: 2,
                height: 120
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\PHP_Laravel\web_ban_quan_ao\resources\views/backend/coupon/create.blade.php ENDPATH**/ ?>