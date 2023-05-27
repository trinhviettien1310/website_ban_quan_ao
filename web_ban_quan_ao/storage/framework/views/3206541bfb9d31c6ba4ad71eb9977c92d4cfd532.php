  <!-- Add your site or application content here -->
  <!--pos page start-->
  <div class="pos_page">
      <div class="container">
          <!--pos page inner-->
          <div class="pos_page_inner">
              <!--header area -->
              <div class="header_area">
                  <!--header top-->
                  <div class="header_top">
                      <div class="row align-items-center">
                          <div class="col-lg-6 col-md-6">
                              <div class="switcher">
                                  <ul>
                                      <li>
                                          <h4>3 ngày đổi hàng dễ dàng</h4>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                              <div class="header_links">
                                  <ul>
                                      <li><a href="tel:0343754517" title="Contact">
                                              <h5>0343754517</h5>
                                          </a></li>
                                      <li><a href=#" title="wishlist">
                                              <h5>Hỗ trợ mua hàng</h5>
                                          </a></li>

                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!--header top end-->

                  <!--header middel-->
                  <div class="header_middel">
                      <div class="row align-items-center">
                          <!--logo start-->
                          <div class="col-lg-3 col-md-3">
                              <div class="logo">
                                  <?php
                                      $settings = DB::table('settings')->get();
                                  ?>
                                  <a href="<?php echo e(route('home')); ?>">
                                      <?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $setting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <img src="<?php echo e($setting->logo); ?>" alt="">
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </a>
                              </div>
                          </div>
                          <!--logo end-->
                          <div class="col-lg-9 col-md-9">
                              <div class="header_right_info">
                                  <div class="search_bar">
                                      <form action="<?php echo e(route('product-search')); ?>" method="POST">
                                          <?php echo csrf_field(); ?>
                                          <input placeholder="Bạn tìm gì..." name="search" type="text">
                                          <button type="submit"><i class="fa fa-search"></i></button>
                                      </form>
                                  </div>
                                  <div class="shopping_cart">
                                      <a href="#"><i class="fa fa-shopping-cart"></i>
                                          <?php if(session()->has('cart')): ?>
                                              <?php $sanpham= session()->get('cart') ?> <?php echo e($sanpham->totalQuantity); ?> -
                                              <?php echo e(number_format($sanpham->totalPrice), 2); ?>đ
                                          <?php else: ?>
                                              0  - 0đ
                                          <?php endif; ?>
                                          <i class="fa fa-angle-down"></i>
                                      </a>
                                      <!--mini cart-->
                                      <div class="mini_cart">
                                          <?php if(session()->has('cart') > 0): ?>
                                              <?php $__currentLoopData = $newcart->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                  <?php
                                                      $photo = explode(',', $item['productInfo']->photo);
                                                  ?>
                                                  <div class="cart_item">
                                                      <div class="cart_img">
                                                          <a href="#"><img src="<?php echo e($photo[0]); ?>"
                                                                  alt="<?php echo e($photo[0]); ?>"></a>
                                                      </div>
                                                      <div class="cart_info">
                                                          <a
                                                              href="<?php echo e(route('product-detail', $item['productInfo']->slug)); ?>"><?php echo e($item['productInfo']->title); ?></a>
                                                          <span
                                                              class="cart_price"><?php echo e(number_format($item['productInfo']->price), 2); ?>đ</span>
                                                          <span class="quantity">Số lượng:
                                                              <?php echo e($item['quantity']); ?></span>
                                                      </div>
                                                      <div class="cart_remove">
                                                          <a title="Remove this item"
                                                              href="<?php echo e(route('deleteCart', $item['productInfo']->id)); ?>"><i
                                                                  class="fa fa-times-circle"></i></a>
                                                      </div>
                                                  </div>
                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              <div class="total_price">
                                                  <span>Tổng Tiền </span>
                                                  <span class="prices"> <?php echo e(number_format($newcart->totalPrice), 2); ?>đ
                                                  </span>
                                              </div>
                                              <div class="cart_button">
                                                  <a href="/cart">Xem giỏ hàng</a>
                                                  <a href="<?php echo e(route('checkout')); ?>">Thanh Toán</a>
                                              </div>
                                          <?php else: ?>
                                              <div class="cart_item">
                                                  <div class="cart_img">
                                                      <a href="#"><img
                                                              src="<?php echo e(asset('frontend/assets/img/cart.png')); ?>"
                                                              alt=""></a>
                                                  </div>
                                                  <h6> Hiện chưa có sản phẩm</h6>
                                              </div>
                                              <div class="total_price">
                                                  <span>Tổng Tiền </span>
                                                  <span class="prices"> 0đ </span>
                                              </div>
                                              <div class="cart_button">
                                                  <a href="/cart">Xem giỏ hàng</a>
                                                  <a href="<?php echo e(route('checkout')); ?>" style="pointer-events: none"">Thanh
                                                      Toán</a>
                                              </div>
                                          <?php endif; ?>
                                      </div>
                                      <!--mini cart end-->
                                  </div>

                              </div>
                          </div>

                          <!-- My account -->
                          
                  </div>
                  <!--header middel end-->
                  <div class="header_bottom">
                      <div class="row">
                          <div class="col-12">
                              <div class="main_menu_inner">
                                  <div class="main_menu d-none d-lg-block">
                                      <nav>
                                          <ul>
                                              <li class="active"><a href="<?php echo e(route('home')); ?>">NEW ARRIVALS</a>
                                                  <div class="mega_menu jewelry">

                                                  </div>
                                              </li>
                                              <li><a href="<?php echo e(route('product-grids')); ?>">Sản Phẩm</a>
                                                  <div class="mega_menu">
                                                      <div class="mega_top fix">
                                                          <?php
                                                              $menu = App\Models\Category::getAllParentWithChild();
                                                          ?>
                                                          <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                              <div class="mega_items">
                                                                  <h3><a
                                                                          href="<?php echo e(route('product-cat', $value->slug)); ?>"><?php echo e($value->title); ?></a>
                                                                  </h3>
                                                                  <?php
                                                                      $menuChild = App\Models\Category::getChildByParentID($value->id);
                                                                  ?>
                                                                  <ul>
                                                                      <?php $__currentLoopData = $menuChild; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                          <li><a href="#"><?php echo e($val); ?></a>
                                                                          </li>
                                                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                  </ul>
                                                              </div>
                                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                      </div>
                                                      <div class="mega_bottom fix">
                                                          <div class="mega_thumb">
                                                              <a href="#"><img
                                                                      src="<?php echo e(asset('frontend\assets\img\banner\banner1.jpg')); ?>"
                                                                      alt=""></a>
                                                          </div>
                                                          <div class="mega_thumb">
                                                              <a href="#"><img
                                                                      src="<?php echo e(asset('frontend\assets\img\banner\banner2.jpg')); ?>"
                                                                      alt=""></a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </li>
                                              <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                  <li>
                                                      <a
                                                          href="<?php echo e(route('product-cat', $cate->slug)); ?>"><?php echo e($cate->title); ?></a>
                                                  </li>
                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              <li><a href="<?php echo e(route('product-sales')); ?>">Khuyến Mãi</a>
                                                <div class="mega_menu jewelry">
                                                    <div class="mega_items jewelry">
                                                        <ul>
                                                            <?php $__currentLoopData = $discount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li><a href="shop-list.html">SALE <?php echo e($data->discount); ?>%</a></li>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </ul>
                                                    </div>
                                                </div>  
                                            </li>

                                              <li><a href="<?php echo e(route('blog')); ?>">Tin Tức</a></li>

                                          </ul>
                                      </nav>
                                  </div>

                                  
                                  


                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!--header end -->

              <!-- Modal -->
              
<?php /**PATH C:\wamp64\www\PHP_Laravel\web_ban_quan_ao\resources\views/frontend/layouts/header.blade.php ENDPATH**/ ?>