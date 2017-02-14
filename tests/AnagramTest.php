<?php
  require_once "src/Anagram.php";

  class AnagramTest extends PHPUnit_Framework_TestCase
  {

    function test_make_compareWords()
    {
        $anagram= new Anagram;
        $inputword1 = "bread";
        $inputword2 = "beard";

        // Act
      //   cuando usuario input una palabra, el numero de caracteres de esa palabara va a ser comparado con el numero de caracteres de la primera palabra de la lista.
      $result = $anagram->compareWords($inputword1, $inputword2);

        // Assert
      //   si el numero coincide es true
      $this->assertEquals(true, $result);
    }
    function test_make_compareMultipleWords()
    {
        $anagram= new Anagram;
        $inputword1 = "bread";
        $inputword2 = "bla";

        // Act
      //   cuando usuario input una palabra, el numero de caracteres de esa palabara va a ser comparado con el numero de caracteres de la primera palabra de la lista.
      $result = $anagram->compareMultipleWords($inputword1, $inputword2);

        // Assert
      //   si el numero coincide es true
      $this->assertEquals(true, $result);
    }
  }

 ?>
