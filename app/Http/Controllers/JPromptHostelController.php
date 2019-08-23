<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JPromptHostelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $img1 = [
            'assets/img/hostelconnectimages/JPromptHostel/jp.jpg',
            'assets/img/hostelconnectimages/JPromptHostel/jp1.jpg',
            'assets/img/hostelconnectimages/JPromptHostel/jp2.jpg',
            'assets/img/hostelconnectimages/JPromptHostel/jp3.jpg',
            'assets/img/hostelconnectimages/JPromptHostel/jp4.jpg',
            'assets/img/hostelconnectimages/JPromptHostel/jp5.jpg',
        ];
        $facilities = [
            'No extra facilities',
        ];
        $data = [
            'hostel_name' => 'J Prompt Hostel',
            'img' => 'assets/img/hostelconnectimages/JPromptHostel/jp.jpg',
            'img1' => $img1,
            'location' => 'Kokomlemle',
            'description' => 'Beauty of the 
            structure plus its affordability 
            are one strong features of J 
            Prompt Hostel. It has a per semester 
            payment arrangement, also all 
            utilities are factored into the price.',
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
