<?php
use App\Http\Controllers\Admin\{
    DetailPlanController,
    PlanController,
    ProfileController
};
use App\Http\Controllers\Admin\ACL\ProfileControler;
use Illuminate\Support\Facades\Route;






Route::prefix('admin')->namespace('Admin')->group(function() {



  /**
     * Routes Profiles
     */
    Route::any('profiles/delete', [PlanController::class, 'destroy'])->name('profiles.destroy');
    Route::any('profiles/search', [PlanController::class, 'search'])->name('profiles.search');
    Route::any('profiles/search', [PlanController::class, 'search'])->name('profiles.search');
    Route::any('profiles/create', [PlanController::class, 'create'])->name('profiles.create');
    Route::any('profiles/edit', [PlanController::class, 'edit'])->name('profiles.edit');
    Route::any('profiles/show', [PlanController::class, 'show'])->name('profiles.show');
    Route::resource('profiles', '\App\Http\Controllers\Admin\ACL\ProfileController');

/**
     * Routes Details Plans
     */



    Route::delete('plans/{url}/details/{idDetail}',  [DetailPlanController::class, 'destroy'])->name('details.plan.destroy');
    Route::get('plans/{url}/details/create',  [DetailPlanController::class, 'create'])->name('details.plan.create');
    Route::get('plans/{url}/details/{idDetail}',  [DetailPlanController::class, 'show'])->name('details.plan.show');
    Route::put('plans/{url}/details/{idDetail}', [DetailPlanController::class, 'update'])->name('details.plan.update');
    Route::get('plans/{url}/details/{idDetail}/edit',  [DetailPlanController::class, 'edit'])->name('details.plan.edit');
Route::post('plans/{url}/details', [DetailPlanController::class, 'store'])->name('details.plan.store');
Route::get('plans/{url}/details', [DetailPlanController::class, 'index'])->name('details.plan.index');


/**
 * Routes
 */
    Route::post('plans/store', [PlanController::class, 'store'])->name('plans.store');
    Route::put('plans/{url}', [PlanController::class, 'update'])->name('plans.update');
    Route::any('plans/search', [PlanController::class, 'search'])->name('plans.search');
    Route::get('plans/{url}/edit', [PlanController::class, 'edit'])->name('plans.edit');
    Route::get('plans', [PlanController::class, 'index'])->name('plans.index');
    Route::get('plans/create', [PlanController::class, 'create'])->name('plans.create');
    Route::get('plans/{url}', [PlanController::class, 'show'])->name('plans.show');
    Route::delete('plans/{url}', [PlanController::class, 'destroy'])->name('plans.destroy');

});




Route::get('/', function () {
    return route('admin.plans');
});
