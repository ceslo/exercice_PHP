<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<body>
    <?php
   $capitales = array(

    "Bucarest" => "Roumanie",

    "Bruxelles" => "Belgique",

    "Oslo" => "Norvège",

    "Ottawa" => "Canada",

    "Paris" => "France",

    "Port-au-Prince" => "Haïti",

    "Port-d'Espagne" => "Trinité-et-Tobago",

    "Prague" => "République tchèque",

    "Rabat" => "Maroc",

    "Riga" => "Lettonie",

    "Rome" => "Italie",

    "San José" => "Costa Rica",

    "Santiago" => "Chili",

    "Sofia" => "Bulgarie",

    "Alger" => "Algérie",

    "Amsterdam" => "Pays-Bas",

    "Andorre-la-Vieille" => "Andorre",

    "Asuncion" => "Paraguay",

    "Athènes" => "Grèce",

    "Bagdad" => "Irak",

    "Bamako" => "Mali",

    "Berlin" => "Allemagne",

    "Bogota" => "Colombie",

    "Brasilia" => "Brésil",

    "Bratislava" => "Slovaquie",

    "Varsovie" => "Pologne",

    "Budapest" => "Hongrie",

    "Le Caire" => "Egypte",

    "Canberra" => "Australie",

    "Caracas" => "Venezuela",

    "Jakarta" => "Indonésie",

    "Kiev" => "Ukraine",

    "Kigali" => "Rwanda",

    "Kingston" => "Jamaïque",

    "Lima" => "Pérou",

    "Londres" => "Royaume-Uni",

    "Madrid" => "Espagne",

    "Malé" => "Maldives",

    "Mexico" => "Mexique",

    "Minsk" => "Biélorussie",

    "Moscou" => "Russie",

    "Nairobi" => "Kenya",

    "New Delhi" => "Inde",

    "Stockholm" => "Suède",

    "Téhéran" => "Iran",

    "Tokyo" => "Japon",

    "Tunis" => "Tunisie",

    "Copenhague" => "Danemark",

    "Dakar" => "Sénégal",

    "Damas" => "Syrie",

    "Dublin" => "Irlande",

    "Erevan" => "Arménie",

    "La Havane" => "Cuba",

    "Helsinki" => "Finlande",

    "Islamabad" => "Pakistan",

    "Vienne" => "Autriche",

    "Vilnius" => "Lituanie",

    "Zagreb" => "Croatie"

);
echo"<table class=\"table table-bordered table-striped text-center\"><tr><td>Capitales</td><td>Pays</td></tr>";
asort($capitales);
foreach ($capitales as $villes =>$pays)
{echo"<tr><td>$pays</td><td>$villes</td></tr>";};
echo "</table>";
echo "<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL\" crossorigin=\"anonymous\"></script>"
?> 
</body>
</html>