
<?php $__env->startSection('main-content'); ?>
<?php $__env->startSection('title', ''); ?>

<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="<?php echo e(route('home')); ?>">Trang chủ</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Danh Mục / Tất cả sản phẩm</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--pos home section-->
<div class=" pos_home_section shop_section shop_fullwidth">
    <div class="row">
        <div class="col-12">
            <!--banner slider start-->
            <div class="banner_slider fullwidht  mb-35">
                <img src="<?php echo e($banners->photo); ?>" alt="">
            </div>
            <!--banner slider start-->
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <!--shop toolbar start-->
            <div class="shop_toolbar mb-35">
                <div class="page_amount">
                    <p>Tất cả sản phẩm</p>
                </div>
                <div class="select_option">
                    <form action="<?php echo e(route('products-girds-filter')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <label>Lọc theo</label>
                        <select name="sort_by" id="short" onchange="this.form.submit()">
                            <option selected="" value="0">Mói nhất</option>
                            <option value="priceAsc"<?php if(!empty($_POST['sort_by']) && $_POST['sort_by'] == 'priceAsc'): ?> selected <?php endif; ?>>Giá: Tăng Dần
                            </option>
                            <option value="priceDesc" <?php if(!empty($_POST['sort_by']) && $_POST['sort_by'] == 'priceDesc'): ?> selected <?php endif; ?>>Giá: Giảm dần
                            </option>
                            <option value="AZ"<?php if(!empty($_POST['sort_by']) && $_POST['sort_by'] == 'AZ'): ?> selected <?php endif; ?>>Tên:A-Z</option>
                            <option value="ZA" <?php if(!empty($_POST['sort_by']) && $_POST['sort_by'] == 'ZA'): ?> selected <?php endif; ?>>Tên: Z-A</option>
                            
                            <option value="quantity-descending"<?php if(!empty($_POST['sort_by']) && $_POST['sort_by'] == 'quantity-descending'): ?> selected <?php endif; ?>>Tồn kho
                                giảm dần</option>
                        </select>
                    </form>
                </div>
            </div>
            <!--shop toolbar end-->
        </div>
    </div>

    <!--shop tab product-->
    <div class="shop_tab_product shop_fullwidth">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="large" role="tabpanel">
                <div class="row">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $photo = explode(',', $product->photo);
                        ?>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="<?php echo e(route('product-detail', $product->slug)); ?>"><img
                                            src="<?php echo e($photo[0]); ?>" alt=""></a>
                                    <?php if($product->discount == 0): ?>
                                    <?php else: ?>
                                        <div class="price-box">
                                            <span> - <?php echo e($product->discount); ?>%</span>
                                        </div>
                                    <?php endif; ?>
                                    <div class="product_action">
                                        <a href="<?php echo e(route('add-to-cart', $product->id)); ?>"> <i
                                                class="fa fa-shopping-cart"></i>Mua Ngay</a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <?php if($product->discount == 0): ?>
                                        <span class="old-price"><?php echo e(number_format($product->price), 2); ?>đ</span>
                                    <?php else: ?>
                                       
                                        <?php
                                            $discount = ($product->price - ($product->price * $product->discount) / 100);
                                        ?>
                                        <span class="old-price"><?php echo e(number_format($discount), 2); ?>đ</span>
                                        <span class="product_price"><?php echo e(number_format($product->price), 2); ?>đ</span>
                                    <?php endif; ?>
                                    <h3 class="product_title"><a
                                            href="<?php echo e(route('product-detail', $product->slug)); ?>"><?php echo e($product->title); ?></a>
                                    </h3>
                                </div>
                                <div class="product_info">
                                    <ul>
                                      
                                        <li><a href="#" data-toggle="modal"
                                                data-target="#modal_box_<?php echo e($product->id); ?>" title="Quick view">Chi
                                                Tiết</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
    <!--shop tab product end-->

    <!--pagination style start-->
    <div class="">
        <div class="page_number">
            <ul>
                <li>
                    
                </li>
            </ul>
        </div>
    </div>
    <!--pagination style end-->
</div>
<!--pos home section end-->
</div>
<!--pos page inner end-->
</div>
</div>
<!--pos page end-->

<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!-- modal area start -->
    <div class="modal fade" id="modal_box_<?php echo e($product->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content" id="pills-tabContent">
                                        <?php
                                            $photo = explode(',', $product->photo);
                                        ?>


                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="<?php echo e($photo[0]); ?>" alt=""></a>
                                            </div>
                                        </div>

                                        
                                        
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive" role="tablist">
                                            <?php $__currentLoopData = $photo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li>
                                                    <a class="nav-link active" data-toggle="tab"
                                                        href="#<?php echo e($photos); ?>" role="tab"
                                                        aria-controls="<?php echo e($photos); ?>" aria-selected="false"><img
                                                            src="<?php echo e($photos); ?>" alt=""></a>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2><?php echo e($product->title); ?></h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <?php
                                            $giakm = $product->price - ($product->price * $product->discount) / 100;
                                        ?>
                                        <?php if($product->discount != 0): ?>
                                            <span class="new_price"><?php echo e(number_format($giakm), 2); ?>đ</span>
                                            <span class="old_price"><?php echo e(number_format($product->price), 2); ?>đ</span>
                                        <?php else: ?>
                                            <span class="new_price"><?php echo e(number_format($product->price), 2); ?>đ</span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="modal_content mb-10">
                                        <p><?php echo $product->summary; ?></p>
                                    </div>
                                    <div class="modal_size mb-15">
                                        <h2>size</h2>
                                        <?php
                                            $size = explode(',', $product->size);
                                        ?>
                                        <ul>
                                            <?php $__currentLoopData = $size; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sizes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="#"><?php echo e($sizes); ?></a></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                        </ul>
                                    </div>
                                    <div class="modal_add_to_cart mb-15">
                                        <form action="<?php echo e(route('single-add-cart', $product->id)); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <input min="0" max="100" step="2" value="1"
                                                name="quantity" type="number">
                                            <button type="submit">Thêm Vào Giỏ Hàng</button>
                                        </form>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p><?php echo $product->description; ?></p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .old-price {
        color: rgb(241, 7, 7);
        font-size: 14px;
        font-weight: 400;
    }
    .product_price {
        text-decoration: line-through;
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    $(document).ready(
        function() {
            $("select:option").change(
                function() {
                    if ($(this).is(":selected")) {
                        $("#formName").submit();
                    }
                }
            )
        }
    );
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Ban_quan_ao\web_ban_quan_ao\resources\views/frontend/pages/product-grids.blade.php ENDPATH**/ ?>