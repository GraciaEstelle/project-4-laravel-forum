@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @component('threads.panel')
                @slot('title')
                    <a href="#">{{ $thread->creator->name }}</a> posted:
                    {{ $thread->title }}
                @endslot
                    {{ $thread->body }}
            @endcomponent
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @foreach($thread->replies as $reply)
                    @include('threads.reply')
                @endforeach
            </div>
        </div>
        @if(auth()->check())
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form method="post" action="{{ url($thread->path().'/replies') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <textarea class="form-control" name="body" id="body" rows="5" placeholder="Says...."></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">post</button>
                    </form>
                </div>
            </div>
            @else
            <p class="text-center"> Please <a href="{{ route('login') }}">sign in</a> to participate</p>
        @endif
    </div>
@endsection