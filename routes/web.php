<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::controller(HomePageController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard/overview', 'overview')->name('dashboard');
        Route::get('/dashboard/applications', 'applications')->name('dashboard.applications');
        Route::get('/dashboard/scholarships', 'scholarships')->name('dashboard.scholarships');

        Route::get('/dashboard/documents', 'documents')->name('dashboard.documents');
        Route::put('/dashboard/documents/personal', 'putDocumentsPersonalInformation')->name('dashboard.documents.personal');
        Route::put('/dashboard/documents/education', 'putDocumentsEducationInformation')->name('dashboard.documents.education');
        Route::put('/dashboard/documents/document', 'putDocument')->name('dashboard.documents.document');

        Route::get('/dashboard/help', 'help')->name('dashboard.help');
        Route::get('/dashboard/profile', 'profile')->name('dashboard.profile');
        Route::put('/dashboard/profile', 'putProfile')->name('dashboard.profile.put');
        Route::get('/dashboard/notifications', 'notifications')->name('dashboard.notifications');
    });

});

require __DIR__.'/auth.php';
