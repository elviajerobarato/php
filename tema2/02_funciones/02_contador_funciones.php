<?php
// 02_contador_funciones.php
//echo "02_contador_funciones.php";

function cuenta($a, $b){
if($a < $b){
    for($i=$a; $i<=$b; $i++ ){
    	if($i == $b){
        	echo $i;
    	}else{
			echo $i."-";
		}
	}
	}else if ($a > $b){
		echo "El primer número $a es mayor que el segundo número $b";
	}
}

cuenta(8,16);
?>
<br>
<?php
cuenta(10,20);
?>
<br>
<?php
cuenta(1, 4);
?>
<br>
<?php
cuenta(4, 1);
?>