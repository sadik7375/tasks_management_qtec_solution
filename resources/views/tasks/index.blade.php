@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-6">

    <div class="flex justify-between mb-4">
        <h1 class="text-2xl font-bold">Task Manager</h1>
        <a href="{{ route('tasks.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ New</a>
    </div>

    @foreach($tasks as $task)
    <div class="bg-white shadow p-4 mb-3 rounded">
        <h2 class="font-bold text-lg">{{ $task->title }}</h2>
        <p class="text-gray-600">{{ $task->description }}</p>

        <span class="text-sm px-2 py-1 rounded
            @if($task->status == 'pending') bg-yellow-200
            @elseif($task->status == 'in_progress') bg-blue-200
            @else bg-green-200
            @endif
        ">
            {{ $task->status }}
        </span>

        <div class="mt-2">
            <a href="{{ route('tasks.edit', $task) }}" class="text-blue-500">Edit</a>

            <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button class="text-red-500 ml-2">Delete</button>
            </form>
        </div>
    </div>
    @endforeach

</div>
@endsection@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-6">

    <div class="flex justify-between mb-4">
        <h1 class="text-2xl font-bold">Task Manager</h1>
        <a href="{{ route('tasks.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ New</a>
    </div>

    @foreach($tasks as $task)
    <div class="bg-white shadow p-4 mb-3 rounded">
        <h2 class="font-bold text-lg">{{ $task->title }}</h2>
        <p class="text-gray-600">{{ $task->description }}</p>

        <span class="text-sm px-2 py-1 rounded
            @if($task->status == 'pending') bg-yellow-200
            @elseif($task->status == 'in_progress') bg-blue-200
            @else bg-green-200
            @endif
        ">
            {{ $task->status }}
        </span>

        <div class="mt-2">
            <a href="{{ route('tasks.edit', $task) }}" class="text-blue-500">Edit</a>

            <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button class="text-red-500 ml-2">Delete</button>
            </form>
        </div>
    </div>
    @endforeach

</div>
@endsection