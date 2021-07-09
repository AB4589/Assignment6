<?php
$n= [1, 6, 7, 11, 123, 100, 51, 29]; 
$flag=0;
foreach ($n as $value) {
	
}
for ($i=2; $i <sqrt($value) ; $i++) { 
		if($value % $i == 0) {
			$flag=1;
			break;
		}
	}
 		if ($n<=1) {
			echo "The number is not prime";
		}
		else if($flag==0){
			echo "The number is prime";
		}

		else
		{
			echo "The number is not prime";
		}

?>