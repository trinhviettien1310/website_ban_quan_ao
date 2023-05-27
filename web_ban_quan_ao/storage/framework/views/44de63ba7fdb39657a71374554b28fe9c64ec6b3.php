
<?php $__env->startSection('main-content'); ?>
<?php $__env->startSection('title',''); ?>
<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="<?php echo e(route('home')); ?>">Trang chủ</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Tin Tức / <?php echo e($post->title); ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--blog area start-->
<div class="main_blog_area blog_details">
    <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="blog_details_left">
                    <div class="blog_gallery">   
                        <div class="blog_header">
                            
                            
                        </div>
                        <div class="blog_active owl-carousel">
                            <?php
                                $photo=explode(',',$post->photo);
                            ?>
                            <?php $__currentLoopData = $photo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <div class="blog_thumb blog__hover">
                                <a href="<?php echo e(route('blog-detail',$post->slug)); ?>"><img  src="<?php echo e($photos); ?>" alt="<?php echo e($photos); ?>"></a>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </div>   

                        <div class="blog_entry_content">
                           <p><?php echo $post->description; ?></p>

                          
                        </div>
                      
                        <div class="wishlist-share">
                        <h4>Chia sẻ qua:</h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>           
                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>           
                            <li><a href="#"><i class="fa fa-tumblr"></i></a></li>           
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>        
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>        
                        </ul>      
                    </div>
                    </div> 
                     <!--services img area-->
             
                   <!--services img end-->
                </div>
            </div>
            <div class="col-lg-3 col-md-8 offset-md-2 offset-lg-0">
               <div class="blog_details_right">
                    <div class="blog_widget search_widget mb-30">
                       <h3>Tìm kiếm</h3>
                       <form action="#">
                           <input placeholder="search.." type="text">
                           <button type="submit"><i class="fa fa-search"></i></button>
                       </form>
                    </div>
      
                    <div class="blog_widget widget_categoie  mb-30">
                        <h3>Danh Mục Blog</h3>
                        <ul>
                            <?php $__currentLoopData = $postcate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="#"><?php echo e($cate->title); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                   
                    <div class="blog_widget widget_recent  mb-30">
                       <h3>Bài viết gần đây</h3> 
                        <div class="widget_recent_inner">   
                            <?php $__currentLoopData = $recent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $re): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="single_posts">
                                <div class="posts_thumb">
                                    <a href="#"><img src="<?php echo e($re->photo); ?>" alt=""></a>
                                </div>
                                <div class="post_content">
                                    <span>
                                        <a class="tweet_author" href="#"><?php echo e($re->title); ?></a>

                                    </span>
                                    <a href="#"><?php echo e($re->created_at->format('d.m.Y')); ?> </a>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>         
                    </div>
                </div>
            </div>
        </div>
</div>
<!--blog area end-->

</div>
<!--pos page inner end-->
</div>
</div>
<!--pos page end-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\PHP_Laravel\web_ban_quan_ao\resources\views/frontend/pages/blog-detail.blade.php ENDPATH**/ ?>