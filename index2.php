<?php
$variable = 3.14;
// $variable = 3;
// $variable = 'one';
// $variable = true;
//$variable = null;
// $variable = [];

//  Ваш программный код, в котором переменной $type
//  присваивается одно из значений: bool, float, 
//  int, string, null или other
if (is_bool($variable) === true) {
    
    $type=gettype($variable);
     echo "type is $type";

}elseif (is_int($variable) === true) {
     
    $type=gettype($variable);
     echo "type is $type";
     
}elseif (is_float($variable) === true) {
  
    $type='float';
     echo "type is $type";

}elseif (is_string($variable) === true) {
  
     $type=gettype($variable);
     echo "type is $type";

}elseif (is_null($variable) === true) {
 
$type=gettype($variable);
     echo "type is $type";
}else {
  
    echo "type is other";
    }
?>
