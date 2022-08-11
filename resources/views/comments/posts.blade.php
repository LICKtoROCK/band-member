@if(count($comments)>0)
    <div class="form-group">
        <div class="card">
            <div class="card-header">
                コメントした投稿
            </div>
            <ul class="list-group list-group-flush">
                @foreach($comments as $comment)
                <li class="list-group-item">
                    {!! nl2br(e($comment->user->name)) !!}
                    {!! nl2br(e($comment->updated_at)) !!}<br>
                    {!! nl2br(e($comment->prefectures)) !!}<br>
                    <span>募集パート：</span>
                    @if ($comment->vocal)<span class="">ボーカル　</span> @endif
                    @if ($comment->guiter_vocal)<span class="">ギターボーカル　</span> @endif
                    @if ($comment->guiter)<span class="">ギター　</span> @endif
                    @if ($comment->bass)<span class="">ベース　</span> @endif
                    @if ($comment->drums)<span class="">ドラム　</span>　@endif
                    @if ($comment->keyboard)<span class="">キーボード　</span> @endif
                    @if ($comment->brass)<span class="">管楽器　</span> @endif
                    @if ($comment->strings)<span class="">弦楽器　</span> @endif
                    @if ($comment->dj)<span class="">ＤＪ　</span> @endif
                    @if ($comment->etc)<span class="">その他</span> @endif <br>
                    {!! nl2br(e($comment->pr)) !!}
                    
                    <div class="d-flex justify-content-end">
                        <div class="btn-group">
                            <a href="{{ route('posts.show',['post'=>$comment->id]) }}" class="btn btn-link">
                                コメントを見る
                            </a>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    {{ $posts->links() }}
@endif