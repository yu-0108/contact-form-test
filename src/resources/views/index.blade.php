@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/index.css') }}" />
@endsection

@section('content')
<div class="contact-form__content">
    <div class="content-form__heading">
        <h2>お問い合わせ</h2>
    </div>
    <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--item--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text--name">
                    <input type="text" name="last_name" value="{{ old('last_name') }}">
                    <input type="text" name="first_name" value="{{ old('first_name') }}">
                </div>
                <div class="form__placeholder">
                    <a class="form__placeholder">例）山田</a>
                    <a class="form__placeholder--name">例）太郎</a>
                </div>
                <div class="form__error">
                    <div class="form__error">
                        @if($errors->has('last_name'))
                        <li>{{$errors->first('last_name')}}</li>
                        @endif
                    </div>
                    @if($errors->has('first_name'))
                    <li>{{$errors->first('first_name')}}</li>
                    @endif
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--item--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--radio">
                    <input type="radio" name="gender" value="男性" checked />男性
                    <input type="radio" name="gender" value="女性" />女性
                </div>
                <div class="form__error">
                    <!--バリデーション-->
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--item--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" value="{{ old('email') }}">
                </div>
                <div class="form__placeholder">
                    <a>例）test@example.com</a>
                </div>
                <div class="form__error">
                    @if($errors->has('email'))
                    <li>{{$errors->first('email')}}</li>
                    @endif
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">郵便番号</span>
                <span class="form__label--item--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <a>〒</a><input type="text" name="post_code" value="{{ old('post_code') }}">
                </div>
                <div class="form__placeholder">
                    <a>例）123-4567</a>
                </div>
                <div class="form__error">
                    @if($errors->has('post_code'))
                    <li>{{$errors->first('post_code')}}</li>
                    @endif
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--item--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="address" value="{{ old('address') }}">
                </div>
                <div class="form__placeholder">
                    <a>例）東京都渋谷区千駄ヶ谷1-2-3</a>
                </div>
                <div class="form__error">
                    @if($errors->has('address'))
                    <li>{{$errors->first('address')}}</li>
                    @endif
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="building_name" value="{{ old('building_name') }}">
                </div>
                <div class="form__placeholder">
                    <a>例）千駄ヶ谷マンション101</a>
                </div>
                <div class="form__error">
                    <!--バリデーション-->
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">ご意見</span>
                <span class="form__label--item--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--textarea">
                    <textarea type="text" name="opinion" rows="5" cols="120">{{old('opinion')}}</textarea>
                </div>
                <div class="form__error">
                    @if($errors->has('opinion'))
                    <li>{{$errors->first('opinion')}}</li>
                    @endif
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認</button>
        </div>
    </form>
</div>
@endsection