@extends('layouts.app')

@section('title')
    <title>コメント一覧</title>
@endsection

@section('heading')
    <h2>コメント一覧</h2>
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
    
    <div class="d-flex justify-content-end">
        {!! link_to_route('posts.comments.create','コメントを書く',$post->id,['class'=>'btn btn-link']) !!}
    </div>
</div>

@include('comments.index')

<div class="col-3 offset-9 mt-5">
    {!! link_to_route('toppage','トップページへ戻る',[],['class'=>'btn btn-primary btn-lg']) !!}
</div>

@endsection