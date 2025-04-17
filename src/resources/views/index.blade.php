@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>Contact</h2>
  </div>
  <form class="form" action="/contacts/confirm" method="post">
    @csrf
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="first_name" autocomplete="name" placeholder="例: 山田" value="{{ old('first_name') }}" />
              <input typu="text" name="last_name" autocomplete="name" placeholder="例: 太郎" value="{{ old('last_name') }}" />
            </div>
            <div class="form__error">
              @error('name')
              {{ $message }}
              @enderror
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--radio">
              <input type="radio" id="gender1" name="gender" value="男性" checked />
              <label for="gender1">男性</label>

              <input type="radio" id="gender2" name="gender" value="女性" />
              <label for="gender1">女性</label>

              <input type="radio" id="gender3" name="gender" value="その他" />
              <label for="gender3">その他</label>
            </div>
            <div class="form__error">
              @error('name')
              {{ $message }}
              @enderror
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" autocomplete="name" placeholder="例: test@example.com" value="{{ old('email') }}" />
            </div>
            <div class="form__error">
              @error('name')
              {{ $message }}
              @enderror
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
              <input type="tel" name="tel1" autocomplete="name" placeholder="080" value="{{ old('tel1') }}" />-
              <input type="tel" name="tel2" autocomplete="name" placeholder="1234" value="{{ old('tel2') }}" />-
              <input type="tel" name="tel3" autocomplete="name" placeholder="5678" value="{{ old('tel3') }}" />
            </div>
            <div class="form__error">
              @error('name')
              {{ $message }}
              @enderror
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="address" autocomplete="name" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
            </div>
            <div class="form__error">
              @error('name')
              {{ $message }}
              @enderror
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">建物名</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building" autocomplete="name" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}" />
            </div>
            <div class="form__error">
              @error('name')
              {{ $message }}
              @enderror
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">※</span>
        </div>
        <div class="form-group-content">
            <select class="form__input--select" id="category_id" name="content" value="{{ old('content') }}" >
                <option value="">選択してください</option>
                @foreach ($categories as $category)
                   <option value="{{ $category->category_id }}">{{ $category->content }}</option>
                @endforeach
            </select>
            <div class="form__error">
              @error('name')
              {{ $message }}
              @enderror
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
            <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="detail" cols="30" rows="4" placeholder="お問い合わせ内容をご記載ください" >{{ old('detail') }}</textarea>
            </div>
            <div class="form__error">
              @error('name')
              {{ $message }}
              @enderror
            </div>
        </div>
    </div>
    <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
    </div>
  </form>
</div>
@endsection