<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shipment extends Model{

    protected $fillable = [
        'origin',
        'destination',
        'user_id',
        'customer_id',
        'driver_id',
        'shipment_date',
        'instructions',
        'container_number',
        'chasis_number',
        'vehicle_plate',
        'shipment_state',

    ];

    
    use HasFactory;

    public static function validated(Request $request){
        return $request->validate(
            [
                'origin' => 'required',
                'destination' => 'required',
                'shipment_date' => 'required',
                'container_number' => 'required',
                'chasis_number' => 'required',
                'vehicle_plate' => 'required',
                'instructions' => 'nullable',
            ],
            [
                'origin.required'=> 'El origen es requrido',
                'destination.required'=> 'El destino es requrido', 
                'shipment_date.required'=> 'La fecha de colocacion es requerida',
                'container_number.required' => 'El numero de contenedor es requerido',
                'chasis_number.required'=> 'El numero de chasis es requerido',
                'vehicle_plate.required'=> 'La placa del vehiculo es requerida',
                'address.required'=> 'La direccion es requerida'
            ]
        );
    }

}
