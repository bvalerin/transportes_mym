<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Customer;
use App\Models\Shipment;
use Illuminate\Http\Request;

class ShipmentController extends Controller{

    function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $shipments = Shipment::paginate(1);
        return view('shipment.index', compact('shipments'));
    }

    public function create(){
        $customers = Customer::all();
        $drivers = Driver::all();
        return view('shipment.create',compact('customers','drivers'));
    }

    public function store(Request $request){
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function show(Shipment $shipment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function edit(Shipment $shipment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shipment $shipment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shipment $shipment)
    {
        //
    }
}
