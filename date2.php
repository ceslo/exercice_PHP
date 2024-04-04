  
   <?php
    $oDate= new DateTime();
    $date_end= new DateTimeImmutable("2023-12-08");
    var_dump($oDate);
   $nbJourRestant= date_diff($date_end,$oDate,$absolute=false);
   var_dump($nbJourRestant->format('a'));
  ;
    ?>
