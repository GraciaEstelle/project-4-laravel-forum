@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @component('threads.panel')
                @slot('title')
                Forum Threads
                @endslot
                @foreach($threads as $thread)
                <article>
                    <h4>
                        <a href="{{ url($thread->path()) }}">
                            {{ $thread->title }}
                        </a>
                    </h4>
                    <div class="body">{{ $thread->body }}</div>
                </article>
                <hr>
                @endforeach
            @endcomponent
        </div>
    </div>
@endsection