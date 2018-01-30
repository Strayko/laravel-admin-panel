@extends('layouts.admin')


@section('content')

    <h1>Categories</h1>


    <div class="col-sm-6">
        {!! Form::model($category, ['method'=>'PATCH', 'action'=>['AdminCategoriesController@update', $category->id]]) !!}
        {{csrf_field()}}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
            <div clas="form-group">
                {!! Form::submit('Update', ['class'=>'btn btn-primary col-sm-3']) !!}
            </div>
        {!! Form::close() !!}

        <div class="form-group">
                {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $category->id]]) !!}
                    {!! Form::submit('Delete', ['class'=>'btn btn-danger col-sm-3']) !!}
                {!! Form::close() !!}
            </div>
    </div>

    <div class="col-sm-6">
        
    </div>

@endsection