@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto p-6">

<form method="POST" action="{{ route('tasks.store') }}" class="space-y-4">
    @csrf

    <input name="title" class="w-full border p-2 rounded" placeholder="Title">

    <textarea name="description" class="w-full border p-2 rounded"></textarea>

    <select name="status" class="w-full border p-2 rounded">
        <option value="pending">Pending</option>
        <option value="in_progress">In Progress</option>
        <option value="completed">Completed</option>
    </select>

    <button class="bg-green-500 text-white px-4 py-2 rounded">Save</button>
</form>

</div>
@endsection