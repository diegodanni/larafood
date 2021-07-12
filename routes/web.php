<?php
use App\Http\Controllers\Admin\{
    DetailPlanController,
    PlanController
};


use Illuminate\Support\Facades\Route;






Route::prefix('admin')->namespace('Admin')->group(function() {




/**
     * Routes Details Plans
     */
Route::post('plans/{url}/details', [DetailPlanController::class, 'store'])->name('details.plan.store');
Route::get('plans/{url}/details', [DetailPlanController::class, 'index'])->name('details.plan.index');


/**
 * Routes
 */
    Route::post('plans/store', [PlanController::class, 'store'])->name('plans.store');
    Route::put('plans/{url}', [PlanController::class, 'update'])->name('plans.update');
    Route::any('plans/search', [PlanController::class, 'search'])->name('plans.search');
    Route::delete('plans/{url}', [PlanController::class, 'destroy'])->name('plans.destroy');
    Route::get('plans/{url}/edit', [PlanController::class, 'edit'])->name('plans.edit');
    Route::get('plans', [PlanController::class, 'index'])->name('plans.index');
    Route::get('plans/create', [PlanController::class, 'create'])->name('plans.create');
    Route::get('plans/{url}', [PlanController::class, 'show'])->name('plans.show');

});




Route::get('/', function () {
    return view('welcome');
});
