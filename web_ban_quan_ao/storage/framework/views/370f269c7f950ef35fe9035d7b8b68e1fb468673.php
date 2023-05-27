<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(route('admin')); ?>">
        <div class="sidebar-brand-text mx-3"><?php echo e(__('Trang Quản Trị')); ?></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php echo e(request()->is('admin/dashboard') || request()->is('admin/dashboard') ? 'active' : ''); ?>">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span><?php echo e(__('Bảng Điều Khiển')); ?></span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <span><?php echo e(__('Quản Lý Tài Khoản')); ?></span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item <?php echo e(request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : ''); ?>" href="#"> <i class="fa fa-briefcase mr-2"></i> <?php echo e(__('Tất Cả Tài Khoản')); ?></a>
                <a class="collapse-item <?php echo e(request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : ''); ?>" href="#"> <i class="fa fa-briefcase mr-2"></i> <?php echo e(__('Phân Quyền')); ?></a>
                <a class="collapse-item <?php echo e(request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : ''); ?>" href="<?php echo e(route('settings')); ?>"> <i class="fa fa-briefcase mr-2"></i> <?php echo e(__('Cài Đặt')); ?></a>
                <a class="collapse-item <?php echo e(request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : ''); ?>" href="<?php echo e(route('about-us.index')); ?>"> <i class="fa fa-briefcase mr-2"></i> <?php echo e(__('Về Chúng Tôi')); ?></a>
                <a class="collapse-item <?php echo e(request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : ''); ?>" href="<?php echo e(route('message.index')); ?>"> <i class="fa fa-briefcase mr-2"></i> <?php echo e(__('Liên Hệ')); ?></a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true" aria-controls="collapseTwo">
            <span><?php echo e(__('Ecommerce')); ?></span>
        </a>
        <div id="collapseProduct" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item <?php echo e(request()->is('admin/categories') || request()->is('admin/categories/*') ? 'active' : ''); ?>" href="<?php echo e(route('category.index')); ?>"> <i class="fa fa-briefcase mr-2"></i> <?php echo e(__('Danh Mục')); ?></a>
                <a class="collapse-item <?php echo e(request()->is('admin/tags') || request()->is('admin/tags/*') ? 'active' : ''); ?>" href="<?php echo e(route('brand.index')); ?>"> <i class="fa fa-briefcase mr-2"></i> <?php echo e(__('Thương Hiệu')); ?></a>
                <a class="collapse-item <?php echo e(request()->is('admin/products') || request()->is('admin/products/*') ? 'active' : ''); ?>" href="<?php echo e(route('product.index')); ?>"> <i class="fa fa-briefcase mr-2"></i> <?php echo e(__('Sản Phẩm')); ?></a>
                <a class="collapse-item <?php echo e(request()->is('admin/reviews') || request()->is('admin/reviews/*') ? 'active' : ''); ?>" href="#"> <i class="fa fa-briefcase mr-2"></i> <?php echo e(__('Đánh Giá')); ?></a>
                <a class="collapse-item <?php echo e(request()->is('admin/slides') || request()->is('admin/slides/*') ? 'active' : ''); ?>" href="<?php echo e(route('banner.index')); ?>"> <i class="fa fa-briefcase mr-2"></i> <?php echo e(__('Banner')); ?></a>
                <a class="collapse-item <?php echo e(request()->is('admin/slides') || request()->is('admin/slides/*') ? 'active' : ''); ?>" href="<?php echo e(route('coupon.index')); ?>"> <i class="fa fa-briefcase mr-2"></i> <?php echo e(__('Mã Giảm Giá')); ?></a>
                <a class="collapse-item <?php echo e(request()->is('admin/slides') || request()->is('admin/slides/*') ? 'active' : ''); ?>" href="<?php echo e(route('supplier.index')); ?>"> <i class="fa fa-briefcase mr-2"></i> <?php echo e(__('Nhà Cung Cấp')); ?></a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseOrder" aria-expanded="true" aria-controls="collapseTwo">
            <span><?php echo e(__('Quản Lý Đơn Hàng')); ?></span>
        </a>
        <div id="collapseOrder" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item " href="<?php echo e(route('order.index')); ?>"> <i class="fa fa-briefcase mr-2"></i> <?php echo e(__('Tất cả đơn hàng')); ?></a>
                <a class="collapse-item " href="#"> <i class="fa fa-briefcase mr-2"></i> <?php echo e(__('Tiếp Nhận')); ?></a>
                <a class="collapse-item" href="#"> <i class="fa fa-briefcase mr-2"></i> <?php echo e(__('Đang Xử Lý')); ?></a>
                <a class="collapse-item" href="#"> <i class="fa fa-briefcase mr-2"></i> <?php echo e(__('Hoàn Thành')); ?> (<?php echo e(\App\Models\Order::countOrderSuccess()); ?>)</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseReports" aria-expanded="true" aria-controls="collapseTwo">
            <span><?php echo e(__('Quản Lý Bài Viết')); ?></span>
        </a>
        <div id="collapseReports" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item <?php echo e(request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : ''); ?>" href="<?php echo e(route('post-category.index')); ?>"> <i class="fa fa-briefcase mr-2"></i> <?php echo e(__('Loại Bài Viết')); ?></a>
                <a class="collapse-item <?php echo e(request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : ''); ?>" href="<?php echo e(route('post-tag.index')); ?>"> <i class="fa fa-briefcase mr-2"></i> <?php echo e(__('Tag')); ?></a>
                <a class="collapse-item <?php echo e(request()->is('admin/reports/revenue') ? 'active' : ''); ?>" href="<?php echo e(route('post.index')); ?>"> <i class="fa fa-briefcase mr-2"></i> <?php echo e(__('Bài Viết')); ?></a>
            </div>
        </div>
    </li>


</ul><?php /**PATH C:\wamp64\www\PHP_Laravel\web_ban_quan_ao\resources\views/backend/layouts/sidebar.blade.php ENDPATH**/ ?>