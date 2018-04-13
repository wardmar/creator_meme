<!DOCTYPE html>
<html lang="frn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="entete"><a href="home.php" class="hm">Cesar Home</a></div>

    <div class="image">
<p id="txtimg" style="font-size: <?php echo $_GET['police']; ?>px; top: <?php echo $_GET['posi']; ?>px; left: <?php echo $_GET['off']; ?>px; color: #<?php echo $_GET['couleur']; ?>;"><?php echo $_GET['txt']; ?></p>
<img id="chooseimg" src="imagememe/<?php echo $_GET['base']; ?>" alt='placeholder' width="600px"/>
</div>
</body>
</html>