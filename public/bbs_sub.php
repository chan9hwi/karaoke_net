<!DOCTYPE html>
<html>

<head>
    <title>掲示板</title>
</head>

<body>
    <h1>掲示板</h1>
    <hr>
    <h2>投稿一覧</h2>
    <?php
    $filename = "messages.txt"; // 投稿を保存するファイル名
    $image_dir = "images/"; // 画像を保存するディレクトリ
    if (isset($_POST['name']) && isset($_POST['message'])) { // フォームが送信された場合
        $name = $_POST['name'];
        $message = $_POST['message'];
        $timestamp = date("Y/m/d H:i:s"); // 投稿日時を取得
        $post = "$timestamp $name : $message\n";
        if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) { // 画像がアップロードされた場合
            $image_name = $_FILES['image']['name'];
            $image_tmp_name = $_FILES['image']['tmp_name'];
            $image_size = $_FILES['image']['size'];
            $image_type = $_FILES['image']['type'];
            if ($image_size > 1000000 || $image_type != "image/jpeg" && $image_type != "image/png") { // アップロードされたファイルが制限を超えた場合、またはJPEGまたはPNG以外の場合
                echo "<p>画像のアップロードに失敗しました。</p>";
            } else {
                $image_path = $image_dir . $image_name;
                move_uploaded_file($image_tmp_name, $image_path); // 画像を保存する
                compressImage($image_path, $image_path, 50); // 画像を圧縮する
                $post .= "<img src=\"$image_path\" alt=\"$image_name\"><br>"; // 投稿に画像を追加する
            }
        }
        file_put_contents($filename, $post, FILE_APPEND); // 投稿をファイルに保存
    }
    $messages = file($filename); // 投稿をファイルから読み込む
    if ($messages) { // 投稿がある場合
        echo "<ul>";
        foreach ($messages as $message) { // 投稿を表示する
            echo "<li>" . htmlspecialchars($message) . "</li>";
        }
        echo "</ul>";
    } else { // 投稿がない場合
        echo "<p>投稿はありません。</p>";
    }
    function compressImage($source, $destination, $quality)
    { // 画像を圧縮する関数
        $info = getimagesize($source);
        if ($info['mime'] == 'image/jpeg') {
            $image = imagecreatefromjpeg($source);
        } elseif ($info['mime'] == 'image/png') {
            $image = imagecreatefrompng($source);
        }
        imagejpeg($image, $destination, $quality);
        imagedestroy($image);
    }
    ?>
    <hr>
    <h2>投稿する</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="name">名前（必須）：</label>
        <input type="text" name="name" id="name" required><br>
        <label for="message">コメント（必須）：</label>
        <input type="text" name="message" id="message" required><br>
        <label for="image">画像：</label>
        <input type="file" name="image" id="image"><br>
        <input type="submit" value="投稿する">
    </form>
</body>

</html>