<?php

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

/// List all notes
Route::get('/notes', [NoteController::class, 'index'])->name('notes');


Route::middleware('auth')->group(function () {
    /**
     * GET methot
     * 
     *  This route is responsible for displaying the form of creating a new note
     */
    Route::get('/notes/create', [NoteController::class, 'create']);

    /**
     * POST method *
     * 
     *  This is the rpute where function is storing the new note from the form
     */
    Route::post('/notes', [NoteController::class, 'store']);

    // Get My post
    Route::get('/notes/{id}', function ($id) {
        return view('notes.mynotes');
    });

    /** 
     * GET method 
     * 
     *  This route is responsible for displaying the form of updating a note
     */
    Route::get('/notes/edit/{id}', [NoteController::class, 'show_updating_note']);

    /**
     * PATCH method *
     * 
     *  This route is the function for updating the note from edit form
     */
    Route::patch('/notes/{id}', [NoteController::class, 'update_note']);

    // delete post
    Route::delete('/notes/{id}', [NoteController::class, 'destroy_note']);
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
