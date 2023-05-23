@extends('layouts.app')

@section('content')
    <h1>hello</h1>
@endsection

@section('header')
    @include('partials.header', ['sections' => $sections])
@endsection