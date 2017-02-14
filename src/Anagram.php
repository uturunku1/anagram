<?php

class Anagram
{
  function makeAnagram($input1, $input2)
  {
      if (strlen($input1) == strlen($input2)) {
          return true;
      }
  }
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
              return true;
          }
      }

  }
}


 ?>
