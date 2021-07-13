<?php
function h( $str ){
  return htmlspecialchars($str,
  ENT_QUOTES, "UTF8");
};
  $name = $_GET["name"];
?>
<!DOCTYPE html>
<html lang=ja>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>名前表示-ukitomoのホームページ</title>
    <link rel="apple-touch-icon" type="image/png" href="/apple-touch-icon-180x180.png">
    <link rel="stylesheet" href="../../css/style.css">
  </head>
  <body>
  <div id="contena">
    <header>
      <?php
      include($webroot.'./../../header.php');
      ?>
    </header>
    <div class="main">
      <h1>名前表示</h1>
    　<?php if (empty($name)): ?>
      <p>名前を入力してください</p>
      <form method="get">
        <input type="text" name="name" value="okukun">
      </form>
    <?php else: ?>
      <p>あなたの名前は、
        <?= $name ?>です。</p>
      <?php endif; ?>
    </div>
  </div>
</body>
</html>
