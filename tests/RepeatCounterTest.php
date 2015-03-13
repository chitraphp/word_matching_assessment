<?php
require_once "src/RepeatCounter.php";

class RepeatCounterTest extends PHPUnit_Framework_TestCase
{
    function test_letter_null()
    {
        //Arrange
        $test_RepeatCounter = new RepeatCounter;
        $input_string = "a";
        $search_word = "";
        //Act
        $result = $test_RepeatCounter->countRepeats($input_string, $search_word);
        //Assert
        $this->assertEquals(0,$result);
    }

    function test_letter_letter()
    {
        //Arrange
        $test_RepeatCounter = new RepeatCounter;
        $input_string = "a";
        $search_word = "a";
        //Act
        $result = $test_RepeatCounter->countRepeats($input_string, $search_word);
        //Assert
        $this->assertEquals(1,$result);
    }

    function test_twoLetter_letter()
    {
        //Arrange
        $test_RepeatCounter = new RepeatCounter;
        $input_string = "aA";
        $search_word = "a";
        //Act
        $result = $test_RepeatCounter->countRepeats($input_string, $search_word);
        //Assert
        $this->assertEquals(0,$result);
    }

    function test_twoLetter_twoLetter()
    {
        //Arrange
        $test_RepeatCounter = new RepeatCounter;
        $input_string = "ab";
        $search_word = "ab";
        //Act
        $result = $test_RepeatCounter->countRepeats($input_string, $search_word);
        //Assert
        $this->assertEquals(1,$result);
    }

    function test_twoWords_letter()
    {
        //Arrange
        $test_RepeatCounter = new RepeatCounter;
        $input_string = " A ab";
        $search_word = "a";
        //Act
        $result = $test_RepeatCounter->countRepeats($input_string, $search_word);
        //Assert
        $this->assertEquals(1,$result);
    }


}
?>
