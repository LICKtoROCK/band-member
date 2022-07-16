@extends('layouts.app')

@section('title')
    <title>新規登録</title>
@endsection

@section('heading')
    <h2>新規登録</h2>
@endsection

@section('content')
    <div class="row">
        <div class="col-6 offset-3">
            {!! Form::open(['route'=>'signup.post']) !!}
            <div class="form-group">
                {!! Form::label('name','名前（ハンドルネーム）') !!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('email','メールアドレス') !!}
                {!! Form::email('email',null,['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('password','パスワード') !!}
                {!! Form::password('password',['class'=>'form-control']) !!}
            </div>
                
            <div class="form-group">
                {!! Form::label('password_confirmation','パスワード（確認）') !!}
                {!! Form::password('password_confirmation',['class'=>'form-control']) !!}
            </div>
        </div>
        
        <div class="col-4 offset-4">
                {!! Form::submit('登録',['class'=>'btn btn-danger btn-block']) !!}
            {!! Form::close() !!}
            
            <a href="/" class="btn btn-info btn-block mt-5">戻る</a>
        </div>
    </div>
@endsection