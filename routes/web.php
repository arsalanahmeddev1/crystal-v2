<?php
// namespace App\Http\Middleware;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\CourseController;
use App\Http\Controllers\Dashboard\PermissionController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/lang/{lang}', function ($lang) {
    // dd($lang);
    if(! in_array($lang, ['en','cn'])){
        abort(400);
    }else{
        App::setLocale($lang);
        session()->put('locale', $lang);
        // dd(App::getLocale());
        return redirect()->back();
    }
})->name('lang');

Auth::routes();


Route::get('/', function () {
    return view('web/home');
});
Route::get('/about', function () {
    return view('web/about');
});
Route::get('/dental-assistant', function () {
    return view('web/dental-assistant');
});
Route::get('/expanded-function-dental-assistant', function () {
    return view('web/expanded-function-dental-assistant');
});
Route::get('/coronal-polishing', function () {
    return view('web/coronal-polishing');
});
Route::get('/contact', function () {
    return view('web/contact');
});
Route::get('/payment-options', function () {
    return view('web/payment-options');
});
Route::get('/gallery', function () {
    return view('web/gallery');
});
Route::get('/class-schedule', function () {
    return view('web/class-schedule');
});

// dashboard custom routes
Route::get('dashboard/user-profile', function () {
    return view('dashboard/user-profile');
});
Route::get('dashboard/course-list', function () {
    return view('dashboard.course-list');
});
Route::get('dashboard/messages', function () {
    return view('dashboard.messages.index');
});
Route::get('dashboard/course/add-course', function () {
    return view('dashboard.course.add-course');
});
Route::get('dashboard/add-quize', function () {
    return view('dashboard.add-quize');
});
Route::get('dashboard/edit-profile', function () {
    return view('dashboard.edit-profile');
});
// Guest Routes
Route::group(['middleware' => ['guest']], function () {

    //User Login Authentication Routes
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login-attempt', [AuthController::class, 'login_attempt'])->name('login.attempt');
    
    //User Register Authentication Routes
    Route::get('register', [RegisterController::class, 'register'])->name('register');
    Route::post('registration-attempt', [RegisterController::class, 'register_attempt'])->name('register.attempt');

    // Admin Login Authentication Routes
    // Route::get('admin', [AuthController::class, 'admin_login'])->name('admin_login');
    // Route::post('admin-login-attempt', [AuthController::class, 'admin_login_attempt'])->name('admin.login.attempt');
    // Route::post('login-verification/{id}', [AuthController::class, 'reset_code'])->name('reset.verficationcode');

    // Google Authentication Routes
    Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
    Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
    // Facebook Authentication Routes
    Route::controller(FacebookController::class)->group(function () {
        Route::get('auth/facebook', 'redirectToFacebook')->name('auth.facebook');
        Route::get('auth/facebook/callback', 'handleFacebookCallback');
    });

});

// Authentication Routes
Route::group(['middleware' => ['auth']], function () {
    Route::get('login-verification', [AuthController::class, 'login_verification'])->name('login.verification');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('verify-account', [AuthController::class, 'verify_account'])->name('verify.account');
    Route::post('resend-code', [AuthController::class, 'resend_code'])->name('resend.code');

    // Verified notification
    Route::get('email/verify/{id}/{hash}', [AuthController::class, 'verification_verify'])->middleware(['signed'])->name('verification.verify');
    Route::get('email/verify', [AuthController::class, 'verification_notice'])->name('verification.notice');
    Route::post('email/verification-notification', [AuthController::class, 'verification_send'])->middleware(['throttle:2,1'])->name('verification.send');
    // Verified notification
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::resource('profile', ProfileController::class);
    
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');

    // Admin Dashboard Authentication Routes
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::resource('setting', SettingController::class);
        Route::resource('user', UserController::class);
        Route::resource('category', CategoryController::class);
        Route::resource('course', CourseController::class);

        // Role & Permission Start
        Route::resource('permissions', PermissionController::class);

        Route::resource('roles', RoleController::class);
        Route::get('roles/{roleId}/give-permissions', [RoleController::class, 'addPermissionToRole'])->name('roles.add_permissions');
        Route::put('roles/{roleId}/give-permissions', [RoleController::class, 'givePermissionToRole'])->name('roles.give_permissions');
        // Role & Permission End
    });
});

// Frontend Pages Routes
Route::name('frontend.')->group(function () {
    // Route::get('/', [WebIndexController::class, 'index'])->name('home');
});

Route::prefix('cmd')->group(function () {
    
    Route::get('cache-clear-all', function () {

        Artisan::call('cache:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');
        Artisan::call('config:clear');
        Artisan::call('event:clear');
        Artisan::call('optimize:clear');

        return redirect()->route('dashboard')->with('success', 'All Cache Cleared');
    });
    
    Route::get('migrate', function () {
    
        Artisan::call('migrate');
    
        return redirect()->route('dashboard')->with('success', 'Database Migrated');
    });
    
    Route::get('migrate-refresh', function () {
    
        Artisan::call('migrate:refresh');
    
        return redirect()->route('dashboard')->with('success', 'Database Refreshed');
    });
    
    Route::get('migrate-fresh', function () {
    
        Artisan::call('migrate:fresh');
    
        return redirect()->route('dashboard')->with('success', 'Database Freshed');
    });
    
    Route::get('seed', function () {
    
        Artisan::call('db:seed');
    
        return redirect()->route('dashboard')->with('success', 'Database Seed Done');
    });
});
