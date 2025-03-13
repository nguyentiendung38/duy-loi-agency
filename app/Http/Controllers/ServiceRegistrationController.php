<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewServiceRegistrationMail;

class ServiceRegistrationController extends Controller
{
    public function store(Request $request)
    {
        // Validate request data
        $data = $request->validate([
            'name'            => 'required|string|max:255',
            'email'           => 'required|email',
            'phone'           => 'required',
            'message'         => 'nullable|string',
            'service_package' => 'required|string',
        ]);
        
        // Send registration info via email to a Gmail address
        Mail::to('yourgmail@example.com')->send(new NewServiceRegistrationMail($data));
        
        return redirect()->back()->with('success', 'Đăng ký thành công và thông tin đã được gửi qua gmail!');
    }
}