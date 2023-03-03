@extends('layouts.app')

@section('content')
    <a href="{{ route('note.index') }}">Back</a>
    <form action="{{ route('note.update', $note->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $note->title }}" @error('title') autofocus @enderror> <br>
        @error('title')
            <p style="color:red">{{ $message }}</p>
        @enderror
        <label for="description">Description:</label>
        <input type="text" name="description" id="description" value="{{ $note->description }}"> <br>
        @error('description')
            <p style="color:red">{{ $message }}</p>
        @enderror
        <input type="submit" value="Update">
    </form>
@endsection