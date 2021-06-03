<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BenchController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gtfsmodel', [BenchController::class, 'gtfsModel']);

Route::get('/mapping', [BenchController::class, 'tripleMaps']);

Route::get('/querys', [BenchController::class, 'querysInfo']); 

Route::get('/bench', [BenchController::class, 'benchInfo']); 

Route::get('/keywords', [BenchController::class, 'keyWords']); 

Route::get('/datasets', [BenchController::class, 'dataSet']); 

Route::get('/metrics', [BenchController::class, 'metrics']);

Route::get('/bench/setup', [BenchController::class, 'setup']); 

Route::get('/bench/evaluation', [BenchController::class, 'evaluation']); 

Route::get('/bench/conclusions', [BenchController::class, 'conclusions']); 

Route::get('/bench/relatedwork', [BenchController::class, 'relatedWork']); 

Route::get('/bench/analysis', [BenchController::class, 'analysis']); 