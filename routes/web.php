<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    try {
        DB::connection()->getPdo();
        echo "Conectado!!!" . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        die("Não foi possivel Conectar oa banco de Dados" . $e->getMessage());
    }
});
Route::get('/main', [MainController::class, 'index']);
Route::get('/users', [MainController::class, 'users']);
