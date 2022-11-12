<?php

function Contador(){
$palavra = $_POST['p'];

for($l = 0; $l <= strlen($palavra); $l++ ){
    
    for($c = 0; $c <= $l; $c++ ){

    echo " $palavra ";
}
echo"<br>";
}
}
echo Contador();
?>