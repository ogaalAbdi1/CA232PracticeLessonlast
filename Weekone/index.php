<h1> Welcome  Prcatice PHP </h1>
<h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio saepe qui adipisci inventore voluptate 
alias error a ratione expedita distinctio!</h3>

<?php

//Diffrence between echo and print

echo ("This is echo Statement");
echo "<br>";
print ("This is print Statement <br>");
echo "<br>";

echo "this is an output ","two parameter usig echo";
// print "this is an output ";// "two parameter usig echo";
echo "<br>";

$x = 5;
$y = 12;
echo($x),"<br>";
echo($y),"<br>";

($x<$y) ? print "$x   is less than $y":print "$x is greater than $y"; 
echo "<br>";

//echo can not use ternary operator

// ($x < $y) ? echo "$x is less than $y" : echo "$x is greater than $y";

$student_id= "C12290";
$name = "faaduma  Hasan";
$single = true;
$salary = 90;

echo "<h5 style=color:green> student information </h5>";
Echo "student_id: $student_id <br>";
Echo "Student name: $name <br>";
Echo "Student single: $single <br>";
Echo "Student salary: $salary <br>";

echo "<br>";
// echo var_dump($student_number);

Echo "Student iD:", var_dump($student_id), "<br>";
Echo "Student name:", var_dump($name), "<br>";
Echo "Student single:", var_dump($single), "<br>";
Echo "Student salary:", var_dump($salary), "<br>";

?>