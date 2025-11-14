<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\Model3dController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.front.welcome');
});

Route::get('/dashboard', function () {
    return view('client.back.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('login', [AuthenticatedSessionController::class, 'create'])
            ->name('login');

        Route::post('login', [AuthenticatedSessionController::class, 'store'])
            ->name('login.store')
            ->defaults('admin_login', true);
    });

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    });
});

// Subjects routes - outside name prefix to use 'subjects.*' names
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::resource('subjects', SubjectController::class)->names('subjects');
    
    // 3D Models routes - with admin prefix in route names
    Route::prefix('models')->name('admin.models.')->group(function () {
        Route::get('3d', [Model3dController::class, 'index'])->name('3d.index');
        Route::get('3d/create', [Model3dController::class, 'create'])->name('3d.create');
        Route::post('3d', [Model3dController::class, 'store'])->name('3d.store');
        Route::get('3d/{model3d}', [Model3dController::class, 'show'])->name('3d.show');
        Route::get('3d/{model3d}/edit', [Model3dController::class, 'edit'])->name('3d.edit');
        Route::put('3d/{model3d}', [Model3dController::class, 'update'])->name('3d.update');
        Route::delete('3d/{model3d}', [Model3dController::class, 'destroy'])->name('3d.destroy');
    });
});

require __DIR__.'/auth.php';
