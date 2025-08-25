<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::where('status', 1)->get();
        return view('admin.dashboard.setting', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'minimum_amount' => 'required',
            'maximun_amount' => 'required',
            'dollar_rate' => 'required',
            'silver' => 'required',
            'gold' => 'required',
            'dimond' => 'required'
        ]);

        $setting = new Setting();
        $setting->minimum_amount = $validated['minimum_amount'];
        $setting->maximun_amount = $validated['maximun_amount'];
        $setting->dollar_rate = $validated['dollar_rate'];
        $setting->silver = $validated['silver'];
        $setting->gold = $validated['gold'];
        $setting->dimond = $validated['dimond'];
        $setting->save();
        return redirect()->back()->with('massage', 'New Limite Appllied');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setting = Setting::find($id);
        return view('admin.dashboard.editSetting', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $setting = Setting::find($id);
        $setting->minimum_amount = $request->minimum_amount;
        $setting->maximun_amount = $request->maximun_amount;
        $setting->dollar_rate = $request->dollar_rate;
        $setting->silver = $request->silver;
        $setting->gold = $request->gold;
        $setting->dimond = $request->dimond;
        $setting->save();
        return redirect()->back()->with('massage', 'Limite updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
