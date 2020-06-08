<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style type="text/css">
</style>
</head>
<body>
    <form action = "index.php" method = "get">
    <table align="center">
        <tr>
            <td>
                List <input type="text" id="list" name="list">
            </td>
        </tr>
        <tr>
            <td>
                ค้นหา <input type="text" id="searchTxt" name="searchTxt">&nbsp;<input type="submit" value="ค้นหา">
            </td>
        </tr>
        <tr>
            <td>
                ประเภทการค้นหา<br>
              
                    <select name="typesearch" id="typesearch">
                          <option value="1">1.linear</option>
                          <option value="2">2.Binary Search</option>
                          <option value="3">3.Bubble Search</option>
                    </select>
            </td>
        </tr>
        
 </table>
    </form>
 <?php
    if($_GET["searchTxt"]!="" and $_GET["list"]!=""){
      //  $ArrList = explode(",",$_GET["list"]);
        //$Chknum = $_GET["searchTxt"];
        //$Ty = $_GET["typesearch"];
        
    }
 ?>
 <table align="center">
     <tr>
         <td>
             ผลลัพธ์<br>
             <textarea id="ans" name="ans" rows="20" cols="50">
                 <?php
                 if($_GET["searchTxt"]!="" and $_GET["list"]!=""){
                     $ArrList = explode(",",$_GET["list"]);
                     $Chknum = $_GET["searchTxt"];
                     $Ty = $_GET["typesearch"];
                   echo "List :[".$_GET["list"]."]";
                   echo "\n";
                   echo "Search :".$Chknum;
                   echo "\n";
                   echo "Result :::";
                   echo "\n";
                     if($Ty == 1){
                        
                         $a = count($ArrList);
                        
                        for($i=0;$i<$a;$i++){
                            
                            if($ArrList[$i]!= $Chknum){
                               echo "Round :$i ===> $Chknum != $ArrList[$i]";
                               echo "\n";
                            }  else {
                               echo "Round :$i ===> $Chknum = $ArrList[$i] found !!";
                               exit();
                            }
                        }
                     }elseif ($Ty == 2) {
                          $HeadArr = 0; 
                          $TailArr = count($ArrList)-1; 
                          $r = 1;
                          sort($ArrList);
                          while ($HeadArr <= $TailArr){ 
                              $c = floor(($HeadArr+$TailArr)/2);  
                              if($ArrList[$c] == $Chknum){ 
                                 echo "Round :$r ===> $Chknum = $ArrList[$c] found !!";
                                 exit();
                              }elseif ($Chknum < $ArrList[$c]){
                                 echo "Round :$r ===> $Chknum != $ArrList[$c]";
                                 echo "\n";
                                 $TailArr = $c-1; 
                              }else { 
                                 echo "Round :$r ===> $Chknum != $ArrList[$c]";
                                 echo "\n";
                                 $HeadArr = $c+1; 
                              } 
                              $r++;
                          } 
      
                     }else{
                         echo"";
                     }
                 }
                 ?>
             </textarea>
         </td>
     </tr>       
 </table>
<?php
 
   
?>
</body>
</html>