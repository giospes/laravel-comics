@extends('layouts.app')

@php
    $comic = $comics[$id]
@endphp


@section('content')
    <div class="card-container h-100 overflow-auto">
        
           
                <div class="card">
                    <div class="card-header">
                        <h4>{{ $comic['title']}}</h4>
                    </div>
                    <div class="card-body">
                    <ul>
                            @foreach($comic as $key => $element)
                                @if(is_string($element))
                                    <li>{{ $element}}</li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            
        
    </div>
@endsection
