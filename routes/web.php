<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\webcontroller;

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

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);

Route::get('/', [webcontroller::class, 'index'])->name('index');
Route::get('services', [webcontroller::class, 'services'])->name('services');
Route::get('services/live-recording', [webcontroller::class, 'liveRecording'])->name('liveRecording');
Route::get('services/portrait-photography', [webcontroller::class, 'p_photography'])->name('p_photography');
Route::get('services/fine-art-and-fashion', [webcontroller::class, 'fineArtandfashion'])->name('fineArtandfashion');
Route::get('services/music-video', [webcontroller::class, 'musicVideo'])->name('musicVideo');
Route::get('/about-us', [webcontroller::class, 'theTribe'])->name('theTribe');
Route::get('services/real-estate', [webcontroller::class, 'realEstate'])->name('realEstate');
Route::get('services/event-lifestyle', [webcontroller::class, 'eventLifestyle'])->name('eventLifestyle');
Route::get('/contact-us', [webcontroller::class, 'contactUs'])->name('contactUs');
Route::post('/submit_form', [webcontroller::class, 'submitForm']);

Route::get('/projects', [webcontroller::class, 'projects'])->name('projects');


Route::get('/projects/{slug}', [webcontroller::class, 'show']);
