<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaxHostelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $img1 = [
            'assets/img/hostelconnectimages/MaxHostel/max1.jpg',
            'assets/img/hostelconnectimages/MaxHostel/max2.jpg',
            'assets/img/hostelconnectimages/MaxHostel/max3.jpg',
            'assets/img/hostelconnectimages/MaxHostel/max4.jpg',
            'assets/img/hostelconnectimages/MaxHostel/max5.jpg',
        ];
        $facilities = [
            'Communal Kitchen',
            'Free Wifi'
        ];
        $data = [
            'hostel_name' => 'Max Hostel',
            'img' => 'assets/img/hostelconnectimages/MaxHostel/max.jpg',
            'img1' => $img1,
            'location' => 'West of Legon',
            'description' => 'Max Hostel 
            has a per semester or yearly 
            payment model it is located near 
            a busy route and very affordable.
            Water is free but Students pay 
            for the light bill.',
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
