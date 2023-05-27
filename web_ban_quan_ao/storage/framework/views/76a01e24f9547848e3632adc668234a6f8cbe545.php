
<?php $__env->startSection('main-content'); ?>
<?php $__env->startSection('title', ''); ?>
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="<?php echo e(route('home')); ?>">Trang Chủ</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Danh Mục / Tất cả sản phẩm</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--pos home section-->
<div class=" pos_home_section">
    <div class="row pos_home">
        <div class="col-lg-3 col-md-12">
            <!--layere categorie"-->
            <div class="sidebar_widget shop_c">
                <div class="categorie__titile">
                    <h3>New Arrivals</h3>
                </div>
                <div class="sidebar-categores-box mt-sm-30 mt-xs-30">
                    <div class="sidebar-title">
                        <h6>Danh mục sản phẩm</h6>
                    </div>
                    <!-- category-sub-menu start -->
                    <div class="category-sub-menu">
                        <ul>
                            <?php
                                $menu = App\Models\Category::getAllParentWithChild();
                            ?>
                            <?php if($menu): ?>
                                <li class="has-sub">
                                    <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat_info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($cat_info->child_cat->count() > 0): ?>
                                            <a
                                                href="<?php echo e(route('product-cat', $cat_info->slug)); ?>"><?php echo e($cat_info->title); ?></a>
                                            <ul>
                                                <?php $__currentLoopData = $cat_info->child_cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li><a
                                                            href="<?php echo e(route('product-sub-cat', [$cat_info->slug, $sub_menu->slug])); ?>"><?php echo e($sub_menu->title); ?></a>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        <?php else: ?>
                                <li> <a
                                        href="<?php echo e(route('product-cat', $cat_info->slug)); ?>"><?php echo e($cat_info->title); ?>"><?php echo e($cat_info->title); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </li>
                            <?php endif; ?>

                        </ul>
                    </div>
                    <!-- category-sub-menu end -->
                    <br />
                </div>
                <div class="filter-sub-area">
                    <h6 class="filter-sub-titel">Giá sản phẩm</h6>
                    <div class="categori-checkbox">
                        <form id="formName" action="<?php echo e(route('product-lists-price')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <ul>
                                <li><input type="checkbox" value="price_1"
                                        name="price_sort"<?php if(!empty($_POST['price_sort']) && $_POST['price_sort'] == 'price_1'): ?> checked <?php endif; ?>><a
                                        href="#">Dưới
                                        300.000đ</a></li>
                                <li><input type="checkbox" value="price_2"
                                        name="price_sort"<?php if(!empty($_POST['price_sort']) && $_POST['price_sort'] == 'price_2'): ?> checked <?php endif; ?>><a
                                        href="#">300,000₫ -
                                        400,000₫</a></li>
                                <li><input type="checkbox" value="price_3"
                                        name="price_sort"<?php if(!empty($_POST['price_sort']) && $_POST['price_sort'] == 'price_3'): ?> checked <?php endif; ?>><a
                                        href="#">400,000₫ -
                                        500,000₫</a></li>
                                <li><input type="checkbox" value="price_4"
                                        name="price_sort"<?php if(!empty($_POST['price_sort']) && $_POST['price_sort'] == 'price_4'): ?> checked <?php endif; ?>><a
                                        href="#">500,000₫ -
                                        600,000₫</a></li>
                                <li><input type="checkbox" value="price_5"
                                        name="price_sort"<?php if(!empty($_POST['price_sort']) && $_POST['price_sort'] == 'price_5'): ?> checked <?php endif; ?>><a
                                        href="#">Trên
                                        6,000,000₫</a></li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
            <!--layere categorie end-->
        </div>
        <div class="col-lg-9 col-md-12">
            <!--banner slider start-->
            <div class="banner_slider mb-35">
                <img src="<?php echo e($staticbanner->photo); ?>" alt="<?php echo e($staticbanner->photo); ?>">
            </div>
            <!--banner slider start-->

            <!--shop toolbar start-->
            <div class="shop_toolbar mb-35">

                <div class="list_button">

                </div>

                <div class="select_option">
                    <form action="<?php echo e(route('product-lists-filter')); ?>" method="POST">
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
                            
                            <option value="quantity-descending"<?php if(!empty($_POST['sort_by']) && $_POST['sort_by'] == 'quantity-descending'): ?> selected <?php endif; ?>>Tồn
                                kho giảm dần</option>
                        </select>
                    </form>
                </div>
            </div>
            <!--shop toolbar end-->

            <!--shop tab product-->
            <div class="shop_tab_product">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="large" role="tabpanel">
                        <div class="row">
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-4 col-md-6">
                                    <?php
                                        $photo = explode(',', $product->photo);
                                    ?>
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a href="<?php echo e(route('product-detail', $product->slug)); ?>"><img
                                                    src="<?php echo e($photo[0]); ?>" alt=""></a>
                                            <div class="price-box">
                                                <?php if($product->discount == 0): ?>
                                                <?php else: ?>
                                                    <span> -<?php echo e($product->discount); ?>%</span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="product_action">
                                                <a href="<?php echo e(route('add-to-cart', $product->id)); ?>"> <i
                                                        class="fa fa-shopping-cart"></i>Thêm Vào Giỏ Hàng</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <?php
                                                $discount = ($product->price - ($product->price*$product->discount) / 100);
                                            ?>
                                            <?php if($product->discount==0): ?>
                                            <span class="old-price"><?php echo e(number_format($product->price),2); ?>đ</span>
                                            <?php else: ?>
                                            <span class="old-price"><?php echo e(number_format($discount),2); ?>đ</span>
                                            <span class="product_price"><?php echo e(number_format($product->price), 2); ?>đ</span>
                                            <?php endif; ?>
                                                <h3 class="product_title"><a
                                                        href="<?php echo e(route('product-detail', $product->slug)); ?>"><?php echo e($product->title); ?></a>
                                                </h3>
                                        </div>
                                        <div class="product_info">
                                            <ul>
                                              
                                                <li><a href="#" data-toggle="modal"
                                                        data-target="#modal_box_<?php echo e($product->id); ?>"
                                                        title="Quick view">Chi tiết</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list" role="tabpanel">

                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $photo = explode(',', $product->photo);
                            ?>
                            <div class="product_list_item mb-35">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img src="<?php echo e($photo[0]); ?>"
                                                    alt="<?php echo e($photo[0]); ?>"></a>
                                            <div class="hot_img">
                                                <img src="assets\img\cart\span-hot.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-6 col-sm-6">
                                        <div class="list_product_content">
                                            <div class="product_ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="list_title">
                                                <h3><a
                                                        href="<?php echo e(route('product-detail', $product->slug)); ?>"><?php echo e($product->title); ?></a>
                                                </h3>
                                            </div>
                                            <p class="design"><?php echo $product->summary; ?></p>


                                            <div class="content_price">
                                                <?php if($product->discount == 0): ?>
                                                    <span><?php echo e(number_format($product->price), 2); ?>đ</span>
                                                <?php else: ?>
                                                    <?php
                                                        $discount = $product->price - ($product->price * $product->discount) / 100;
                                                    ?>
                                                    <span><?php echo e(number_format($discount), 2); ?>đ</span>
                                                    <span
                                                        class="old-price"><?php echo e(number_format($product->price), 2); ?>đ</span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="add_links">
                                                <ul>
                                                    <li><a href="<?php echo e(route('add-to-cart', $product->id)); ?>"
                                                            title="add to cart"><i class="fa fa-shopping-cart"
                                                                aria-hidden="true"></i></a></li>
                                                    <li><a href="#" title="add to wishlist"><i
                                                                class="fa fa-heart" aria-hidden="true"></i></a></li>
                                                    <li><a href="#" data-toggle="modal"
                                                            data-target="#modal_box_<?php echo e($product->id); ?>"
                                                            title="Quick view"><i class="fa fa-eye"
                                                                aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>

                </div>
            </div>
            <!--shop tab product end-->

            <!--pagination style start-->
            <div class="pagination_style">
                
            </div>
            <!--pagination style end-->
        </div>
    </div>
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


                                        <div class="tab-pane fade show active" id="<?php echo e($photo[0]); ?>"
                                            role="tabpanel">
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
                                                        aria-controls="<?php echo e($photos); ?>"
                                                        aria-selected="false"><img src="<?php echo e($photos); ?>"
                                                            alt=""></a>
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
                                                name="sl" type="number">
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
    .category-sub-menu ul li ul {
        display: none;
        margin-top: 10px;
    }

    .category-sub-menu ul li {
        padding-top: 10px;
        transition: all 0.3s ease-in-out;
    }

    .category-sub-menu ul li a {
        font-size: 20px;
        padding: 5px;
    }

    .category-sub-menu ul li:hover a {
        color: #fed700;
    }

    .category-sub-menu ul li:first-child {
        padding-top: 16px;
    }

    .category-sub-menu li.has-sub>a {
        color: #242424;
        cursor: pointer;
        display: block;
        line-height: 20px;
        position: relative;
    }

    .category-sub-menu li.has-sub li a {
        border: 0 none;
        display: block;
        font-size: 15px;
        padding: 0 10px;
        color: #333;
    }

    .category-sub-menu li.has-sub li a:hover {
        color: #fed700;
    }

    .category-sub-menu li.has-sub>a::after {
        color: #242424;
        content: "\f067";
        font-family: fontawesome;
        font-size: 16px;
        position: absolute;
        right: 5px;
    }

    .category-sub-menu li.has-sub.open>a::after {
        content: "\f068";
    }

    .sidebar-categores-box .filter-sub-area h5 {
        color: #2f333a;
        display: block;
        font-size: 14px;
        font-weight: 500;
        line-height: 1;
        margin: 30px 0 10px;
        padding: 0 0 10px;
        position: relative;
        text-transform: uppercase;
    }

    .price-checkbox li,
    .size-checkbox li,
    .color-categoriy ul li,
    .categori-checkbox ul li {
        margin: 8px 0;
    }

    .price-checkbox li a,
    .size-checkbox li a,
    .color-categoriy ul li a,
    .categori-checkbox ul li a {
        color: #363f4d;
        font-size: 16px;
        margin-left: 15px;
        margin-top: 0;
    }

    .price-checkbox input,
    .size-checkbox input,
    .categori-checkbox input {
        width: auto !important;
        height: auto !important;
    }
</style>
<?php $__env->stopPush(); ?>


<?php $__env->startPush('scripts'); ?>
<script>
    $(document).ready(
        function() {
            $("input:checkbox").change(
                function() {
                    if ($(this).is(":checked")) {
                        $("#formName").submit();
                    }
                }
            )
        }
    );
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Ban_quan_ao\web_ban_quan_ao\resources\views/frontend/pages/product-lists.blade.php ENDPATH**/ ?>