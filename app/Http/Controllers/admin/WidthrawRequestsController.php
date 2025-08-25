<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Setting;
use App\Models\User;
use App\Models\user\WidthrawBalance;
use Illuminate\Http\Request;

class WidthrawRequestsController extends Controller
{
    public function allRequests()
    {
        $widthrawRequests = WidthrawBalance::where('status', 'pending')->get();
        return view('admin.account.widthrawRequest', compact('widthrawRequests'));
    }

    public function approvedWidthrawal()
    {
        $widthrawRequests = WidthrawBalance::where('status', 'approved')->get();
        return view('admin.account.approvedWidthraw', compact('widthrawRequests'));
    }

    public function rejectedWidthrawal()
    {
        $widthrawRequests = WidthrawBalance::where('status', 'rejected')->get();
        return view('admin.account.rejectedWidthrawal', compact('widthrawRequests'));
    }


    // Approve or reject widthraw by admin

    public function approveWidthraw($id)
    {
        $widthraw = WidthrawBalance::find($id);
        $widthraw->status = 'approved';
        $widthraw->save();

        $pkr_amount = $widthraw->widthraw_amount;

        // dollar rate
        $setting = Setting::where('status', '1')->first();
        $dollar_rate = $setting->dollar_rate;

        // getting total amount to deduct from user account

        $deductedBalance = $pkr_amount / $dollar_rate;

        // deduct balance on approval
        $user = User::where('id', $widthraw->user_id)->first();
        $user->balance -= $deductedBalance;
        $user->save();
        return redirect()->back()->with('massage', 'User widthraw request Approved');
    }

    public function rejectWidthraw($id)
    {
        $widthraw = WidthrawBalance::find($id);
        $widthraw->status = 'rejected';
        $widthraw->save();
        return redirect()->back()->with('massage', 'User widthraw request rejected');
    }
}
