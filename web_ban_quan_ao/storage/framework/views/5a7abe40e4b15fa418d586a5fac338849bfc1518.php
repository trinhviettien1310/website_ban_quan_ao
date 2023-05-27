
<?php $__env->startSection('main-content'); ?>
<?php $__env->startSection('title',''); ?>
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="<?php echo e(route('home')); ?>">Trang chủ</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Tìm kiếm với tên từ khóa </li>
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
            <!--shop toolbar start-->
            <div class="shop_toolbar mb-35">
                <div class="list_button">
                   
                </div>
                <div class="page_amount">
                    <p>Có tất cả <b><?php echo e($countProduct); ?> sản phẩm</b> cho tìm kiếm</p>
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
                        $photo=explode(',',$product->photo);
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single_product">
                            <div class="product_thumb">
                               <a href="<?php echo e(route('product-detail',$product->slug)); ?>"><img src="<?php echo e($photo[0]); ?>" alt=""></a> 
                               <div class="img_icone">
                                   <img src="assets\img\cart\span-new.png" alt="">
                               </div>
                               <div class="product_action">
                                   <a href="#"> <i class="fa fa-shopping-cart"></i>Mua Ngay</a>
                               </div>
                            </div>
                            <div class="product_content">
                                <span class="product_price"><?php echo e(number_format($product->price),2); ?>đ</span>
                                <h3 class="product_title"><a href="<?php echo e(route('product-detail',$product->slug)); ?>"><?php echo e($product->title); ?></a></h3>
                            </div>
                            <div class="product_info">
                                <ul>
                                    
                                    <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">Chi Tiết</a></li>
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
                    $photo=explode(',',$product->photo);
                ?>
                <div class="product_list_item mb-35">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-5 col-sm-6">
                            <div class="product_thumb">
                               <a href="single-product.html"><img src="<?php echo e($photo[0]); ?>" alt=""></a> 
                               <div class="hot_img">
                                   <img src="assets\img\cart\span-hot.png" alt="">
                               </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-7 col-sm-6">
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
                                    <h3><a href="<?php echo e(route('product-detail',$product->slug)); ?>"><?php echo e($product->title); ?></a></h3>
                                </div>
                                <p class="design"><?php echo $product->summary; ?></p>
                                <div class="content_price">
                                    <?php
                                        $discount=($product->price-($product->price*$product->discount)/100);
                                    ?>
                                    <?php if($product->discount==0): ?>
                                    <span><?php echo e(number_format($product->price),2); ?>đ</span>
                                    <?php else: ?>
                                    <span><?php echo e(number_format($discount),2); ?>đ</span>
                                    <span class="old-price"><?php echo e(number_format($product->price),2); ?>đ</span>
                                    <?php endif; ?>
                                </div>
                                <div class="add_links">
                                    <ul>
                                        <li><a href="<?php echo e(route('add-to-cart',$product->id)); ?>" title="add to cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                        <li><a href="#" title="add to wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a></li>

                                        <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
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
    <div class="pagination_style shop_page">
        <div class="page_number">
            
            
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Ban_quan_ao\web_ban_quan_ao\resources\views/frontend/pages/product-search.blade.php ENDPATH**/ ?>