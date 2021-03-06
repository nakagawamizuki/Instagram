@extends('layouts.app')
@section('title', 'プロフィール編集')
@section('content')
    <div class="text-center">
        <h1>{{ Auth::user()->name }}さんのプロフィール編集</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => ['profiles.update', 'id' => $profile->id ], 'files' => true, 'method' => 'PUT']) !!}
                <div class="form-group">
                    {!! Form::label('nickname', 'ニックネーム') !!}
                    {!! Form::text('nickname', $profile->nickname ? $profile->nickname : old('nickname'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('man', '男性') !!}
                    {!! Form::radio('gender', 'man', $profile->gender === 'man' ? true : false, ['id'=>'man']) !!}
                    {!! Form::label('woman', '女性') !!}
                    {!! Form::radio('gender', 'woman', $profile->gender === 'woman' ? true : false, ['id'=>'woman']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('introduction', '自己紹介') !!}
                    {!! Form::text('introduction',  $profile->introduction ? $profile->introduction : old('introduction'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('image', 'アバターアイコン') !!}
                    {!! Form::file('image') !!}
                </div>

                {!! Form::submit('プロフィール更新', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection