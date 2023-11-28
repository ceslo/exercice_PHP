<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
$departements = array(

    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),

    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),

    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),

    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")

);
echo"<table class=\"table table-bordered table-striped text-center\"><tr><td>Regions</td><td>Départements</td></tr>";
foreach ($departements as $region =>$departementsList)
{ 
    sort($departementsList);
    echo"<tr><td>$region</td><td>";
    for($index=0; $index<=count($departementsList)-1; $index++)
    {
        echo "$departementsList[$index]<br>";
    };
    echo "</td></tr>";
};
echo "</table>";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL\" crossorigin="anonymous"></script>
</body>
</html>