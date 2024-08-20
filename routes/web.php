<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SubcategoriaController;
use App\Http\Controllers\EstanteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\SupplierController;
use App\Models\Categoria;

Route::get('/', function () {
    return view('welcome');
});

Route::get('categorias/pdf', [CategoriaController::class, 'pdf']);
Route::resource('categorias', CategoriaController::class);
Route::get('subcategorias/pdf', [SubcategoriaController::class, 'pdf']);
Route::resource('subcategorias', SubcategoriaController::class);
Route::get('estantes/pdf', [EstanteController::class, 'pdf']);
Route::resource('estantes', EstanteController::class);
Route::resource('proveedores', ProveedorController::class);
Route::get('suppliers/pdf', [SupplierController::class, 'pdf']);
Route::resource('suppliers', SupplierController::class);
Route::get('productos/pdf', [ProductoController::class, 'pdf']);
Route::resource('productos', ProductoController::class);





// htttp method           Uri                     Action       Route Name

// get                   /photos                  Index        photos.index   

// get                   /photos/create           Create       photos.create

// post                  /photos                  Store        photos.store

// get                   /photos/{photo}          Show         photos.show

// get                   /photos/{photo}/edit     Edit         photos.edit

// put/patch             /photos/{photo}          Update       photos.update
 
// delete        /photos/{photo}      Destroy   photos.destroy                                     
