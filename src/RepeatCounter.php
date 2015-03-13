<?php

class RepeatCounter
{

    function countRepeats($string, $word)
    {
        $count = 0;

        $str_lower = strtolower($string);
        $input_str_array = array();
        $input_str_array = explode(" ", $str_lower);
        $str_size=0;
        $search_word = strtolower($word);


        foreach($input_str_array as $input_str )
                {
                    if($search_word == $input_str)
                    {
                        $count++;

                    }
                }

         return  $count;
    }
}
?>
