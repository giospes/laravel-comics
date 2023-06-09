@extends('layouts.app')

@section('content')
    <div class="card-container h-100 overflow-auto">
        @foreach($comics as $index => $comic)
            <a href="{{ route('comic.show', ['id' => $index])}}">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ $comic['title']}}</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            @foreach($comic as $key => $element)
                                @if($key !== 'title' && $key !== 'thumb' && is_string($element))
                                    <li>{{ $element}}</li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection

