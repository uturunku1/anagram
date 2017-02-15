<?php

class Anagram
{

  // function compareWords($input1, $input2)
  // {
  //     $splitword1 = str_split($input1);
  //     $splitword2 = str_split($input2);
  //     sort($splitword1);
  //     sort($splitword2);
  //     if ($splitword1===$splitword2) {
  //         return true;
  //     }
  // }

  function compareMultipleWords($input1, $input2)

  {
      $explode_strings = explode(" ", $input2);
      $split_words = array();
      foreach ($explode_strings as $word) {
          array_push($split_words, str_split($word));
      }
      $wrongwords= array();
      $rightwords= array();
      foreach ($split_words as $word) {
          $splitword1= str_split($input1);
          sort($splitword1);
          sort($word);

          if ($splitword1== $word) {
              array_push($rightwords, $word);

          } else {
              array_push($wrongwords, $word);

          }
      }
      if ($wrongwords==array()) {
          return true;
      } else {
          return false;
      }

  }
}


 ?>
