@extends('layouts.app')

@section('title')
    <title>メンバー募集</title>
@endsection

@section('heading')
    <h2>メンバーを募集する</h2>
@endsection

@section('content')
{!! Form::open(['route'=>'posts.store']) !!}
    <div class="form-group mt-4">
        
    {!! Form::label('prefectures','都道府県') !!}
    {!! Form::select('prefectures',['北海道'=>'北海道','青森県'=>'青森県','岩手県'=>'岩手県','宮城県'=>'宮城県','秋田県'=>'秋田県','山形県'=>'山形県','福島県'=>'福島県','茨城県'=>'茨城県','栃木県'=>'栃木県','群馬県'=>'群馬県','埼玉県'=>'埼玉県','千葉県'=>'千葉県','東京都'=>'東京都','神奈川県'=>'神奈川県','新潟県'=>'新潟県','富山県'=>'富山県','石川県'=>'石川県','福井県'=>'福井県','山梨県'=>'山梨県','長野県'=>'長野県','岐阜県'=>'岐阜県','静岡県'=>'静岡県','愛知県'=>'愛知県','三重県'=>'三重県','滋賀県'=>'滋賀県','京都府'=>'京都府','大阪府'=>'大阪府','兵庫県'=>'兵庫県','奈良県'=>'奈良県','和歌山県'=>'和歌山県','鳥取県'=>'鳥取県','島根県'=>'島根県','岡山県'=>'岡山県','広島県'=>'広島県','山口県'=>'山口県','徳島県'=>'徳島県','香川県'=>'香川県','愛媛県'=>'愛媛県','高知県'=>'高知県','福岡県'=>'福岡県','佐賀県'=>'佐賀県','長崎県'=>'長崎県','熊本県'=>'熊本県','大分県'=>'大分県','宮崎県'=>'宮崎県','鹿児島県'=>'鹿児島県','沖縄県'=>'沖縄県'],null,['class'=>'form-control','placeholder'=>'選択してください']) !!}

    
        <p class="control-label mt-4">募集パート</p>
        <div class="form-inline">
            <div class="form-check">
                {!! Form::checkbox('vocal',true,false,['class'=>'form-check-input']) !!}
                {!! Form::label('vocal','ボーカル') !!}
            </div>
            <div class="form-check">
                {!! Form::checkbox('guiter_vocal',true,false,['class'=>'form-check-input']) !!}
                {!! Form::label('guiter_vocal','ギターボーカル') !!}
            </div>
            <div class="form-check">
                {!! Form::checkbox('guiter',true,false,['class'=>'form-check-input']) !!}
                {!! Form::label('guiter','ギター') !!}
            </div>
        </div>
        <div class="form-inline">
            <div class="form-check">
                {!! Form::checkbox('bass',true,false,['class'=>'form-check-input']) !!}
                {!! Form::label('bass','ベース') !!}
            </div>
            <div class="form-check">
                {!! Form::checkbox('drums',null,false,['class'=>'form-check-input']) !!}
                {!! Form::label('drums','ドラム') !!}
            </div>
            <div class="form-check">
                {!! Form::checkbox('keyboard',true,false,['class'=>'form-cheack-input']) !!}
                {!! Form::label('keyboard','キーボード') !!}
            </div>
        </div>
        <div class="form-inline">
            <div class="form-check">
                {!! Form::checkbox('brass',true,false,['class'=>'form-check-input']) !!}
                {!! Form::label('brass','管楽器') !!}
            </div>
            <div class="form-check">
                {!! Form::checkbox('strings',true,false,['class'=>'form-check-input']) !!}
                {!! Form::label('strings','弦楽器') !!}
            </div>
            <div class="form-check">
                {!! Form::checkbox('dj',true,false,['class'=>'form-check-input']) !!}
                {!! Form::label('dj','ＤＪ') !!}
            </div>
        </div>    
        <div class="form-check">
                {!! Form::checkbox('etc',true,false,['class'=>'form-check-input']) !!}
                {!! Form::label('etc','その他') !!}
        </div>
        <div class="mt-4">
        {!! Form::label('pr','自己ＰＲ') !!}
        {!! Form::textarea('pr',null,['class'=>'form-control']) !!}
        </div>
    </div>

        <div class="col-2 offset-5 mt-5">
            {!! Form::submit('投稿',['class'=>'btn btn-danger btn-lg btn-block']) !!}
        </div>
    
{!! Form::close() !!}

    <div class="col-3 offset-9 mt-5">
        {!! link_to_route('toppage','トップページへ戻る',[],['class'=>'btn btn-primary btn-lg']) !!}
    </div>

@endsection