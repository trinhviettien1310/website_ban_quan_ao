<?php $__env->startSection('main-content'); ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="row">

        </div>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary float-left">Danh sách đơn hàng</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php if(count($orders) > 0): ?>
                    <table class="table table-bordered" id="order-dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Mã Đơn</th>
                                <th>Họ Tên</th>
                                <th>Email</th>
                                <th>Điện Thoại</th>
                                <th>Địa chỉ</th>
                                <th>Hình Thức</th>
                                <th>Tổng Tiền</th>
                                <th>Trạng thái</th>
                                <th>Tùy chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $shipping_charge = DB::table('shippings')
                                        ->where('id', $order->shipping_id)
                                        ->pluck('price');
                                ?>
                                <tr>
                                    <td><?php echo e($order->id); ?></td>
                                    <td><?php echo e($order->mahd); ?></td>
                                    <td><?php echo e($order->hoten); ?></td>
                                    <td><?php echo e($order->email); ?></td>
                                    <td><?php echo e($order->phone); ?></td>
                                    <td><?php echo e($order->diachi); ?></td>
                                    <td>
                                        <?php if($order->httt == 1): ?>
                                            Tiền Mặt
                                        <?php elseif($order->httt == 2): ?>
                                            MoMo
                                        <?php elseif($order->httt == 3): ?>
                                            PayPal
                                        <?php else: ?>
                                            ZaloPay
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e(number_format($order->tongtien), 2); ?>VNĐ</td>
                                    <td>
                                        <?php if($order->trangthaitt == '1'): ?>
                                            <span class="badge badge-danger"><?php echo e(_('Chờ Tiếp Nhận')); ?></span>
                                        <?php elseif($order->trangthaitt == '2'): ?>
                                            <span class="badge badge-primary"><?php echo e(_('Đã Tiếp Nhận')); ?></span>
                                        <?php elseif($order->trangthaitt == '3'): ?>
                                            <span class="badge badge-warning"><?php echo e(_('Đang Giao Hàng')); ?></span>
                                        <?php elseif($order->trangthaitt == '4'): ?>
                                            <span class="badge badge-success"><?php echo e(_('Đã Giao')); ?></span>
                                        <?php else: ?>
                                            <span class="badge badge-danger"><?php echo e(_('Đã Hủy')); ?></span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm float-left mr-1"
                                            style="height:30px; width:30px;border-radius:50%" data-toggle="modal"
                                            data-target="#exampleModalLong-<?php echo e($order->id); ?>">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        
                                        <a href="<?php echo e(route('order.edit', $order->id)); ?>"
                                            class="btn btn-primary btn-sm float-left mr-1"
                                            style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                            title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>
                                        <form method="POST" action="<?php echo e(route('order.destroy', [$order->id])); ?>">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <button class="btn btn-danger btn-sm dltBtn" data-id=<?php echo e($order->id); ?>

                                                style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                                data-placement="bottom" title="Delete"><i
                                                    class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <span style="float:right"></span>
                <?php else: ?>
                    <h6 class="text-center">Không có dữ liệu</h6>
                <?php endif; ?>
            </div>
        </div>
    </div>

 
    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong-<?php echo e($data->id); ?>" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Chi tiết đơn hàng</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- Hiển thị bảng thông tin sản phẩm đã mua -->
                    <div class="modal-body">
                        <table class="table table-bordered" id="order-dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Giá</th>
                                    <th>Số Lượng</th>
                                    <th>Thành Tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $order_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($data->id == $orderDetail->id_donhang): ?>
                                        <tr>
                                            <td><?php echo e($orderDetail->product_info['title']); ?></td>
                                            <td><?php echo e(number_format($orderDetail->giaban),2); ?> VNĐ</td>
                                            <td><?php echo e($orderDetail->soluong); ?></td>
                                            <td><?php echo e(number_format($orderDetail->thanhtien),2); ?> VNĐ</td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Thoát</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
    <link href="<?php echo e(asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <style>
        div.dataTables_wrapper div.dataTables_paginate {
            display: none;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <!-- Page level plugins -->
    <script src="<?php echo e(asset('backend/vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo e(asset('backend/js/demo/datatables-demo.js')); ?>"></script>
    <script>
        $('#order-dataTable').DataTable({
            "columnDefs": [{
                "orderable": false,
                "targets": [8]
            }]
        });

        // Sweet alert

        function deleteData(id) {

        }
    </script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.dltBtn').click(function(e) {
                var form = $(this).closest('form');
                var dataID = $(this).data('id');
                // alert(dataID);
                e.preventDefault();
                swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this data!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            form.submit();
                        } else {
                            swal("Your data is safe!");
                        }
                    });
            })
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BE2\web_ban_quan_ao\resources\views/backend/order/index.blade.php ENDPATH**/ ?>