@extends('layouts.app')

@section('content')

    <form method="POST" action="{{ route('note.store') }}">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title"  @error('title') autofocus @enderror> <br>
        @error('title')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <label for="description">Description</label>
        <input type="text" name="description" id="description"> <br>
        @error('description')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <input type="submit" value="Create">
    </form>

    <a href="{{ route('note.index') }}">Back</a>
@endsection