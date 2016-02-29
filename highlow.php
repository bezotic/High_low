<?php
// Dump arg count
var_dump($argc);
// Dump arg vars
var_dump($argv);



if ($argc == 3) {
	$min = $argv[1];
	$max = $argv[2];
	
} else {
	fwrite(STDOUT, "NO add another parameter\n");
}




$random = mt_rand($min, $max);


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



