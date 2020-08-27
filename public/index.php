<!DOCTYPE html>

<html lang="ja">

<head>
  <meta charset="utf-8" />

  <title>カラオケ.net</title>
  <meta name="description" content="The HTML5 Herald" />
  <meta name="author" content="SitePoint" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <link rel="apple-touch-icon" type="image/png" href="apple-touch-icon-180x180.png" />
  <link rel="icon" type="image/png" href="icon-192x192.png" />

  <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<link href="./asset/css/stylesheet.css" rel="stylesheet" type="text/css" />
<script src="./asset/javascript/index.js"></script>

<body>
  <div id="logo"></div>
  <div id="mainvisual"></div>
  <p>
  <?php
  // 外部ファイルを読み込む
  require_once('config.php');
  
  // 外部ファイルで定義した定数を出力
  echo .room;
  ?>

  <p>
</body>

</html>