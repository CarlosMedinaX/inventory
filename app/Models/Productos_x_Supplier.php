<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos_x_Supplier extends Model
{
    use HasFactory;
    protected $table = 'productos_x_suppliers';
	public $timestamps = false;

	protected $casts = [
		'supplier_id' => 'int',
		'producto_id' => 'int'
	];

	protected $fillable = [
		'supplier_id',
		'producto_id'
	];

	public function supplier()
	{
		return $this->belongsTo(Supplier::class);
	}

	public function producto()
	{
		return $this->belongsTo(Producto::class);
	}
}
