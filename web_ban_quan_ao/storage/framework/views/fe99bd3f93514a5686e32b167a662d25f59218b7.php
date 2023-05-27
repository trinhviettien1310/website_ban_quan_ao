<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>By Nhóm D</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo e(asset('backend/vendor/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo e(asset('backend/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo e(asset('backend/js/sb-admin-2.min.js')); ?>"></script>

<!-- Page level plugins -->
<script src="<?php echo e(asset('backend/vendor/chart.js/Chart.min.js')); ?>"></script>

<script src="<?php echo asset('backend/plugins/select2/js/select2.min.js'); ?>"></script>
<!-- toastr -->
<script src="<?php echo asset('backend/plugins/toastr/toastr.min.js'); ?>"></script>
<!-- Page level custom scripts -->


<script>
    toastr.options.closeButton = true;
    <?php if(session('success')): ?>
        var message = "<?php echo e(session('success')); ?>";
        toastr.success(message, {
            timeOut: 3000
        });
    <?php endif; ?>
    <?php if(session('error')): ?>
        var message = "<?php echo e(session('error')); ?>";
        toastr.error(message, {
            timeOut: 3000
        });
    <?php endif; ?>
    setTimeout(function() {
        toastr.clear()
    }, 3000);
    $(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        //Initialize Select2 Elements
        $('.select2').select2();
    });
</script>
<?php echo $__env->yieldPushContent('scripts'); ?>

<script>
    setTimeout(function() {
        $('.alert').slideUp();
    }, 4000);
</script>
<?php /**PATH F:\Ban_quan_ao\web_ban_quan_ao\resources\views/backend/layouts/footer.blade.php ENDPATH**/ ?>