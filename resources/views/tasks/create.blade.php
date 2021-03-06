@extends('home1')
@section('title', 'Thêm mới công viêc')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>{!! __('messages.name')!!}</h2>
        </div>
        <div class="col-md-12">
            <form method="post" action="{{ route('tasks.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label >{!! __('messages.title')!!}</label>
                    <input type="text" class="form-control @if($errors->has('title')) is-invalid @endif"
                           name="title" required>
                    @if($errors->has('title'))
                        <div class="invalid-feedback">
                            {{ $errors->first('title')  }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label >{!! __('messages.content')!!}</label>
                    <textarea class="form-control" rows="3" name="content" required></textarea>
                    @if($errors->has('content'))
                        <div class="invalid-feedback" style="display: block">
                            {{ $errors->first('content')  }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">{!! __('messages.image')!!}</label>
                    <input type="file" name="image" class="form-control-file">
                    @if($errors->has('image'))
                        <div class="invalid-feedback">
                            {{ $errors->first('image')  }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">{!! __('messages.due_date')!!}</label>
                    <input type="date" name="due_date" class="form-control" required>
                    @if($errors->has('due_date'))
                        <div class="invalid-feedback">
                            {{ $errors->first('due_date')  }}
                        </div>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">{!! __('messages.create')!!}</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">{!! __('messages.cancel')!!}</button>
            </form>
        </div>
    </div>

@endsection
