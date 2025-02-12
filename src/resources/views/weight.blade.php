@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/weight.css') }}">
@endsection

@section('content')

<div class="pigly__content">
    <div class="pigly__heading">
        <h1>PiGLy</h1>
        <h2>新規会員登録</h2>
        <h3>STEP2 体重データの入力</h3>
    </div>
    <form class="form" action="" method="">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">現在の体重</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="weight_now" placeholder="現在の体重を入力" value="{{ old('weight_now') }}" />
                    <p>kg</p>
                </div>
                <div class="form__error">
                    @error('weight_now')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">目標の体重</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="weight_goal" placeholder="目標の体重を入力" value="{{ old('weight_goal') }}" />
                    <p>kg</p>
                </div>
                <div class="form__error">
                    @error('weight_goal')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">アカウント作成</button>
        </div>
    </form>
</div>
@endsection
