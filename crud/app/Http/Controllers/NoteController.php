<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class NoteController extends Controller
{
    public function index(): View
    {
        $notes = Note::all();
        return view('note.index', compact('notes'));
    }

    public function create(): View
    {
        return view('note.create');
    }

    public function store(NoteRequest $request): RedirectResponse
    {
        Note::create($request->all());
        return redirect()->route('note.index')->with('success', 'Note created');
    }

    public function edit(Note $note): View
    {
        return view('note.edit', compact('note'));
    }

    public function update(NoteRequest $request, Note $note): RedirectResponse
    {
        $note->update($request->all());
        return redirect()->route('note.index')->with('success', 'Note updated');
    }
    
    public function show(Note $note): View
    {
        return view('note.show', compact('note'));
    }
    
    public function destroy(Note $note): RedirectResponse
    {
        $note->delete();
        return redirect()->route('note.index')->with('danger', 'Note deleted');
    }
}