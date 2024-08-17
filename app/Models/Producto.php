<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';
	public $timestamps = false;

	protected $casts = [
		'categoria_id' => 'int',
		'subcategoria_id' => 'int',
		'estante_id' => 'int'
	];

	protected $fillable = [
		'nombreProducto',
		'precioUnitario',
		'stockMinimo',
		'stockMaximo',
		'cantidad',
		'subcategoria_id',
		'estante_id'
	];

	public function estante()
	{
		return $this->belongsTo(Estante::class);
	}

	public function subcategoria()
	{
		return $this->belongsTo(Subcategoria::class);
	}

	public function suppliers()
	{
		return $this->belongsToMany(Supplier::class, 'productos_x_suppliers', 'producto_id', 'supplier_id')
					->withPivot('id');
	}


	protected function nombreProducto(): Attribute{

		return Attribute::make(
				// mutador
			 set: fn($value) => strtolower($value),
				// accesor
			 get: fn($value) => ucfirst($value)
		);
}
}
