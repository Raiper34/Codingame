<?php
/*
 * Skynet: the Chasm 
 * https://www.codingame.com/
 * Completed: 100%
 * @Author: Filip Gulan
 * @Contact: raipergm34@gmail.com
 */

fscanf(STDIN, "%d",
    $R // the length of the road before the gap.
);
fscanf(STDIN, "%d",
    $G // the length of the gap.
);
fscanf(STDIN, "%d",
    $L // the length of the landing platform.
);

// game loop
while (TRUE)
{
    fscanf(STDIN, "%d",
        $S // the motorbike's speed.
    );
    fscanf(STDIN, "%d",
        $X // the position on the road of the motorbike.
    );
    
    if($X == $R - 1) //if motorbike reached gap then we need to jump
    {
        echo("JUMP\n");
    }
    else if($X > $R + $G - 1) //if motorbike jumped over gap, then we need slow and stop motorbike
    {
        echo("SLOW\n");
    }
    else //we need go faster
    {
        if($S == $G + 1) //we reached optimal speed for jump
        {
           echo("WAIT\n"); 
        }
        else if($S > $G + 1) //motorbike is too fast, we need to slow it
        {
           echo("SLOW\n"); 
        }
        else //motorbike is too slow
        {
            echo("SPEED\n"); 
        }
    }
}
?>