<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dịch Vụ Facebook Ads</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Reset cơ bản */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        /* Hero Section */
        .hero {
            position: relative;
            background: linear-gradient(120deg, #4c6ef5 0%, #ffffff 70%);
            overflow: hidden;
        }

        .hero-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        .hero-text {
            flex: 1;
            max-width: 600px;
        }

        .hero-text h1 {
            font-size: 36px;
            color: #fff;
            margin-bottom: 20px;
        }

        .hero-text p {
            font-size: 18px;
            color: #fff;
            margin-bottom: 30px;
            line-height: 1.5;
        }

        .hero-text .btn-cta {
            display: inline-block;
            background-color: #ffcd00;
            color: #333;
            padding: 12px 24px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 4px;
            text-decoration: none;
        }

        .hero-text .btn-cta:hover {
            background-color: #ffc107;
        }

        .hero-image {
            flex: 1;
            text-align: right;
        }

        .hero-image img {
            max-width: 400px;
            width: 100%;
        }

        .wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 120px;
        }

        /* Container chung */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        /* Nội dung dịch vụ */
        .service-content h2 {
            font-size: 28px;
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .service-content ul {
            list-style: none;
            margin-top: 20px;
        }

        .service-content ul li {
            font-size: 18px;
            margin-bottom: 10px;
            padding-left: 25px;
            position: relative;
        }

        .service-content ul li::before {
            content: "•";
            position: absolute;
            left: 0;
            color: #4c6ef5;
        }

        /* PHẦN PHỄU MARKETING & LỢI ÍCH */
        .funnel-section {
            margin-top: 40px;
        }

        .funnel-section h2 {
            font-size: 28px;
            text-align: center;
            margin-bottom: 10px;
            color: #333;
        }

        .funnel-section p {
            text-align: center;
            margin-bottom: 20px;
            font-size: 16px;
            color: #666;
        }

        .funnel-img {
            position: relative;
            text-align: center;
            max-width: 500px;
            margin: 0 auto 40px;
        }

        .funnel-img img {
            width: 100%;
            border-radius: 8px;
        }

        .benefits {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }

        .benefit-box {
            background-color: #fff;
            border: 1px solid #eaeaea;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .benefit-box h4 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #4c6ef5;
        }

        .benefit-box p {
            font-size: 16px;
            color: #555;
        }

        /* PHẦN MỚI: GIẢI PHÁP QUẢNG CÁO TRỌN GÓI */
        .solution-section {
            margin-top: 60px;
            text-align: center;
        }

        .solution-section h2 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #333;
        }

        /* Tabs 3 mục */
        .tabs {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 40px;
        }

        .tab-item {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            font-weight: bold;
            color: #333;
            transition: background-color 0.2s;
        }

        .tab-item:hover {
            background-color: #f0f0f0;
        }

        .tab-item.active {
            background-color: #4c6ef5;
            color: #fff;
            border-color: #4c6ef5;
        }

        /* Hai box minh họa */
        .awareness-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .awareness-box {
            background-color: #fff;
            border: 1px solid #eaeaea;
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .awareness-box .icon-wrap {
            margin-bottom: 15px;
        }

        .awareness-box .icon-wrap img {
            width: 80px;
            height: 80px;
        }

        .awareness-box h3 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #4c6ef5;
        }

        .awareness-box p {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
        }

        .btn-view {
            display: inline-block;
            background-color: #4c6ef5;
            color: #fff;
            padding: 8px 16px;
            border-radius: 4px;
            text-decoration: none;
        }

        .btn-view:hover {
            background-color: #3451b7;
        }

        /* PHẦN TIẾP THEO: “QUẢNG CÁO FACEBOOK ADS PHÙ HỢP NHỮNG AI?” */
        .who-section {
            margin-top: 60px;
            text-align: center;
            position: relative;
            /* Nếu muốn trang trí thêm background */
        }

        .who-section h2 {
            font-size: 28px;
            color: #333;
            margin-bottom: 10px;
        }

        .who-section p {
            font-size: 16px;
            color: #666;
            margin-bottom: 30px;
        }

        /* 3 khối giới thiệu đối tượng */
        .who-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            max-width: 1000px;
            margin: 0 auto;
            /* canh giữa */
        }

        .who-card {
            background-color: #fff;
            border: 1px solid #eaeaea;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .who-card img {
            width: 60px;
            margin-bottom: 15px;
        }

        .who-card h3 {
            font-size: 20px;
            color: #4c6ef5;
            margin-bottom: 10px;
        }

        .who-card p {
            font-size: 16px;
            color: #555;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            background-color: #f1f1f1;
            margin-top: 40px;
        }
    </style>
</head>

