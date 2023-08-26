@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/thanks.css') }}" />
@endsection
</head>

@section('content')
        <div class="thanks__content">
            <div class="thanks__heading">
                <h2>ご意見ありがとうございました</h2>
            </div>
        </div>
        <div class="form__button">
            <a class="form__button--submit" href="{{url('/')}}">トップページへ</a>
        </div>
@endsection