@extends('layouts.app')

@section('content')
    <h1>{{ $education['title'] }}</h1>
    <p>Category: {{ $education['category'] }}</p>
    <p>Description: {{ $education['description'] }}</p>
    <img src="{{ $education['image_url'] }}" alt="{{ $education['title'] }}">
@endsection