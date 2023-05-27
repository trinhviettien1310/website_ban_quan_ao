<?php $__env->startSection('main-content'); ?>
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary float-left">Thêm Mới Sản Phẩm</h6>

        </div>
        <div class="card-body">
            <form method="post" action="<?php echo e(route('product.store')); ?>">
                <?php echo e(csrf_field()); ?>


                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="name">Tên Sản Phẩm</label>
                            <input class="form-control" id="title" type="text" name="title"
                                value="<?php echo e(old('title')); ?>">
                            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="price">Giá</label>
                            <input class="form-control" id="price" type="number" name="price"
                                value="<?php echo e(old('price')); ?>">
                            <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="quantity">Số Lượng</label>
                            <input class="form-control" id="quantity" type="number" name="stock"
                                value="<?php echo e(old('stock')); ?>">
                            <?php $__errorArgs = ['stock'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-3">
                        <div class="form-group">
                            <label for="is_featured">Đặc Biệt</label><br>
                            <input type="checkbox" name='is_featured' id='is_featured' value='1' checked> Yes
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <label for="id_nhacungcap">Nhà cung cấp <span class="text-danger">*</span></label>
                            <select name="id_nhacungcap" id="id_nhacungcap" class="form-control">
                                <option value="">--Chọn nhà cung cấp--</option>
                                <?php $__currentLoopData = $nhacungcap; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value='<?php echo e($data->id); ?>'><?php echo e($data->tenncc); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <label for="cat_id">Danh mục <span class="text-danger">*</span></label>
                            <select name="cat_id" id="cat_id" class="form-control">
                                <option value="">--Chọn danh mục--</option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cat_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value='<?php echo e($cat_data->id); ?>'><?php echo e($cat_data->title); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group d-none" id="child_cat_div">
                            <label for="child_cat_id">Danh Mục Con</label>
                            <select name="child_cat_id" id="child_cat_id" class="form-control">
                                <option value="">--Chọn danh mục con--</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                  <div class="col-4">
                    <div class="form-group">
                      <label for="discount" class="col-form-label">Khuyến mãi(%)</label>
                      <input id="discount" type="number" name="discount" min="0" max="100" placeholder="Enter discount"  value="<?php echo e(old('discount')); ?>" class="form-control">
                      <?php $__errorArgs = ['discount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="text-danger"><?php echo e($message); ?></span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                  </div>

                  <div class="col-4">
                    <div class="form-group">
                      <label for="discount" class="col-form-label">Size</label>
                      <select name="size[]" class="form-control selectpicker"  multiple data-live-search="true">
                        <option value="">--Select any size--</option>
                        <option value="S">Small (S)</option>
                        <option value="M">Medium (M)</option>
                        <option value="L">Large (L)</option>
                        <option value="XL">Extra Large (XL)</option>
                    </select>
                      <?php $__errorArgs = ['size'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="text-danger"><?php echo e($message); ?></span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                  </div>

                <div class="col-4">
                  <div class="form-group">
                    <label for="brand_id" class="col-form-label">Thương hiệu</label>
                    <select name="brand_id" class="form-control">
                        <option value="">--Chọn thương hiệu--</option>
                       <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($brand->id); ?>"><?php echo e($brand->title); ?></option>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                  </div>
                </div>
                </div>

                <div class="form-group">
                  <label for="summary" class="col-form-label">Chi tiết sản phẩm<span class="text-danger">*</span></label>
                  <textarea class="form-control" id="summary" name="summary"><?php echo e(old('summary')); ?></textarea>
                  <?php $__errorArgs = ['summary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="text-danger"><?php echo e($message); ?></span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
        
                <div class="form-group">
                  <label for="description" class="col-form-label">Hướng dẫn bảo quản</label>
                  <textarea class="form-control" id="description" name="description"><?php echo e(old('description')); ?></textarea>
                  <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="text-danger"><?php echo e($message); ?></span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

            <div class="row">

              <div class="col-4">
                <div class="form-group">
                  <label for="condition">Tình trạng</label>
                  <select name="condition" class="form-control">
                      <option value="">--Chọn tình trạng--</option>
                      <option value="0">Mặc Định</option>
                      <option value="1">Mới</option>
                      <option value="2">Hot</option>
                  </select>
                </div>
              </div>

              <div class="col-4">
                <div class="form-group">
                  <label for="inputPhoto" class="col-form-label">Hình Ảnh <?php echo e(_('(Kích Thước Ảnh 400X266)')); ?><span class="text-danger">*</span></label>
                  <div class="input-group">
                      <span class="input-group-btn">
                          <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                          <i class="fa fa-picture-o"></i>Chọn ảnh
                          </a>
                      </span>
                  <input id="thumbnail" class="form-control" type="text" name="photo" value="<?php echo e(old('photo')); ?>">
                </div>
                <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                  <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="text-danger"><?php echo e($message); ?></span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
              </div>

              <div class="col-4">
                <div class="form-group">
                  <label for="status" class="col-form-label">Trạng thái <span class="text-danger">*</span></label>
                  <select name="status" class="form-control">
                      <option value="1">Kinh Doanh</option>
                      <option value="0">Ngừng Kinh Doanh</option>
                  </select>
                  <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="text-danger"><?php echo e($message); ?></span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
              </div>
              
            </div>
            <div class="form-group mb-3">
              <button type="reset" class="btn btn-warning">Làm mới</button>
               <button class="btn btn-success" type="submit">Lưu</button>
            </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('backend/summernote/summernote.min.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script src="<?php echo e(asset('backend/summernote/summernote.min.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

    <script>
        $('#lfm').filemanager('image');

        $(document).ready(function() {
            $('#summary').summernote({
                placeholder: "Mô tả ngắn.....",
                tabsize: 2,
                height: 100
            });
        });

        $(document).ready(function() {
            $('#description').summernote({
                placeholder: "Mô tả sản phẩm.....",
                tabsize: 2,
                height: 200
            });
        });
        // $('select').selectpicker();
        $(document).ready(function() {
            $('#specifications').summernote({
                placeholder: "Thông số kỹ thuật.....",
                tabsize: 2,
                height: 200
            });
        });
    </script>

    <script>
        $('#cat_id').change(function() {
            var cat_id = $(this).val();
            // alert(cat_id);
            if (cat_id != null) {
                // Ajax call
                $.ajax({
                    url: "/admin/category/" + cat_id + "/child",
                    data: {
                        _token: "<?php echo e(csrf_token()); ?>",
                        id: cat_id
                    },
                    type: "POST",
                    success: function(response) {
                        if (typeof(response) != 'object') {
                            response = $.parseJSON(response)
                        }
                        // console.log(response);
                        var html_option = "<option value=''>----Chọn danh mục con----</option>"
                        if (response.status) {
                            var data = response.data;
                            // alert(data);
                            if (response.data) {
                                $('#child_cat_div').removeClass('d-none');
                                $.each(data, function(id, title) {
                                    html_option += "<option value='" + id + "'>" + title +
                                        "</option>"
                                });
                            } else {}
                        } else {
                            $('#child_cat_div').addClass('d-none');
                        }
                        $('#child_cat_id').html(html_option);
                    }
                });
            } else {}
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\PHP_Laravel\web_ban_quan_ao\resources\views/backend/product/create.blade.php ENDPATH**/ ?>