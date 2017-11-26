@extends('/layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
            @if(Session::has('success_msg'))
                <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
            @endif
        <!-- Tasks list -->
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="pull-left">
                            <h2>Tasks List </h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-info" href="{{ route('todo.create') }}"> Add New</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="list-group">
                            <a href="#" class="list-group-item  list-group-item-action active">
                                Cras justo odio
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in
                            </a>
                            <a href="#" class="list-group-item list-group-item-action disabled">Morbi leo risus
                            </a>
                        </div>

                    </div>
                </div>
        </div>
    </div>
    </div>
@endsection