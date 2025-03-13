<?php $__env->startSection('title', 'Đăng Ký Gói Facebook'); ?>
<?php $__env->startSection('content'); ?>
<div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="row justify-content-center w-100">
        <div class="col-md-8">
            
            <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
            <?php endif; ?>
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h2 class="mb-0">Đăng Ký Dịch Vụ Facebook</h2>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('register.service')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="service_package" value="facebook">
                        <div class="mb-3">
                            <label for="name" class="form-label">Họ và Tên</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Nhập họ và tên" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Nhập email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Số điện thoại</label>
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Nhập số điện thoại" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Ghi chú</label>
                            <textarea id="message" name="message" class="form-control" placeholder="Nội dung ghi chú"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Đăng ký ngay</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\TrickerChannel\resources\views/dang-ky-goi-facebook.blade.php ENDPATH**/ ?>