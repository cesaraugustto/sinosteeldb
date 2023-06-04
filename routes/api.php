<?php

use App\Http\Controllers\TableController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!

|Route::get('tables', 'Controller@getTablesSchema');
Route::get('series',[SeriesController::class, 'listarSeries']);

*/


Route::get('tables',[TableController::class, 'getTablesSchema']);
