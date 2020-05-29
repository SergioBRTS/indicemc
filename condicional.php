<?php

$todos =array(1,4,6,3,25,69,5,12,55,);
$mayor= 0;


foreach ($todos as $value) {
    if ($value > $mayor) {        
          $mayor=$value;            
     }
  }
  echo "el mas grande es ".$mayor;


?>