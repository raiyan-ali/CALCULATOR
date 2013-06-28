<?php
$opraton=array('addition','substraction','mulplication','diviation','modulus');
 /*I use array for use the function correctly and use the parameter must, if you doesn't use use parameter it will show error*/
 
 function calculator($x,$y,$opraton){
	if('addition'==$opraton){
		$z=$x+$y;
		echo $z;		
	}
	elseif('substraction'==$opraton){
		$z=$x-$y;
		echo $z;
	}
	elseif('diviation'==$opraton){
		$z=$x/$y;
		echo $z;
	}
	elseif('mulplication'==$opraton){
		$z=$x*$y;
		echo 'The Multiplacation is ' .$z;
	}
	elseif('modulus'==$opraton){
		$z=$x%$y;
		echo $z;
	}
	else{
		echo 'Incorrect Inpute...Please Check!!!';
	}
}

calculator(10,9,'addition');
?>