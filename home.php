<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include "log.php"
    ?>
    <div class="entete"></div>
    <div class="crea">
    <form action="index.php" method="POST">
        
<select name="select" >
        <?php
        $img = $bdd->query('SELECT image_base FROM image_origin');

                            while ($donnees = $img->fetch())
                        {
                        ?>
                            <option value="<?php echo($donnees['image_base']) ?>"><?php echo($donnees['image_base']) ?></option>
                        <?php
                        }

                        $img->closeCursor();

                        ?>
    </select>
    <input type="submit" name="enr" value="sub">
</form>

</div>
<div class="tab">
<table>
<?php
$reponse = $bdd->query('SELECT * FROM images');
        
        while ($donnees = $reponse->fetch())
    {
    ?>
        <tr>
       <td> <a href="linkimg.php?base=<?php echo $donnees['image_base']; ?>&amp;police=<?php echo $donnees['police']; ?>&amp;posi=<?php echo $donnees['offsetT']; ?>&amp;txt=<?php echo $donnees['texte']; ?>&amp;off=<?php echo $donnees['offsetL']; ?>&amp;couleur=<?php echo $donnees['color']; ?>"><?php echo $donnees['nom']; ?></a></td>
        </tr>
    <?php
    }
    
    $reponse->closeCursor();
    
    ?>
    </table>
</div>
</body>
</html>

