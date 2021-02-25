<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Driver extends Model{
    use HasFactory;

    protected $fillable = [
        'name',
        'dni',
        'email',
        'phone',
        'address',
        'contact_name',
        'contact_phone',
        'created_at',
        'updated_at'
    ];

    public static function validated(Request $request){
        return $request->validate(
            [
                'name' => 'required|min:3',
                'email' => 'email|nullable',
                'phone' => 'min:8|nullable',
                'address' => 'nullable',
                'dni' => 'nullable',
                'contact_name' => 'nullable',
                'contact_phone' => 'nullable',
            ],
            [
                'name.required'=> 'El nombre es requerido',
                'name.min'=> 'El nombre debe tener minimo 3 caracteres',
            ]
        );
    }
    
}