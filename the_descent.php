<?php
/*
 * The Descent 
 * https://www.codingame.com/
 * Completed: 100%
 * @Author: Filip Gulan
 * @Contact: raipergm34@gmail.com
 */

// game loop
while (TRUE)
{
    fscanf(STDIN, "%d %d",
        $SX,
        $SY
    );
    for ($i = 0; $i < 8; $i++)
    {
        fscanf(STDIN, "%d",
            $MH[$i] // represents the height of one mountain, from 9 to 0. Mountain heights are provided from left to right.
        );
    }

    $maxs = array_search(max($MH), $MH); //we search for the highest mountain
    if($maxs == $SX) //if ships x position is same as highest mouintains position then we fire
    {
        echo("FIRE\n");
    }
    else
    {
        echo("HOLD\n");
    }
}
?>