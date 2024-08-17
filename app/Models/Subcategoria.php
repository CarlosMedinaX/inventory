<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subcategoria extends Model
{
    use HasFactory;

    protected $table = 'subcategorias';

    // protected $primaryKey = 'id';


    protected $fillable = ['nombreSubcategoria','categoria_id'];

    protected $guarded = ['created_at', 'updated_at'];

    public function categoria(): BelongsTo{

        return $this->belongsTo(Categoria::class, 'categoria_id', 'id');
    }

    public function productos()
	{
		return $this->hasMany(Producto::class);
	}

    protected function nombreSubcategoria(): Attribute{

        return  Attribute::make(

            set: fn( $value) => strtolower($value),
            get: fn($value) => ucfirst($value)

        );
    }



}
