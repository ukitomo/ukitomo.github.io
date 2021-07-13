<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ukitomoの作ったホームページです">
    <meta name="keywords" content="ukitomo,個人サイト">
    <title>サイトマップ-ukitomoのホームページ</title>
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
<div id="contena">
  <header>
    <?php
    include('./../header.php');
    ?>
  </header>
  <main>
    <h1>サイトマップ</h1>
    <div id="contents01">
     <ul>
       <li><a href="../">トップページ</a></li>
       <ul>
         <li><a href="../project">作品</a>
           <ul>
             <li><a href="../project/name">名前表示</a></li>
           </ul>
         </li>
         <li><a href="../about">プロフィール</a></li>
         <li><a href="../blog">ブログ</a>
            <ul>
              <li><a href="../blog/login">ログイン</a></li>
              <li><a href="../blog/unsubscribe">退会</a></li>
              <li><a href="../blog/category/info">お知らせ</a></li>
              <li><a href="../blog/category/progleming">プログラミング</a></li>
              <li><a href="../blog/category/game">ゲーム</a></li>
              <li><a href="../blog/category/categole-none">その他</a></li>
            </ul>
         </li>
         <li><a href="../contact">お問い合わせ</a></li>
         <li><a href="#">サイトマップ</a></li>
         <li><a href="../link">外部リンク</a></li>
         <li><a href="../en">English</a>
           <ul>
             <li><a href="../en/project">project</a></li>
             <li><a href="../en/project">profile</a></li>
             <li><a href="../en/project">contact</a></li>
             <li><a href="../en/project">sitemap</a></li>
             <li><a href="../en/project">external link</a></li>
           </ul>
         </li>
       </ul>
     </ul>
    </div>
  </main>
  <footer>
    <?php
    include("./../footer.php");
     ?>
  </footer>
</div>
</body>
</html>
