@extends('layouts.app')

@section('content')
    @include('sections.hero.index')
    @include('sections.services.index')
    @include('sections.technologies.index')
    @include('components.portfolio.grid')
@endsection