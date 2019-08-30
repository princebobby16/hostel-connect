<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;
use App\Order;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validte the request
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'select' => 'required',
        ]);

        Log::info("Requests has been validated");

        $order = new Order();
        
        $order->first_name = $request->input('first_name');
        $order->last_name = $request->input('last_name');
        $order->email = $request->input('email');
        $order->phone_number = $request->input('phone_number');
        $order->comment = $request->input('textarea');
        $select = "";
        if ($request->input('select') == 'L') {
            $select = "University of Ghana";
        }elseif ($request->input('select') == 'U') {
            $select = "UPSA";
        }elseif ($request->input('select') == 'G') {
            $select = "Gimpa";
        }else {
            $select = "UnKnown";
        }

        $order->school = $select;

        $order->save();
        
        $client = new Client([
            'headers' => [
                'Accept' => 'application/json', 
                'Content-type' => 'application/json'
            ]
        ]);

        Log::info("Client has been called");

        $requestObject = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'comment' => $request->input('textarea'),
            'school' => $select,
        ];

        $getResponse = $client->post(
            'http://localhost:8080/send/email', 
            [
                'json' =>$requestObject,
                'http_errors' => false
            ]
        );
        Log::info("response from server".print_r($getResponse, true));
        if ($getResponse->getStatusCode() == 400) {
            Log::info("No response was recieved from the server" . print_r($getResponse->getStatusCode(), true));
        }

        if ($getResponse->getStatusCode() == 200) {
            $getResponseBody = $getResponse->getBody();
            Log::info("Response recieved from server is: " . print_r($getResponseBody, true));
            $getResponseArray = json_decode($getResponseBody, true);
            Log::info("Response recieved from server is: " . print_r($getResponseArray, true));
        }

        return redirect('register')->with('success', 'Your request has been sent, we will call you soon');
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
