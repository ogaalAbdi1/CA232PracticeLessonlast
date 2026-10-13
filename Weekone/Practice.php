<?php 
 
$name = "Faarax Hasan"; 
$age = 45; 
 
$display = "My name is $name, I am $age years old"; 
echo $display; 
 
echo "<br>";

// echo "good morning $name"; 
 
$message = "Good Morning"; 
echo $message; 

echo "<br>";

echo "the length of this string \"$message\" is ".strlen($message);
echo "<br>";
$message = "The Quick Brown Fox Jumps over the Lazy Dog";
echo "Total Words \"$message\" = " . str_word_count($message);

echo "<br>";


//practice of calculations with constact

define("PI",3.14);
$pi="3.14";
$Radius=8;
$Area= $pi *($Radius  * $Radius);

echo "the area of the circle is =" ,$Area;

echo "<br>";

$num = 12345 * 67890;
echo "the mutiplication 12345*6789 is =", $num;
echo "<br>";
echo substr($num, 3, 1);

echo "<h5>Arithmetic Operators </h5>";
$x = 10;
$y = 5;
$sum = $x + $y;
echo "The sum of $x and $y = ", $sum;

echo "<br>";
$sum = $x - $y;
echo "The difference of $x and $y = ", $sum;


echo "<br>";
$sum = $x * $y;
echo "The product of $x and $y = ", $sum;

echo "<br>";
$sum = $x / $y;
echo "The division of $x and $y = ", $sum;

echo "<br>";
$sum = $x % $y;
echo "The Modolus of $x and $y = ", $sum;

// Concatenation Operator
echo "<h5>Concatenation Operators </h5>";
$a = "Welcome ";
$b = "back & ";
$c = "to mysql ";
echo $a . $b . $c, "<br>";

$greeting="Hellow  adna";
$message= "welcome back ,nice to meet you";
echo $greeting . $message;

echo "<h4> Increment and decrement examples </h4>";

$numbeer=9;
echo "before no increment",$numbeer;  echo "<br>";
echo "After increment", ++$numbeer;
echo $numbeer,"<br>";

 $numbeer=8;
 echo "before no increment",$numbeer; echo "<br>";
 echo "after increment",$numbeer++; 
 echo "<br>";

 $x = 5;
echo --$x, " First decrements then prints <br>";
echo $x, "<br>";

echo "<h5>Arithmetic Assignment Operators </h5>";
$x = 55;
echo " x +1 value is : ",$x+=1,"";
echo " x -1 value is : ",$x-=2,"";
echo " x / 1 value is : ",$x/=2,"";
echo " x * 1 value is : ",$x*=1,"";
echo " x % 1 value is : ",$x%=5,"";

echo "<br>";

echo "<h5>Comparison Operators </h5>";
$x = 5;
$y = 4;

echo "Check whether X and Y is equal: " . ($x == $y) . "<br>"; 
echo "Check whether X and Y is not equal: " . ($x != $y) . "<br>"; 

?>