@extends('layouts.app')
@section('title', 'Tư Vấn Chuyên Nghiệp')
@section('content')
@include('partials.menu')
<div class="container-fluid p-0">
    <!-- Banner Section -->
    <div class="banner">
        <img src="{{ asset('dist/images/page/tuvan.jpg') }}" alt="Banner Tư Vấn Chuyên Nghiệp" class="hero-image img-fluid w-100" style="object-fit: contain;">
    </div>
</div>
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 style="color:#dc3545;">
            <i class="fas fa-user-tie"></i> Tư Vấn Chuyên Nghiệp
        </h1>
        <p class="lead" style="color:#555;">
            Đồng hành cùng bạn với đội ngũ chuyên gia giàu kinh nghiệm.
        </p>
    </div>
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <p style="font-size:1.1rem; color:#666;">
                Với sự tư vấn tận tâm từ các chuyên gia hàng đầu, chúng tôi đảm bảo rằng chiến dịch quảng cáo của bạn sẽ được thiết kế theo cách tối ưu nhất. Hỗ trợ từ khâu phân tích thị trường đến chiến lược sáng tạo, chúng tôi luôn sẵn sàng đồng hành cùng bạn để đạt hiệu quả cao nhất.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 text-center">
            <i class="fas fa-comments fa-3x text-danger mb-3"></i>
            <h5>Tư vấn trực tiếp</h5>
            <p>Hỗ trợ qua điện thoại và gặp mặt trực tiếp khi cần.</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-lightbulb fa-3x text-danger mb-3"></i>
            <h5>Chiến lược độc đáo</h5>
            <p>Xây dựng chiến lược quảng cáo riêng biệt cho từng khách hàng.</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-hands-helping fa-3x text-danger mb-3"></i>
            <h5>Hỗ trợ liên tục</h5>
            <p>Đồng hành cùng bạn trong suốt quá trình triển khai.</p>
        </div>
    </div>
    <!-- Additional Details and Gallery -->
    <div class="mt-5">
        <h2 class="mb-4 text-center" style="color:#dc3545;"><i class="fas fa-info-circle"></i> Thông Tin Chi Tiết & Hình Ảnh</h2>
        <p style="font-size:1.1rem; color:#666;">
            Chúng tôi luôn đặt khách hàng làm trung tâm với dịch vụ tư vấn tận tâm và chuyên nghiệp. Mỗi chiến dịch không chỉ dừng lại ở việc triển khai, mà còn được theo dõi chặt chẽ qua các báo cáo định kỳ, giúp phát hiện và điều chỉnh kịp thời.
        </p>
        <div class="row mt-4">
            <div class="col-md-6 mb-3">
                <img src="https://via.placeholder.com/600x400?text=T%C6%B0+V%C3%A0n+1" alt="Tư vấn 1" class="img-fluid rounded">
            </div>
            <div class="col-md-6 mb-3">
                <img src="https://via.placeholder.com/600x400?text=T%C6%B0+V%C3%A0n+2" alt="Tư vấn 2" class="img-fluid rounded">
            </div>
        </div>
    </div>
    <!-- Extra Counseling Details -->
    <div class="mt-5">
        <h2 class="mb-4 text-center" style="color:#dc3545;"><i class="fas fa-handshake"></i> Dịch Vụ Tư Vấn Chuyên Sâu</h2>
        <p style="font-size:1.1rem; color:#666;">
             Chúng tôi đồng hành cùng khách hàng từ khảo sát đến triển khai và tối ưu hóa chiến dịch, đưa ra các giải pháp tư vấn cá nhân hóa và sáng tạo.
        </p>
        <div class="row text-center mt-4">
             <div class="col-md-4">
                 <i class="fas fa-user-check fa-3x text-danger mb-2"></i>
                 <h5>Tư Vấn Cá Nhân</h5>
                 <p>Giải pháp riêng dựa trên nhu cầu doanh nghiệp.</p>
             </div>
             <div class="col-md-4">
                 <i class="fas fa-headset fa-3x text-danger mb-2"></i>
                 <h5>Hỗ Trợ 24/7</h5>
                 <p>Luôn sẵn sàng tư vấn và giải đáp thắc mắc.</p>
             </div>
             <div class="col-md-4">
                 <i class="fas fa-lightbulb fa-3x text-danger mb-2"></i>
                 <h5>Chiến Lược Sáng Tạo</h5>
                 <p>Ý tưởng độc đáo cho từng chiến dịch quảng cáo.</p>
             </div>
        </div>
    </div>
</div>
@include('partials.footer-main')
@endsection