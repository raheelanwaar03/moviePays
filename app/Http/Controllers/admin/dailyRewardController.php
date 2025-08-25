<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class dailyRewardController extends Controller
{
    public function dailyReward()
    {
        $users = User::where('status','approved')->get();

        foreach ($users as $user) {

            if ($user->level == 'Level 0')
            {
                $user->balance += '4';
                $user->save();
            }

            if ($user->level == 'Level 1')
            {
                $user->balance += '8';
                $user->save();
            }
            if ($user->level == 'Level 2')
            {
                $user->balance += '12';
                $user->save();
            }
            if ($user->level == 'Level 3')
            {
                $user->balance += '16';
                $user->save();
            }
            if ($user->level == 'Level 4')
            {
                $user->balance += '20';
                $user->save();
            }
            if ($user->level == 'Level 5')
            {
                $user->balance += '25';
                $user->save();
            }
            if ($user->level == 'Level 6')
            {
                $user->balance += '30';
                $user->save();
            }
            if ($user->level == 'Level 7')
            {
                $user->balance += '35';
                $user->save();
            }
            if ($user->level == 'Level 8')
            {
                $user->balance += '40';
                $user->save();
            }
            if ($user->level == 'Level 9')
            {
                $user->balance += '45';
                $user->save();
            }
            if ($user->level == 'Level 10')
            {
                $user->balance += '50';
                $user->save();
            }
        }
        return redirect()->back()->with('massage','Daily commission given to all users according to their level!');
    }
}
