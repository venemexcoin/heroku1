<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\PortafolioComponent;
use App\Http\Livewire\PortafolioDetailComponent;
use App\Http\Livewire\Admin\AdminHomeComponet;
use App\Http\Livewire\Admin\EmailComponen;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', HomeComponent::class);

Route::get('/',PortafolioComponent::class)->name('portafolio');
Route::get('/portafolio/detail', PortafolioDetailComponent::class)->name('portafolio/detail');
Route::get('/admin/adminhome', AdminHomeComponet::class)->name('admin/adminhome');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/admin/adminhome', AdminHomeComponet::class)->name('admin/adminhome');
    Route::get('/admin/email', EmailComponen::class)->name('admin/email');
});