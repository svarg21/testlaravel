@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4">
                <h2>{{ $post->title }}</h2>
                <p>
                    {{$post->description}}
                </p>
                <a href="/post/{{$post->alias}}">Читать полностью</a>
                <a href="admin/post/edit/{{$post->alias}}">Редактировать</a>
                <form action="admin/post/{{$post->alias}}" method="post">
                    {{csrf_field()}}
                    {!! method_field('delete') !!}
                    <input type="submit" value="Удалить">
                </form>
            </div>
        @endforeach
    </div>
</div>
@endsection
