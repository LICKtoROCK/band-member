@if(count($posts)>0)
    <div class="form-group">
        <div class="card">
            <div class="card-header">
                過去の投稿
            </div>
            <ul class="list-group list-group-flush">
                @foreach($posts as $post)
                <li class="list-group-item">
                    {!! nl2br(e($user->name)) !!}
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
                
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('posts.show',['post'=>$post->id]) }}" class="btn btn-link">
                            コメントを見る
                        </a>
                        <div class="btn-group">
                            <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-link">編集</a>
                        </div>
                        {!! Form::open(['route'=>['posts.destroy',$post->id],'method'=>'delete']) !!}
                        <div>
                            {!! Form::submit('削除',['class'=>'btn btn-link']) !!}
                        </div>    
                        {!! Form::close() !!} 
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    {{ $posts->links() }}
@endif