<?php

$random = mt_rand(1, 100);
fwrite(STDOUT, " Guess a number\n ");


do {

	$number = fgets(STDIN);
	$number_pressed = trim($number);
	if ($number_pressed < $random) {
		fwrite(STDOUT, "Higher\n");
	} else if ($number_pressed > $random) {
		fwrite(STDOUT, "lower\n");
	} 
	else if ($number_pressed == $random) {
		fwrite(STDOUT, "YOU did IT!");
	}

}while($number != $random);



