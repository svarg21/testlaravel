@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="post">
                @foreach($posts as $post)
                    <div class="col-md-12">
                        <h2>{{ $post->title }}</h2>
                        <p>
                            {{$post->description}}
                        </p>
                        <div class="row">
                            <div class="col-md-4">
                                <a class="btn" href="/post/{{$post->alias}}">Читать полностью</a>
                            </div>
                            <div class="col-md-4">
                                <a class="btn btn-primary" href="admin/post/edit/{{$post->alias}}">Редактировать</a>
                            </div>
                            <div class="col-md-4">
                                <form class="form-post" action="admin/post/{{$post->alias}}" method="post">
                                    {{csrf_field()}}
                                    {!! method_field('delete') !!}
                                    <input class="btn btn-danger" type="submit" value="Удалить">
                                </form>
                            </div>
                        </div>
                    </div>
                    <hr class="clr">
                @endforeach
            </div>
        </div>
    </div>
@endsection
