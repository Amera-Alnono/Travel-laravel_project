<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Places;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StorePlacesRequest;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UpdatePlacesRequest;

class PlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $places = Places::all();
        return view('places.show_places', compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $places = Places::all();
        return view('places.add_place', compact('places'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, StorePlacesRequest $req)
    {
        $validate = Validator::make($request->all(), $req->rules());
        if ($validate->fails()) return redirect()->route('admin.place.index')->withErrors($validate->errors());
        $new_image = rand() . time() . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path("uploads"), $new_image);
        $place = Places::create($req->validated());
        $place->update([
            'image' => $new_image
        ]);
        return redirect()->route('admin.place.index')->with('type', 'success')->with('msg', 'Place Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Places $places)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Places $place)
    {
        return view('places.update_place', compact('place'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UpdatePlacesRequest $req, Places $place)
    {
        $validate = Validator::make($request->all(), $req->rules());
        if ($validate->fails()) return redirect()->route('admin.place.index')->withErrors($validate->errors());

        if ($request->file('image')) {
            $distination = public_path("uploads") . '/' . $place->image;
            if (File::exists($distination)) {
                File::delete($distination);
            }
            $file = $request->file('image');
            $extintion = $file->getClientOriginalName();
            $fileName = time() . $extintion;
            $file->move(public_path("uploads"), $fileName);

            $place->update([
                'image' => $fileName
            ]);
        }

        $place->update($req->validated());

        return redirect()->route('admin.place.index')->with('type', 'success')->with('msg', 'Place updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Places $places)
    {
        $distination = public_path("uploads") . "/" . $places->image;
        if (File::exists($distination)) {
            File::delete($distination);
        }
        $places->delete();

        return redirect()->route('admin.place.index')->with('type', 'danger')->with('msg', 'Place deleted Successfully');
    }
}
