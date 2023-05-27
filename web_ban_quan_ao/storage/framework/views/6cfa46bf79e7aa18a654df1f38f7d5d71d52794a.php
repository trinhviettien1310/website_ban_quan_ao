<!DOCTYPE html>
<html lang="en">
<head>
   <?php echo $__env->make('frontend.layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>
    <?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('main-content'); ?>
    <?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH E:\Ban_quan_ao\web_ban_quan_ao\resources\views/frontend/layouts/master.blade.php ENDPATH**/ ?>