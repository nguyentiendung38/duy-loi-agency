<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dịch Vụ TikTok Ads</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @include('partials.styles')
    <style>
        /* RESET CƠ BẢN */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #fff;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* HERO SECTION */
        .hero-tiktok {
            background: url('/dist/images/page/hero-bg.jpg') no-repeat center center/cover;
            position: relative;
            padding: 100px 20px;
            text-align: center;
            color: #fff;
            overflow: hidden;
        }

        .hero-tiktok h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero-tiktok p {
            font-size: 20px;
            margin-bottom: 30px;
            line-height: 1.5;
            max-width: 600px;
            margin: 0 auto 30px;
        }

        .hero-tiktok .btn-cta {
            background-color: #ff0050;
            /* Màu hồng chủ đạo TikTok */
            padding: 12px 24px;
            border-radius: 4px;
            color: #fff;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .hero-tiktok .btn-cta:hover {
            background-color: #e60045;
        }

        /* CONTAINER CHUNG */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        h2.section-title {
            font-size: 32px;
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        p.section-desc {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 40px;
            font-size: 16px;
            color: #555;
            line-height: 1.5;
        }

        /* 1. TIKTOK ADS ĐEM LẠI LỢI ÍCH GÌ? */
        .tiktok-funnel {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 30px;
        }

        .funnel-left {
            flex: 1 1 300px;
            max-width: 500px;
        }

        .funnel-left img {
            width: 100%;
            border-radius: 8px;
        }

        .funnel-right {
            flex: 1 1 300px;
            max-width: 500px;
        }

        .funnel-right ul {
            list-style: none;
        }

        .funnel-right ul li {
            font-size: 16px;
            margin-bottom: 10px;
            position: relative;
            padding-left: 25px;
        }

        .funnel-right ul li::before {
            content: "•";
            position: absolute;
            left: 0;
            color: #ff0050;
        }

        /* 2. TRỌN BỘ GIẢI PHÁP QUẢNG CÁO TIKTOK */
        .solution-section {
            background-color: #f9f9f9;
            padding: 60px 20px;
            text-align: center;
        }

        .solution-boxes {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-top: 40px;
        }

        .solution-box {
            background-color: #fff;
            border: 1px solid #eee;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
            padding: 20px;
            text-align: center;
        }

        .solution-box h4 {
            color: #ff0050;
            margin-bottom: 10px;
            font-size: 20px;
        }

        .solution-box p {
            font-size: 16px;
            color: #555;
            margin-bottom: 15px;
        }

        .solution-box .btn-view {
            display: inline-block;
            background-color: #ff0050;
            color: #fff;
            padding: 8px 16px;
            border-radius: 4px;
        }

        /* 3. QUẢNG CÁO TIKTOK PHÙ HỢP VỚI NHỮNG AI? */
        .who-section {
            padding: 60px 20px;
            text-align: center;
            position: relative;
        }

        .who-cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-top: 40px;
        }

        .who-card {
            background-color: #fff;
            border: 1px solid #eee;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 280px;
            padding: 20px;
            text-align: center;
        }

        .who-card i {
            font-size: 30px;
            color: #ff0050;
            margin-bottom: 10px;
        }

        .who-card h4 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #333;
        }

        .who-card p {
            font-size: 16px;
            color: #555;
        }

        /* 4. ĐIỂM KHÁC BIỆT ADMATRIX - TIKTOK AGENCY */
        .difference-section {
            background-color: #fafafa;
            padding: 60px 20px;
        }

        .difference-content {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .difference-left {
            flex: 1 1 400px;
            text-align: center;
        }

        .difference-left img {
            width: 100%;
            border-radius: 8px;
            max-width: 400px;
        }

        .difference-right {
            flex: 1 1 400px;
        }

        .difference-right h3 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .difference-right p {
            font-size: 16px;
            color: #555;
            margin-bottom: 10px;
            line-height: 1.5;
        }

        /* 5. DỊCH VỤ CỦA CHÚNG TÔI */
        .services-section {
            padding: 60px 20px;
            background-color: #222;
            /* nền tối */
            color: #fff;
        }

        .services-section h2 {
            color: #fff;
        }

        .services-list {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            margin-top: 40px;
        }

        .service-item {
            flex: 1 1 300px;
            min-width: 250px;
            background-color: #2f2f2f;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .service-item h4 {
            color: #ff0050;
            margin-bottom: 10px;
            font-size: 18px;
        }

        .service-item p {
            font-size: 15px;
            color: #ccc;
            line-height: 1.5;
        }

        /* 6. QUY TRÌNH TRIỂN KHAI TIKTOK ADS */
        .process-section {
            padding: 60px 20px;
        }

        .process-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .process-step {
            background-color: #fff;
            border: 1px solid #eee;
            border-radius: 8px;
            text-align: center;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .process-step h4 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #ff0050;
        }

        .process-step p {
            font-size: 15px;
            color: #555;
            line-height: 1.4;
        }

        /* 7. BẢNG GIÁ DỊCH VỤ TIKTOK ADS */
        .pricing-section {
            padding: 60px 20px;
            text-align: center;
            background-color: #f9f9f9;
        }

        .pricing-tabs {
            display: inline-flex;
            gap: 10px;
            margin-bottom: 40px;
        }

        .pricing-tab {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 20px;
            padding: 10px 20px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
            color: #333;
        }

        .pricing-tab:hover {
            background-color: #f0f0f0;
        }

        .pricing-tab.active {
            background-color: #ff0050;
            color: #fff;
            border-color: #ff0050;
        }

        .pricing-cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .pricing-card {
            background-color: #fff;
            border: 1px solid #eee;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 320px;
            padding: 20px;
            text-align: left;
        }

        .pricing-card h4 {
            font-size: 20px;
            color: #ff0050;
            margin-bottom: 15px;
        }

        .pricing-card p {
            font-size: 16px;
            color: #555;
            line-height: 1.4;
            margin-bottom: 10px;
        }

        /* 8. FORM LIÊN HỆ */
        .contact-section {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            padding: 60px 20px;
            background-color: #ff0050;
            color: #fff;
        }

        .contact-left,
        .contact-right {
            flex: 1 1 300px;
            min-width: 280px;
        }

        .contact-left h3 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .contact-left p {
            font-size: 16px;
            margin-bottom: 10px;
            line-height: 1.5;
        }

        .contact-left .contact-info {
            margin-top: 20px;
            font-size: 16px;
            line-height: 1.6;
        }

        .contact-right h3 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .contact-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #fff;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 4px;
        }

        .contact-form input[type="submit"] {
            background-color: #333;
            color: #fff;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .contact-form input[type="submit"]:hover {
            background-color: #444;
        }

        /* FOOTER */
        footer {
            text-align: center;
            padding: 20px;
            background-color: #f1f1f1;
            margin-top: 40px;
        }
        .banner {
    width: 100%;
    margin-bottom: 20px;
}

    </style>
