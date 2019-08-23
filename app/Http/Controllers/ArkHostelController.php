<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArkHostelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $img1 = [
            'assets/img/hostelconnectimages/ArkHostel/ark1.jpg',
            'assets/img/hostelconnectimages/ArkHostel/ark2.jpg',
            'assets/img/hostelconnectimages/ArkHostel/ark3.jpg',
            'assets/img/hostelconnectimages/ArkHostel/ark4.jpg',
            'assets/img/hostelconnectimages/ArkHostel/ark5.jpg',
            'assets/img/hostelconnectimages/ArkHostel/ark6.jpg',
            'assets/img/hostelconnectimages/ArkHostel/ark7.jpg',
            'assets/img/hostelconnectimages/ArkHostel/ark8.jpg',
            'assets/img/hostelconnectimages/ArkHostel/ark9.jpg',
            'assets/img/hostelconnectimages/ArkHostel/ark10.jpg',
            'assets/img/hostelconnectimages/ArkHostel/ark11.jpg',
            'assets/img/hostelconnectimages/ArkHostel/ark12.jpg',
            'assets/img/hostelconnectimages/ArkHostel/ark13.jpg',
            'assets/img/hostelconnectimages/ArkHostel/ark14.jpg',
            'assets/img/hostelconnectimages/ArkHostel/ark15.jpg',
            'assets/img/hostelconnectimages/ArkHostel/ark16.jpg',
            'assets/img/hostelconnectimages/ArkHostel/ark17.jpg',
            'assets/img/hostelconnectimages/ArkHostel/ark18.jpg',
            'assets/img/hostelconnectimages/ArkHostel/ark19.jpg',
            'assets/img/hostelconnectimages/ArkHostel/ark20.jpg',
            'assets/img/hostelconnectimages/ArkHostel/ark21.jpg',
            'assets/img/hostelconnectimages/ArkHostel/ark22.jpg',
        ];
        $facilities = [
            'Communal Kitchen',
        ];
        $data = [
            'hostel_name' => 'Ark Hostel',
            'img' => 'assets/img/hostelconnectimages/ArkHostel/ark21.jpg',
            'img1' => $img1,
            'location' => 'West of Legon',
            'description' => '
            Ark Hostel offers a Serene green environment
            coupled with affordable prices and great facilities.
            It has a per semester or yearly payment system, 
            also electricity and water are footed by the hostel',
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
