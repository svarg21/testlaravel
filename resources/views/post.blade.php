@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="post">
                <h2>{{ $post->title }}</h2>
                <hr>
                <p>
                    {{ $post->description }}
                </p>
                <hr>
                <h3>Комментарий</h3>
                @if (!Auth::guest())
                    <form action="/admin/post/{{$post->alias}}/comment" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="comments">Напишите комментарий</label>
                            <textarea class="form-control" name="comment" id="comments"></textarea>
                        </div>
                        <input type="submit" value="Добавить коментарий">
                    </form>
                @endif
                @foreach($post->getPostComment()->get() as $comment)
                    <span class="user">{{$comment->user_id}}</span> - <span class="data">{{$comment->created_at}}</span>
                    <div id="comment_{{$comment->id}}">
                        {{$comment->content}}<br>
                    </div>
                    @if(Auth::id()==$comment->user_id)
                        <button onclick="editComment(this,event)" id="comment_edit_{{$comment->id}}">
                            Редактировать коментарий
                        </button><br>
                        <form action="/admin/post/{{$post->alias}}/comment/{{$comment->id}}" method="post">
                            {{csrf_field()}}
                            {!! method_field('delete') !!}
                            <div class="form-group">
                                <input type="submit" value="Удалить коментарий">
                            </div>
                        </form>
                    @endif
                @endforeach

            </div>
            <script>
                function editComment(el, event) {
                    var str = event.target.id;
                    var startStr = str.lastIndexOf('_') + 1;
                    var endStr = str.length;
                    el.remove();
                    console.log(str.slice(startStr, endStr))
                    var element = document.getElementById('comment_' + str.slice(startStr, endStr));
                    var text = element.innerHTML;
                    element.innerHTML = '<form action="/admin/post/{{$post->alias}}/comment/' + str.slice(startStr, endStr) +
                        '" method="post"><div class="form-group">{{csrf_field()}}{!! method_field("patch") !!}<textarea name="comment" class="form-control">'
                        + text + '</textarea><input type="submit"></div></form>';
                }
            </script>
        </div>
@endsection

