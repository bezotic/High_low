<?php

$random = mt_rand(1, 100);
fwrite(STDOUT, " Guess a number\n ");


do {

	$number = trim(fgets(STDIN));
	
	if ($number < $random) {
		fwrite(STDOUT, "Higher\n");
		fwrite(STDOUT, " Guess? ");
	} else if ($number > $random) {
		fwrite(STDOUT, "lower\n");
		fwrite(STDOUT, " Guess? ");
	} 
	else {
		fwrite(STDOUT, "YOU did IT!");
	}

}while($number != $random);



