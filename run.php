<?php
		$var = 1234;

		//* boolean expresses a truth value . It can either be true or false 
		//is_bool checks if variable is a boolean or not
		if (is_bool($var) === true) {
    		echo "Yes, this is a boolean ";
    		
		}
		if (is_bool($var) === false) {
    		echo "No this isn't a boolean ";
		}

		//is_integer determines whether a variable is an integer or not
		if (is_integer($var) === true){
			echo "yes this is an integer ";
		}
		if (is_integer($var) === false){
			echo "no this isn't an integer ";
		}

		//is_null finds whether a variable is null
		if (is_null($var) === true){
			echo "yes this is null";
		}
		if (is_null($var) === false){
			echo "no this isn't null";
		}