<?php
/*
 * Chuck Norris
 * https://www.codingame.com/
 * Completed: 100%
 * @Author: Filip Gulan
 * @Contact: raipergm34@gmail.com
 */

$last = 2; //start of encoding
$MESSAGE = str_split(stream_get_line(STDIN, 100, "\n"));
foreach($MESSAGE as $char) //unpack on whole string was a bit buggy, because this char by char solution
{
    //convert to bin
    $bin = unpack('H*', $char);
    $bin = base_convert($bin[1], 16, 2);

    if(strlen($bin) < 7) //we need 7 bits, if there is fewer, we add it
    {
        $add = 7 - strlen($bin);
        for($i = 0; $i < $add; $i++)
        {
            $bin = "0" . $bin; //add missing bit
        }
    }

    $bin = str_split($bin); //convert to array
    foreach($bin as $bit)
    {
        if($bit == 1) //the actual bit is 1
        {
            if($last == 1) //last bit was 1
            {
               echo "0";
            }
            else if($last == 0) //last bit was 0
            {
                echo " 0 0";
            }
            else //start of encoding
            {
                echo "0 0";
            }
            $last = 1; //new last bit
        }
        else //actual bit is 0
        {
            if($last == 0) //last bit was 0
            {
               echo "0";
            }
            else if($last == 1) //last bit was 1
            {
                echo " 00 0";
            }
            else //start of encoding
            {
                echo "00 0";
            }
            $last = 0; //new last bit
        }
    }
}
?>