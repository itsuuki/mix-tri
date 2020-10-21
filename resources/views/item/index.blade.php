@extends('layouts.app')
<link rel="stylesheet" href="{{ mix('css/item.css') }}">
@section('content')
<div>
  hogeeee
</div>
<a class="item-cre" href="/Item/create">
  item作る
</a>
<div class="item-all">
@foreach ($items as $item)
  <div class="item-one">
      @foreach ($images as $image)
        @if ($image->id %2 != 0 && $item->id == $image->item_id)
          <img src="{{ asset('storage/'. $image->image)}}" width="200px" height="200px">
        @endif
      @endforeach
      <a class="item-show" href="/Item/{{ $item->id }}">
        {{ $item->tname }}
      </a>
  </div>
@endforeach
</div>
@endsection