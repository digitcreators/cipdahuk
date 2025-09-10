<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Http\Resources\ServicesResource;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::orderBy('name', 'ASC')->get();

        return view('admin.services.index', compact('services'));
    }

    public function getServices()
    {
        return ServicesResource::collection( Service::all() )->response();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceRequest $request)
    {
        $request->is_published == "on" ? $request->merge(['is_published' => true]) : $request->merge(['is_published' => false]);

        $request->merge(['user_id' => Auth::user()->id]);

        Service::create($request->all());

        return redirect()->route('admin.services.index');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service=Service::where('id',$id)->first();
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceRequest $request, $id)
    {
        $service = Service::findOrFail($id);

        $request->is_published == "on" ? $request->merge(['is_published' => true]) : $request->merge(['is_published' => false]);

        $service->update($request->all());

        return redirect()->route('admin.services.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        $service->delete();

        return redirect()->route('admin.services.index');
    }
}
