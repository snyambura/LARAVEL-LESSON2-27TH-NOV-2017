@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach()
                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add a New Task <a href="{{ route('todo.index') }}" class="label label-primary pull-right">Back</a>
                </div>
                <div class="panel-body">
                    <form action="/todo" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-sm-2" >Task</label>
                            <div class="col-sm-9">
                                <input type="text" name="task" id="task" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <button type="submit" class="btn btn-primary">Add Task </button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection