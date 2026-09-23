@extends('layouts.app')

@section('content')

  <h1>Megyék</h1>
<a href="{{route('counties.create')}}">Új megye</a>
  @foreach($counties as $county)
      <p>{{ $county->name }}
        <form action="{{ route('counties.destroy', $county->id) }}" method="POST">
  @csrf
  @method('DELETE')
  <button type="submit">{{ __('Törlés') }}</button>
  <a href="{{ route('counties.edit', $county->id) }}">{{ __('Szerkesztés') }}</a>

        </form>
      </p>
  @endforeach

@endsection
