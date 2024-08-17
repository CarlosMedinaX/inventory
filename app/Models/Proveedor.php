<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = 'proveedores';

    protected $fillable = ['nombreProveedor'];

    protected $guarded = ['created_at', 'updated_at'];


    protected function nombreProveedor(): Attribute{

        return Attribute::make(
            // mutador
           set: fn($value) => strtolower($value),
            // accesor
           get: fn($value) => ucfirst($value)
        );


    }

}
