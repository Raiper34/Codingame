<?php
/*
 * Horse-racing Duals
 * https://www.codingame.com/
 * Completed: 100%
 * @Author: Filip Gulan
 * @Contact: raipergm34@gmail.com
 */

fscanf(STDIN, "%d",
    $N //number of horses
);
for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%d",
        $Pi[$i] //the strenght of i-th horse
    );
}

sort($Pi); //sort array

$min;
for($i = 0; $i < sizeof($Pi) - 1; $i++)
{
    if($i == 0) //first horese, i compute difference between 1 horse and 2 horse and store it into min
    {
        $min = $Pi[$i + 1] - $Pi[$i];
    }
    else
    {
        if($Pi[$i + 1] - $Pi[$i] < $min) //other horses
        {
            $min = $Pi[$i + 1] - $Pi[$i];
        }
    }
}

echo $min;
?>