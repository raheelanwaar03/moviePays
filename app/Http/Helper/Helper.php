<?php

use App\Models\admin\Setting;
use App\Models\User;
use App\Models\user\WidthrawBalance;

function allUser()
{
    $user = User::all()->count();
    return $user;
}

function pendingUsers()
{
    $user = User::where('status', 'pending')->get()->count();
    return $user;
}

function verifiedUsers()
{
    $user = User::where('status', 'approved')->get()->count();
    return $user;
}

function rejectedUsers()
{
    $user = User::where('status', 'rejected')->get()->count();
    return $user;
}

function totalReferFriends()
{
    $user = User::where('referal', auth()->user()->email)->where('status', 'approved')->get()->count();
    return $user;
}

// user widhrawal balance

function userWidthrawalBalance()
{
    $totalWidthraw = 0;
    $widthrawBalance = WidthrawBalance::where('user_id', auth()->user()->id)->where('status', 'approved')->get();
    foreach ($widthrawBalance as $widthraw) {
        $totalWidthraw += $widthraw->widthraw_amount;
    }

    return $totalWidthraw;
}

function userPendingBalance()
{
    $totalPending = 0;
    $pendingBalance = WidthrawBalance::where('user_id', auth()->user()->id)->where('status', 'pending')->get();
    foreach ($pendingBalance as $widthraw) {
        $totalPending += $widthraw->widthraw_amount;
    }

    return $totalPending;
}

function userApprovedBalance()
{
    $totalApproved = 0;
    $approvedBalance = WidthrawBalance::where('user_id', auth()->user()->id)->where('status', 'approved')->get();
    foreach ($approvedBalance as $widthraw) {
        $totalApproved += $widthraw->widthraw_amount;
    }

    return $totalApproved;
}

function totalReferal()
{
    $totalRefers = User::where('referal', auth()->user()->email)->where('status','approved')->get();
    $totalRefers = $totalRefers->count();
    return $totalRefers;
}


function level()
{
    $users = User::where('referal', auth()->user()->email)->where('status','approved')->get();
    $userRefer = $users->count();
    return $userRefer;
}

// getting todays approved user

function todayApprovedWidthraw()
{
    $totalApproved = 0;
    $approvedBalance = WidthrawBalance::where('status', 'approved')->whereDay('created_at', now()->day)->get();
    foreach ($approvedBalance as $widthraw) {
        $totalApproved += $widthraw->widthraw_amount;
    }

    return $totalApproved;
}

// total given widthraw


function totalGivenWidthraw()
{
    $totalApproved = 0;
    $approvedBalance = WidthrawBalance::where('status', 'approved')->get();
    foreach ($approvedBalance as $widthraw) {
        $totalApproved += $widthraw->widthraw_amount;
    }

    return $totalApproved;
}


function dollar_rate()
{
    $setting = Setting::where('status', '1')->first();
    $dollar_rate = $setting->dollar_rate;
    return $dollar_rate;
}

function pkr_balance()
{
    $setting = Setting::where('status', '1')->first();
    $dollar_rate = $setting->dollar_rate;

    $user = User::where('id',auth()->user()->id)->first();
    $balance = $user->balance;

    $converted_balance = $dollar_rate * $balance;
    return $converted_balance;

}
