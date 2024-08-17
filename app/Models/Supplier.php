<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'suppliers';

    protected $fillable = ['supplier_name'];

    public $timestamps = false;

    protected function supplier_name(): Attribute{

        return Attribute::make(
            // mutador
           set: fn($value) => strtolower($value),
            // accesor
           get: fn($value) => ucfirst($value)
        );
    }


    


}
