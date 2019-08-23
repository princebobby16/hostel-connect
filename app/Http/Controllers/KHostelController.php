<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KHostelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $img1 = [
            'assets/img/hostelconnectimages/KHostel/k1.jpg',
            'assets/img/hostelconnectimages/KHostel/k2.jpg',
            'assets/img/hostelconnectimages/KHostel/k3.jpg',
            'assets/img/hostelconnectimages/KHostel/k4.jpg',
            'assets/img/hostelconnectimages/KHostel/k5.jpg',
        ];
        $facilities = [
            'Shared Kitchen',
            'Communal Fridge',
            'Television Room'
        ];
        $data = [
            'hostel_name' => 'K Hostel',
            'img' => 'assets/img/hostelconnectimages/KHostel/k.jpg',
            'img1' => $img1,
            'location' => 'West of Legon',
            'description' => 'K Hostel situates at 
            an exclusive area with an appartment 
            structure and is open to per semester 
            or yearly payment arrangement.',
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
