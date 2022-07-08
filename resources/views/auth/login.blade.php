<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>ログイン</title>
        <div class="card border-info mx-auto mt-4" style="width:fit-content">
            <div class="card-header">
                <div class="text-center">
                     <h2>ログイン</h2>
                     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">                
                </div>
            </div>
        </div>    
    </head>
    <body>
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
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>