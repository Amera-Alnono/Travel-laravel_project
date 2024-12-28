<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service=Service::all();
        return view('services.show_services',compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $service=Service::all();
        return view('services.add_service',compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request ,StoreServiceRequest $req)
    {
        $validate = Validator::make($request->all(), $req->rules());
        if ($validate->fails()) return redirect()->route('admin.place.index')->withErrors($validate->errors());
        $new_image = rand() . time() . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path("uploads"), $new_image);
        $service = Service::create($req->validated());
        $service->update([
            'image' => $new_image
        ]);
        return redirect()->route('admin.service.index')->with('type', 'success')->with('msg', 'Service Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('services.update_service', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,UpdateServiceRequest $req, Service $service)
    {
        $validate = Validator::make($request->all(), $req->rules());
        if ($validate->fails()) return redirect()->route('admin.place.index')->withErrors($validate->errors());

        if ($request->file('image')) {
            $distination = public_path("uploads") . '/' . $service->image;
            if (File::exists($distination)) {
                File::delete($distination);
            }
            $file = $request->file('image');
            $extintion = $file->getClientOriginalName();
            $fileName = time() . $extintion;
            $file->move(public_path("uploads"), $fileName);

            $service->update([
                'image' => $fileName
            ]);
        }

        $service->update($req->validated());

        return redirect()->route('admin.service.index')->with('type', 'success')->with('msg', 'Service updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $distination = public_path("uploads") . "/" . $service->image;
        if (File::exists($distination)) {
            File::delete($distination);
        }
        $service->delete();

        return redirect()->route('admin.service.index')->with('type', 'danger')->with('msg', 'Servise deleted Successfully');
    }
}
