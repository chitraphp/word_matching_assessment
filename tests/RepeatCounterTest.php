<?php
require_once "src/RepeatCounter.php";

class RepeatCounterTest extends PHPUnit_Framework_TestCase
{
    function test_letter()
    {
        //Arrange
        $test_RepeatCounter = new RepeatCounter;
        $input_string = "a";
        $search_word = "";
        //Act
        $result = $test_RepeatCounter->countRepeats($input_string, $search_word);
        //Assert
        $this->assertEquals(0,$reult)
    }
}
?>
