<?php

?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <!-- メイン-->
<div class="wrapper">  
      <div class="title-text">
        <div class="title login">UPCOLOR</div>
        <div class="title signup">サインイン</div>
      </div>
    <!-- ログインサインアップ上から二つのボータン-->
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">ログイン</label>
          <label for="signup" class="slide signup">サインイン</label>
          <div class="slider-tab"></div>
        </div>
    <!--フォームの中の内容 -->
        <div class="form-inner">
          <form action="#" class="login">
            <div class="field">
              <input type="text" placeholder="メールアドレス" required>
            </div>
            <div class="field">
              <input type="password" placeholder="パスワード" required>
            </div>
    <!-- パスワードを忘れた方リンク-->
            <div class="pass-link"><a href="#">パスワードを忘れた方</a></div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login">
            </div>
    <!--アカウントがいない方 -->
            <div class="signup-link">ここへ,アカウント作成<a href="">サインアップ</a></div>
          </form>
          <form action="#" class="signup">
            <div class="field">
              <input type="text" placeholder="Email Address" required>
            </div>
            <div class="field">
              <input type="password" placeholder="Password" required>
            </div>
            <div class="field">
              <input type="password" placeholder="Confirm password" required>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Signup">
            </div>
          </form>
    <!-- メイン終了-->
        </div>
      </div>
    </div>




</body>
<p>&copy; 2021-2030 UPCOLOR</p>
</html>