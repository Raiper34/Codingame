<?php
/*
 * MIME Type
 * https://www.codingame.com/
 * Completed: 100%
 * @Author: Filip Gulan
 * @Contact: raipergm34@gmail.com
 */

$dictionary = array(); //index is extension and value is mime type

fscanf(STDIN, "%d",
    $N // Number of elements which make up the association table.
);
fscanf(STDIN, "%d",
    $Q // Number Q of file names to be analyzed.
);
for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%s %s",
        $EXT, // file extension
        $MT // MIME type.
    );
    if(!(array_key_exists($EXT, $dictionary))) //if we found new file type, we add it into dictionary
    {
        $dictionary[strtolower($EXT)] = $MT;
    }
}
for ($i = 0; $i < $Q; $i++)
{
    $FNAME = stream_get_line(STDIN, 500, "\n"); // One file name per line.
    preg_match("/(?<=\.)(?!.*\.).*/", $FNAME, $extension); //we find extension via regex
    if(!isset($extension[0]) || !(array_key_exists(strtolower($extension[0]), $dictionary))) //if there is no mime for this extension
    {
        echo "UNKNOWN\n";
    }
    else //there is mime type for this extension
    {
        echo $dictionary[strtolower($extension[0])] . "\n";
    }
}

?>