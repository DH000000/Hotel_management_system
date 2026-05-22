<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

require __DIR__.'/admin.php';


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ==================== PUBLIC ROUTES ====================
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/contact', function () { return view('contact'); })->name('contact');
Route::get('/careers', function () { return view('careers'); })->name('careers');
Route::get('/pricing', function () { return view('pricing'); })->name('pricing');
Route::get('/features', function () { return view('features'); })->name('features');
Route::get('/how-it-works', function () { return view('how-it-works'); })->name('how-it-works');


// Legal Pages
Route::view('/privacy-policy', 'legal.privacy-policy')->name('privacy.policy');
Route::view('/terms-of-service', 'legal.terms-of-service')->name('terms.service');
Route::view('/refund-policy', 'legal.refund-policy')->name('refund.policy');


// ==================== MODULES ROUTES ====================
Route::prefix('modules')->name('modules.')->group(function () {
    Route::get('/', function () { return view('modules'); })->name('index');
    Route::get('/hotel-onboarding', function () { return view('modules.hotel-onboarding'); })->name('hotel-onboarding');
    Route::get('/room-management', function () { return view('modules.room-management'); })->name('room-management');
    Route::get('/ai-pricing', function () { return view('modules.ai-pricing'); })->name('ai-pricing');
    Route::get('/ota-integration', function () { return view('modules.ota-integration'); })->name('ota-integration');
    Route::get('/real-time-sync', function () { return view('modules.real-time-sync'); })->name('real-time-sync');
    Route::get('/crs', function () { return view('modules.crs'); })->name('crs');
    Route::get('/booking-calendar', function () { return view('modules.booking-calendar'); })->name('booking-calendar');
    Route::get('/rate-parity', function () { return view('modules.rate-parity'); })->name('rate-parity');
    Route::get('/payment-settlement', function () { return view('modules.payment-settlement'); })->name('payment-settlement');
    Route::get('/guest-crm', function () { return view('modules.guest-crm'); })->name('guest-crm');
    Route::get('/booking-engine', function () { return view('modules.booking-engine'); })->name('booking-engine');
    Route::get('/ai-content', function () { return view('modules.ai-content'); })->name('ai-content');
    Route::get('/review-manager', function () { return view('modules.review-manager'); })->name('review-manager');
    Route::get('/fraud-detection', function () { return view('modules.fraud-detection'); })->name('fraud-detection');
    Route::get('/admin-panel', function () { return view('modules.admin-panel'); })->name('admin-panel');
});



// ==================== AUTHENTICATION ROUTES ====================

Route::middleware('guest')->group(function () {
    // Login Routes
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    // Register Routes
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);

    // // Forgot Password Routes
    // Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    // Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

    // // Reset Password Routes
    // Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    // Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// ==================== DASHBOARD ROUTES ====================
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/hotel/dashboard', function () {
        return view('hotel.dashboard');
    })->name('hotel.dashboard');

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

});

// Profile Route (if not exists)
Route::middleware('auth')->group(function () {
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
});

// ==================== ADD THESE ROUTES ====================

// Blog Routes (Temporary - will implement later)
Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/blog/{slug}', function ($slug) {
    return view('blog-detail', compact('slug'));
})->name('blog.detail');

// Services Page
Route::get('/services', function () {
    return view('services');
})->name('services');

// Modules Page
Route::get('/modules', function () {
    return view('modules');
})->name('modules');

// FAQ Page
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

// Partners Page
Route::get('/partners', function () {
    return view('partners');
})->name('partners');

// Sitemap Page
Route::get('/sitemap', function () {
    return view('sitemap');
})->name('sitemap');

// ==================== CONTACT ROUTES ====================
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'submit'])->name('contact.submit');
Route::post('/subscribe', [App\Http\Controllers\NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');


// Verification Routes
Route::prefix('verification')->name('verification.')->group(function () {
    Route::get('/', [App\Http\Controllers\Auth\VerificationController::class, 'showVerificationForm'])->name('show');
    Route::post('/verify', [App\Http\Controllers\Auth\VerificationController::class, 'verifyOTP'])->name('verify');
    Route::post('/resend', [App\Http\Controllers\Auth\VerificationController::class, 'resendOTP'])->name('resend');
    Route::get('/support', [App\Http\Controllers\Auth\VerificationController::class, 'showContactSupport'])->name('support');
    Route::post('/manual-request', [App\Http\Controllers\Auth\VerificationController::class, 'requestManualVerification'])->name('manual.request');
});

// Password Reset Routes
Route::middleware('guest')->group(function () {
    Route::get('/forgot-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('/forgot-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('/reset-password', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset.form');
    Route::post('/reset-password/verify', [App\Http\Controllers\Auth\ResetPasswordController::class, 'verifyResetOTP'])->name('password.verify.otp');
    Route::post('/reset-password/resend', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.resend');
    Route::get('/update-password', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showUpdatePasswordForm'])->name('password.update.form');
    Route::post('/update-password', [App\Http\Controllers\Auth\ResetPasswordController::class, 'updatePassword'])->name('password.update');
});
