<?php

// #1 and 2

$date =  date('Y/m/d', time());
//echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
//echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
//echo "The value of \$year: ";
//print_r($year)










//  #3
/*

$comp = strcmp("hello", "hi");



if ($comp > 0) {
	echo "the future";
} elseif ($comp < 0) {
	echo "the past";
} elseif ($comp = 0) {
	echo "Oops";
}












//  #4

$first_pos = stripos($date, "/");
$last_pos = strrpos($date, "/");

echo "$first_pos and $last_pos";















//  #5



$count = str_word_count ($date);
echo $count; 













//  #6

echo strlen($date);













//  #7

echo ord($date);














//  #8 

echo substr($date, -2);













// #9 

print_r(explode("/", $date));












*/

//  #10

$is_leap_year = false;

foreach ($year as $leap) {
	for ($i=1; $i <= 6 ; $i++) { 
		if ($leap % 4 == 0) {
    		if ($leap % 100 == 0) {
        		if ($leap % 400 == 0) {
            		$is_leap_year = true;
        		} else {
            		$is_leap_year = false;
        }
    		} else {
        		$is_leap_year = true;
    }
		} else {
    		$is_leap_year = false;
}

		
	}
	switch ($is_leap_year) {
		case true:
			echo "$leap = True <br>";
			break;
		
		default:
			echo "$leap = False <br>";
			break;
	}

	
}










?>