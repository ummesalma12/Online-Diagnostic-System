<?php

namespace App\Http\Controllers;
use Session;
use App\report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = report::orderBy('created_at', 'DESC')->paginate(20);
        return view ('employee.report.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('employee.report.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Report=new report();
        $Report->invoicenumber=$request->number;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '1.' . $extension;
            $file->move('uploads/report/', $filename);
            $Report->image = $filename;
        }
        $Report->save();


        Session::flash('success', 'Image Uploaded Successfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(report $report)
    {
        //
    }
}
