<?php

namespace App\Http\Controllers;

use App\Models\Massage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreMassageRequest;
use App\Http\Requests\UpdateMassageRequest;

class MassageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $massages = Massage::all();
        return view('massages.read_massage', compact('massages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('front.contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,StoreMassageRequest $req)
    {
        $validate = Validator::make($request->all(), $req->rules());
        if ($validate->fails()) return redirect()->route('travel.contact')->withErrors($validate->errors());
        $massage=Massage::create($req->validated());
        return redirect()->route('travel.contact')->with('type', 'success')->with('msg', 'Massage Sended Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Massage $massage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Massage $massage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMassageRequest $request, Massage $massage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Massage $massage)
    {
        //
    }
}
