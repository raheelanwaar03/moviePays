<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\AdminProductModel;
use App\Models\User;
use App\Models\user\Longtext;
use App\Models\user\WidthrawBalance;
use App\Models\Vistor;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UserDashboardController extends Controller
{
    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function team()
    {
        $users = User::where('referal', auth()->user()->email)->where('status', 'approved')->get();
        return view('user.work.team', compact('users'));
    }

    public function widthrawReq()
    {
        $widthraws = WidthrawBalance::where('user_id', auth()->user()->id)->get();
        $user = User::where('id',auth()->user()->id)->firstOrFail();
        $balance = number_format($user->balance, 3);
        return view('user.work.widthrawReq', compact('widthraws','balance'));
    }

    public function work($id)
    {
        $product = AdminProductModel::where('id', $id)->where('product_level', auth()->user()->level)->first();
        return view('user.work.index', compact('product'));
    }


    // User Type Task

    public function taskText(Request $request, $id)
    {
        $product = AdminProductModel::find($id);
        $productRewarad = $product->product_price;
        // checking user
        $visitor = Vistor::where('user_id', auth()->user()->id)->where('product_id', $id)->whereDate('created_at', '=', Carbon::today())->first();

        if ($visitor == null) {
            //     // storing product
            $visitor = new Vistor();
            $visitor->user_id = auth()->user()->id;
            $visitor->product_id = $id;
            $visitor->ip = request()->ip();
            $visitor->dateTime = date(now());
            $visitor->save();
            // giving user product reward
            $user = User::where('id', auth()->user()->id)->first();
            $user->balance += $productRewarad;
            $user->save();
            return redirect()->route('User.All.Videos')->with('massage', 'You have successfully gained video reward');
        }

        return redirect()->route('User.All.Videos')->with('error', 'You have been watched this video before');
    }

    // user prfile

    public function setting()
    {
        return view('user.account.profile');
    }

    public function rule()
    {
        return view('user.social.rule');
    }



}
