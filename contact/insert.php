<?php
$pdo = new PDO("mysql:host=localhost;dbname=lesson01;charset=utf8", "root", "root");

$name = $_POST['name'];
$mail = $_POST['mail'];
$age = $_POST['age'];
$comments = $_POST['comments'];

// 同じデータが既にデータベースに存在するかチェック
$stmt = $pdo->prepare("SELECT COUNT(*) FROM contactform WHERE name = ? AND mail = ? AND age = ? AND comments = ?");
$stmt->execute([$name, $mail, $age, $comments]);
$count = $stmt->fetchColumn();

// 同じデータが存在しない場合にのみ挿入を行う
if ($count == 0) {
    // データベースにデータを挿入
    $stmt = $pdo->prepare("INSERT INTO contactform (name, mail, age, comments) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $mail, $age, $comments]);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <h1>お問い合わせフォーム</h1>
    <div class="confirm">
        <p>お問い合わせありがとうございました。<br>3営業日以内に担当者よりご連絡差し上げます。</p>
    </div>

</body>

</html>