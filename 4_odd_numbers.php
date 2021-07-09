<?php

function odd(int $start,int $end){

		for($i=$start;$i<=$end;$i++){
			if($i%2!=0){
				echo $i;
				echo PHP_EOL;
			}
		}
}


odd(10,150);



?>