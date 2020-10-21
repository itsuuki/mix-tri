@extends('layouts.app')
<link rel="stylesheet" href="{{ mix('css/item.css') }}">
<script type="text/javascript" src="//code.jquery.com/jquery-3.5.0.min.js"></script>
<script src="{{ asset('/js/item.js') }}" defer></script>
@section('content')
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
      @foreach ($image as $img)
        <img src="{{ asset('storage/'. $img->image)}}" width="290px" height="290px">
      @endforeach
      
    </div>
    
    <div class="rights">
      <div class="right">
        <div class="tname">
          {{ $item->tname }}
        </div>
        <div class="price">
          {{ $item->price }}円
        </div>
        <a href="#" class="buy-button">購入</a>
        @if($favorite != null)
        $item->users()->where('user_id', Auth::id())->exists()
          <div class="col-md-3">
              <form action="{{ route('unfavorites', $item) }}" method="POST">
                  {{ csrf_field() }}
                  <input type="submit" value="お気に入りから削除" class="fav-button">
              </form>
          </div>
        @else
          <div class="col-md-3">
              <form action="{{ route('favorites', $item) }}" method="POST">
                  {{ csrf_field() }}
                  <input type="submit" value="お気に入りに追加" class="fav-button" id="cre-fav">
              </form>
          </div>
        @endif
        <!-- <a href="#" class="fav-button">お気に入りに追加</a> -->
      </div>
    </div>
  </div>
  <div class="bottom">
    {{ $item->description}}
  </div>
</div>
<div id="graydisplay"></div>
@endsection