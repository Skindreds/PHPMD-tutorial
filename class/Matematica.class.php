<?php

class Matematica {
   public function random($min = 0, $max = 0) {
      if($min == 0 && $max == 0){
         return rand();
      }
      $r = rand($min, $max);

      switch(true){
         case ($r > 1000000): return 'algo';
         case ($r > 100000): return 'algo';
         case ($r > 10000): return 'algo';
         case ($r > 1000): return 'algo';
         case ($r > 100): return 'algo';
         case ($r > 10): return 'algo';
         case ($r > 1): return 'algo';
      }

   }
}