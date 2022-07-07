<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>新規登録</title>
        <div class="card border-info mx-auto mt-4" style="width:fit-content">
            <div class="card-header">
                <div class="text-center">
                     <h2>新規登録</h2>
                     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">                
                </div>
            </div>
        </div>    
    </head>
    <body>
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
                    
                    {!! Form::submit('登録',['class'=>'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
                
                <a href="/" class="btn btn-info">戻る</a>
                    
            </div>
        </div>
    </body>