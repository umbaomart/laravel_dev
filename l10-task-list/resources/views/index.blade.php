<h1>The list of Tasks</h1>

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