</head>

<body>
    <!-- Gọi menu partial -->
    @include('partials.menu')
    <!-- Banner image -->
<div class="banner">
    <img src="/dist/images/page/quang-cao-tiktok-ads.jpg" alt="Banner TikTok" style="width: 100%; height: 450px;">
</div>
    <!-- 1. TIKTOK ADS ĐEM LẠI LỢI ÍCH GÌ? -->
    <div class="container">
        <h2 class="section-title">TikTok Ads Đem Lại Lợi Ích Gì?</h2>
        <p class="section-desc">
            Quảng Cáo TikTok giúp bạn tiếp cận nhóm khách hàng trẻ trung, năng động.
            Tỷ lệ tương tác cao, dễ dàng tạo viral.
            Xây dựng thương hiệu và tăng doanh số hiệu quả.
        </p>
        <div class="tiktok-funnel">
            <!-- Bên trái: Ảnh funnel hoặc mô phỏng -->
            <div class="funnel-left">
            <img src="/dist/images/page/pheu-mkt.jpg" alt="Phễu TikTok Marketing">
            </div>
            <!-- Bên phải: bullet list -->
            <div class="funnel-right">
                <ul>
                    <li>Nhận biết (Awareness)</li>
                    <li>Cân nhắc (Consideration)</li>
                    <li>Trung thành (Loyalty)</li>
                    <li>Tăng tỉ lệ chuyển đổi (Conversion)</li>
                    <li>Quảng bá thương hiệu (Branding)</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- 2. TRỌN BỘ GIẢI PHÁP QUẢNG CÁO TIKTOK CHO DOANH NGHIỆP -->
    <section class="solution-section">
        <h2 class="section-title">Trọn Bộ Giải Pháp Quảng Cáo TikTok Cho Doanh Nghiệp</h2>
        <p class="section-desc">
            Xây dựng thương hiệu, thu hút khách hàng tiềm năng, tăng tỷ lệ chuyển đổi.
            Dịch vụ toàn diện cho mọi quy mô doanh nghiệp.
        </p>
        <div class="solution-boxes">
            <div class="solution-box">
                <h4>Quảng Cáo TikTok Shop</h4>
                <p>Chạy quảng cáo sản phẩm ngay trong TikTok, dễ dàng chuyển đổi và đo lường.</p>
                <a href="#" class="btn-view">Tìm hiểu</a>
            </div>
            <div class="solution-box">
                <h4>Quảng Cáo Video Viral</h4>
                <p>Tạo nội dung hấp dẫn, dễ viral và thu hút hàng triệu lượt xem.</p>
                <a href="#" class="btn-view">Tìm hiểu</a>
            </div>
            <div class="solution-box">
                <h4>Quảng Cáo Livestream</h4>
                <p>Tương tác trực tiếp với khách hàng, tăng tỉ lệ chốt đơn nhanh chóng.</p>
                <a href="#" class="btn-view">Tìm hiểu</a>
            </div>
        </div>
    </section>

    <!-- 3. QUẢNG CÁO TIKTOK PHÙ HỢP VỚI NHỮNG AI? -->
    <section class="who-section">
        <h2 class="section-title">Quảng Cáo TikTok Phù Hợp Với Những Ai?</h2>
        <p class="section-desc">
            Từ thương hiệu cá nhân, doanh nghiệp vừa và nhỏ, đến công ty lớn muốn tăng trưởng vượt bậc.
        </p>
        <div class="who-cards">
            <div class="who-card">
                <i class="fas fa-user"></i>
                <h4>Thương hiệu cá nhân</h4>
                <p>Xây dựng hình ảnh cá nhân, tạo dấu ấn riêng với nội dung sáng tạo.</p>
            </div>
            <div class="who-card">
                <i class="fas fa-store"></i>
                <h4>Shop bán hàng online</h4>
                <p>Tăng tương tác, kéo lượt xem, thúc đẩy doanh số ngay trên TikTok Shop.</p>
            </div>
            <div class="who-card">
                <i class="fas fa-building"></i>
                <h4>Doanh nghiệp vừa và nhỏ</h4>
                <p>Tiếp cận hàng triệu người dùng tiềm năng với chi phí tối ưu.</p>
            </div>
            <div class="who-card">
                <i class="fas fa-globe-asia"></i>
                <h4>Doanh nghiệp lớn</h4>
                <p>Phát triển chiến lược dài hạn, xây dựng thương hiệu quốc tế.</p>
            </div>
        </div>
    </section>

    <!-- 4. ĐIỂM KHÁC BIỆT ADMATRIX - TIKTOK AGENCY -->
    <section class="difference-section">
        <div class="difference-content">
            <div class="difference-left">
                <img src="/dist/images/page/tiktok1.jpg" alt="Team Admatrix">
            </div>
            <div class="difference-right">
                <h3>Điểm Khác Biệt: Admatrix - TikTok Agency</h3>
                <p>Đội ngũ dày dạn kinh nghiệm trong lĩnh vực quảng cáo số, sẵn sàng tư vấn và đồng hành cùng bạn.</p>
                <p>Hệ thống phân tích dữ liệu chuyên sâu, tối ưu hóa chi phí và hiệu quả chiến dịch.</p>
                <p>Chính sách chăm sóc khách hàng tận tâm, báo cáo minh bạch, kịp thời.</p>
            </div>
        </div>
    </section>

    <!-- 5. DỊCH VỤ CỦA CHÚNG TÔI -->
    <section class="services-section">
        <div class="container">
            <h2 class="section-title" style="color: #fff;">Dịch Vụ Của Chúng Tôi</h2>
            <p class="section-desc" style="color: #ccc;">
                Chúng tôi cung cấp đầy đủ giải pháp để bạn chinh phục TikTok: Từ tư vấn chiến lược, sản xuất nội dung, đến quảng cáo livestream và remarketing.
            </p>
            <div class="services-list">
                <div class="service-item">
                    <h4>Tư Vấn, Thực Thi Chiến Lược</h4>
                    <p>Nghiên cứu thị trường, lên kế hoạch nội dung và chiến dịch quảng cáo TikTok.</p>
                </div>
                <div class="service-item">
                    <h4>Quảng Cáo Chuyển Đổi TikTok</h4>
                    <p>Tối ưu hóa landing page, nhắm đúng đối tượng, tăng tỉ lệ chốt đơn.</p>
                </div>
                <div class="service-item">
                    <h4>Quảng Cáo Tương Tác Với Cộng Đồng</h4>
                    <p>Tạo nội dung hấp dẫn, thúc đẩy follow và tương tác tự nhiên.</p>
                </div>
                <div class="service-item">
                    <h4>Quảng Cáo Livestream Shopping Ads</h4>
                    <p>Thu hút người xem, tăng tỉ lệ chuyển đổi ngay trong livestream.</p>
                </div>
                <div class="service-item">
                    <h4>Quảng Cáo Ngoài Kênh TikTok Ads</h4>
                    <p>Kết hợp đa kênh (Facebook, Instagram, Google) để phủ sóng thương hiệu.</p>
                </div>
                <div class="service-item">
                    <h4>Quảng Cáo Nhà Tài Trợ TikTok</h4>
                    <p>Phối hợp với KOL, KOC để quảng bá sản phẩm, nâng tầm thương hiệu.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. QUY TRÌNH TRIỂN KHAI TIKTOK ADS -->
    <section class="process-section">
        <div class="container">
            <h2 class="section-title">Quy Trình Triển Khai TikTok Ads</h2>
            <p class="section-desc">
                Admatrix luôn đồng hành cùng bạn từ giai đoạn lên ý tưởng đến khi hoàn thành và tối ưu chiến dịch.
            </p>
            <div class="process-grid">
                <div class="process-step">
                    <h4>Bước 1</h4>
                    <p>Phân tích, nghiên cứu ngành hàng và đối thủ, xác định mục tiêu chiến dịch.</p>
                </div>
                <div class="process-step">
                    <h4>Bước 2</h4>
                    <p>Tư vấn chiến lược, xây dựng kịch bản và nội dung video hấp dẫn.</p>
                </div>
                <div class="process-step">
                    <h4>Bước 3</h4>
                    <p>Sản xuất video, tối ưu hình ảnh và âm thanh, đảm bảo tính viral.</p>
                </div>
                <div class="process-step">
                    <h4>Bước 4</h4>
                    <p>Thiết lập chiến dịch quảng cáo, nhắm đối tượng, cài đặt ngân sách.</p>
                </div>
                <div class="process-step">
                    <h4>Bước 5</h4>
                    <p>Theo dõi, phân tích dữ liệu, tối ưu liên tục để đạt kết quả cao nhất.</p>
                </div>
                <div class="process-step">
                    <h4>Bước 6</h4>
                    <p>Báo cáo định kỳ, rút kinh nghiệm, đề xuất hướng cải thiện cho lần tiếp theo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. BẢNG GIÁ DỊCH VỤ TIKTOK ADS -->
    <section class="pricing-section">
        <div class="container">
            <h2 class="section-title">Bảng Giá Dịch Vụ TikTok Ads</h2>
            <p class="section-desc">
                (*) Quý khách lưu ý: Năm 202X, bảng giá có thể thay đổi tùy chiến dịch và tính thêm 5% VAT + 1.5% phí charge thẻ.
            </p>
            <div class="pricing-tabs">
                <div class="pricing-tab active">Quảng Cáo TikTok Shop</div>
                <div class="pricing-tab">Quảng Cáo Tương Tác Video</div>
                <div class="pricing-tab">QC Livestream</div>
                <div class="pricing-tab">QC Chiến Dịch Landing Page/Website</div>
            </div>
            <div class="pricing-cards">
                <div class="pricing-card">
                    <h4>QC TikTok Shop Cơ Bản</h4>
                    <p>• Chi phí dịch vụ: từ 5 triệu/tháng<br>
                        • Tối ưu lượt xem và lượt click vào gian hàng<br>
                        • Theo dõi chuyển đổi, báo cáo định kỳ</p>
                    <p><strong>Phù hợp cho shop mới</strong></p>
                </div>
                <div class="pricing-card">
                    <h4>QC TikTok Shop Nâng Cao</h4>
                    <p>• Chi phí dịch vụ: từ 10 triệu/tháng<br>
                        • Tối ưu nâng cao, remarketing, A/B test<br>
                        • Tư vấn chiến lược nội dung video</p>
                    <p><strong>Phù hợp cho shop đã có tệp khách hàng</strong></p>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. FORM LIÊN HỆ - TƯ VẤN -->
    <section class="contact-section">
        <div class="contact-left">
            <h3>Admatrix Agency - Liên Hệ Với Chúng Tôi</h3>
            <p>Admatrix đã đồng hành cùng hàng trăm thương hiệu lớn nhỏ triển khai TikTok Ads hiệu quả.</p>
            <p>Hãy liên hệ để được tư vấn chi tiết về lộ trình và giải pháp quảng cáo tối ưu nhất cho doanh nghiệp của bạn.</p>
            <div class="contact-info">
                <p><strong>Hotline:</strong> 1900xxxxxx</p>
                <p><strong>Email:</strong> sale@admatrix.vn</p>
                <p><strong>Thời gian:</strong> Thứ 2 đến Thứ 7 - 8h30 đến 17h30</p>
            </div>
        </div>
        <div class="contact-right">
            <h3>Nhận Tư Vấn Miễn Phí</h3>
            <form action="#" class="contact-form">
                <label for="name">Họ Tên</label>
                <input type="text" id="name" name="name" placeholder="Nhập họ tên">

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Nhập email của bạn">

                <label for="phone">Số Điện Thoại</label>
                <input type="text" id="phone" name="phone" placeholder="Nhập số điện thoại">

                <label for="message">Quảng cáo chuyển đổi, Landing Page, Website...</label>
                <textarea id="message" name="message" rows="3" placeholder="Nội dung cần tư vấn"></textarea>

                <input type="submit" value="Đăng Ký Ngay">
            </form>
        </div>
    </section>

    <!-- FOOTER -->
    @include('partials.footer-main')
</body>

</html>