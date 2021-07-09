<?php
function numbers(int $start,int $end){
		for ($i=$start; $i <= $end; $i++) { 
			if($i%3==0){
				echo "FIZZ";
				 echo PHP_EOL;
			}
			elseif($i%5==0){
				echo "buzz";
				 echo PHP_EOL;
			}
			elseif ($i%3==0 || $i%5==0) {
				echo "FIZZ BUZZ";
				 echo PHP_EOL;
			}
			else{
				echo $i;
				 echo PHP_EOL;

			}
			
		}
}

numbers(10,50);
?>