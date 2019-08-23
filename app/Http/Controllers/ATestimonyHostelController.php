<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ATestimonyHostelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $img1 = [
            'assets/img/hostelconnectimages/ATestimonyHostel/test1.jpg',
            'assets/img/hostelconnectimages/ATestimonyHostel/test2.jpg',
            'assets/img/hostelconnectimages/ATestimonyHostel/test3.jpg',
            'assets/img/hostelconnectimages/ATestimonyHostel/test4.jpg',
            'assets/img/hostelconnectimages/ATestimonyHostel/test5.jpg',
            'assets/img/hostelconnectimages/ATestimonyHostel/test6.jpg',
            'assets/img/hostelconnectimages/ATestimonyHostel/test7.jpg',
            'assets/img/hostelconnectimages/ATestimonyHostel/test8.jpg',
            'assets/img/hostelconnectimages/ATestimonyHostel/test9.jpg',
            'assets/img/hostelconnectimages/ATestimonyHostel/test10.jpg',
            'assets/img/hostelconnectimages/ATestimonyHostel/test11.jpg',
            'assets/img/hostelconnectimages/ATestimonyHostel/test12.jpg',
            'assets/img/hostelconnectimages/ATestimonyHostel/test13.jpg',
            'assets/img/hostelconnectimages/ATestimonyHostel/test14.jpg',
            'assets/img/hostelconnectimages/ATestimonyHostel/test15.jpg',
            'assets/img/hostelconnectimages/ATestimonyHostel/test16.jpg',
            'assets/img/hostelconnectimages/ATestimonyHostel/test17.jpg',
            'assets/img/hostelconnectimages/ATestimonyHostel/test18.jpg',
            'assets/img/hostelconnectimages/ATestimonyHostel/test19.jpg',
            'assets/img/hostelconnectimages/ATestimonyHostel/test20.jpg',
            'assets/img/hostelconnectimages/ATestimonyHostel/test21.jpg',
            'assets/img/hostelconnectimages/ATestimonyHostel/test22.jpg',
            'assets/img/hostelconnectimages/ATestimonyHostel/test23.jpg',
            'assets/img/hostelconnectimages/ATestimonyHostel/test24.jpg',
            'assets/img/hostelconnectimages/ATestimonyHostel/test25.jpg',
            'assets/img/hostelconnectimages/ATestimonyHostel/test26.jpg',
            'assets/img/hostelconnectimages/ATestimonyHostel/test27.jpg',
            'assets/img/hostelconnectimages/ATestimonyHostel/test28.jpg',
        ];

        $facilities = [
            'Fridge',
            'Washing Machine',
            'Television'
        ];

        $data = [
            'hostel_name' => 'A Testimony Hostel',
            'img' => 'assets/img/hostelconnectimages/ATestimonyHostel/test7.jpg',
            'img1' => $img1,
            'location' => 'West of Legon',
            'description'  => 'A Testimony Hostel 
            has a per semester payment systemm with 
            a quiet serene environment with all the 
            utilities taken care of.',
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
