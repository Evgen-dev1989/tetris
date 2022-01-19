<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/style.css">
<link rel="shortcut icon" href="img/icon.png" type="image/png">
<head>
    <meta charset="UTF-8">
    <title>Tetris</title>
</head>
<body>

<div class="container">
<header>
    <h1 class="text-center"> Tetris
    </h1>
</header>
    <main>
        <div class="block">
            <div class="tetris-wrap">
            <div id="tetris-field"></div>
            </div>

            <div class="user-result">
                <h3>Лучшие результаты</h3>
                <?php
                require_once 'show_result.php';
                ?>
            </div>

        </div>
        <div class="text-field">

    <button class="start">Run</button>
    <ul class="rule">
        <li>Нажимай Run </li>
        <li>Управляй Left Arrow, Right Arrow </li>
        <li>Собирай три круга в горизонталь </li>
        <li> Каждый ряд - 10 очков</li>
    </ul>
<div class="score-field text-center">0</div>
            <div class="form">


            </div>
        </div>
    </main>
</div>


<script src="js/tetris.js">   </script>
</body>
</html>