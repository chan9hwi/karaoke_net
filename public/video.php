<?php if(isset($_GET['url'])) { $product = $_GET['url']; } ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product ?></title>
    <link href="./css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="videochat">
        <iframe allow="camera; microphone; fullscreen; display-capture; autoplay" src="https://xn--t8j0a4gqbxb.xn--n8jubxa4d.com/<?php echo $product ?>" style="height: 100%; width: 100%; border: 0px;"></iframe>
    </div>
    
</body>
</html>