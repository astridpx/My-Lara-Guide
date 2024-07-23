<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NoteController extends Controller
{

    public function index()
    {
        return view('notes.index', [
            'notes' =>  Note::all()
        ]);
    }
    public function myNotes($id)
    {
        return view('home', [
            // 'notes' =>  Note::find($id)
            'notes' =>  Note::all()
        ]);
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'min:5'],
            'message'   => ['required', 'min:10'],
            'color' => 'required'
        ]);

        // dd($request->all());

        // Note::create($data);

        Note::create([
            'title' => request('title'),
            'message' => request('message'),
            'card_color' => request('color'),
            'user_id' => 1,
        ]);

        return redirect('/notes');
    }

    public function show_updating_note($id)
    {
        $note = Note::find($id);

        return view('notes.edit', ['note' => $note]);
    }
    public function update_note(Request $request, $id)
    {
        $data = $request->validate([
            'title' => ['required', 'min:5'],
            'message'   => ['required', 'min:10'],
            'color' => 'required'
        ]);

        $note = Note::findOrFail($id);

        // Update the note's attributes
        // $note->title = request('title');
        // $note->message =  request('message');
        // $note->color =  request('color');

        // $note->save();


        $note->update([
            'title' => request('title'),
            'message' => request('message'),
            'card_color' => request('color'),
        ]);


        // return redirect('/notes/' . $note->id);
        return redirect('/notes');
    }

    public function destroy_note($id)
    {
        $note = Note::findOrFail($id);

        $note->delete();

        return redirect('/notes');
    }
}


    // public function store(Request $request) {
    //     $formFields = $request->validate([
    //         'title' => 'required',
    //         'company' => ['required', Rule::unique('listings', 'company')],
    //         'location' => 'required',
    //         'website' => 'required',
    //         'email' => ['required', 'email'],
    //         'tags' => 'required',
    //         'description' => 'required'
    //     ]);

    //     if($request->hasFile('logo')) {
    //         $formFields['logo'] = $request->file('logo')->store('logos', 'public');
    //     }

    //     $formFields['user_id'] = auth()->id();

    //     Listing::create($formFields);

    //     return redirect('/')->with('message', 'Listing created successfully!');
    // }
