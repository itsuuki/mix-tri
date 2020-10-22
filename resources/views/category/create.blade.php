@extends('layouts.app')
@section('content')
<form method="POST" action="{{route('Category.store')}}" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card mb-4">
        <div class="card-header">
          カテゴリー登録
        </div>
        <div class="card-body">
          <p class="card-text">
            <div class="category-inp">
              <input
                  id="genre"
                  name="category"
                  class="genre {{ $errors->has('number') ? 'is-invalid' : '' }}"
                  value="{{ old('genre') }}"
                  type="text"
              >
              <select id="parent" class="form-control" name="parent">
                <option value="none">No any parents</option>
                @foreach ($categorys as $category)
                  <option value="{{ $category->id }}">
                    {{ $category->genre }}
                  </option>
                @endforeach
              </select>
            </div>
          </p>
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
    </div>
  </div>
</div>
</form>
@endsection