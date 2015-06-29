<?php
/*
 * Power of Thor 
 * https://www.codingame.com/
 * Completed: 100%
 * @Author: Filip Gulan
 * @Contact: raipergm34@gmail.com
 */

fscanf(STDIN, "%d %d %d %d",
    $LX, // the X position of the light of power
    $LY, // the Y position of the light of power
    $initialTX, // Thor's starting X position
    $initialTY // Thor's starting Y position
);

$stepX = 0; //number of steps he made on X
$stepY = 0; //number of steps he made on Y
// game loop
while (TRUE)
{
    fscanf(STDIN, "%d",
        $E // The level of Thor's remaining energy, representing the number of moves he can still make.
    );

    //real position of thor
    $realPosX = $initialTX + $stepX;
    $realPosY = $initialTY + $stepY;

    if($realPosY == $LY) //if Y position of light is same as Y position of thor
    {
        if($realPosX < $LX) //if Y position of thor is less than Y position of light then we need to go East
        {
            echo("E\n");
            $stepX++;
        }
        else
        {
            echo("W\n");
            $stepX--;
        }
    }
    else if($realPosX == $LX)
    {
        if($realPosY < $LY)
        {
            echo("S\n");
            $stepY++;
        }
        else
        {
            echo("N\n");
            $stepY--;
        }
    }
    else //there is no equal of Xs or Ys, then we go South East, West... depends of other conditions
    {
        if($realPosY < $LY)
        {
            if($realPosX < $LX)
            {
                echo("SE\n");
                $stepX++;
                $stepY++;
            }
            else
            {
                echo("SW\n");
                $stepX--;
                $stepY++;
            }
        }
        else
        {
            if($realPosX < $LX)
            {
                echo("NE\n");
                $stepX++;
                $stepY--;
            }
            else
            {
                echo("NW\n");
                $stepX--;
                $stepY--;
            }
        }
    }
}
?>