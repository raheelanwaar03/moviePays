<?php

namespace App\Http\Controllers;

use App\Models\survey;
use Illuminate\Http\Request;

class surveyController extends Controller
{
    public function surveyResult(Request $request)
    {
        $validated = $request->validate([
            'question'=> 'required',
            'question1' => 'required'
        ]);
        $surveyResult = new survey();
        $surveyResult->user_id = auth()->user()->id;
        $surveyResult->question = $validated['question'];
        $surveyResult->question1 = $validated['question1'];
        $surveyResult->save();
        return redirect()->route('LandingPage.Product')->with('massage','Thanks for your opinion!Explore more for best deals and reward');
    }
}
