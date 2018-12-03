@extends('layouts.admin')
<title>Create Post</title>
@section('content')
    @include('includes.tinyeditor')
    @include('includes.formError')
    <h1>Create Post</h1>
    <div class="col-sm-4">
        {!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files'=>true]) !!}
        {{csrf_field()}}
        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category_id', 'Category:') !!}
            {!! Form::select('category_id', [''=>'Choose Categories'] + $categories, null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo_id', 'Photo:') !!}
            {!! Form::file('photo_id', ['class'=>'form-control-btn']) !!}
        </div>

        {!! Form::submit('Create', ['class'=>'btn btn-success']) !!}
    </div>
    <div class="form-group col-sm-12">
        {!! Form::label('body', 'Description:') !!}
        {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
    </div>

    {!! Form::close() !!}
@endsection

@section('footer')

@endsection