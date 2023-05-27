<div>
    <p>CHÚC MỪNG QUÝ KHÁCH ĐÃ ĐẶT HÀNG THÀNH CÔNG</p>
    <p>Bạn đã đặt hàng thành công với mã <?php echo e($donhang['mahd']); ?>  trị giá <?php echo e(number_format($donhang['tongtien']),2); ?>đ </p>
    <p><?php if($donhang['trangthaitt']=='1'): ?>
        Trạng thái: Chờ xác nhận
        <?php elseif($donhang['trangthaitt']=='2'): ?>
        Trạng thái: Đã xác nhận đơn
        <?php elseif($donhang['trangthaitt']=='3'): ?>
        Trạng thái: Đang giao hàng
        <?php else: ?>
        Trạng thái: Đã giao
        <?php endif; ?>
    <p>Sau khi shop xác nhận đơn hàng sản phẩm sẽ được giao đến địa chỉ <?php echo e($donhang['diachi']); ?> trong thời gian 3-4 ngày</p>
    <p>Gillee Shop rất hân hạnh được phục vụ bạn,</p>
</div><?php /**PATH F:\Ban_quan_ao\web_ban_quan_ao\resources\views/frontend/mail/checkoutreponse.blade.php ENDPATH**/ ?>