<body>
    <!-- Gọi menu partial -->
    <?php echo $__env->make('partials.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-container">
            <div class="hero-text">
                <h1>Dịch Vụ Quảng Cáo Facebook</h1>
                <p>
                    Quảng Cáo Facebook giúp tăng trưởng doanh số bán hàng MẠNH MẼ cho bất cứ lĩnh vực.
                    Phát triển thương hiệu trên nền tảng MXH và lưu trữ thông tin khách hàng
                    CHÍNH XÁC nhanh chóng.
                </p>
                <a href="#" class="btn-cta">Tư vấn ngay</a>
            </div>
            <div class="hero-image">
                <img src="/dist/images/page/ads.jpg" alt="Minh hoạ Facebook Ads">
            </div>
        </div>
        <!-- Wave SVG -->
        <svg class="wave" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                d="M0,192L60,181.3C120,171,240,149,360,160C480,171,600,213,720,234.7C840,256,960,256,1080,224C1200,192,1320,128,1380,96L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
            </path>
        </svg>
    </section>

    <!-- Phần nội dung chính dưới hero -->
    <div class="container">
        <!-- (1) Phần Phễu Marketing & Lợi Ích -->
        <div class="funnel-section">
            <h2>Facebook Ads đem lại lợi ích gì?</h2>
            <p>Quảng cáo Facebook Ads đi theo mô hình phễu giúp gia tăng nhận diện thương hiệu, tương tác và tối đa chuyển đổi.</p>
            <div class="funnel-img">
                <img src="/dist/images/page/phieufb.jpg" alt="Minh hoạ Facebook Ads">
            </div>
            <div class="benefits">
                <div class="benefit-box">
                    <h4>Tìm kiếm khách hàng nhanh chóng</h4>
                    <p>Tận dụng nền tảng có hàng tỉ người dùng, tiếp cận chính xác đối tượng mục tiêu.</p>
                </div>
                <div class="benefit-box">
                    <h4>Tăng tương tác cho Fanpage</h4>
                    <p>Nội dung quảng cáo hấp dẫn giúp tăng like, comment, share, lan tỏa thương hiệu.</p>
                </div>
                <div class="benefit-box">
                    <h4>Xây dựng data khách hàng</h4>
                    <p>Thu thập thông tin khách hàng tiềm năng và chăm sóc họ qua các kênh khác nhau.</p>
                </div>
                <div class="benefit-box">
                    <h4>Chiến dịch Remarketing</h4>
                    <p>Tiếp cận lại khách hàng cũ, tăng tần suất hiển thị và tối ưu chi phí quảng cáo.</p>
                </div>
            </div>
        </div>

        <!-- (2) GIẢI PHÁP QUẢNG CÁO TRỌN GÓI -->
        <div class="solution-section">
            <h2>Trọn Bộ Giải Pháp Quảng Cáo Facebook Cho Doanh Nghiệp</h2>
            <div class="tabs">
                <button class="tab-item active">Xây Dựng Thương Hiệu</button>
                <button class="tab-item">Thu Hút Sự Quan Tâm</button>
                <button class="tab-item">Tăng Tỷ Lệ Chuyển Đổi</button>
            </div>
            <div class="awareness-row">
                <div class="awareness-box">
                    <div class="icon-wrap">
                        <img src="/dist/images/page/brand-image.jpg" alt="Minh hoạ Facebook Ads">
                    </div>
                    <h3>Nhận biết thương hiệu</h3>
                    <p>Luôn nổi bật với những chiến dịch marketing đa kênh và content hấp dẫn, giúp tiếp cận đúng đối tượng.</p>
                    <a href="#" class="btn-view">Xem miễn phí</a>
                </div>
                <div class="awareness-box">
                    <div class="icon-wrap">
                        <img src="/dist/images/page/brand-image.jpg" alt="Minh hoạ Facebook Ads">
                    </div>
                    <h3>Người quan tâm thương hiệu</h3>
                    <p>Chủ động đo lường, đánh giá và tương tác với khách hàng mục tiêu, gia tăng uy tín doanh nghiệp.</p>
                    <a href="#" class="btn-view">Xem miễn phí</a>
                </div>
            </div>
        </div>

        <!-- (3) PHẦN MỚI: QUẢNG CÁO FACEBOOK ADS PHÙ HỢP NHỮNG AI? -->
        <div class="who-section">
            <h2>Quảng Cáo Facebook Ads Phù Hợp Những Ai?</h2>
            <p>Dù khách hàng là ai, chúng tôi cũng phục vụ hết mình</p>
            <!-- 3 khối giới thiệu đối tượng -->
            <div class="who-container">
                <div class="who-card">
                    <img src="/dist/images/page/icon.jpg" alt="Icon 1">
                    <h3>Chúng tôi được tin tưởng</h3>
                    <p>Chúng tôi đã đồng hành cùng nhiều ngành hàng & lĩnh vực khác nhau.</p>
                </div>
                <div class="who-card">
                    <img src="/dist/images/page/icon.jpg" alt="Icon 2">
                    <h3>Doanh nghiệp vừa và nhỏ</h3>
                    <p>Giúp bạn tối ưu chi phí, nhắm chuẩn đối tượng, nâng cao doanh thu nhanh chóng.</p>
                </div>
                <div class="who-card">
                    <img src="/dist/images/page/icon.jpg" alt="Icon 3">
                    <h3>Thương hiệu cá nhân</h3>
                    <p>Tăng độ nhận diện, tạo niềm tin & xây dựng hình ảnh cá nhân chuyên nghiệp.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php echo $__env->make('partials.footer-main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH C:\laragon\www\TrickerChannel\resources\views/services/facebook-ads.blade.php ENDPATH**/ ?>