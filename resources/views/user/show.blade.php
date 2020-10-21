@extends('layouts.app')
<link rel="stylesheet" href="{{ mix('css/user.css') }}">
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="user-top">
        <div class="user-one">
          {{ $user->name }}
        </div>
        <a class="user-fav" href="#">
          お気に入り一覧
        </a>
        <div class="ac-box">
          <input id="ac-1" name="accordion-1" type="checkbox" />
          <label for="ac-1" class="user-address">
            住所確認
          </label>
          <div class="ac-small">
            <p>
              @if ($address != null)
                {{ $address->number }}
                {{ $address->city }}
              @else
              <a class="user-add-add" href="address">
                住所を設定する
              </a>
              @endif
            </p>
          </div>
        </div>
        <div class="ac-box">
          <input id="ac-1" name="accordion-1" type="checkbox" />
          <label for="ac-1" class="user-credit">
            クレジット情報確認
          </label>
          <div class="ac-small">
            <p>ここにテキスト流す</p>
          </div>
        </div>
        <div class="ac-box">
          <input id="ac-1" name="accordion-1" type="checkbox" />
          <label for="ac-1" class="user-buy">
            購入履歴確認
          </label>
          <div class="ac-small">
            <p>ここにテキスト流す</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection