<?php
echo "<p>Hallo Guten morgen <pre>\n</pre>ich bin mohamed</p>";
echo "<br>";
#2
//the strlen() function
   echo "length of a given string :<br>";
   echo strlen("Hello world!");
   echo"<br>";
   echo "position of a given character in a string (d) :<br>";
   echo strpos("Hello world! kokoko kokok world","d");
   echo "<br>";
   echo "text replacement :<br>";
   echo str_replace("world", "Mohamed", "Hello world!");
   echo "<br>";
   //print_r($_SERVER);
   foreach ($_SERVER as $key => $value) {
     echo "<pre>{$key}=>{$value}/n</pre>";
   }
   echo "</br>";
   $a = array(12, 45, 10, 25);
   echo "sum(a) = " . array_sum($a) . "\n";
   echo "</br>";
   echo"count of array is:".count($a);
   echo "</br>";
   echo"average of array is:".array_sum($a)/count($a);
   echo "</br>";
   echo "</br>";
   $arr=array("Sara"=>"31","John"=>"41","Walaa"=>"39","Ramy"=>"40");
   echo "value ascending order:<br>";
   asort($arr);
   foreach($arr as $x => $x_value) {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }

   echo "value descending order:<br>";
   $arr1=array("Sara"=>"31","John"=>"41","Walaa"=>"39","Ramy"=>"40");
   rsort($arr1);
   foreach($arr1 as $x1 => $x_value1) {
   echo "Key=" .array_search ($x_value1, $arr1). ", Value=" . $x_value1;
   echo "<br>";
   }
   $arr=array("Sara"=>"31","John"=>"41","Walaa"=>"39","Ramy"=>"40");
   echo "key ascending order:<br>";
   ksort($arr);
   foreach($arr as $x2 => $x_value2) {
  echo "Key=" . $x2 . ", Value=" . $x_value2;
  echo "<br>";
}
$arr=array("Sara"=>"31","John"=>"41","Walaa"=>"39","Ramy"=>"40");
echo "key descending order:<br>";
krsort($arr);
foreach($arr as $x3 => $x_value3) {
echo "Key=" . $x3 . ", Value=" . $x_value3;
echo "<br>";
}
   echo "</br>";
   echo "the difference between include() and include_once():<br>";
   echo"The include_once() statement includes and evaluates the specified file during the execution of the script. This is a behavior similar to the include() statement, with the only difference being that if the code from a file has already been included, it will not be included again."
 ?>
