<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySchedule</title>
    <link rel ="stylesheet" href ="./css/style.css">
</head>
<body>
<div class="wrapper">
    <!-- xxxx年xx月を表示 -->
    <h1 id="header"></h1>

    <!-- ボタンクリックで月移動 -->
    <div id="next-prev-button">
        <button id="prev" onclick="prev()">＜</button>
        <button id="next" onclick="next()">＞</button>
    </div>

    <!-- カレンダー -->
    <div id="calendar"></div>
</div>
    <?php include("../MySchedule/js/PHP_to _JS.php"); ?>
</body>
</html>