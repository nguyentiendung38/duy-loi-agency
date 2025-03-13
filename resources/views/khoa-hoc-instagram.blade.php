<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khóa Học Instagram Ads</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            color: #333;
            text-align: center;
        }

        .course-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .course-header img {
            width: 100%;
            max-width: 800px;
            border-radius: 8px;
        }

        .course-header h2 {
            font-size: 22px;
            color: #333;
            margin-top: 10px;
        }

        .course-header .features {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 10px;
        }

        .course-header .features span {
            display: flex;
            align-items: center;
            font-size: 14px;
            color: #555;
        }

        .course-header .features span i {
            margin-right: 5px;
            font-size: 20px;
            color: #007bff;
        }

        .btn-purchase {
            display: block;
            width: auto;
            /* Chỉ bao bọc nội dung */
            margin: 20px auto;
            /* Căn giữa nút */
            text-align: center;
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            font-size: 18px;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-purchase:hover {
            background-color: #0056b3;
        }

        ul {
            list-style-type: none;
            padding-left: 0;
        }

        ul li {
            font-size: 16px;
            color: #444;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <!-- Gọi menu partial -->
    @include('partials.menu')

    <div class="container">
        <!-- Phần header khóa học -->
        <div class="course-header">
            <img src="/dist/images/page/ista.jpg" alt="Khóa Học Instagram ADS">
            <h2>Truyền Nghề Instagram ADS 101</h2>
            <div class="features">
                <span><i class="fas fa-video"></i> Video/Text</span>
                <span><i class="fab fa-instagram"></i> Quảng Cáo Instagram</span>
                <span><i class="fas fa-book"></i> 95 Bài Học</span>
                <span><i class="fas fa-hourglass-half"></i> 0% Chưa Bắt Đầu</span>
            </div>
        </div>
        <!-- Nội dung chính -->
        <button class="btn-purchase">Tìm Hiểu Thêm</button>
        <div class="course-content">
            <h3>Nội Dung Chính:</h3>
            <ul>
                <li>Giới thiệu tổng quan về Instagram Ads</li>
                <li>Kỹ năng làm nghề quảng cáo trên Instagram</li>
                <li>Bài tập thực hành - làm ngay bây giờ</li>
                <li>Xây dựng tài nguyên quảng cáo bền vững</li>
                <li>Kỹ năng chuyên môn về Instagram Ads</li>
                <li>Tối ưu quảng cáo</li>
                <li>Mindset dẫn đầu trong quảng cáo Instagram</li>
            </ul>
            <h3>Bonus:</h3>
            <ul>
                <li>Phần quà đặc biệt</li>
                <li>Toàn bộ quá trình triển khai</li>
                <li>Template</li>
                <li>Coaching 1:1 quảng cáo Instagram cho người mới</li>
                <li>Support khóa học</li>
            </ul>
        </div>
        <a href="{{ url('/payment/instagram') }}" class="btn-purchase">Mua Ngay!</a>
    </div>
    @include('partials.footer-main')
</body>
</html>