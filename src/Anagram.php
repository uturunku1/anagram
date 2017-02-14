<?php

class Anagram
{

  function compareWords($input1, $input2)
  {
      $splitword1 = str_split($input1);
      $splitword2 = str_split($input2);
      $wordorder1= sort($splitword1);
      $wordorder2 = sort($splitword2);
      if ($wordorder1==$wordorder2) {
          return true;
      }
  }
  function compareMultipleWords($input1, $input2)
  {
      $explode_strings = explode(" ", $input2);
      $split_words = array();
      foreach ($explode_strings as $word) {
          array_push($split_words, str_split($word));

          if (strlen($input1) == strlen($word)) {
              return "this ". $word ." is an anagram.";
          } else {
              return "This " . $word . " is not an anagram.";
          }
      }
    //   foreach ($split_words as $word) {
    //       $splitword1= str_split($input1);
    //       $wordorder1= sort($splitword1);
    //       $wordorder2 = sort($word);
    //       if ($wordorder1==$wordorder2) {
    //           return true;
    //       }
    //   }

  }
}


 ?>
