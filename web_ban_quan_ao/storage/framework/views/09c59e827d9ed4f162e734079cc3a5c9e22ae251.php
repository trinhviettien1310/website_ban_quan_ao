
<?php $__env->startSection('main-content'); ?>
<?php $__env->startSection('title', 'Giỏ hàng của bạn-Gille'); ?>
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="<?php echo e(route('home')); ?>">Trang chủ</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Giỏ hàng của bạn</li>

                </ul>

            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->


<!--shopping cart area start -->
<div class="shopping_cart_area">
    <?php if(session()->has('cart')>0): ?>
    <div class="row">
        <div class="col-12">
            <div class="table_desc">
                <div class="cart_page table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th class="product_name">Tên sản phẩm</th>
                                <th class="product_thumb">Hình ảnh</th>
                                <th class="product-price">Giá</th>
                                <th class="product_quantity">Só lượng</th>
                               
                                <th class="product_total">Thành tiền</th>
                                <th class="product_remove">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(session('cart')): ?>
                                <?php $__currentLoopData = $newcart->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $photo = explode(',', $item['productInfo']->photo);
                                    ?>
                                    <tr>
                                        <td class="product_name"><a href="#"><?php echo e($item['productInfo']->title); ?></a>
                                        </td>
                                        <td class="product_thumb"><a href="#"><img src="<?php echo e($photo[0]); ?>"
                                                    style="height: 100px" alt=""></a>
                                        </td>
                                        <td class="product-price"><?php echo e(number_format($item['productInfo']->price), 2); ?>đ
                                        </td>
                                        <td class="product_quantity">
                                            <form action="<?php echo e(route('cart-update', $item['productInfo']['id'])); ?>"
                                                method="GET">
                                                <?php echo csrf_field(); ?>
                                                <input class="cart-item" min="0" name="quantity" max="100"
                                                    value="<?php echo e($item['quantity']); ?>" type="number"
                                                    data-href=<?php echo e(route('cart-update', $item['productInfo']['id'])); ?>>
                                                <div class="cart_submit">
                                                    
                                                </div>
                                            </form>
                                        </td>
                                        
                                        <td class="product_total"><?php echo e(number_format($item['price']), 2); ?>đ</td>
                                        <td class="product_remove"><a
                                                href="<?php echo e(route('deleteCart', $item['productInfo']->id)); ?>"><i
                                                    class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
    <?php else: ?>
    <h4>Giỏ hàng của bạn đang trống</h4>
    <?php endif; ?>
    <!--coupon code area start-->
    <div class="coupon_area">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="coupon_code">
                    <h3>Thông tin đơn hàng</h3>
                    <div class="coupon_inner">
                        <div class="cart_subtotal">
                            <p>Tổng tiền</p>
                            <?php if(session('cart')): ?>
                                <p class="cart_amount"><?php echo e(number_format($newcart->totalPrice), 2); ?>đ </p>
                            <?php else: ?>
                                <p class="cart_amount">0đ</p>
                            <?php endif; ?>
                        </div>
                        <?php if(session('cart')): ?>
                        <div class="checkout_btn">
                            <a href="/checkout">Thanh toán</a>
                        </div>
                        <?php else: ?>
                        <div class="checkout_btn">
                            <a href="/checkout" style="pointer-events: none">Thanh toán</a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--coupon code area end-->

</div>
<!--shopping cart area end -->


</div>
<!--pos page inner end-->
</div>
</div>
<script>
    const cartItems = document.querySelectorAll('.cart-item');
    cartItems.forEach((value) => {
        value.addEventListener('input', (event) => {
            console.log(event.target.dataset.href)
            event.target.parentElement.submit();
        });

    });
</script>
<!--pos page end-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Ban_quan_ao\web_ban_quan_ao\resources\views/frontend/pages/cart.blade.php ENDPATH**/ ?>