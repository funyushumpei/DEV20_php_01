<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="post.php">
        <p>名前：<input type="text" name="name"></p>
        <p>プレイヤーの手：
        <input type="radio" name="hand" value="0">グー
        <input type="radio" name="hand" value="1">チョキ
        <input type="radio" name="hand" value="2">パー
        </p>
        <p><input type="submit" value="決定"></p>
    </form>
</body>

</html>