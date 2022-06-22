@extends('tasks.layout')

@section('content')
    <div class="card">
        <div class="card-header">Task Page</div>
        <div class="card-body">

            <div class="card-body">
                <h5 class="card-title">Title : {{ $task->title }}</h5>
                <h5 class="card-title">Description : {{ $task->description }}</h5>
                <h5 class="card-title">Created : {{ $task->created_at->format('d/m/Y - H:i:s') }}</h5>
                <h5 class="card-title">Updated : {{ $task->updated_at->format('d/m/Y - H:i:s') }}</h5>
            </div>

            <hr />

        </div>
    </div>
