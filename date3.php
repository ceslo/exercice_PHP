<html>
    <body>      
   <?php
$date= new DateTime;
var_dump($date);
function bis($date){
    $year= $date->format('y');
    var_dump($year);
    if(($year%4 == 0 && $year%100 != 0) or ($year%4==0 && $year%100 ==0 &&$year%400==0) ){
        echo "L'année est bissextile.";
    }
    else {
        echo "L'année n'est pas bissextile";
    }
};
bis ($date);
?>
     </body>
</html>