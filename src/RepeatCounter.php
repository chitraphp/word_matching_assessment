<?php

class RepeatCounter
{

    function countRepeats($string, $word)
    {
        $count = 0;
        $input_str_array = explode(" ", $string);
        if(in_array($word, $input_str_array))
        $count++;
        return  $count;
    }
}
?>
