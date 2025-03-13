<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu Cực Đẹp</title>
    <!-- Font Awesome để sử dụng icon -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
     /* ----- Header Cực Đẹp ----- */
header {
    background-color: #2C2E96; /* Màu tím đậm */
    padding: 15px 20px;
    font-family: Arial, sans-serif;
}

#main-header {
    display: flex;
    align-items: center;
    justify-content: space-between; 
    /* Logo bên trái, menu ở giữa, icon (nếu có) bên phải */
}

/* Logo */
.logo-link {
    text-decoration: none;
    display: flex;
    align-items: center;
}
.logo span {
    font-size: 28px;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
}

/* 
   Menu chính (nav#mobile-menu)
   -> Đặt flex để các mục nằm ngang và thẳng hàng
*/
nav#mobile-menu {
    flex: 1; 
    /* Giúp menu chiếm khoảng trống giữa logo và icon */
    display: flex;
    justify-content: center; 
    align-items: center;
}
nav#mobile-menu ul {
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
}
nav#mobile-menu ul li {
    position: relative;
    margin-right: 20px; /* Khoảng cách giữa các mục menu */
    display: flex;
    align-items: center;
    height: 100%;
}
nav#mobile-menu ul li:last-child {
    margin-right: 0; /* Xóa khoảng cách cho mục cuối (tùy chọn) */
}
nav#mobile-menu ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 16px;
    padding: 8px 12px;
    transition: background-color 0.3s, color 0.3s;
    border-radius: 4px;
}
nav#mobile-menu ul li a:hover {
    background-color: rgba(255, 255, 255, 0.15);
}

/* Nút Giới Thiệu Nổi Bật */
nav#mobile-menu ul li a.highlight {
    border: 1px solid #fff; /* Viền trắng */
    border-radius: 4px;
    padding: 8px 14px;
    transition: background-color 0.3s, color 0.3s;
}
nav#mobile-menu ul li a.highlight:hover {
    background-color: #fff;  /* Hover sang nền trắng */
    color: #2C2E96;          /* Và đổi chữ thành màu tím */
}

/* Submenu (Dropdown) */
.has-submenu {
    position: relative;
    height: 100%;
}
.has-submenu > a {
    /* Nếu muốn mũi tên, thêm <i class="fas fa-chevron-down"></i> trong HTML */
    display: flex;
    align-items: center;
    gap: 5px; /* khoảng cách giữa chữ DỊCH VỤ và icon (nếu có) */
    height: 100%;
    padding: 8px 12px;
}
.submenu {
    display: flex;
    flex-direction: column;
    opacity: 0;
    visibility: hidden;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #3D3FAE; /* Màu tím nhạt hơn */
    border-radius: 4px;
    padding: 10px 0;
    min-width: 160px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: opacity 0.3s ease, transform 0.3s ease, visibility 0.3s;
    transform: translateY(10px);
    z-index: 999;
    margin-top: 0;
    padding-top: 10px;
}
.submenu li {
    margin: 0;
}
.submenu li a {
    color: #fff;
    font-size: 14px;
    padding: 8px 16px;
    display: block;
    white-space: nowrap;
}
.submenu li a:hover {
    background-color: rgba(255, 255, 255, 0.15);
}
.has-submenu:hover .submenu {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

/* Các icon bên phải (tùy chọn) */
.header-extra {
    display: flex;
    align-items: center;
    gap: 15px;
}
.icon-link {
    color: #fff;
    font-size: 18px;
    text-decoration: none;
    transition: color 0.3s;
}
.icon-link:hover {
    color: #ffeb3b; /* Vàng khi hover */
}
.lang-switch {
    background-color: #fff;
    color: #2C2E96;
    padding: 5px 10px;
    border-radius: 4px;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.3s, color 0.3s;
}
.lang-switch:hover {
    background-color: #2C2E96;
    color: #fff;
}

/* Responsive (dưới 768px) */
@media (max-width: 768px) {
    #main-header {
        flex-direction: column;
        align-items: flex-start;
    }
    /* Menu hiển thị dọc thay vì ngang */
    nav#mobile-menu {
        justify-content: flex-start;
        margin-top: 10px;
    }
    nav#mobile-menu ul {
        flex-direction: column;
    }
    nav#mobile-menu ul li {
        margin-right: 0;
        margin-bottom: 10px;
    }

    /* Submenu hiển thị dạng mở rộng (thay vì hover) */
    .submenu {
        position: static;
        transform: none;
        opacity: 1;
        visibility: visible;
        background-color: #2C2E96;
        box-shadow: none;
        padding: 0;
        margin-top: 5px;
    }
    .submenu li a {
        padding-left: 30px;
    }
}

.nav-menu {
    display: flex;
    justify-content: center;
    align-items: center;
    background: #fff;
    padding: 15px 0;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.nav-menu ul {
    list-style: none;
    display: flex;
    gap: 40px;
    margin: 0;
    padding: 0;
}

.nav-menu ul li a {
    text-decoration: none;
    color: #333;
    font-weight: 500;
    font-size: 16px;
    text-transform: uppercase;
    padding: 10px 15px;
}

.nav-menu ul li a:hover {
    color: #4c6ef5;
}
    </style>
</head>

<body>
    <header>
        <div id="main-header">
            <!-- Logo -->
            <div class="logo">
                <a href="/" class="logo-link">
                    <span>Duy Lợi</span>
                </a>
            </div>

            <!-- Menu -->
            <nav id="mobile-menu">
                <ul>
                    <li><a href="/">TRANG CHỦ</a></li>
                    <li><a href="/course-registration">KHÓA HỌC</a></li>
                    <li class="has-submenu">
                        <a href="#">DỊCH VỤ</a>
                        <ul class="submenu">
                            <li><a href="{{ route('services.facebook-ads') }}">FACEBOOK ADS</a></li>
                            <li><a href="{{ route('services.tiktok-ads') }}">TIKTOK ADS</a></li>
                            <li><a href="{{ route('services.instagram-ads') }}">INSTAGRAM ADS</a></li>
                        </ul>
                    </li>
                    <li><a href="/gioi-thieu">GIỚI THIỆU</a></li>
                    <li><a href="/lien-he">LIÊN HỆ</a></li>
                </ul>
            </nav>

            <!-- Nếu muốn thêm icon tìm kiếm, đăng nhập, chuyển ngôn ngữ... -->
            <div class="header-extra">
                <!-- Icon tìm kiếm -->
                <a href="#" class="icon-link">
                    <i class="fas fa-search"></i>
                </a>
                <!-- Icon người dùng -->
                <a href="#" class="icon-link">
                    <i class="fas fa-user"></i>
                </a>
                <!-- Nút chuyển ngôn ngữ -->
                <a href="#" class="lang-switch">VN</a>
            </div>
        </div>
    </header>
    <!-- Nội dung trang khác... -->

</body>

</html>