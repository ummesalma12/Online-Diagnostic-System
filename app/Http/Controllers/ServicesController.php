<?php

namespace App\Http\Controllers;
use Session;
use App\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::orderBy('created_at', 'DESC')->paginate(20);
        return view ('employee.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('employee.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request, [
            'name' => 'required|unique:services,name',
        ]);
       
        $service = Services::create([
            'name' => $request->name,
            'description' => $request->description,
            'price'=>$request->price,
        ]);

        Session::flash('success', 'Service created successfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit(Services $services,$id)
    {
        $services=services::find($id);
        return view ('employee.services.edit', compact('services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Services $services,$id)
    {
          // validation
        
          $this->validate($request, [
            'name' => "required|unique:services,name",
        ]);
        $service=services::find($id);
        $service->name = $request->name;
        $service->description = $request->description;
        $service->price = $request->price;
        $service->save();

        Session::flash('success', 'Service updated successfully');
        return redirect('/service');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services $services,$id)
    {
        $services=services::find($id);
        if($services){
            $services->delete();

            Session::flash('success', 'Service deleted successfully');
            return redirect()->route('service.index');
        }
    }
}
