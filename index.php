<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>4each_keijiban</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>

        <?php
            mb_internal_encoding("utf8");
            $pdo = new PDO("mysql:dbname=lesson01;host=localhost", "root", "");
            $stmt = $pdo -> query("select * from 4each_keijiban");
        ?>

        <header>
        <img class="header_img" src="4eachblog_logo.jpg" />
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
        </header>

        <main class="main-container">
            <div class="left">
                <h1>プログラミングに役立つ掲示板</h1>
                <div class="form">
                    <p>入力フォーム</p>
                    <form method="post" action="insert.php">
                        <div>
                            <label>ハンドルネーム</label>
                            <br>
                            <input type="text" class="text" size="40" name="handlename">
                        </div>
                        <div>
                            <label>タイトル</label>
                            <br>
                            <input type="text" class="text" size="40" name="title">
                        </div>
                        <div>
                            <label>コメント</label>
                            <br>
                            <textarea name="comments" rows="9" cols="80"></textarea>
                        </div>
                        <div>
                            <input type="submit" class="submit" value="投稿する">
                        </div>
                    </form>
                </div>

                <?php
                    while ($row = $stmt -> fetch()) {
                        echo"<div class='kiji'>";
                        echo"<h3>".$row['title']."</h3>";
                        echo"<div class='contents'>";
                        echo$row['comments'];
                        echo"<div class='handlename'>posted by ".$row['handlename']."</div>";
                        echo"</div>";
                        echo"</div>";
                    }
                ?>

            </div>

            <div class="right">
                <h2>人気の記事</h2>
                <p>PHPオススメの本</P>
                <p>PHP MyAdminの使い方</P>
                <p>いま人気のエディタTop5</p>
                <p>HTMLの基礎</p>

                <h2>オススメリンク</h2>
                <p>インターノウス株式会社</p>
                <p>XAMPPのダウンロード</p>
                <p>Eclipseのダウンロード</p>
                <p>Braketsのダウンロード</p>
                <P></p>

                <h2>カテゴリ</h2>
                <p>HTML</p>
                <p>PHP</p>
                <p>MySQL</p>
                <p>JavaScript</p>
            </div>
        </main>

        <footer>
            <div>
                copyright internous | 4each blog is the one which programming.
            </div>
        </footer>
    </body>
</html>
