<?php

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

use Illuminate\Support\Facades\Route;

\Illuminate\Support\Facades\Route::get('manage', [\Toantg\Manage\Src\Controllers\DashboardController::class, 'index']);


//Route::prefix('manage')
//    ->middleware('web')
//    ->group(base_path('routes/manage.php'));
