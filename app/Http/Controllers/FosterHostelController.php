<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FosterHostelController extends Controller
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
        
        $facilities = [
            'Communal Fridge',
            'Communal Kitchen',
            'Television'
        ];

        $data = [
            'hostel_name' => 'Foster Hostel',
            'img' => 'assets/img/hostelconnectimages/ATestimonyHostel/test.jpg',
            'img1' => $img1,
            'location' => 'West of Legon',
            'description' => '
            This hostel gives you the
            feel at Home feeling coupled 
            with cool prices with a per 
            semester payment arrangement.
            ',
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
