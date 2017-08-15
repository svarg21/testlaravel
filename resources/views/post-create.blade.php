@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Post</div>
                        @include('layouts.errors')
                        <form action="/admin/post" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input class="form-control" type="text" name="title" id="title">
                            </div>
                            <div class="form-group">
                                <label for="alias">Alias:</label>
                                <input class="form-control" type="text" name="alias" id="alias">
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea class="form-control" type="text" name="description"
                                          id="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="content">Content:</label>
                                <textarea class="form-control" type="text" name="content" id="content"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="content">Publick:</label>
                                <input class="form-control" type="checkbox" name="public" id="public" value="true">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Post</button>
                            </div>

                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection
