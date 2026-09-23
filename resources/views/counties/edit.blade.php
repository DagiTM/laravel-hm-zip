@extends('layouts.app')

@section('title', __('Megye módosítása'))

@section('content')
    <h1>{{ __('Megye módosítása') }}</h1>

    <form action="{{ route('counties.update', $county->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <label for="name">{{ __('Megye neve') }}</label>
        <input type="text" name="name" id="name" value="{{ old('name', $county->name) }}" required>
        @error('name')
        <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit">{{ __('Mentés') }}</button>
        <a href="{{ route('counties.index') }}">{{ __('Mégse') }}</a>
    </form>
@endsection
