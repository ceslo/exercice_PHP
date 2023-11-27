<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function verif ($mot){
    $resultat= false;
    if(strlen($mot)=>8 && $mot==(^[A-Z]+[a-z]+[1-9]+$)){
    $resultat=true;
    };
    echo $resultat;
};
    ?>
</body>
</html>