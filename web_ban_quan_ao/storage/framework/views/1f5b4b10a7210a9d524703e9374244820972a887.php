
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
                                            <li>Tin tức</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--breadcrumbs area end-->
                        
                        <!--blog area start-->
                        <div class="blog_area">
                            <div class="row">   
                                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <?php
                                    $photo=explode(',',$post->photo);
                                ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single_blog">
                                        <div class="blog_thumb">
                                            <a href="<?php echo e(route('blog-detail',$post->slug)); ?>"><img src="<?php echo e($photo[0]); ?>" alt=""></a>
                                        </div>
                                        <div class="blog_content">
                                          
                                            <h3><a href="<?php echo e(route('blog-detail',$post->slug)); ?>"><?php echo e($post->title); ?></a></h3>
                                            <p><?php echo $post->summary; ?></p>
                                            <div class="post_footer">
                                                <div class="post_meta">
                                                    <ul>
                                                        <li><?php echo e($post->created_at->format('s:i:H d-m-Y ')); ?></li>
                                                    </ul>
                                                </div>
                                                <div class="Read_more">
                                                    <a href="<?php echo e(route('blog-detail',$post->slug)); ?>">Chi tiết  <i class="fa fa-angle-double-right"></i></a>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>    
                        </div>
                        <!--blog area end-->
                        
                        <!--pagination style start--> 
                        <div class="blog_pagination">
                            <div class="row">
                                <div class="col-12">
                                   <?php echo e($posts->links()); ?>

                                </div>
                            </div>
                        </div>
                        <!--pagination style end--> 
 
                    </div>
                    <!--pos page inner end-->
                </div>
            </div>
            <!--pos page end-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Ban_quan_ao\web_ban_quan_ao\resources\views/frontend/pages/blog.blade.php ENDPATH**/ ?>