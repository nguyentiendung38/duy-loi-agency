@extends('layouts.app')
@section('title', 'Đăng Ký Gói Combo Ads')
@section('content')
@include('partials.menu')
<div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="row justify-content-center w-100">
        <div class="col-md-8">
            {{-- Success message --}}
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <div class="card shadow">
                <div class="card-header bg-secondary text-white">
                    <h2 class="mb-0">Đăng Ký Dịch Vụ Combo Ads</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('register.service') }}" method="POST">
                        @csrf
                        <input type="hidden" name="service_package" value="combo">
                        <div class="mb-3">
                            <label for="name" class="form-label">Họ và Tên</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Nhập họ và tên" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Nhập email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Số điện thoại</label>
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Nhập số điện thoại" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Ghi chú</label>
                            <textarea id="message" name="message" class="form-control" placeholder="Nội dung ghi chú"></textarea>
                        </div>
                        <button type="submit" class="btn btn-secondary w-100">Đăng ký ngay</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('partials.footer-main')
@endsection