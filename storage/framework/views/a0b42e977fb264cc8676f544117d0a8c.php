<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Toán <?php echo e($courseType ?? 'Khóa Học'); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://www.tanglikegiare.club/public/evntox/assets/css/bootstrap.min.css">
    <style>
        .payment-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .bank-info {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }
        .qr-code {
            text-align: center;
            margin: 20px 0;
        }
        .qr-code img {
            max-width: 200px;
            height: auto;
        }
    </style>
</head>
<body>
    <!-- Include the menu partial -->
    <?php echo $__env->make('partials.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <div class="payment-container">
        <h2 class="text-center mb-4">Thanh Toán <?php echo e($courseType ?? 'Khóa Học'); ?></h2>
        
        <div class="course-info text-center mb-4">
            <h4><?php echo e($courseName); ?></h4>
            <?php if(isset($courseType)): ?>
                <p class="badge bg-info">Khóa học <?php echo e($courseType); ?></p>
            <?php endif; ?>
            <p class="text-primary">Giá: <?php echo e(number_format($price, 0, ',', '.')); ?> ₫</p>
        </div>

        <div class="bank-info">
            <h5>Thông tin chuyển khoản:</h5>
            <p><strong>Ngân hàng:</strong> Vietcombank</p>
            <p><strong>Số tài khoản:</strong> 9773398244</p>
            <p><strong>Chủ tài khoản:</strong> NGUYEN TIEN DUNG</p>
            <p><strong>Nội dung chuyển khoản:</strong> <?php echo e($paymentCode); ?> <?php echo e(isset($courseType) ? '- ' . $courseType : ''); ?></p>
        </div>

        <div class="qr-code">
            <img src="/dist/images/page/qr.jpg" alt="QR Code Thanh Toán">
            <p class="mt-2">Quét mã QR để thanh toán nhanh</p>
        </div>

        <div class="text-center">
            <p class="text-danger">Lưu ý: Vui lòng ghi đúng nội dung chuyển khoản để được kích hoạt khóa học tự động!</p>
            <?php if(isset($courseType)): ?>
                <a href="/<?php echo e(strtolower($courseType)); ?>-course-registration" class="btn btn-secondary mt-3">Quay lại</a>
            <?php else: ?>
                <a href="/course-registration" class="btn btn-secondary mt-3">Quay lại</a>
            <?php endif; ?>
        </div>
    </div>
    <?php echo $__env->make('partials.footer-main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html>
<?php /**PATH C:\laragon\www\TrickerChannel\resources\views/payment.blade.php ENDPATH**/ ?>