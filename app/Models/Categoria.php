<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'categorias';

    protected $fillable = [
        'nombreCategoria'

    ];

    protected $guarded = ['created_at', 'updated_at'];
    
    public $timestamps = false;

    protected function nombreCategoria(): Attribute{

        return Attribute::make(
            // mutador
           set: fn($value) => strtolower($value),
            // accesor
           get: fn($value) => ucfirst($value)
        );
    }

    public function subcategorias(): HasMany{
            return $this->hasMany(Subcategoria::class, 'categoria_id', 'id');

    }

}
