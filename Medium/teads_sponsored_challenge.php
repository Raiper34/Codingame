<?php
/*
 * Telephone Numbers
 * https://www.codingame.com/
 * Completed: 80%
 * @Author: Filip Gulan
 * @Contact: raipergm34@gmail.com
 */

/*
 * Function, that iterate trought nodes resursively
 */
function iterStruct($nodes, $con, $number)
{
	global $finished;
	global $max;
	$number++; 
	if($max < $number) //we find new farthest node
	{
		$max = $number;
	}
	foreach($nodes[$con] as $con2) //we iterate trought next nodes
	{
		if(isset($nodes[$con2]) && !(isset($finished[$con2])))
		{
			$finished[$con2] = $con2;
			iterStruct($nodes, $con2, $number);
		}
	}
}

fscanf(STDIN, "%d",
    $n // the number of adjacency relations
);

$nodes = array(); //nodes, index of array is valude of current node, vlaues are next nodes of current node

for ($i = 0; $i < $n; $i++)
{
    fscanf(STDIN, "%d %d",
        $xi, // the ID of a person which is adjacent to yi
        $yi // the ID of a person which is adjacent to xi
    );
    if(!(isset($nodes[$xi]))) //array of arrays struct for better work :)
    {
    	$nodes[$xi] = array($yi);
    }
    else
    {
    	array_push($nodes[$xi], $yi);
    }
    if(!(isset($nodes[$yi]))) //array of arrays struct for better work :)
    {
    	$nodes[$yi] = array($xi);
    }
    else
    {
    	array_push($nodes[$yi], $xi);
    }
}

$min;
foreach($nodes as $node) //we iterate trought nodes
{
	foreach($node as $con) //we iterate trought next nodes
	{
		$max = 0; //for farthest node from start node
		$finished = array(); //for finished nodes, to stop iterations
		$finished[$con] = $con;
		iterStruct($nodes, $con, 0);
		if(!(isset($min)) || $max - 1 < $min) //we find new minimum, minimum is minimal value pick from all furthest
		{
			$min = $max - 1;
		}
	}
}

echo($min . "\n");
?>