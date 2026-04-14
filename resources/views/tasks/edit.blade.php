@extends('layouts.app')

@section('content')

<div class="max-w-xl mx-auto p-6">

    <h1 class="text-xl font-bold mb-4">Edit Task</h1>

    <form method="POST" action="{{ route('tasks.update', $task) }}" class="space-y-4">
        @csrf
        @method('PUT')

        <input 
            type="text" 
            name="title" 
            value="{{ $task->title }}"
            class="w-full border p-2 rounded"
        >

        <textarea 
            name="description"
            class="w-full border p-2 rounded"
        >{{ $task->description }}</textarea>

        <select name="status" class="w-full border p-2 rounded">
            <option value="pending" {{ $task->status == 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="in_progress" {{ $task->status == 'in_progress' ? 'selected' : '' }}>In Progress</option>
            <option value="completed" {{ $task->status == 'completed' ? 'selected' : '' }}>Completed</option>
        </select>

        <button class="bg-blue-500 text-white px-4 py-2 rounded">
            Update Task
        </button>
    </form>

</div>

@endsection