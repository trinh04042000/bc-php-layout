@extends('home1')
@section('title', ('Danh sach'))

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>{!! __('messages.task') !!}</h3>
        </div>
        <div class="col-12">
            @if (Session::has('success'))
                <p class="text-success">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    {{ Session::get('success') }}
                </p>
            @endif
        </div>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{!!__('messages.name')!!}</th>
                    <th scope="col">{!!__('messages.content')!!}</th>
                    <th scope="col">{!!__('messages.image')!!}</th>
                    <th scope="col">{!!__('messages.due_date')!!}</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($tasks as $key => $task)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->content }}</td>
                        <td>
                            @if($task->image)
                                <img src="{{ asset('storage/'.$task->image) }}" alt="" style="width: 200px; height: 200px">
                            @else
                                {!! __('messages.no_image')!!}
                            @endif
                        </td>
                        <td>{{ $task->due_date }}</td>
                        <td><a href="{{ route('tasks.edit', $task->id) }}">{{ __('messages.edit') }}</a></td>
                        <td><a href="{{ route('tasks.destroy', $task->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">{{__('messages.delete')}}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a href="{{ route('tasks.create') }}" class="btn btn-primary">{!!__('messages.create')!!}</a>
        </div>
    </div>
@endsection