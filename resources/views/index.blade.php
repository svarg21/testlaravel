@extends('layouts.app')
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
                        <a href="/post/{{$post->alias}}">Читать полностью</a>
                    </div>
                    <hr style="clear: both">
                @endforeach
            </div>
        </div>
    </div>
@endsection

