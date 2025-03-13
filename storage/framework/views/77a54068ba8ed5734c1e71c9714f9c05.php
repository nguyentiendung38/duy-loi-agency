<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới Thiệu - Duy Lợi Agency</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        .hero-section {
            position: relative;
            height: 500px; /* Chiều cao banner */
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .hero-section img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center 40%;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        /* About Section */
        .about-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin: 40px 0;
        }
        .about-content {
            padding: 20px;
        }
        .about-image img {
            width: 100%;
            border-radius: 8px;
        }

        /* Values Section */
        .values-section {
            background-color: #f9f9f9;
            padding: 60px 0;
        }
        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        .value-card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .value-card i {
            font-size: 2.5em;
            color: #4CAF50;
            margin-bottom: 15px;
        }

        /* Team Section */
        .team-section {
            padding: 60px 0;
        }
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        .team-member {
            text-align: center;
        }
        .team-member img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
        }

        /* Section Title chung */
        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        p {
            color: #666;
            margin-bottom: 15px;
        }

        /* Services Section */
        .services-section {
            padding: 60px 0;
        }
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }
        .service-card {
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            text-align: center;
        }
        .service-card i {
            font-size: 2.5em;
            color: #ff9800;
            margin-bottom: 15px;
        }

        /* Process Section */
        .process-section {
            background-color: #f9f9f9;
            padding: 60px 20px;
        }
        .process-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        .process-step {
            background: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .process-step h3 {
            margin-top: 0;
        }
        .step-number {
            font-size: 2em;
            font-weight: bold;
            color: #4CAF50;
            margin-bottom: 10px;
        }

        /* Contact Section */
        .contact-section {
            padding: 60px 0;
        }
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }
        .contact-info {
            font-size: 16px;
            line-height: 1.8;
        }
        .contact-form form {
            display: grid;
            gap: 15px;
        }
        .contact-form label {
            font-weight: bold;
        }
        .contact-form input[type="text"],
        .contact-form input[type="email"],
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }
        .contact-form button {
            background-color: #4CAF50;
            border: none;
            padding: 12px;
            color: #fff;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }
        .contact-form button:hover {
            background-color: #45a049;
        }

        /* Partners Section */
        .partners-section {
            padding: 60px 0;
            background-color: #fff;
        }
        .partners-grid {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            gap: 30px;
        }
        .partner-logo img {
            max-width: 150px;
            height: auto;
            filter: grayscale(100%);
            transition: filter 0.3s ease;
        }
        .partner-logo img:hover {
            filter: none;
        }
    </style>
</head>

<body>
    <?php echo $__env->make('partials.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Hero Section -->
    <div class="hero-section">
        <img src="/dist/images/page/gioithieu.jpg" alt="Giới thiệu Duy Lợi Agency">
    </div>

    <div class="container">
        <!-- About Section -->
        <div class="about-section">
            <div class="about-content">
                <h2>Câu Chuyện Của Chúng Tôi</h2>
                <p>Được thành lập từ năm 20XX, Duy Lợi Agency đã và đang không ngừng phát triển, trở thành một trong những đơn vị hàng đầu trong lĩnh vực Digital Marketing tại Việt Nam.</p>
                <p>Chúng tôi tự hào đã giúp hàng nghìn doanh nghiệp phát triển thông qua các giải pháp marketing số hiệu quả.</p>
                <p>Admatrix là công ty quảng cáo chuyên nghiệp và uy tín. Admatrix có chuyên môn cao ở lĩnh vực performance marketing, chúng tôi có thể giúp quý khách quảng cáo sản phẩm hoặc dịch vụ trên các kênh như TikTok, Facebook, Google. Bên cạnh đó, Admatrix cũng hỗ trợ các hoạt động kinh doanh đa nền tảng từ Website và Mạng xã hội. Ngoài ra, Admatrix mong muốn xây dựng thương hiệu online nhờ các hoạt động bán hàng trực tiếp qua livestream hoặc qua các sàn thương mại điện tử như Shopee, Lazada, TikTok Shop.</p>
            </div>
            <div class="about-image">
                <img src="/dist/images/page/online-ads.jpg" alt="Về chúng tôi">
            </div>
        </div>
    </div>

    <!-- Values Section -->
    <div class="values-section">
        <div class="container">
            <div class="section-title">
                <h2>Giá Trị Cốt Lõi</h2>
                <p>Những giá trị định hình nên con người và dịch vụ của chúng tôi</p>
            </div>
            <div class="values-grid">
                <div class="value-card">
                    <i class="fas fa-handshake"></i>
                    <h3>Uy Tín</h3>
                    <p>Luôn đặt chữ tín lên hàng đầu trong mọi giao dịch</p>
                </div>
                <div class="value-card">
                    <i class="fas fa-chart-line"></i>
                    <h3>Hiệu Quả</h3>
                    <p>Cam kết mang lại kết quả tốt nhất cho khách hàng</p>
                </div>
                <div class="value-card">
                    <i class="fas fa-lightbulb"></i>
                    <h3>Sáng Tạo</h3>
                    <p>Không ngừng đổi mới và tìm kiếm giải pháp tối ưu</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="container team-section">
        <div class="section-title">
            <h2>Đội Ngũ Của Chúng Tôi</h2>
            <p>Những chuyên gia giàu kinh nghiệm trong lĩnh vực Digital Marketing</p>
        </div>
        <div class="team-grid">
            <div class="team-member">
                <img src="/dist/images/page/avata2.jpg" alt="Team member">
                <h3>Nguyễn Tiến Dũng</h3>
                <p>Giám đốc điều hành</p>
            </div>
            <div class="team-member">
                <img src="/dist/images/page/avata2.jpg" alt="Team member">
                <h3>Nguyễn Tiến Dũng</h3>
                <p>Trưởng phòng Marketing</p>
            </div>
            <div class="team-member">
                <img src="/dist/images/page/avata1.jpg" alt="Team member">
                <h3>Lê Duy Lợi</h3>
                <p>Chuyên gia Facebook Ads</p>
            </div>
        </div>
    </div>

    <!-- Services Section (Dịch Vụ) -->
    <div class="services-section">
        <div class="container">
            <div class="section-title">
                <h2>Dịch Vụ Tại Admatrix</h2>
                <p>Chúng tôi cung cấp nhiều giải pháp marketing đa kênh</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <i class="fas fa-globe"></i>
                    <h3>Thiết Kế Website</h3>
                    <p>Tư vấn và xây dựng website chuyên nghiệp, chuẩn SEO.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-search"></i>
                    <h3>Website SEO</h3>
                    <p>Nâng cao thứ hạng website, tiếp cận nhiều khách hàng tiềm năng.</p>
                </div>
                <div class="service-card">
                    <i class="fab fa-facebook-f"></i>
                    <h3>Quản Lý Fanpage</h3>
                    <p>Quản lý nội dung, tương tác và phát triển kênh Facebook.</p>
                </div>
                <div class="service-card">
                    <i class="fab fa-google"></i>
                    <h3>Quảng Cáo Google</h3>
                    <p>Chạy quảng cáo Google Ads, tối ưu chi phí và tỷ lệ chuyển đổi.</p>
                </div>
                <div class="service-card">
                    <i class="fab fa-facebook"></i>
                    <h3>Quảng Cáo Facebook</h3>
                    <p>Target chính xác, tăng tương tác và doanh thu trên Facebook.</p>
                </div>
                <div class="service-card">
                    <i class="fab fa-tiktok"></i>
                    <h3>Quảng Cáo TikTok</h3>
                    <p>Tiếp cận giới trẻ, nội dung viral trên nền tảng TikTok.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-store"></i>
                    <h3>Quảng Cáo Sàn TMĐT</h3>
                    <p>Đẩy mạnh bán hàng trên Shopee, Lazada, Tiki, TikTok Shop, v.v.</p>
                </div>
                <div class="service-card">
                    <i class="fab fa-instagram"></i>
                    <h3>Instagram & Zalo</h3>
                    <p>Quản lý & chạy quảng cáo hiệu quả trên Instagram, Zalo.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Process Section (Quy Trình) -->
    <div class="process-section">
        <div class="container">
            <div class="section-title">
                <h2>Quy Trình Triển Khai Chiến Lược Marketing Đa Kênh</h2>
                <p>Quy trình 6 bước giúp doanh nghiệp tiếp cận tối đa khách hàng</p>
            </div>
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h3>Xác Định Mục Tiêu</h3>
                    <p>Admatrix tiến hành xác định mục tiêu, kênh phân phối tiềm năng và lập kế hoạch sơ bộ.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h3>Nghiên Cứu & Lên Kế Hoạch</h3>
                    <p>Thực hiện nghiên cứu thị trường, lên kế hoạch chi tiết cho từng kênh.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h3>Triển Khai & Theo Dõi</h3>
                    <p>Chạy thử, theo dõi chỉ số và đo lường hiệu quả liên tục.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h3>Tối Ưu Chiến Dịch</h3>
                    <p>Phân tích dữ liệu, tối ưu ngân sách và tối đa hóa lợi nhuận.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">5</div>
                    <h3>Xây Dựng Thương Hiệu</h3>
                    <p>Hỗ trợ khách hàng mở rộng kênh truyền thông và nhận diện thương hiệu.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">6</div>
                    <h3>Bàn Giao & Báo Cáo</h3>
                    <p>Bàn giao kết quả, báo cáo và hướng dẫn duy trì hiệu quả sau chiến dịch.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section (Liên Hệ) -->
    <div class="contact-section">
        <div class="container">
            <div class="section-title">
                <h2>Liên Hệ Với Chúng Tôi</h2>
                <p>Nhận tư vấn miễn phí và hỗ trợ nhanh chóng</p>
            </div>
            <div class="contact-grid">
                <!-- Thông tin liên hệ -->
                <div class="contact-info">
                    <p><strong>Số điện thoại:</strong> 1800 99 88 97</p>
                    <p><strong>Email:</strong> sale@admatrix.vn</p>
                    <p><strong>Địa chỉ:</strong> Lầu 1, 18H1 Dương Cẩm Bá, Q. Phú Nhuận, TP.HCM</p>
                    <p>Chúng tôi luôn sẵn sàng hỗ trợ bạn trong quá trình triển khai và tối ưu chiến dịch Marketing.</p>
                </div>
                <!-- Form liên hệ -->
                <div class="contact-form">
                    <form action="#" method="post">
                        <label for="name">Họ và Tên</label>
                        <input type="text" id="name" name="name" placeholder="Nhập họ tên của bạn" required>

                        <label for="phone">Số điện thoại</label>
                        <input type="text" id="phone" name="phone" placeholder="Nhập số điện thoại" required>

                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Nhập email của bạn" required>

                        <label for="message">Nội dung</label>
                        <textarea id="message" name="message" rows="4" placeholder="Nội dung cần tư vấn"></textarea>

                        <button type="submit">Gửi Thông Tin</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Partners Section (Đối Tác) -->
    <div class="partners-section">
        <div class="container">
            <div class="section-title">
                <h2>Đối Tác Chính Thức</h2>
                <p>Chúng tôi tự hào là đối tác của các nền tảng quảng cáo hàng đầu</p>
            </div>
            <div class="partners-grid">
                <div class="partner-logo">
                    <img src="/dist/images/page/facebook-partner.png" alt="Facebook Marketing Partner">
                </div>
                <div class="partner-logo">
                    <img src="/dist/images/page/tiktok-partner.png" alt="Tiktok Marketing Partner">
                </div>
                <div class="partner-logo">
                    <img src="/dist/images/page/tiktokshop-partner.png" alt="Tiktok Shop Partner">
                </div>
                <div class="partner-logo">
                    <img src="/dist/images/page/google-partner.png" alt="Google Partner">
                </div>
                <div class="partner-logo">
                    <img src="/dist/images/page/yandex-partner.png" alt="Yandex Partner">
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('partials.footer-main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\laragon\www\TrickerChannel\resources\views/about.blade.php ENDPATH**/ ?>