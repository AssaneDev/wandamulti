<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Section\SectionController;
use App\Http\Controllers\Section\PojetController;




// Route::get('/', function () {
//     return view('frontend.index');
// });
Route::get('/', [UserController::class, 'Index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('admin')->group(function () { 
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/password/update', [AdminController::class, 'AdminPasswordUpdate'])->name('admin.password.update');


    Route::get('/admin/section1', [SectionController::class, 'SectionUn'])->name('section_1');
    Route::post('/admin/section01/update', [SectionController::class, 'SectionUnUpdate'])->name('SectionUn.Update');

    Route::get('/admin/section2', [SectionController::class, 'SectionDeux'])->name('section_2');
    Route::get('/admin/section2/create', [SectionController::class, 'SectionDeuxCreate'])->name('SectionDeux.create');
    Route::post('/admin/section02/store', [SectionController::class, 'SectionDeuxStore'])->name('SectionDeux.Store'); 
    Route::post('/admin/section02/updatesec2', [SectionController::class, 'SectionDeuxUpdate'])->name('SectionDeux.Update');
    Route::get('/admin/section2/deleteService/{id}', [SectionController::class, 'DeleteService'])->name('delete.service');
    Route::get('/admin/section2/editService/{id}', [SectionController::class, 'EditService'])->name('edit.service');
    Route::post('/admin/section02/update', [SectionController::class, 'UpdateService'])->name('Service.Update'); 




    Route::get('/admin/projet', [PojetController::class, 'SectionProjet'])->name('section.projet');  
    Route::get('/admin/projet/create', [PojetController::class, 'SectionProjetCreate'])->name('SectionProjet.create');
    Route::post('/admin/projet/store', [PojetController::class, 'SectionProjetStore'])->name('SectionProjet.Store'); 


});


Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
Route::post('/admin/loginsubmit', [AdminController::class, 'AdminLoginSubmit'])->name('admin.login.submit');
Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
Route::get('/admin/forget_password', [AdminController::class, 'AdminForgetPassword'])->name('admin.forget_password');
Route::post('/admin/password_submit', [AdminController::class, 'AdminPasswordSubmit'])->name('admin.password_submit');

Route::post('/admin/reset_password_submit', [AdminController::class, 'AdminResetPasswordSubmit'])->name('admin.reset_password_submit');

Route::get('admin/reset-password/{token}/{email}', [AdminController::class, 'AdminResetPassword']);












































// Debug Image Intervention
// use Intervention\Image\ImageManager;
// use Intervention\Image\Drivers\Gd\Driver;

// Route::get('/test-image', function () {
//     $manager = new ImageManager(new Driver());
//     $image = $manager->read(public_path('/home/ghost-code/Images/joal2.jpg'));
//     $image->resize(300, 300)->toJpeg()->save(public_path('resized.jpg'));
//     return 'Image redimensionnée avec succès';
// });

// Route::get('/php-info', function () {
//    return view('admin.php_info');
// });








