@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Post</div>
                    @include('layouts.errors')
                    <form action="/admin/post/{{$post->alias}}" method="POST">
                        {{csrf_field()}}
                        {!! method_field('patch') !!}
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input class="form-control" type="text" name="title" id="title" value="{{$post->title}}">
                        </div>
                        <div class="form-group">
                            <label for="alias">Alias:</label>
                            <input class="form-control" type="text" name="alias" id="alias" value="{{$post->alias}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" type="text" name="description"
                                      id="description">{{$post->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="content">Content:</label>
                            <textarea class="form-control" type="text" name="content" id="content" >{{$post->content}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="content">Publick:</label>
                            <input class="form-control" type="checkbox" name="public" id="public"
                                   @if($post->public)
                                           checked
                                           @endif
                            value="public">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
