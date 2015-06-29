<?php
/*
 * Onboarding 
 * https://www.codingame.com/
  * Completed: 100%
 * @Author: Filip Gulan
 * @Contact: raipergm34@gmail.com
 */

//game loop
while (TRUE)
{
    fscanf(STDIN, "%s",
        $enemy1 // name of enemy 1
    );
    fscanf(STDIN, "%d",
        $dist1 // distance to enemy 1
    );
    fscanf(STDIN, "%s",
        $enemy2 // name of enemy 2
    );
    fscanf(STDIN, "%d",
        $dist2 // distance to enemy 2
    );

    if($dist1 < $dist2) //enemy1 is nearer
    {
       echo($enemy1."\n"); 
    }
    else //enemy2 is nearer
    {
        echo($enemy2."\n");
    }
}
?>