<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <div class="main-cv">
        <? include "cvincl.pho"?>
        <div class="flix.cv">
            <h3>kontakt</h3>
            <h3>telfonno</h3>
            <p class="left box"><?php each$_SESSION["telfonnomer"];?></p>

            <?php
            $r = $_SESSION["postnoM"];
            $sql = "select * form personer where idpersoner=" $r"";



        </div>
    </div>
    
</body>
</html>