<?php
//Taller2:Rgb to Hex
function rango($numero){
  if($numero<0){
    return 0;
  }
  else if($numero>255){
    return 255;
  }
  else{
    return $numero;
  } 
}

function verifi($numero){
  if($numero==10){
    return "A";
  }
  else if($numero==11){
    return "B";
  }
  else if($numero==12){
    return "C";
  }
  else if($numero==13){
    return "D";
  }
  else if($numero==14){
    return "E";
  }
  else if($numero==15){
    return "F";
  }
  else{
    return $numero;
  }
}


function rgb2hex($R,$G,$B){
  //Verificar que no se salga del rango (0-255)
  $R=rango($R);
  $G=rango($G);
  $B=rango($B);

  $R1=intval($R/16);
  $G1=intval($G/16);
  $B1=intval($B/16);

  $R2=$R-($R1*16);
  $G2=$G-($G1*16);
  $B2=$B-($B1*16);

  $array= array($R1,$G1,$B1,$R2,$G2,$B2);
  for($i=0; $i<sizeof($array);$i++){
    $array[$i]=verifi($array[$i]);
  }
  echo "#".$array[0].$array[3].$array[1].$array[4].$array[2].$array[5];
}

$band=rgb2hex(255,255,255);

?>
