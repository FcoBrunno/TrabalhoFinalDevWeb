@extends('tasks.layout')
@section('content')
    <div class="card">
        <div class="card-header">Task Page</div>
        <div class="card-body">

            <form action="{{ url('/task/' . $task->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $task->id }}" id="id" />

                <label>Title</label>
                <br />
                <input type="text" name="title" id="title" value="{{ $task->title }}" class="form-control">
                <br />

                <label>Description</label>
                <br />
                <input type="text" name="description" id="description" value="{{ $task->description }}"
                    class="form-control">
                <br />

                <input type="submit" value="Update" class="btn btn-success"><br />
            </form>

        </div>
    </div>
@stop
