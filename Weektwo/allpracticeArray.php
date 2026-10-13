<?php
echo "<h1>practice chapter 3 Arrays and Functions In Php </h1>";

$a=array(2,true,6.5,"jaamac",);
// echo ("$a");

print_r($a);
echo "<br>";

$fruits = array("Apple", "Orange", "Banana");

// echo ("$fruits"); echo display only one values; use print-r to display array

print_r($fruits); echo "<br>";
echo $fruits[0];

//usig arrays
echo "<br>";
$student=array(
    "101",
    "Faaduma Hasan Jimcaale",
    40,
    "Hodan district",
    "single"
);
// echo ($student);
print_r($student);

echo "<h3 style=color:blue> array with for loop </h3>";
for($i=0; $i < count($fruits);$i++){
    echo $fruits[$i]."<br>";
}
echo "<br>";

$number=array(26, 11, 13, -4, 14, 17, 5 , 52, 7, 9,  21,  32, 2, 4, 5);
echo "Array elements are:<br>";
for($i=0;$i <count($number);$i++)
    echo ("$number[$i],");

echo "<br>";


$number=array(26,11,13,-4,14,17,5,52,7,9,21,32,2,4,5);

echo "Array elements with foreeach :<br>";
foreach($number as $n)
    echo ($n);
echo "<br>";

$number=array(10,20,30,40,50,60,70,80,90);
$total=0;
print_r ($number);
foreach($number as $n)
    $total += $n;
     echo "<br> the total number is: $total)";
?>