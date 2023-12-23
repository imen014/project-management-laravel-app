<?php

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

Route::get('/projects', [SmallProjects::class, 'index'])->name('projects.index');
Route::get('/projects/create', [SmallProjects::class, 'create'])->name('tasks.create');
Route::post('/projects', [SmallProjects::class, 'store'])->name('tasks.store');
Route::get('/projects/{project}/edit', [SmallProjects::class, 'edit'])->name('tasks.edit');
Route::put('/projects/{project}', [SmallProjects::class, 'update'])->name('tasks.update');
Route::delete('/projects/{project}', [SmallProjects::class, 'destroy'])->name('tasks.destroy');
Route::delete('/projects/distroy', function(){
    return view('distroy');
});
