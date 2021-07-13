<?php
if(isset($_POST["submit"])){
$to = "mailto:okukun_puls@yahoo.co.jp";
$subject = $_POST["name"] . "からのメール";
$massege = $_POST["massege"];
$header = "Form:" . $_POST["mail"];
mb_language("Japanese");
mb_internal_encoding("UTF-8");
mb_send_mail($to , $subject , $massege , $header );
};
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="ukitomoの作ったホームページです">
  <meta name="keywords" content="ukitomo,個人サイト">
  <title>お問い合わせ-ukitomoのホームページ</title>
  <link rel="apple-touch-icon" type="image/png" href="/apple-touch-icon-180x180.png">
  <link rel="stylesheet" href="../css/contact/contact.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div id="contena">
  <header>
    <?php include("../header.php"); ?>
  </header>
   <main>
     <h1>お問い合わせ</h1>
     <div class="contents01">
       <?php if (empty($_POST["submit"])): ?>
         <form method="post" enctype="text/plain">
           <h5 class="sub-title">お名前(ニックネーム可)&nbsp;<span class="required">*必須</span></h5>
           <input type="text" name="name" placeholder="okukun" required="true" name="name" id="name"><br>
           <h5 class="sub-title">メール&nbsp;<span class="required">*必須</span></h5>
           <input type="text" name="mail" placeholder="メールアドレス" required="true" name="name" id="mail"><br>
           <h5 class="sub-title">内容&nbsp;<span class="required">*必須</span></h5>
           <textarea name="massege" charset="utf-8" placeholder="お問い合わせ内容" required="true" id="content"></textarea><br>
           <input type="submit" id="submit" value="送信する">
         </form>
       <br>
       <input type="button" value="前のページへ戻る" onclick="history.back()"/><div style="text-align: center;"><div style="display: inline-block; position: relative; z-index: 9999;"><script type="text/javascript" charset="utf-8" src="//asumi.shinobi.jp/fire?f=434"></script></div></div>
       <?php else: ?>
         メールが送信されました。
         <br>
         5秒後にホームに移動します。
         <br>
         移動しなかったら以下のボタンをクリックしてください。
         <br>
         <button type="button" name="button" onclick="location.href='http://okukun.starfree.jp/'">ホームに移動</button>
       <?php endif; ?>
       </div>
     </main>
  <footer>
    <?php
     include("../footer.php");
     ?>
  </footer>
</div>
</body>
</html>
