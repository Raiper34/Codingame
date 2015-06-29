<?php
/*
 * Telephone Numbers
 * https://www.codingame.com/
 * Completed: 100%
 * @Author: Filip Gulan
 * @Contact: raipergm34@gmail.com
 */

fscanf(STDIN, "%d", 
	$N //number of telephone numbers
);

$telephones = array();
$count = 0; //space for numbers

for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%s", 
    	$telephone //telephone number
    );
    $length = strlen($telephone);
	for ($j = 1; $j <= $length; $j++) //we find all prefixes of numbers
	{	
		$prefix = substr($telephone, 0, $j);
		if(!(isset($telephones[$prefix]))) //if prefix does not exist, we count and store new prefix
		{
			$telephones[$prefix] = $prefix;
			$count++;
		}
	}
}
echo $count . "\n";

?>