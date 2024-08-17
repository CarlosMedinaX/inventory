<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Estante extends Model
{
    use HasFactory;

    protected $table = 'estantes';

    protected $fillable = ['nombreEstante','pisoEstante'];

    protected $guarded = ['created_at', 'updated_at'];

    public function productos()
	{
		return $this->hasMany(Producto::class);
	}
    
    protected function nombreEstante(): Attribute{

        return Attribute::make(
            // mutador
           set: fn($value) => strtolower($value),
            // accesor
           get: fn($value) => ucfirst($value)
        );
    }

}
