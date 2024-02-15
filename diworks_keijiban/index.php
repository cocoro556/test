<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>掲示板</title>
    <link rel="stylesheet" href="./css/sanitize.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <div class="logo">
            <img src="" alt="ロゴマーク">
        </div>
        <nav>
            <ul>
                <li><a href="#">トップ</a></li>
                <li><a href="#">プロフィール</a></li>
                <li><a href="#">D.I.Blogについて</a></li>
                <li><a href="#">登録フォーム</a></li>
                <li><a href="#">問い合わせ</a></li>
                <li><a href="#">その他</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="main-container">

            <div class="left">

                <h1 class="main-title">プログラミングに役立つ書籍位</h1>

                <form method="post" action="insert.php">
                    
                    <p>入力ホーム</p>

                    <div>
                        <label>ハンドルネーム</label><br>
                        <input type="text" class="text" size="35" name="handlename" required>
                    </div>

                    <div>
                        <label>タイトル</label><br>
                        <input type="text" class="text" size="35" name="title" required>
                    </div>

                    <div>
                        <label>コメント</label><br>
                        <textarea cols="35" rows="7" name="comments" required></textarea>
                    </div>

                    <div>
                        <input type="submit" class="submit" value="送信する">
                    </div>

                </form>

                    <?php
                    mb_internal_encoding("utf8");
                    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;", "root", "root");
                    $stmt = $pdo->prepare("select * from diworks_keijiban");
                    $stmt->execute();

                    while ($row = $stmt->fetch()) {
                        echo "<div class='kiji'>";
                        echo "<h3>" . $row['title'] . "</h3>";
                        echo "<div class='contents'>";
                        echo $row['comments'];
                        echo "<div class='handlename'>" . $row['handlename'] . "</div>";
                        echo "</div>";
                        echo "</div>"; 
                    }
                    ?>

            </div>
            

            <div class="right">
                <section class="site-title">
                    <h2>人気の記事</h2>
                    <ul>
                        <li><a href="#">PHPおすすめ本</a></li>
                        <li><a href="#">PHP MyAdmin</a></li>
                        <li><a href="#">いま人気のエディタTops</a></li>
                        <li><a href="#">HTMLの基礎</li>
                    </ul>
                </section>
                <section class="site-title">
                    <h2>オススメリンク</h2>
                    <ul>
                        <li><a href="#">ディーアイワークス株式会社</a></li>
                        <li><a href="#">XAMPPのダウンロード</a></li>
                        <li><a href="#">Eclipseのダウンロード</a></li>
                        <li><a href="#">Braketsのダウンロード</a></li>
                    </ul>
                </section>
                <section class="site-title">
                    <h2>カテゴリ</h2>
                    <ul>
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">PHP</a></li>
                        <li><a href="#">MySQL</a></li>
                        <li><a href="#">JavaScript</a></li>
                    </ul>
                </section>
            </div>

        </div>
    </main>

    <footer>
        <p>
            Copyright D.I.works| D.I. blog is the one which provides A
            to Z about programming
        </p>
    </footer>

</body>

</html>

