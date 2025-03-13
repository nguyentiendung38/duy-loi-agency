@extends('layouts.app')
@section('title', 'Tư Vấn Ads')
@section('content')
@include('partials.menu')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 style="color:#dc3545;"><i class="fas fa-ad"></i> Tư Vấn Ads</h1>
        <p class="lead" style="color:#555;">Giải pháp tư vấn quảng cáo giúp bạn tiếp cận khách hàng một cách hiệu quả nhất.</p>
    </div>
    <div class="mb-4">
        <p style="font-size:1.2rem; color:#666;">
            Với đội ngũ chuyên gia tài năng, chúng tôi cung cấp dịch vụ tư vấn Ads chuyên sâu, từ phân tích thị trường đến đề xuất chiến lược tối ưu. Mỗi chiến dịch được cá nhân hóa nhằm mang lại hiệu quả tối đa và tăng doanh số cho doanh nghiệp của bạn.
        </p>
    </div>
    <div class="row text-center mt-4">
        <div class="col-md-4">
            <i class="fas fa-chart-line fa-3x text-success mb-2"></i>
            <h5>Phân Tích Sâu</h5>
            <p>Đánh giá thị trường và phân tích số liệu để đưa ra quyết định chính xác.</p>
        </div>
        <div class="col-md-4">
            <i class="fas fa-lightbulb fa-3x text-warning mb-2"></i>
            <h5>Chiến Lược Đột Phá</h5>
            <p>Xây dựng giải pháp quảng cáo sáng tạo, phù hợp với từng đối tượng khách hàng.</p>
        </div>
        <div class="col-md-4">
            <i class="fas fa-headset fa-3x text-danger mb-2"></i>
            <h5>Hỗ Trợ Tận Tâm</h5>
            <p>Đồng hành cùng bạn 24/7 để đảm bảo chiến dịch luôn đạt hiệu quả.</p>
        </div>
    </div>
    <!-- Additional Ads Consulting Section -->
    <div class="mt-5">
        <h2 class="mb-4 text-center" style="color:#007bff;"><i class="fab fa-facebook-square"></i> Tư Vấn Facebook Ads</h2>
        <p class="text-center" style="font-size:1.1rem; color:#666;">
            Chúng tôi mang đến giải pháp quảng cáo Facebook hiệu quả, từ việc xây dựng chiến lược, phát triển nội dung đến tối ưu hóa chiến dịch, giúp doanh nghiệp của bạn tiếp cận đúng đối tượng khách hàng mục tiêu.
        </p>
        <div class="row text-center mt-4">
            <div class="col-md-4">
                <i class="fas fa-chart-line fa-3x text-primary mb-2"></i>
                <h5>Chiến Lược Sâu</h5>
                <p>Xây dựng chiến lược quảng cáo đúng hướng và hiệu quả.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-sync-alt fa-3x text-primary mb-2"></i>
                <h5>Tối Ưu Liên Tục</h5>
                <p>Thường xuyên tối ưu chiến dịch dựa trên dữ liệu thực tế.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-users fa-3x text-primary mb-2"></i>
                <h5>Tiếp Cận Đối Tượng</h5>
                <p>Tăng cường tiếp cận khách hàng mục tiêu thông qua phân khúc thông minh.</p>
            </div>
        </div>
        <!-- Add image link placeholder for Facebook Ads -->
        <div class="text-center mt-3">
            <a href="#" class="btn btn-outline-secondary">Thêm đường link ảnh (Facebook Ads)</a>
        </div>
    </div>
    <!-- Tư vấn TikTok Ads Section -->
    <div class="mt-5">
        <h2 class="mb-4 text-center" style="color:#ff2d55;"><i class="fab fa-tiktok"></i> Tư Vấn TikTok Ads</h2>
        <p class="text-center" style="font-size:1.1rem; color:#666;">
            Với xu hướng quảng cáo mới, chúng tôi cung cấp dịch vụ tư vấn sáng tạo cho TikTok giúp thương hiệu của bạn nổi bật và thu hút khách hàng trẻ năng động.
        </p>
        <div class="row text-center mt-4">
            <div class="col-md-4">
                <i class="fas fa-bolt fa-3x text-danger mb-2"></i>
                <h5>Chiến Lược Nhanh</h5>
                <p>Triển khai chiến dịch linh hoạt và nhanh chóng.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-video fa-3x text-danger mb-2"></i>
                <h5>Nội Dung Sáng Tạo</h5>
                <p>Sản xuất video quảng cáo độc đáo thu hút sự chú ý.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-users fa-3x text-danger mb-2"></i>
                <h5>Tăng Tương Tác</h5>
                <p>Đẩy mạnh sự tương tác và xây dựng cộng đồng người dùng.</p>
            </div>
        </div>
        <!-- Add image link placeholder for TikTok Ads -->
        <div class="text-center mt-3">
            <a href="#" class="btn btn-outline-secondary">Thêm đường link ảnh (TikTok Ads)</a>
        </div>
    </div>
    <!-- Tư vấn Instagram Ads Section -->
    <div class="mt-5">
        <h2 class="mb-4 text-center" style="color:#e4405f;"><i class="fab fa-instagram"></i> Tư Vấn Instagram Ads</h2>
        <p class="text-center" style="font-size:1.1rem; color:#666;">
            Nâng tầm thương hiệu của bạn qua Instagram với chiến lược quảng cáo trực quan, sáng tạo, giúp tối ưu hóa hiệu quả và chuyển đổi cao.
        </p>
        <div class="row text-center mt-4">
            <div class="col-md-4">
                <i class="fas fa-camera-retro fa-3x text-warning mb-2"></i>
                <h5>Nội Dung Hình Ảnh</h5>
                <p>Phát triển nội dung hình ảnh ấn tượng thu hút khách hàng.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-heart fa-3x text-warning mb-2"></i>
                <h5>Tăng Tương Tác</h5>
                <p>Khuyến khích tương tác qua nội dung sáng tạo và độc đáo.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-chart-line fa-3x text-warning mb-2"></i>
                <h5>Hiệu Quả Chuyển Đổi</h5>
                <p>Tối ưu hóa quảng cáo nhằm đạt được tỷ lệ chuyển đổi cao.</p>
            </div>
        </div>
        <!-- Add image link placeholder for Instagram Ads -->
        <div class="text-center mt-3">
            <a href="#" class="btn btn-outline-secondary">Thêm đường link ảnh (Instagram Ads)</a>
        </div>
    </div>
</div>
@include('partials.footer-main')
@endsection