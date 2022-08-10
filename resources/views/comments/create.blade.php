@extends('layouts.app')

@section('title')
    <title>コメント投稿</title>
@endsection

@section('heading')
    <h2>コメントを投稿する</h2>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        {!! nl2br(e($post->user->name)) !!}
        {!! nl2br(e($post->updated_at)) !!}<br>
        {!! nl2br(e($post->prefectures)) !!}<br>
                        
        <span>募集パート：</span>
        @if ($post->vocal)<span class="">ボーカル　</span> @endif
        @if ($post->guiter_vocal)<span class="">ギターボーカル　</span> @endif
        @if ($post->guiter)<span class="">ギター　</span> @endif
        @if ($post->bass)<span class="">ベース　</span> @endif
        @if ($post->drums)<span class="">ドラム　</span>　@endif
        @if ($post->keyboard)<span class="">キーボード　</span> @endif
        @if ($post->brass)<span class="">管楽器　</span> @endif
        @if ($post->strings)<span class="">弦楽器　</span> @endif
        @if ($post->dj)<span class="">ＤＪ　</span> @endif
        @if ($post->etc)<span class="">その他</span> @endif <br>
        {!! nl2br(e($post->pr)) !!}
    </div>
</div>

    {!! Form::model($post,['route'=>['posts.comments.store',$post->id]]) !!}
        
        {!! Form::label('comment','コメント') !!}
        {!! Form::textarea('comment',null,['class'=>'form-control']) !!}
        
　　　  <div class="col-2 offset-5 mt-5">
            {!! Form::submit('コメントを投稿',['class'=>'btn btn-danger btn-lg']) !!}
        </div>
        {!! Form::close() !!}
    
    <div class="col-3 offset-9 mt-5">
        {!! link_to_route('toppage','トップページへ戻る',[],['class'=>'btn btn-primary btn-lg']) !!}
    </div>

@endsection