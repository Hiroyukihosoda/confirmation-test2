<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログインフォーム</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login_form.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" >
            FashionablyLate
            </a>
        </div>
    </header>
    <main>
        <div class="login-form">
            <div class="login-form__heading">
                <h2>Login</h2>
            </div>

            <div class="login-form__box">

                <div class="login-form__box--inner">
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">メールアドレス</span>
                        </div>
                        <div class="form__group-content">
                            <div class="form__text">
                                <input type="text" name="email" placeholder="例:test@example.com" />
                            </div>
                        </div>
                    </div>

                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">パスワード</span>
                        </div>
                        <div class="form__group-content">
                            <div class="form__text">
                                <input type="text" name="email" placeholder="例:coachtech1106" />
                            </div>
                        </div>
                    </div>

                    <div class="form__button">
                        <button class="form__button-submit" type="submit">ログイン</button>
                    </div>
                </div>

            </div>
        </div>


    </main>
</body>
</html>