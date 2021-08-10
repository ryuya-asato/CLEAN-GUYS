<?php
  declare(strict_types=1);
  require_once dirname(__FILE__) . '/phpscript/login/login.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CLEAN GUYS ~ビーチクリーン募集掲示板~</title>
  <!-- CSS -->
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link rel="stylesheet" href="cleanguys.css">
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
  <div class="container">
    <header>
      <h1><img class="header-logo" src="img/logo.png" alt="CLEAN GUYSロゴ"></h1>
    </header>
    <main>
      <div class="page-title">
        <h2><img class="logo" src="img/logo.png" alt="CLEAN GUYSロゴ"></h2>
        <p>ビーチクリーン募集掲示板</p>
      </div>
      <p class="explanation">ビーチクリーン活動の参加者を集めたり<br>募集を見て参加したり<br>汚れている場所を共有したり<br>ビーチクリーン活動の報告などに使ってください</p>
      <div class="top-btn">
        <p><a class="login-btn" href="#">ログイン</a></p>
        <p class="guide">会員登録は下のボタンから</p>
        <p><a class="registration-btn" href="join/index.php">会員登録</a></p>
      </div>
      <div id="popup" class="login-popup registration-form">
        <div class="content">
          <h2>ログイン</h2>
          <p>メールアドレスとパスワードを入力してログインしてください。</p>
          <p>アカウントをお持ちでない方はこちらからどうぞ。</p>
          <p>&raquo;<a href="join/index.php">アカウント作成</a></p>
          <form class="popup-form" action="" method="post">
            <div class="control">
              <label for="mymail">メールアドレス</label>
              <input id="mymail" type="email" name="email" value="<?php echo escape($_POST['email']) ?>">
              <?php if ($error['login'] === 'blank'): ?>
                <p class="error" style="color:red;">* メールアドレスとパスワードをご記入ください</p>
              <?php endif ?>
              <?php if ($error['login'] === 'failed'): ?>
                <p class="error" style="color:red;">* ログインに失敗しました。正しくご記入ください。</p>
              <?php endif ?>
            </div>
            <div class="control">
              <label for="mypassword">パスワード</label>
              <input id="mypassword" type="password" name="password" value="<?php echo escape($_POST['password']) ?>">
            </div>
            <label for="save"><input id="save" class="save" type="checkbox" name="save" value="on"> 次回から自動的にログインする</label>
            <div class="control">
              <button type="submit" name="operation" style="color:#fff">ログインする</button>
            </div>
          </form>
        </div>
      </div>
    </main>
    <footer>
      <p><small>&copy; 2021 CLEAN GUYS</small></p>
    </footer>
  </div>
  <script src="cleanguys.js"></script>
</body>
</html>