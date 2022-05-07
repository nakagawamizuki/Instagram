@extends('layouts.app')
@section('title', 'プロフィール登録')
@section('content')
    <div class="text-center">
        <h1>{{ Auth::user()->name }}さんのプロフィール作成</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => ['profiles.store'], 'files' => true]) !!}
                <div class="form-group">
                    {!! Form::label('nickname', 'ニックネーム') !!}
                    {!! Form::text('nickname', old('nickname'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('man', '男性') !!}
                    {!! Form::radio('gender', 'man', true, ['id'=>'man']) !!}
                    {!! Form::label('woman', '女性') !!}
                    {!! Form::radio('gender', 'woman', false, ['id'=>'woman']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('introduction', '自己紹介') !!}
                    {!! Form::text('introduction',  old('introduction'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('image', 'アバターアイコン') !!}
                    {!! Form::file('image') !!}
                </div>

                {!! Form::submit('プロフィール登録', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection