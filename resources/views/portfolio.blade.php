@extends('layouts.main')

@section('title', 'MyCraft')

@section('content')
    @include('partials.hero')
    @include('partials.about')
    @include('partials.portfolio')
    @include('partials.contact')
@endsection
