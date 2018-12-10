@extends('layouts.app')
<title>Home</title>
@section('content')
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Blog Posts
                </h1>

                <!-- First Blog Post -->
                @if($posts)
                    @foreach($posts as $post)

                        <h2>
                            <a href="#">{{$post->title}}</a>
                        </h2>
                        <p class="lead">
                            by <a href="#">{{$post->user->name}}</a>
                        </p>
                        <p><span class="glyphicon glyphicon-time"></span> {{$post->created_at->diffForHumans()}}</p>
                        <hr>
                        <img class="img-responsive" src="{{$post->photo ? $post->photo->file : $post->photoPlaceholder()}}" alt="">
                        <hr>
                        <p>{!! str_limit($post->body, 120) !!}</p>
                        <a class="btn btn-primary" href="/post/{{$post->slug}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                        <hr>
                    @endforeach
                @endif

                <!-- Pagination -->
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-5">
                        {{$posts->render()}}
                    </div>
                </div>


            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                @if($categories)
                                    @foreach($categories as $category)
                                        <li><a href="#">{{$category->name}}</a></li>
                                    @endforeach
                                @endif

                            </ul>
                        </div>

                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website Codehacking {{$year}}</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->
@endsection
