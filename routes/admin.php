<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\dailyRewardController;
use App\Http\Controllers\admin\EasypisaController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\WidthrawRequestsController;
use Illuminate\Support\Facades\Route;


Route::prefix('Admin')->name('Admin.')->middleware('auth', 'admin')->group(function () {
    Route::get('/Dashboard', [AdminDashboardController::class, 'dashboard'])->name('Dashboard');
    Route::get('/Edit/User/{id}', [AdminDashboardController::class, 'editUser'])->name('Edit.User');
    Route::post('/Update/User/{id}', [AdminDashboardController::class, 'updateUser'])->name('Update.User');
    Route::get('/User/Tids', [AdminDashboardController::class, 'userTids'])->name('All.Tids');
    Route::get('/All/Users', [AdminDashboardController::class, 'allUsers'])->name('All.Users');
    Route::get('/Pending/Users', [AdminDashboardController::class, 'pendingUsers'])->name('Pending.Users');
    Route::get('/Approved/Users', [AdminDashboardController::class, 'approvedUsers'])->name('Approved.Users');
    Route::get('/Rejected/Users', [AdminDashboardController::class, 'rejectedUsers'])->name('Rejected.Users');
    Route::get('/Easypaisa/Users', [AdminDashboardController::class, 'easypaisaUsers'])->name('Easypaisa.Users');
    Route::get('/Set/Users/Level', [AdminDashboardController::class, 'setLevel'])->name('Set.User.Level');
    Route::get('/Vistors', [AdminDashboardController::class, 'vistors'])->name('Vistors');
    // routes for approving user account
    Route::get('Approve/User/Account/{id}', [AdminDashboardController::class, 'approveUserAccount'])->name('Approve.User.Account.Request');
    Route::get('Reject/User/Account/{id}', [AdminDashboardController::class, 'rejectUserAccount'])->name('Rejected.User.Account.Request');
    // Giving daily reward to user according to there level
    Route::get('Daily/Reward', [dailyRewardController::class, 'dailyReward'])->name('Daily.Reward.To.Users');

    // Widthraw request Routes
    Route::get('/Widthraw/Requests', [WidthrawRequestsController::class, 'allRequests'])->name('All.Widthraw.Requests');
    Route::get('/Rejected/Widthraw/Requests', [WidthrawRequestsController::class, 'rejectedWidthrawal'])->name('Rejected.Widthraw');
    Route::get('/Approved/Widthraw/Requests', [WidthrawRequestsController::class, 'approvedWidthrawal'])->name('Approved.Widthraw');
    Route::get('/Approve/Widthraw/{id}', [WidthrawRequestsController::class, 'approveWidthraw'])->name('Approve.Widthraw');
    Route::get('/Reject/Widthraw/{id}', [WidthrawRequestsController::class, 'rejectWidthraw'])->name('Reject.Widthraw');

    // Verification Page Routes
    Route::get('Add/Verfication/Page/Details',[AdminDashboardController::class,'add'])->name('Add.Verification.Details');
    Route::post('Store/Verfication/Page/Details',[AdminDashboardController::class,'store'])->name('Store.Verification.Details');
    Route::get('Edit/Verfication/Page/Details/{id}',[AdminDashboardController::class,'edit'])->name('Edit.Verification.Details');
    Route::post('Update/Verfication/Page/Details/{id}',[AdminDashboardController::class,'update'])->name('Update.Verification.Details');
    // Level setting routes

    Route::get('Level/Setting',[AdminDashboardController::class,'levelView'])->name('Level.View');
    Route::post('Store/Level/Setting',[AdminDashboardController::class,'levelStore'])->name('Level.Store');
    Route::get('Edit/Level/Setting/{id}',[AdminDashboardController::class,'editLevelView'])->name('Edit.Level.View');
    Route::post('Update/Level/Setting/{id}',[AdminDashboardController::class,'updateLevelSetting'])->name('Update.Level.Setting');
    Route::get('Todays/Approved/Users',[AdminDashboardController::class,'todayApprovedUser'])->name('Today.Approved.User');
    // Admin esaypaisa details Routes
    Route::resource('Easypaisa', EasypisaController::class);

    // setting route
    Route::resource('Setting', SettingController::class);
    // add product routes
    Route::resource('Product', ProductController::class);
});
