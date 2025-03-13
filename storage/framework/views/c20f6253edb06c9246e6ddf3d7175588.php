<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Đăng Ký Gói Instagram</h1>
    <!-- Added registration form -->
    <form action="<?php echo e(route('register.service')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="service_package" value="instagram">
        <div class="mb-3">
            <label for="name">Họ và Tên</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Nhập họ và tên" required>
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Nhập email" required>
        </div>
        <div class="mb-3">
            <label for="phone">Số điện thoại</label>
            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Nhập số điện thoại" required>
        </div>
        <div class="mb-3">
            <label for="message">Ghi chú</label>
            <textarea id="message" name="message" class="form-control" placeholder="Nội dung ghi chú"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Đăng ký ngay</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\TrickerChannel\resources\views/dang-ky-goi-instagram.blade.php ENDPATH**/ ?>