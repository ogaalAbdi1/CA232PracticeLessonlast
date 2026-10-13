 
 <?php
 $num1=8;
 $num2=10;
if($num1 > $num2)
echo  "$num1 is greater than $num2";
if ($num1 < $num2)
    echo "$num1 is less than $num2";

echo "<br>";

if ($num1 >= $num2) echo "$num1 is greater than or equal $num2 <br />";
if($num1 <= $num2) echo "$num1 is less than or equal  $num2 <br />";

// If Else Statement
$mark = 60;
if ($mark >= 70) 
echo " the marks is greater than 70 the exam  Pass";
else
echo "the marks is less than  60  the exam fail";

echo "<br>";

if ($mark >= 50) {
    echo "Your Grade is PASS";
}
else {
    echo "Your Grade is FAIL";
}
echo "<br>";



//If ElseIf Statement statement waaye examplekaan
echo "<h1 style=color:green> If elseif Statement Example </h1>";
$mark=97;
if($mark >=90)
$grade="A";
elseif($mark >=80)
$grade ="the grade is B";
elseif($mark >=70)
$grade ="the grade is C";
elseif($mark >=60)
$grade="the grade  is D";
elseif($mark <=50)
$grade="the grade is E";
else
$grade="the grade is fail";

echo "your Grade is $grade";
echo "<br>";

echo "<h2 style=color:green> The year of the Month example </h2>";
$month="june";
if($month=="January")
    echo " its winter time";
elseif($month=="february")
    echo "its winter time";
elseif($month=="march")
    echo "its winter time";
elseif($month=="April")
    echo "its spring time";
elseif($month=="may")
    echo "its spring time";
elseif($month=="june")
    echo "its spring time";
elseif($month=="july")
    echo "its summer  time";
else 
    echo "invalid month";
echo "<br>";

echo "<h4>  switch Statements example </h4>";
// Switch Statement
$grade = "C";
switch ($grade) {
    case "A":
        echo "Your GPA is 4.0";
        break;
    case "B":
        echo "Your GPA is 3.0";
        break;
    case "C":
        echo "Your GPA is 2.0";
        break;
    case "D":
        echo "Your GPA is 1.0";
        break;
    default:
        echo "Your GPA is 0";
}echo "<br>";

echo "<h4 style=color:green> the  switch of month and case example </h4>";
$month="October";
switch($month){
    case "January":
    case "february":
    case "march":
        echo "its winter time";
        break;
    case "April":
    case "May":
    case "June":
        echo "its spring time";
        break;
    case "July":
    case "August":
    case "September":
        echo "its summer time";
        break;
    case "October":
    case "Novermber":
    case "December":
        echo "Its Autumn time";
        break;
     default:
        echo "invalid month";
        break;  

}
echo "<h4 style=color:green> Home About News Login And Contact </h4>";
$pege="Login";
switch($pege){
    case "Home":
	    echo "You selected Home";
	    break;
    case "About":
        echo "you selected About";
        break;
     case "News":
        echo "you selecte News";
        break;
    case "Login":
        echo "you selected Login page";
        break;
    case "Contact":
        echo "You selected Contact";
        break;
}
echo "<br>";
 // Ternary Operator
echo $mark >= 50 ? "PASS" : "FAIL";
echo "<br>";

$grade = ($mark >= 50) ? "PASS" : "FAIL";
echo "Your Grade is $grade";

echo "<br>";

$fuel = 5;
echo $fuel <= 1 ? "Fill tank now" : "There's enough fuel";

 



 ?>