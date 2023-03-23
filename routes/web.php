<?php

use App\Jobs\LogsJobs;
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
    return view('welcome');
});

Route::get('/job-log', function () {

    LogsJobs::dispatch('ERROR TESTE');
    return response()->json(['Message' => 'Sucess Jobs Disparado']);
});
