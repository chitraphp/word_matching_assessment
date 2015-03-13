<?php

class RepeatCounter
{

    function countRepeats($string, $word)
    {
        $count = 0;

        $str_lower = strtolower($string);
        $input_str_array = explode(" ", $str_lower);
        $search_word = strtolower($word);
        if(in_array($search_word, $input_str_array))
        $count++;
        return  $count;
    }
}
?>
