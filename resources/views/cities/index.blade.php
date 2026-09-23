@extends('layouts.app')

@section('content')

    <h1>Városok</h1>
    <a href="{{route('cities.create')}}">Új város</a>
    @foreach($cities as $city)
        <p>{{ $city->zip_code }} {{ $city->name }} ({{ $city->county->name }})
        <form action="{{ route('cities.destroy', $city->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">{{ __('Törlés') }}</button>
            <a href="{{ route('cities.edit', $city->id) }}">{{ __('Szerkesztés') }}</a>

        </form>
        </p>
    @endforeach

@endsection
