<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ - Duy Lợi Agency</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background-color: #f5f5f5;
        }

        .contact-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('/dist/images/page/contact-banner.jpg');
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 20px;
            position: relative;
            height: 400px;
            /* Điều chỉnh chiều cao theo nhu cầu */
            background: url('/dist/images/page/contact.jpg') center/cover no-repeat;
            margin-bottom: 40px;
        }

        .contact-hero h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .contact-info {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .info-item {
            margin-bottom: 25px;
            display: flex;
            align-items: flex-start;
        }

        .info-item i {
            font-size: 24px;
            color: #4CAF50;
            margin-right: 15px;
            width: 24px;
        }

        .info-content h3 {
            margin: 0 0 5px 0;
            color: #333;
        }

        .info-content p {
            margin: 0;
            color: #666;
        }

        .contact-form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
            font-weight: bold;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-group textarea {
            height: 150px;
            resize: vertical;
        }

        .submit-btn {
            background-color: #4CAF50;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            width: 100%;
        }

        .submit-btn:hover {
            background-color: #45a049;
        }

        .map-section {
            margin-top: 40px;
        }

        .map-container {
            height: 400px;
            border-radius: 10px;
            overflow: hidden;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

        @media (max-width: 768px) {
            .contact-hero {
                height: 200px;
            }

            .contact-hero h1 {
                font-size: 2em;
            }

            .container {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    @include('partials.menu')

    <div class="contact-hero">
    </div>

    <div class="container">
        <div class="contact-grid">
            <div class="contact-info">
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="info-content">
                        <h3>Địa Chỉ</h3>
                        <p>Lầu 1, 18H1 Dương Cẩm Bá, Q. Phú Nhuận, TP.HCM</p>
                    </div>
                </div>
                <div class="info-item">
                    <i class="fas fa-phone-alt"></i>
                    <div class="info-content">
                        <h3>Điện Thoại</h3>
                        <p>1800 99 88 97</p>
                    </div>
                </div>
                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <div class="info-content">
                        <h3>Email</h3>
                        <p>sale@admatrix.vn</p>
                    </div>
                </div>
                <div class="info-item">
                    <i class="fas fa-clock"></i>
                    <div class="info-content">
                        <h3>Giờ Làm Việc</h3>
                        <p>Thứ 2 - Thứ 7: 8:00 - 17:30<br>Chủ nhật: Nghỉ</p>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <h2>Gửi Tin Nhắn Cho Chúng Tôi</h2>
                <form action="/submit-contact" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Họ và Tên</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Số Điện Thoại</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Nội Dung</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Gửi Tin Nhắn</button>
                </form>
            </div>
        </div>

        <div class="map-section">
            <h2>Bản Đồ</h2>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.1843175339903!2d106.68573827465357!3d10.796376189352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528c7aa052157%3A0x8e71fb03e1f0c4c7!2zRMawxqFuZyBD4bqpbSBCw6EsIFBoxsO6IE5odeG6rW4sIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1699000000000!5m2!1svi!2s"
                    allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

    @include('partials.footer-main')
</body>

</html>