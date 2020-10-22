@extends('layouts.app')
<link rel="stylesheet" href="{{ mix('css/category.css') }}">
<script type="text/javascript" src="//code.jquery.com/jquery-3.5.0.min.js"></script>
<script src="{{ asset('/js/category.js') }}" defer></script>
@section('content')
<span id="js-getVariable" data-name="{{ $jave }}"></span>
<span id="js-getVariabl" data-name="{{ $javes }}"></span>
<select class="cate">
  @foreach ($categorys as $category)
    @if ($category->parent_id === NULL)
    <option value="{{ $category->id }}" class="cate_pare">
      {{ $category->genre }}
    </option>
    @endif
    @if ($category->parent_id === [])
    <option value="{{ $category->id }}" class="cate_sub">
      {{ $category->genre }}
    </option>
    @endif
    @if ($category->parent_id === [])
    <option value="{{ $category->id }}">
      {{ $category->genre }}
    </option>
    @endif
  @endforeach
</select>
@endsection