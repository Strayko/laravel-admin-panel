@extends('layouts.admin')
<title>Edit Category</title>
@section('content')
    <div class="col-sm-6">
        {!! Form::model($category, ['method'=>'PATCH', 'action'=>['AdminCategoriesController@update', $category->id]]) !!}
        {{csrf_field()}}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        {!! Form::submit('Update', ['class'=>'btn btn-success col-sm-4']) !!}
        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $category->id]]) !!}
            {!! Form::submit('Delete', ['class'=>'btn btn-danger col-sm-4 pull-right']) !!}
        {!! Form::close() !!}

    </div>

@endsection

@section('footer')

@endsection