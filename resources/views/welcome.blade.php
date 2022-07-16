@extends('layouts.app')

@section('title')
    <title>バンドメンバー募集掲示板</title>
@endsection

@section('heading')
    <h2>バンドメンバー募集掲示板へようこそ！</h2>
@endsection

@section('content')
    @if(Auth::check())
        <div class="row justify-content-center mt-4 offset-1">
            <div class="col-4">
                {!! link_to_route('posts.create','メンバーを募集する',[],['class'=>'btn btn-primary btn-lg']) !!}
            </div>    
            <div class="col-4">
                <button type="button" class="btn btn-success btn-lg">メンバーを探す</button>
            </div>
        </div>
        <div class="row">
            <div class="col-2 offset-5 mt-5">
                {!! link_to_route('logout.get','ログアウト',[],['class'=>'btn btn-danger btn-lg btn-block']) !!}
            </div>
        </div>
        <div class="mt-5">
            @include('posts.posts')
        </div>
    @else
        <div class="row">
            <div class="col-4 offset-4 mt-5">
                {!! link_to_route('signup.get','新規登録はこちらから',[],['class'=>'btn btn-primary btn-lg btn-block']) !!}
                {!! link_to_route('login','登録済の方はこちら（ログイン）',[],['class'=>'btn btn-link btn-lg btn-block']) !!}
            </div>
        </div>
    @endif
@endsection        
       
    