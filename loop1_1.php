<?php
// put your code here
           for($i=0;$i<5;$i++){
               for($j=0;$j<5;$j++){
                  
                    $a = $i+$j;
                    if($a>=4){
                        echo "o";
                    }
                   else{
                        echo "&nbsp&nbsp";
                   }
               }
               echo "<br>";
           }
?>


