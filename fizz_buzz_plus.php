<?php 
for($i =0 ; $i <101 ; $i ++){
    $f=$i%10;
    $b=$i/10;
    $c=0;
    //căn lề
    if($i<10) echo "&emsp;";
    elseif($i <100)echo "&ensp;";
    echo "--";

    //logic
   switch(true){
       case ($i <3): break;
       case ($i ===4): break;
       case true:
        if($i%3 ==0){
            echo $i. "fizz";
            $c++;
        }
        case true:
            if($i%5 ==0){
                echo $i. "buzz";
            }
        case true:
            if($c >0) break;
          elseif($b >3 && $b<4 || $f==3) echo $i."fizz";
          break;
   }
}

?>