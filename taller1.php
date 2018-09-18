<?php
//Primer Taller PhP
$entero=10;
$float=12.34;
$string="Clase HCI";
$array=array("key1","hola","key2","mundo");
$array2=array("key1"=>"hola","key2"=>"mundo");
$verdadero=true;
$falso=false;

class StrValTest{
  private $miVar="clase1";
  public $miVar2="clase2";
  public function _toString(){
    return _CLASS_;
  }
  public function example(){
    return "Esto es una prueba";
  }
}
echo "entero ".intval($entero)."\n"; //"<br />"
echo "flotante ".intval($float)."\n";
echo "string ".intval($string)."\n";
echo "boolean verdadero ".intval($verdadero)."\n";
echo "boolean falso ".intval($falso)."\n"; 
echo "hex-dec ".intval(0x165)."\n";

echo "float string ".strval($float)."\n";
$floatString = strval($float);
echo "floatString ".gettype($floatString)."\n";
echo "falso string ".strval($falso)."\n";
echo "verdadero string ".strval($verdadero)."\n";
var_dump((array)new StrValTest());
?>

