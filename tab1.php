<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<body>
    <?php
   $calendrier["Janvier"]=31;
   $calendrier["Fevrier"]=28;
   $calendrier["Mars"]=31;
   $calendrier["Avril"]=30;
   $calendrier["Mai"]=31;
   $calendrier["Juin"]=30;
   $calendrier["Juillet"]=31;
   $calendrier["Août"]=31;
   $calendrier["Septembre"]=30;
   $calendrier["Octobre"]=31;
   $calendrier["Novembre"]=30;
   $calendrier["Décembre"]=31;
   echo "<table class=\"table table-bordered table-striped text-center\"><tr><td>Mois de l'année (bissextile)</td><td>Nombre de jours</td></tr>";
   foreach ($calendrier as $mois => $nbJours)
   {echo"<tr><td>$mois</td> <td>$nbJours</td></tr>";};
   echo "</table>";
   echo "<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL\" crossorigin=\"anonymous\"></script>"
?> 
</body>
</html>