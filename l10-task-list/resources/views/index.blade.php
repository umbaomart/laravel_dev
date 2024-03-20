@extends('layouts.app')

@section('title', 'The list of Tasks')

@section('content')
<!-- Directive -->
<div>
    @forelse ($tasks as $task)
        <div>
            <a href="{{route('tasks.show', ['id' => $task->id])}}">{{$task->title}}</a>
        </div>
    @empty
        <div>There are no Tasks!</div>
    @endforelse
</div>
@endsection()
