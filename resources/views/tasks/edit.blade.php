@extends('home1')
@section('title', __('Cap nhat'))

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>{{__('messages.update')}}</h2>
        </div>
        <div class="col-md-12">
            <form method="post" action="{{ route('tasks.update', $task->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>{!! __('messages.title')!!}</label>
                    <input type="text" class="form-control" name="title" value="{{ $task->title }}" required>
                </div>
                <div class="form-group">
                    <label>{!! __('messages.content')!!}</label>
                    <textarea class="form-control" rows="3" name="content"  required>{{ $task->content }}</textarea>
                </div>
                <div class="form-group">
                    <label>{!! __('messages.image')!!}</label>
                    <input type="file" name="image" class="form-control-file" >
                </div>
                <div class="form-group">
                    <label>{!! __('messages.due_date')!!}</label>
                    <input type="date" name="due_date" class="form-control"  value="{{ $task->due_date }}" required>
                </div>
                <button type="submit" class="btn btn-primary">{{__('messages.update')}}</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">{{__('messages.cancel')}}</button>
            </form>
        </div>
    </div>

@endsection