<?php

use App\Mail\MailForgotPassword;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\ViewClientController;
use App\Http\Controllers\Auth\AuthClientController;
use App\Http\Controllers\CronJobs\Service\CreateOrderController;
use App\Http\Controllers\Guest\DataClientController;
use App\Http\Controllers\Guest\Service\ViewServiceController;
use App\Mail\ForgotPassword;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;
use App\Http\Controllers\ServiceRegistrationController;


Route::get('/', [ViewClientController::class, 'LandingPage'])->name('landing');
Route::get('/course-registration', function () {
    return view('course-registration');
})->name('course-registration');
Route::view('/course-purchase', 'course-purchase');
Route::get('/payment/{course}', function ($course) {
    $courseInfo = [
        'facebook' => [
            'name' => 'Truyền Nghề Facebook ADS Freelancer 102',
            'price' => 4800000
        ],
        'tiktok' => [
            'name' => 'Quảng Cáo TikTok Cho Freelancer',
            'price' => 3500000
        ],
        'instagram' => [
            'name' => 'Quảng Cáo Instagram 101',
            'price' => 4200000
        ]
    ];

    if (!isset($courseInfo[$course])) {
        return redirect('/course-registration');
    }

    return view('payment', [
        'courseName' => $courseInfo[$course]['name'],
        'price' => $courseInfo[$course]['price'],
        'paymentCode' => strtoupper($course) . '_' . time()
    ]);
})->name('payment');

Route::get('/blog', function () {
    return view('blog.index');
})->name('blog.index');

Route::get('/blog/digital-marketing', function () {
    return view('blog.digital-marketing');
})->name('blog.digital-marketing');

Route::get('/blog/facebook-ads', function () {
    return view('blog.facebook-ads');
})->name('blog.facebook-ads');

Route::get('/blog/tiktok-ads', function () {
    return view('blog.tiktok-ads');
})->name('blog.tiktok-ads');

Route::get('/blog/phat-trien-ban-than', function () {
    return view('blog.phat-trien-ban-than');
})->name('blog.phat-trien-ban-than');

Route::get('/blog/video-chia-se', function () {
    return view('blog.video-chia-se');
})->name('blog.video-chia-se');

Route::get('/lien-he', function () {
    return view('contact');
})->name('contact');

Route::get('/khoa-hoc-facebook', function () {
    return view('khoa-hoc-facebook');
});

Route::get('/khoa-hoc-tiktok', function () {
    return view('khoa-hoc-tiktok');
});

Route::get('/khoa-hoc-instagram', function () {
    return view('khoa-hoc-instagram');
});


Route::get('/gioi-thieu', function () {
    return view('about');
})->name('about');

Route::prefix('dich-vu')->group(function () {
    Route::get('/facebook-ads', function () {
        return view('services.facebook-ads');
    })->name('services.facebook-ads');
    
    Route::get('/tiktok-ads', function () {
        return view('services.tiktok-ads');
    })->name('services.tiktok-ads');
    
    Route::get('/instagram-ads', function () {
        return view('services.instagram-ads');
    })->name('services.instagram-ads');
});

// Add new routes for registration pages
Route::view('/dang-ky-goi-facebook', 'dang-ky-goi-facebook');
Route::view('/dang-ky-goi-tiktok', 'dang-ky-goi-tiktok');
Route::view('/dang-ky-goi-instagram', 'dang-ky-goi-instagram');
Route::view('/dang-ky-goi-combo', 'dang-ky-goi-combo');

// Add new route for service registration handling form submission
Route::post('/register-service', [ServiceRegistrationController::class, 'store'])
    ->name('register.service');

// Add new route for details page
Route::view('/xem-chi-tiet', 'details')->name('details');

// New routes for service feature pages
Route::view('/services/chien-luoc-toi-uu', 'services.chien-luoc-toi-uu')->name('services.chien-luoc-toi-uu');
Route::view('/services/giai-phap-toan-dien', 'services.giai-phap-toan-dien')->name('services.giai-phap-toan-dien');
Route::view('/services/tu-van-chuyen-nghiep', 'services.tu-van-chuyen-nghiep')->name('services.tu-van-chuyen-nghiep');

// Add new route for the “tu van ads” page
Route::view('/tu-van-ads', 'tu-van-ads')->name('tu-van-ads');
