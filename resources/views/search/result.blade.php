@if(count($posts)>0)
    <div class="form-group">
        <div class="card">
            <div class="card-header">
                検索結果
            </div>
        @foreach($posts as $post)
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
        @endforeach
    </div>
    {{ $posts->links() }}
@endif