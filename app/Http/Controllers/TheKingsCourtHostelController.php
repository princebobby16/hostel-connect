<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TheKingsCourtHostelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $img1 = [
            'assets/img/hostelconnectimages/TheKingsCourtHostel/kings1.jpg',
            'assets/img/hostelconnectimages/TheKingsCourtHostel/kings2.jpg',
            'assets/img/hostelconnectimages/TheKingsCourtHostel/kings3.jpg',
            'assets/img/hostelconnectimages/TheKingsCourtHostel/kings4.jpg',
            'assets/img/hostelconnectimages/TheKingsCourtHostel/kings5.jpg',
            'assets/img/hostelconnectimages/TheKingsCourtHostel/kings6.jpg',
            'assets/img/hostelconnectimages/TheKingsCourtHostel/kings7.jpg',
            'assets/img/hostelconnectimages/TheKingsCourtHostel/kings8.jpg',
        ];

        $facilities = [
            'Fridge',
            'Bathtub',
            'Television'
        ];

        $data = [
            'hostel_name' => 'KingsCourt Hostel',
            'img' => 'assets/img/hostelconnectimages/TheKingsCourtHostel/kings.jpg',
            'img1' => $img1,
            'location' => 'West of Legon',
            'description' => 'KingsCourt is 
            a top-notch Hostel with all 
            the needs of the student for a 
            comfortable stay provided for. 
            It has a per semester payment model. 
            Water is free but students foot the 
            Light Bill.',
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
