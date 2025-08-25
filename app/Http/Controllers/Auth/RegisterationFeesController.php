<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\admin\EasyPaisaMangement;
use App\Models\FeesCollecator;
use App\Models\User;
use App\Models\verificationText;
use Illuminate\Http\Request;


class RegisterationFeesController extends Controller
{
    public function registerationFees()
    {
        $easyPaisas = EasyPaisaMangement::where('status',1)->get();
        return view('auth.registerationFees',compact('easyPaisas'));
    }

    public function feesDetailStore(Request $request)
    {
        $validated = $request->validate([
            'tid' => 'required',
            'bank_username' => 'required',
            'sender_num' => 'required',
        ]);

        // checking the lenght of tid
        $lenth = $request->tid;
        $lenthCheck = strlen($lenth);
        if ($lenthCheck <= 10) {
            return redirect()->back()->with('error', 'Please enter 11 digits Trx ID');
        }

        // checking the length of num
        $num = $request->sender_num;
        $numLength = strlen($num);
        if($numLength <= 10)
        {
            return redirect()->back()->with('error','Please enter 11 charcter num');
        }

        // checking uniqe Trx id.

        $tidChecks = FeesCollecator::get();

        foreach ($tidChecks as $tidCheck) {
            $tidCheck = $tidCheck->tid;
            if ($validated['tid'] == $tidCheck)
                return redirect()->back()->with('error', 'This tid is used before');
        }

        $user = User::where('id',auth()->user()->id)->first();
        if($user->status == 'rejected')
        {
            $user->status = 'pending';
            $user->save();
        }

        $feesDetails = new FeesCollecator();
        $feesDetails->user_id = auth()->user()->id;
        $feesDetails->sender_num = $validated['sender_num'];
        $feesDetails->bank_username = $validated['bank_username'];
        $feesDetails->tid = $validated['tid'];
        $feesDetails->save();
        return redirect()->route('Verification.Page');
    }

    public function verificationPage()
    {
        $verificationText = verificationText::where('status',1)->get();
        return view('auth.verificationPage',compact('verificationText'));
    }

}
