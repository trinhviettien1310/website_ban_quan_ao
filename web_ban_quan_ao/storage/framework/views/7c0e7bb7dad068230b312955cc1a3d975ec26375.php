

<?php $__env->startSection('content'); ?>
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Đăng ký</h3>
                    <div class="card-body">
                        <form action="<?php echo e(route('register.custom')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group mb-3">
                            <label for="name">Họ và tên</label>
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                    required autofocus>
                                <?php if($errors->has('name')): ?>
                                <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group mb-3">
                            <label for="phone">Số điện thoại</label>
                                <input type="number" placeholder="Phone" id="phone" class="form-control" name="phone"
                                    required autofocus>
                            </div>
                            <div class="form-group mb-3">
                            <label for="name">Email</label>
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                <?php if($errors->has('email')): ?>
                                <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group mb-3">
                            <label for="name">Mật khẩu</label>
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                <?php if($errors->has('password')): ?>
                                <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                <?php endif; ?>
                            </div>
                            <!-- <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember Me</label>
                                </div>
                            </div> -->
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Đăng ký</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Ban_quan_ao\web_ban_quan_ao\resources\views/user/registration-user.blade.php ENDPATH**/ ?>