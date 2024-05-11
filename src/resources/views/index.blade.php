<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        FashionablyLate
      </a>
    </div>
  </header>

  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__name--text">
              <input type="text" name="last_name" placeholder="山田" value="{{ old('last_name') }}" />
              <input type="text" name="first_name" placeholder="太郎" value="{{ old('first_name') }}" />
            </div>
          </div>
          <!-- <div class="form_error">
            @error('name')
            {{ $massage }}
            @enderror
          </div> -->

        </div>


        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="gender__select">
            <input type="radio" name="gender" value="male" />男性
            <input type="radio" name="gender" value="male" />女性
            <input type="radio" name="gender" value="male" />その他
          </div>
          <!-- <div class="form_error">

          </div> -->
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
            </div>
            <div class="form__error">

            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__tel--text">
            <input type="tel" name="tel" placeholder="080" value="{{ old('tel') }}" />
            <input type="tel" name="tel" placeholder="1234" value="{{ old('tel') }}" />
            <input type="tel" name="tel" placeholder="5678" value="{{ old('tel') }}" />
            </div>
            <div class="form__error">

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
              <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
            </div>
            <div class="form__error">

            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>

          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}" />
            </div>
            <div class="form__error">

            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">※</span>
          </div>
          <select name="example" class="question__select">
            <option value="">選択して下さい</option>
            <option value="">商品のお届けについて</option>
            <option value="">商品の交換について</option>
            <option value="">商品トラブル</option>
            <option value="">ショップへのお問い合わせ</option>
            <option value="">その他</option>
          </select>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="detail" placeholder="お問い合わせ内容をご記載ください" value="{{ old('detail') }}" ></textarea>
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>