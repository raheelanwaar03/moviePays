<?php

use App\Http\Controllers\user\SurveyProductRewaradController;
use App\Http\Controllers\user\UserDashboardController;
use App\Http\Controllers\user\UserWorkController;
use Illuminate\Support\Facades\Route;


// group routing

Route::name('User.')->prefix('User')->middleware('user','auth','feesCheck')->group(function(){

        Route::get('/Dashboard',[UserDashboardController::class,'dashboard'])->name('Dashboard');
        Route::get('/My/Team',[UserDashboardController::class,'team'])->name('Team');
        Route::get('/My/Work/{id}',[UserDashboardController::class,'work'])->name('Work');
        Route::get('/Setting',[UserDashboardController::class,'setting'])->name('Setting');
        Route::get('/Widthraw/Request',[UserDashboardController::class,'widthrawReq'])->name('Widthraw.Request');
        Route::get('/Refer/Friend',[UserWorkController::class,'referFriend'])->name('Refer.New.Friend');
        Route::get('/Widthraw/Balance',[UserWorkController::class,'widthrawBalance'])->name('Widthraw.Balance');
        Route::get('/Contact/Us',[UserWorkController::class,'contact'])->name('Contact.Us');
        Route::get('/Rules',[UserWorkController::class,'rule'])->name('Rules');
        Route::get('/About-Us',[UserWorkController::class,'about'])->name('About-Us');
        Route::post('/Widthraw/Balance/Request',[UserWorkController::class,'widthrawBalanceRequest'])->name('Widthraw.Balance.Request');
        Route::get('/All/Videos',[UserWorkController::class,'allVideo'])->name('All.Videos');
        // web.php
        // user Typed Text
        Route::get('/Type/text/{id}',[UserDashboardController::class,'taskText'])->name('Type.Task');
        // giving commission on watching video
        Route::get('Review/Product/{id}',[SurveyProductRewaradController::class,'index'])->name('Product.Reward');

    });

