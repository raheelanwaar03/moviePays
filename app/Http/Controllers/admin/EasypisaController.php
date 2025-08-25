<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\EasyPaisaMangement;
use Illuminate\Http\Request;

class EasypisaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $easyPaisas = EasyPaisaMangement::where('status', 1)->get();
        return view('admin.easyPaisa.add', compact('easyPaisas'));
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
            'easy_name' => 'required',
            'easy_num' => 'required',
            'text' => 'required',
            'bank' => 'required'
        ]);

        $easyPaisa = new EasyPaisaMangement();
        $easyPaisa->easy_name = $validated['easy_name'];
        $easyPaisa->easy_num = $validated['easy_num'];
        $easyPaisa->text = $validated['text'];
        $easyPaisa->bank = $validated['bank'];
        $easyPaisa->save();
        return redirect()->back()->with('massage', 'Easypasia Detailsa Added Successfully');
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
        $easyPaisa = EasyPaisaMangement::find($id);
        return view('admin.easyPaisa.edit', compact('easyPaisa'));
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
        $validated = $request->validate([
            'easy_name' => 'required',
            'easy_num' => 'required',
            'text' => 'required',
            'bank' => 'required',
        ]);

        $easyPaisa = EasyPaisaMangement::find($id);
        $easyPaisa->easy_name = $validated['easy_name'];
        $easyPaisa->easy_num = $validated['easy_num'];
        $easyPaisa->text = $validated['text'];
        $easyPaisa->bank = $validated['bank'];;
        $easyPaisa->save();
        return redirect()->route('Admin.Easypaisa.index')->with('massage', 'Details Updated Successfully');
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
