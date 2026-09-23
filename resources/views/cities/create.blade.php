@extends('layouts.app')

@section('title', __('Új város létrehozása'))

@section('content')
    <h1>{{ __('Új város') }}</h1>

    <form action="{{ route('cities.store') }}" method="POST">
        @csrf

        <label for="name">{{ __('Város neve') }}</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        @error('name')
        <div class="error">{{ $message }}</div>
        @enderror

        <label for="zip_code">{{ __('Irányítószám') }}</label>
        <input type="text" name="zip_code" id="zip_code" value="{{ old('zip_code') }}" required>
        @error('zip_code')
        <div class="error">{{ $message }}</div>
        @enderror

        <label for="id_county">{{ __('Megye') }}</label>
        <select name="id_county" id="id_county" required>
            <option value="">{{ __('Válassz megyét') }}</option>
            @foreach($counties as $county)
                <option value="{{ $county->id }}" @selected(old('id_county') == $county->id)>
                    {{ $county->name }}
                </option>
            @endforeach
        </select>
        @error('id_county')
        <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit">{{ __('Mentés') }}</button>
        <a href="{{ route('cities.index') }}">{{ __('Mégse') }}</a>
    </form>
@endsection
