<!-- Routes -->
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CandidateController;

Auth::routes(['register' => false]);

Route::get('/password/reset', function () {
    return redirect('/');
});
// ==================================================

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', function () {
    return redirect('/');
});

Route::get('/admin-dashboard', [HomeController::class, 'dashboard'])->name('admin.dashboard'); //dashboards

Route::get('/departments', [DepartmentController::class, 'index'])->name('departments');

Route::get('/candidates', [CandidateController::class, 'index'])->name('candidates');

Route::get('/positions', [PositionController::class, 'index'])->name('jobs');
Route::get('/search-filter', [PositionController::class, 'searchFilter'])->name('search-filter');
Route::get('/positions-create', [PositionController::class, 'create'])->name('positions.create');
Route::post('/positions-store', [PositionController::class, 'store'])->name('positions.store');
Route::get('/positions-show{id}', [PositionController::class, 'show'])->name('positions.show');
Route::get('/positions-edit{id}', [PositionController::class, 'edit'])->name('positions.edit');
Route::put('/positions-update{id}', [PositionController::class, 'update'])->name('positions.update');
Route::delete('/positions-delete{position}', [PositionController::class, 'destroy'])->name('positions.destroy');

