<?php
// put your code here
           for($i=0;$i<5;$i++){
               for($j=0;$j<9;$j++){
                  
                    $a = (9-1)/2;
                   
                    if((($i+$j)>=$a)and($i+$j<=$a+($i*2))){
                        echo "o";
                    }else{
                        echo "&nbsp";
                    }
                   
               }
               echo "<br>";
           }
?>


