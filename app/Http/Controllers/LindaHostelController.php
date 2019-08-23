<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LindaHostelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $img1 = [
            'assets/img/hostelconnectimages/LindaDorHostel/linda1.jpg',
            'assets/img/hostelconnectimages/LindaDorHostel/linda2.jpg',
            'assets/img/hostelconnectimages/LindaDorHostel/linda3.jpg',
            'assets/img/hostelconnectimages/LindaDorHostel/linda4.jpg',
            'assets/img/hostelconnectimages/LindaDorHostel/linda5.jpg',
            'assets/img/hostelconnectimages/LindaDorHostel/linda6.jpg',
            'assets/img/hostelconnectimages/LindaDorHostel/linda7.jpg',
            'assets/img/hostelconnectimages/LindaDorHostel/linda8.jpg',
        ];

        $facilities = [
            'Free Wifi',
        ];

        $data = [
            'hostel_name' => 'Linda Dor Hostel',
            'img' => 'assets/img/hostelconnectimages/LindaDorHostel/linda.jpg',
            'img1' => $img1,
            'location' => 'West of Legon',
            'description' => 'This Hostel has a per semester model. With its location and great facilities.
            Linda Dor should be a bargain. ',
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
