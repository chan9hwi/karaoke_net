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

    <link href="./css/style.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
    <script src="./js/index.js"></script>

	<style>
	@keyframes blinking {
    0% {transform: translate(0px, 0px) rotateZ(0deg);opacity:1;}
    25% {transform: translate(2px, 2px) rotateZ(1deg)}
    50% {transform: translate(0px, 2px) rotateZ(0deg)}
    75% {transform: translate(2px, 0px) rotateZ(-1deg)}
    100% {transform: translate(0px, 0px) rotateZ(0deg); opacity:1;}
}
.time { 
	animation: blinking 0.5s ease-in-out infinite alternate;
}

.time p{
  color:red;
  text-align: center;
  font-size: larger;
}

#message{
    display: flex;
    flex-direction: column;
    align-items: center;
    align-content: center;
    flex-wrap: nowrap;
}

	</style>
</head>

<link href="./asset/css/stylesheet.css" rel="stylesheet" type="text/css" />
<script src="./asset/javascript/index.js"></script>

<body>
  <div id="logo"></div>
  <div id="mainvisual"></div>
  <div id="messages">
    <div class="form">
      <form action="video.php" method="get">
        <label for="url">合言葉</label>
        <input type = “text” name =url>
      </form>
    </div>
    <div id="message">
      <a href="./adventcalender22.html" class="banners" style="margin-bottom: 10px;">
        <img src="./images/banner00.png" alt="advent calender" srcset="">
      </a>
      <a href="./video.php?url=talk" class="banners">
        <img src="./images/banner00.svg" alt="ライトニングトーク" srcset="">
      </a>
      <div class="time"><p>次回は１２月２３日（金）19時半くらいから（10時終了予定）</p></div>
      <!-- <iframe src="https://xn--u9jj8904a.xn--kckbt6t.net/" frameborder="0"></iframe> -->
    </div>
    <div id="space">
      <a href="https://event.spacemarket.com/events/ne_lbdr0rc6zn3w5?utm_campaign=event-ne_lbdr0rc6zn3w5&utm_source=web&utm_medium=share" target="_blank" rel="noopener noreferrer">
        場所はこちら
      </a>
    </div>
    <a href="https://forms.gle/ctp9MFRXRNVW82Zt9">
        <blink><p style="color:#fff;font-waight:bold;font-size:3em;">アンケート</p></blink>
      </a>

      <a href="https://鍋.net" class="banners" style="margin-bottom: 10px;" target="_blank">
        <img src="./images/banner_nabe.png" alt="鍋.net" srcset="">
      </a>
  </div>
  <div id="contact">
    <a href="https://lin.ee/qfnCAXm"><img src="https://scdn.line-apps.com/n/line_add_friends/btn/ja.png" alt="友だち追加" height="36" border="0"></a>
  </div>
  <div id="devlink">
    <a href="https://changhwi.notion.site/LIGHTNINGTALK-8ab3203876e74c77a5f391cba881705a">開発リソース的なもの</a>
  </div>
</body>

</html>