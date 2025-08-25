<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\AdminProductModel;
use App\Models\admin\Setting;
use App\Models\User;
use App\Models\user\WidthrawBalance;
use Illuminate\Http\Request;

class UserWorkController extends Controller
{
    public function referFriend()
    {
        return view('user.work.refer');
    }

    public function contact()
    {
        return view('user.contactUs');
    }

    public function widthrawBalance()
    {
        $widthraws = WidthrawBalance::where('user_id', auth()->user()->id)->get();
        return view('user.account.widthraw', compact('widthraws'));
    }

    public function widthrawBalanceRequest(Request $request)
    {
        $validated = $request->validate([
            'widthraw_bank' => 'required',
            'widthraw_amount' => 'required',
            'widthraw_name' => 'required',
            'widthraw_num' => 'required',
        ]);



        // check if user widtraw some amount before
        // $firstWidthrawCheck = WidthrawBalance::where('user_id', auth()->user()->id)->where('status','approved')->get();
        // $countFirstWidthraw = $firstWidthrawCheck->count();
        // if ($countFirstWidthraw >= 1) {
        //     // check user referals for second widthraw
        //     $referCheck = User::where('referal', auth()->user()->name)->get();
        //     $referCheck = $referCheck->count();
        //     if ($referCheck <= 4) {
        //         return redirect()->back()->with('error', 'You must have 5 referal friends to request second widthraw');
        //     }
        // }

        $userWidthrawAmount = $validated['widthraw_amount'];

        // See user balance
        if ($userWidthrawAmount > pkr_balance()) {
            return redirect()->back()->with('error', 'You have not enough balance');
        }

        // Checking Admin Limite

        $adminWidthraw = Setting::where('status', 1)->first();
        $adminWidthrawMini = $adminWidthraw->minimum_amount;
        $adminWidthrawMax = $adminWidthraw->maximun_amount;

        if ($adminWidthrawMini > $userWidthrawAmount) {
            return redirect()->back()->with('error', 'Your Widthrawal amount is less than Admin Limite');
        }

        if ($userWidthrawAmount > $adminWidthrawMax) {
            return redirect()->back()->with('error', 'Your Widthrawal amount is Greater than Admin Limite');
        }

        // checking user if he already request for widthraw

        $widthrawRequest = WidthrawBalance::where('status', 'pending')->where('user_id', auth()->user()->id)->first();
        if ($widthrawRequest) {
            return redirect()->back()->with('error', 'You already requested for widthraw please wait for approval');
        }

        $widthraw = new WidthrawBalance();
        $widthraw->user_id = auth()->user()->id;
        $widthraw->widthraw_bank = $validated['widthraw_bank'];
        $widthraw->widthraw_amount = $validated['widthraw_amount'];
        $widthraw->widthraw_name = $validated['widthraw_name'];
        $widthraw->widthraw_num = $validated['widthraw_num'];
        $widthraw->save();
        return redirect()->route('User.Widthraw.Balance')->with('massage', 'Wait for admin approval. Your account balance will deduct when admin approve it.');
    }

    public function allVideo()
    {
        $allVideos = AdminProductModel::where('product_level', auth()->user()->level)->where('product_plan', auth()->user()->plan)->get();
        return view('user.work.allVideos', compact('allVideos'));
    }

    public function rule()
    {
        return view('user.social.rule');
    }

    public function about()
    {
        return view('user.social.aboutUs');
    }
}
