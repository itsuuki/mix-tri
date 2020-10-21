@extends('layouts.app')
<link rel="stylesheet" href="{{ mix('css/item.css') }}">
<script type="text/javascript" src="//code.jquery.com/jquery-3.5.0.min.js"></script>
<script src="{{ asset('/js/item.js') }}" defer></script>
@section('content')
<form method="POST" action="{{route('Item.store')}}" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="tops">
  <div class="top">
    <div class="left">
      <div class="file-label">
        <label for="price">
          表
        </label>
        <label for="price">
          裏
        </label>
      </div>
      <div class="file-two">
        @for ($i = 0; $i < 2; $i++)
          <input type="file" name="img[{{$i}}]" id="myfile{{$i}}">
          <!-- <input type="file" name="img[]" id="myfile2"> -->
          <input type="hidden" name="nums[{{$i}}]">
        @endfor
      </div>
      <div class="preview">
        <img id="img0" style="width:290px;height:290px;" />
        <img id="img1" style="width:290px;height:290px;" />
      </div>
    </div>
    <div class="rights">
      <div class="right">
        <label for="tname" class="lable-tname">
            商品名
        </label>
        <input
            id="tname"
            name="tname"
            class="tname {{ $errors->has('tname') ? 'is-invalid' : '' }}"
            value="{{ old('tname') }}"
            type="text"
        >
        <label for="price" class="lable-price">
            金額
        </label>
        <input
            id="price"
            name="price"
            class="price {{ $errors->has('price') ? 'is-invalid' : '' }}"
            value="{{ old('price') }}"
            type="text"
        >
        <a href="#" class="buy-button">購入</a>
      </div>
    </div>
  </div>
  <div class="bottom">
    <label for="price">
        商品説明
    </label>
    <textarea
        id="description"
        name="description"
        class="description"
        rows="4"
    >{{ old('description[]') }}</textarea>
  </div>
</div>
<div class="mt-5">
  <a class="btn btn-secondary" href="/">
      キャンセル
  </a>

  <button type="submit" class="btn btn-primary">
      登録する
  </button>
</div>
</form>
<div id="graydisplay"></div>
@endsection