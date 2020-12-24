<?php

namespace App\Http\Controllers;
use Session;
use App\newsLetter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsletter = newsLetter::orderBy('created_at', 'DESC')->paginate(20);
        return view ('employee.newsLetter.index', compact('newsletter'));
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
        $newsletter = newsLetter::create([
            'email' => $request->email,


        ]);

        return redirect('/'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\newsLetter  $newsLetter
     * @return \Illuminate\Http\Response
     */
    public function show(newsLetter $newsLetter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\newsLetter  $newsLetter
     * @return \Illuminate\Http\Response
     */
    public function edit(newsLetter $newsLetter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\newsLetter  $newsLetter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, newsLetter $newsLetter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\newsLetter  $newsLetter
     * @return \Illuminate\Http\Response
     */
    public function destroy(newsLetter $newsLetter)
    {
        //
    }
}
