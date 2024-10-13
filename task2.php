<?php
//1
$year=2013;
if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo"This year is a leap year";
} else {
    echo "This year is not a leap year";
}
//2
echo '<br>';
$temp=27;
if($temp<20){
    echo "it is wintertime!";
}
else{
    echo "it is summertime!";
}
//3
echo '<br>';
$firstint=2;
$secondint=2;
if($firstint==$secondint)
{
    echo(($firstint+$secondint)*3);
}
//4
echo '<br>';
$int1=10;
$int2=10;
if($int1+$int2==30){

echo 30;
}
else{
 echo 'false';
}
//5
echo '<br>';
$num1=20;
if($num1%3==0){
    echo 'true';
}

else{
    echo'false';
}

//6
echo '<br>';
$num2=35;
if($num2>=20 && $num2<=50){
    echo 'true';
}
else{
    echo'false';
}

//7
echo '<br>';
echo max(1,5,9);

//8
echo '<br>';
//9
echo '<br>';
function calul($num3,$num4,$operation){
switch($operation){
case '+':
    return $num3+$num4;
case '-':
    return $num3-$num4;
 case '*':
    return $num3*$num4;
case '/':
     return $num3/$num4;
default:
    return "Error: Invalid operation.";
}

}

$result=calul(7,5,'*');
echo $result;

//10
echo '<br>';
$age=15;
if($age>=18){
    echo  'is eligible to vote';
}
else{
   echo 'is no eligible to vote';
}

//11
echo '<br>';
$num5=-4;
if($num5>0){
    echo 'Positive';
}
elseif($num5<0){
    echo 'Negative';
}
else{
    echo 'zero';
}
//12
echo '<br>';
$grade=[60,86,95,63,55,74,79,62,50];
$total=0;
for($i=0;$i<count($grade);$i++){
    $total=$total+$grade[$i];
    
}
$avg=$total/count($grade);
if($avg>90 && $avg<100){
    echo 'A';
}
elseif($avg>80 && $avg<90){
    echo 'B';}
elseif($avg>70 &&$avg<80){
    echo 'C';
}
elseif($avg>60 &&$avg<70){
    echo 'D';
}
 elseif($avg<60){
     echo 'F';
    }
?>