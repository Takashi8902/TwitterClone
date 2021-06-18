<?php

// 設定関連を読み込む
// 同じファイルは1度のみ実行 include_once includeは他ファイルの呼び出し
include_once('../config.php');
// 便利な関数を読み込む
include_once('../util.php');
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <?php include_once('../Views/common/head.php'); ?>
    <title>つぶやく画面 / Twitterクローン</title>
    <meta name="description" content="つぶやく画面です">
</head>

<body class="home">
    <div class="container">
        <?php include_once('../Views/common/side.php'); ?>
        <div class="main">
            <div class="main-header">
                <h1>つぶやく</h1>
            </div>
            <div class="tweet-post">
                <div class="my-icon">
                    <img src="<?php echo HOME_URL; ?>Views/img_uploaded/user/tsushima.png" alt="">
                </div>
                <div class="input-area">
                    <form action="post.php" method="post" enctype="multipart/form-data">
                        <textarea name="body" placeholder="今どうしてる？" maxlength="140"></textarea>
                        <div class="bottom-area">
                            <div class="mb-0">
                                <input type="file" name="image" class="form-control form-control-sm">
                            </div>
                            <div class="btn" type="submit">つぶやく</div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="ditch"></div>
            </div>
        </div>
    </div>
    <?php include_once('../Views/common/foot.php'); ?>
</body>
</html>