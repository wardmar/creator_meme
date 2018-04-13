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
<body onLoad="setTimeout('RedirectionJavascript()', 2000)">
    
<div class="entete">
    <a href="home.php" class="hm">Cesar Home</a>
</div>
<?php
include 'log.php';
$imgbase=$_POST["imgbase"];
$name=$_POST["name"];
$police=$_POST["police"];
$top=$_POST["top"];
$txt=$_POST["txt"];
$couleur=$_POST["couleur"];
$left=$_POST["axey"];
if (isset($_POST["sub"])){
$add = $bdd->prepare('INSERT INTO images(nom, image_base, police, offsetT, texte, color, offsetL) VALUES(:nom, :image_base, :police, :offsetT, :texte, :color, :offsetL)');
$add->execute(array(
	'nom' => $name,
	'image_base' => $imgbase,
	'police' => $police,
	'offsetT' => $top,
	'texte' => $txt,
    'color' => $couleur,
    'offsetL' =>$left
	));
}

?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<h1>Image enregistrée</h1>
<div class="image">
<h2>votre lien</h2>
<a href="http://localhost/Dev/memecreator/linkimg.php?base=<?php echo $imgbase; ?>&amp;police=<?php echo $police; ?>&amp;posi=<?php echo $top; ?>&amp;txt=<?php echo $txt; ?>&amp;off=<?php echo $left; ?>&amp;couleur=<?php echo $couleur; ?>">http://localhost/Dev/memecreator/linkimg.php?base=<?php echo $imgbase; ?>&amp;police=<?php echo $police; ?>&amp;posi=<?php echo $top; ?>&amp;txt=<?php echo $txt; ?>&amp;off=<?php echo $left; ?>&amp;couleur=<?php echo $couleur; ?></a>
</div>
<div class="fb-share-button" data-href="http://localhost/Dev/memecreator/linkimg.php?base=<?php echo $imgbase; ?>&amp;police=<?php echo $police; ?>&amp;posi=<?php echo $top; ?>&amp;txt=<?php echo $txt; ?>&amp;off=<?php echo $left; ?>&amp;couleur=<?php echo $couleur; ?>" data-layout="button" data-size="large" data-mobile-iframe="false"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager</a></div>

</body>
</html>


