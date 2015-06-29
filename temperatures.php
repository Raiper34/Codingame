<?php
/*
 * Temperatures
 * https://www.codingame.com/
 * Completed: 100%
 * @Author: Filip Gulan
 * @Contact: raipergm34@gmail.com
 */

fscanf(STDIN, "%d",
    $N // the number of temperatures to analyse
);
$TEMPS = explode(" ", stream_get_line(STDIN, 256, "\n")); // the N temperatures expressed as integers ranging from -273 to 5526

if($N == 0) //there is no temperature to analyse
{
    $nearest = 0;
}
else
{
    $nearest = $TEMPS[0];    
}

foreach($TEMPS as $temp)
{
    if(abs($nearest) > abs($temp) || (abs($nearest) == abs($temp) && $temp > 0)) //if new temperature is nearer than older one or we find positive number of our nearest temperature
    {
        $nearest = $temp;
    }
}

echo($nearest . "\n");
?>