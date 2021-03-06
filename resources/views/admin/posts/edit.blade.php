@extends('layouts.admin')
<title>Edit Post</title>
@section('content')
    @include('includes.tinyeditor')
    @include('includes.formError')
    <h1>Edit Post</h1><div class="col-sm-3">
        <img src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">
    </div>
    <div class="col-sm-4">
        {!! Form::model($post, ['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id], 'files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category_id', 'Category:') !!}
            {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo_id', 'Photo:') !!}
            {!! Form::file('photo_id', ['class'=>'form-control-btn']) !!}
        </div>
    </div>
        <div class="form-group col-sm-8">
            {!! Form::label('body', 'Description:') !!}
            {!! Form::textarea('body', null, ['class'=>'form-control']) !!}


        {!! Form::submit('Update', ['class'=>'btn btn-success col-sm-4']) !!}
        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostsController@destroy', $post->id]]) !!}

            {!! Form::submit('Delete', ['class'=>'btn btn-danger col-sm-4 pull-right']) !!}
        {!! Form::close() !!}
        </div>

@endsection

@section('footer')

@endsection