<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="script.js" async></script>
</head>
<body>
<?php
if (isset($_POST["enr"])){
    $imageurl = $_POST["select"];
};
    include 'log.php';
    
?>
<div class="entete">
<a href="home.php" class="hm">Cesar Home</a>
</div>
<div class="crea">

    <form action="affi.php" method="post" >
    <span>image de base: </span><select name="imgbase">
        <option value="<?php echo $imageurl?>"><?php echo $imageurl?></option>
    </select>
    <span>nom: </span><input type="text" name="name" id="">
    <span>texte: </span><input type="text" name="txt" id="txt">
    <span>taille du texte: </span><input type="number" id="size" name="police" value="10" min="0" max="500" step="5">
    <span>placement: </span><input type="number" name="top" id="top" step="10" min="-10"max="1000" value="20">
    <input type="range" name="axey" id="axey" min=0 max="600" value="0">
    <span>couleur: </span><select name="couleur" id="col">
        <option value="000000">noir</option>
        <option value="ffffff">blanc</option>
        <option value="ff0000">rouge</option>
        <option value="00ff00">vert</option>
        <option value="0000ff">bleu</option>
        
    </select>
</div>
<div class="rendu">
<div class="image">
    <?php
    include "image.php";
    ?>
</div>
</div>
<?php
if (isset($_POST["enr"])){
    $imageurl = $_POST["select"];
};
?>
<div class="finish">
<input type="submit" value="Terminer" id="term" name="sub">
</form>
</div>
</body>
</html>