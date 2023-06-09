
<?php $__env->startSection('main-content'); ?>
<?php $__env->startSection('title', 'Gille-Thanh Toán Đơn Hàng'); ?>

<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="<?php echo e(route('home')); ?>">Trang chủ</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Thanh toán đơn hàng</li>
                </ul>

            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->


<!--Checkout page section-->
<div class="Checkout_section">
    <div class="row">
        <div class="col-12">
            <div class="user-actions mb-20">
                <h3>
                    <i class="fa fa-file-o" aria-hidden="true"></i>
                    Bạn có mã giảm giá?
                </h3>
                <div id="checkout_coupon">
                    <div class="checkout_info">
                        <form action="#">
                            <input placeholder="Mã Giảm Giá" type="text">
                            <input value="Sử dụng" type="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="checkout_form">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <form action="<?php echo e(route('post-checkout')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <h3>Thông tin giao hàng</h3>
                    <?php if(Auth::check()): ?>
                    <div class="row">

                        <div class="col-lg-12 mb-30">

                            <input placeholder="Họ và tên" name="hoten" type="text" value=" <?php echo e(Auth::user()->name); ?> " required>
                        </div>

                        <div class="col-lg-6 md-30">

                            <input placeholder="Email" name="email" type="text" value="<?php echo e(Auth::user()->email); ?> ">
                        </div>

                        <div class="col-lg-6 mb-30">

                            <input placeholder="Số điện thoại" name="phone" type="text" value="<?php echo e(Auth::user()->phone); ?> "required>
                        </div>

                        <div class="card-body1">
                            <div class="col-12 mb-30">

                                <input placeholder="Địa chỉ chi tiết" name="address_detail" type="text">
                            </div>

                            <div class="col-4 mb-30">
                                <input hidden id="urlLocation" value=<?php echo e(asset('frontend/assets/js/vietnam.json')); ?> />
                                <label for="country">Tỉnh / thành <span>*</span></label>
                                <select name="city" id="city" aria-label=".form-select-sm" required>
                                    <option value="">Chọn tỉnh thành</option>
                                </select>

                                
                                
                            </div>

                            <div class="col-4 mb-30">
                                <label for="country">Quận / huyện <span>*</span></label>
                                <select name="district" id="district" aria-label=".form-select-sm">
                                    <option value="">Chọn quận huyện</option>
                                </select>
                                
                            </div>

                            <div class="col-4 mb-30">
                                <label for="country">Phường / xã<span>*</span></label>
                                <select name="ward" id="ward" aria-label=".form-select-sm" required>
                                    <option value="">Chọn phường xã</option>
                                </select>
                                
                            </div>
                        </div>

                    </div>
                    <?php else: ?>
                    <div class="row">

                        <div class="col-lg-12 mb-30">

                            <input placeholder="Họ và tên" name="hoten" type="text" required>
                        </div>

                        <div class="col-lg-6 md-30">

                            <input placeholder="Email" name="email" type="text">
                        </div>

                        <div class="col-lg-6 mb-30">

                            <input placeholder="Số điện thoại" name="phone" type="text" required>
                        </div>

                        <div class="card-body1">
                            <div class="col-12 mb-30">

                                <input placeholder="Địa chỉ chi tiết" name="address_detail" type="text">
                            </div>

                            <div class="col-4 mb-30">
                                <input hidden id="urlLocation" value=<?php echo e(asset('frontend/assets/js/vietnam.json')); ?> />
                                <label for="country">Tỉnh / thành <span>*</span></label>
                                <select name="city" id="city" aria-label=".form-select-sm" required>
                                    <option value="">Chọn tỉnh thành</option>
                                </select>

                                
                                
                            </div>

                            <div class="col-4 mb-30">
                                <label for="country">Quận / huyện <span>*</span></label>
                                <select name="district" id="district" aria-label=".form-select-sm">
                                    <option value="">Chọn quận huyện</option>
                                </select>
                                
                            </div>

                            <div class="col-4 mb-30">
                                <label for="country">Phường / xã<span>*</span></label>
                                <select name="ward" id="ward" aria-label=".form-select-sm" required>
                                    <option value="">Chọn phường xã</option>
                                </select>
                                
                            </div>
                        </div>

                    </div>
                    <?php endif; ?>

            </div>
            <div class="col-lg-6 col-md-6">
                <h3>Giỏ hàng của bạn</h3>
                <div class="order_table table-responsive mb-30">
                    <table>
                        <tbody>
                            <?php $__currentLoopData = $newcart->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td> <?php echo e($data['productInfo']->title); ?> <strong> × <?php echo e($data['quantity']); ?></strong>
                                    </td>
                                    <td> <?php echo e(number_format($data['productInfo']->price), 2); ?>đ</td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Tạm tính</th>
                                <td><?php echo e(number_format($newcart->totalPrice), 2); ?>đ</td>
                            </tr>
                            
                            <tr class="order_total">
                                <th>Tổng cộng</th>
                                <td><strong><?php echo e(number_format($newcart->totalPrice),2); ?>đ</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="payment_method">
                    <div class="panel-default">
                        <input id="payment" name="payment" value="1" type="radio"
                            data-target="createp_account">
                        <label for="payment" data-toggle="collapse" data-target="#method" aria-controls="method">Thanh
                            toán khi nhận hàng</label>

                        <div id="method" class="collapse one" data-parent="#accordion">
                        </div>
                    </div>
                   
                    <div class="order_button">
                        <button type="submit">Xác nhận</button>
                    </div>
                </div>

            </div>
            </form>
        </div>
    </div>
</div>
<!--Checkout page section end-->

</div>
<!--pos page inner end-->
</div>
</div>
<!--pos page end-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script src="<?php echo e(asset('frontend/assets/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BE2\web_ban_quan_ao\resources\views/frontend/pages/checkout.blade.php ENDPATH**/ ?>