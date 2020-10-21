@extends('layouts.app')
<link rel="stylesheet" href="{{ mix('css/address.css') }}">
@section('content')
<form method="POST" action="{{route('Address.store')}}" enctype="multipart/form-data">
{{ csrf_field() }}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card mb-4">
        <div class="card-header">
          住所登録
        </div>
        <div class="card-body">
          <p class="card-text">
            <div class="address-inp">
              ※ハイフン不要
              <input
                  id="number"
                  name="number"
                  class="number {{ $errors->has('number') ? 'is-invalid' : '' }}"
                  value="{{ old('number') }}"
                  type="text"
              >
              <input
                  id="city"
                  name="city"
                  class="city {{ $errors->has('city') ? 'is-invalid' : '' }}"
                  value="{{ old('city') }}"
                  type="text"
              >
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