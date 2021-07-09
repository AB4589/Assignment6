<?php
$array=["apple", "dell", "hp", "microsoft", "lenovo",
"fujitsu"];

foreach ($array as  $value) {
		$stringLength=strlen($value);
		
		$i=0;
		for ($i=$stringLength-1; $i>=0 ; $i--) { 
			echo $value[$i];
			
		}
		echo "</br>";
}
?>