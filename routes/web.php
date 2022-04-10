<?php

use App\Http\Controllers\Admin\CadastroMoedasController;
use App\Http\Controllers\Pagina\PagamentoController;
use App\Http\Controllers\PublicController\PaginaIncialController;
use App\Http\Controllers\TaxasController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PaginaIncialController::class, 'index'])->name('index');
Route::post('/pagamento', [PagamentoController::class, 'index'])->name('pagamento');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rotas admin
Route::prefix('admin')->middleware('nivel')->group(function () {
    Route::resource('cadastrarMoedas', CadastroMoedasController::class);
    Route::resource('taxas', TaxasController::class);
});


// rotas dashboard
