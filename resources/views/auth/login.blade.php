@extends('layouts.app')

@section('title')
    <title>ログイン</title>
@endsection

@section('heading')
    <h2>ログイン</h2>
@endsection

@section('content')
    <div class="row">
        <div class="col-6 offset-3">
            {!! Form::open(['route'=>'login.post']) !!}
            <div class="form-group">
                {!! Form::label('email','メールアドレス') !!}
                {!! Form::email('email',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password','パスワード') !!}
                {!! Form::password('password',['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="col-4 offset-4">
            {!! Form::submit('ログイン', ['class'=>'btn btn-warning btn-block']) !!}
            {!! Form::close() !!}
                
            <a href="/" class="btn btn-info btn-block mt-5">戻る</a>
        </div>
    </div>
@endsection