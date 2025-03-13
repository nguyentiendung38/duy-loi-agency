<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://www.tanglikegiare.club/public/evntox/assets/css/bootstrap.min.css">
    <style>
        /* Style cho header */
        header {
            background: #ff69b4;
            padding: 15px 20px;
        }

        #main-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Course card styles */
        .course-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            background-color: #f8f9fa;
            margin: 10px;
            width: 250px;
            transition: transform 0.2s ease-in-out;
        }

        .course-card img {
            max-width: 80%;
            height: auto;
            border-radius: 8px;
        }

        .course-card h3 {
            font-size: 1.2em;
        }

        .course-card p {
            font-size: 0.9em;
        }

        .course-card .price {
            font-size: 1.2em;
        }

        .course-card button {
            font-size: 0.9em;
            margin-top: 8px;
        }

        .course-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
        }

        .course-card:hover {
            transform: scale(1.05);
        }

        .welcome-text {
            text-align: center;
            font-size: 2em;
            margin-top: 50px;
            color: #2c3e50;
        }

        .container {
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <?php echo $__env->make('partials.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <h1 class="welcome-text">Chào mừng đến với trang chủ!</h1>
        <div class="course-container">
            <div class="course-card">
                <h3>Truyền Nghề Facebook ADS Freelancer 102</h3>
                <img src="/dist/images/page/hanhnghe.jpg" alt="Course Image">
                <p>Giá: <span class="price">4.800.000 ₫</span></p>
                <p>101 Lessons - Truyền Nghề</p>
                <p><strong>Chưa bắt đầu</strong></p>
                <a href="<?php echo e(url('/khoa-hoc-facebook')); ?>" class="btn btn-dark">Mua Ngay</a>
            </div>

            <div class="course-card">
                <h3>Quảng Cáo TikTok Cho Freelancer</h3>
                <img src="/dist/images/page/tiktok.jpg" alt="Course Image">
                <p>Giá: <span class="price">3.500.000 ₫</span></p>
                <p>80 Lessons - Quảng Cáo</p>
                <p><strong>Chưa bắt đầu</strong></p>
                <a href="<?php echo e(url('/khoa-hoc-tiktok')); ?>" class="btn btn-dark">Mua Ngay</a>
            </div>

            <div class="course-card">
                <h3>Quảng Cáo Instagram 101</h3>
                <img src="/dist/images/page/ista.jpg" alt="Course Image">
                <p>Giá: <span class="price">4.200.000 ₫</span></p>
                <p>95 Lessons - Instagram</p>
                <p><strong>Chưa bắt đầu</strong></p>
                <a href="<?php echo e(url('/khoa-hoc-instagram')); ?>" class="btn btn-dark">Mua Ngay</a>
            </div>

        </div>
    </div>
    <?php echo $__env->make('partials.footer-main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH C:\laragon\www\TrickerChannel\resources\views/course-registration.blade.php ENDPATH**/ ?>