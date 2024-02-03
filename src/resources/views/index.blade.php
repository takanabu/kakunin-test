@extends('layouts.app')

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
               <div class="form__input--name">
                  <input type="text" id="last_name" name="last_name" placeholder="例: 山田" required class="input-field" value="{{ old('last_name') }}"/>
                  <input type="text" id="first_name" name="first_name" placeholder="例: 太郎" required class="input-field" value="{{ old('first_name') }}"/>
              </div>
            <div class="form__error">
                  @error('last_name','first_name')
                     {{ $message }}
                  @enderror
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--gender">
              <input type="radio" id="male" name="gender" value="male" required checked>
              <label for="male">男性</label>
              <input type="radio" id="female" name="gender" value="female" required>
              <label for="female">女性</label>
              <input type="radio" id="other" name="gender" value="other" required>
              <label for="other">その他</label>
            </div>
            <div class="form__error">
                  @error('gender')
                     {{ $message }}
                  @enderror
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--emal">
                <input type="email" id="email" name="email" placeholder="例: test@example.com" required class="input-field" value="{{ old('email') }}"/>
            </div>
            <div class="form__error">
                  @error('email')
                     {{ $message }}
                  @enderror
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
             <div class="form__input--tel">
                <input type="text" id="tel1" name="tel1" required maxlength="3" size="3" placeholder="080" class="input-field" value="{{ old('tel1') }}"/>
                    <span class="separator">-</span>
                <input type="text" id="tel2" name="tel2" required maxlength="4" size="4" placeholder="1234" class="input-field" value="{{ old('tel2') }}"/>
                    <span class="separator">-</span>
                <input type="text" id="tel3" name="tel3" required maxlength="4" size="4" placeholder="5678" class="input-field" value="{{ old('tel3') }}"/>
             </div>
           </div>
            <div class="form__error">
                  @error('tel1','tel2','tel3')
                     {{ $message }}
                  @enderror
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--address">
              <input type="text" id="address" name="address" required placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" class="input-field" value="{{ old('address') }}"/> 
            </div>
            <div class="form__error">
                  @error('address',)
                     {{ $message }}
                  @enderror
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--building">
              <input type="text" id="buildin" name="buildin" placeholder="例: 千駄ヶ谷マンション101" class="input-field"/> 
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">※</span>
          </div>
            <div class="form__input--detailselect">
              <select name="select" required class="input-field" >
                <option value="" disabled selected>選択してください</option>
                <option value="option1">商品のお届けについて</option>
                <option value="option2">商品の交換について</option>
                <option value="option3">商品トラブル</option>
                <option value="option3">ショップへのお問合せ</option>
                <option value="option3">その他</option>
             </select>
            <div class="form__error">
                  @error('detailselect')
                     {{ $message }}
                  @enderror
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせ内容</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                 <div class="form__input--detail">
                        <textarea id="detail" name="detail" placeholder="お問い合わせ内容をご記載ください" rows="20" required class="input-field" value="{{ old('detail') }}"></textarea>
                </div>
            </div>
       </div>
            <div class="form__error">
                  @error('detail')
                     {{ $message }}
                  @enderror
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
          <div class="form__group-content">
            <div class="form__input--submit">
               <button type="submit" class="form__submit">確認画面</button>
          </div>
        </div>

    </form>

</div>
@endsection