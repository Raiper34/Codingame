<?php
/*
 * ASCII Art
 * https://www.codingame.com/
 * Completed: 100%
 * @Author: Filip Gulan
 * @Contact: raipergm34@gmail.com
 */

fscanf(STDIN, "%d",
    $L //width of letter
);
fscanf(STDIN, "%d",
    $H //height of letter
);

$T = str_split(strtoupper(stream_get_line(STDIN, 256, "\n"))); //text to ascii art
for ($i = 0; $i < $H; $i++)
{
    $ROW = str_split(stream_get_line(STDIN, 1024, "\n")); //line of asciiart dictionary
    foreach ($T as &$character) //we iterate trought our text to ascii art
    {
        $position = 0;
        if(ord($character) >= 65 && ord($character) <= 90) //is it well known character? 65 is A 90 is Z
        {
            $findPosition = (ord($character) - 65) * $L; //we find this letter in file A 
        }
        else //is it unkown charater, in this case ?
        {
            $findPosition = 26 * $L;
        }
        foreach ($ROW as &$character) //we itterate trought each ascii art dictionary line
        {
            if($position >=  $findPosition && $position <= $findPosition + $L - 1) //if we are in area of wanted letter then we print #
            {
                echo($character);
            }
            $position++;
        }
    }
    echo("\n");
}

?>