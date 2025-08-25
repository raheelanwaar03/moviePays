<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\landingPageController;
use App\Http\Controllers\surveyController;
use Illuminate\Support\Facades\Route;



Route::get('/',[landingPageController::class,'home'])->name('LandingPage');
Route::get('/Home/Contact',[landingPageController::class,'contact'])->name('LandingPage.Contact');
Route::get('/Home/Affilate/Page',[landingPageController::class,'affilate'])->name('LandingPage.Affilate');
Route::get('/Home/About/Page',[landingPageController::class,'about'])->name('LandingPage.About.Us');
Route::get('/Home/Product/Page/{shareby?}/{referal?}',[landingPageController::class,'productPage'])->name('LandingPage.Product');
// survey Controller
Route::post('/Survey/Result',[surveyController::class,'surveyResult'])->name('LandingPage.Survey.Result');

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/user.php';
