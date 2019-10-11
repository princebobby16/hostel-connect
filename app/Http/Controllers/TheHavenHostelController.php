<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TheHavenHostelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $img1 = [
            'assets/img/logo.jpg',
            'assets/img/logo.jpg',
            'assets/img/logo.jpg',
            'assets/img/logo.jpg',
            'assets/img/logo.jpg',
            'assets/img/logo.jpg',
            'assets/img/logo.jpg',
            'assets/img/logo.jpg',
        ];
        
        $facilities =  [
            'Free Gas',
            'Rentable Fridge',
            'Study Room',
            'Television Room',
        ];

        $data = [
            'hostel_name' => 'The Haven Hostel',
            'img' => 'assets/img/logo.jpg',
            'img1' => $img1,
            'location' => 'West of Legon',
            'description' => '
            This Hostel has a per 
            semester payment arrangement 
            with close proximity to GIMPA and 
            University of Ghana campuses',
            'facilities' => $facilities,
        ];
        return view('gallery', $data);
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
        //
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
        //
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
        //
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
