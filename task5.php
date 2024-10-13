<?php
//1
function isPrime($num){
    if($num==1){
        echo $num.' is not prime';
        return;
    }

for($x=2;$x<=sqrt($num);$x++){
if($num%$x==0){
    echo $num.' is not prime';
    return;
}       
}

echo $num . ' is prime';
}
 isPrime(3);

//2
echo '<br>';
function reverse($str){
    $reversedStr='';
for($x=strlen($str)-1;$x>=0;$x--){
    $reversedStr .= $str[$x];
 
}
return $reversedStr;
}

echo reverse('remove');


//3
echo '<br>';
function isLower($str1){

    if($str1==strtolower($str1)){
        echo 'Your String is Ok';
    }
    else{
        echo 'Your String is not Ok';
    }

}


isLower('remove');

//4
echo '<br>';
function swap($x,$y){
$temp=$x;
$x=$y;
$y=$temp;
echo "x= ".$x." y= ".$y;
}

swap(12,10);

//5
echo "<br>";
function isArmstrong($num1){
    $sum=0;
    $num_str=(string)$num1;
    for ($x=0;$x<strlen($num_str);$x++){
        $sum_cube= $num_str[$x]**(strlen($num_str));
        $sum=$sum+$sum_cube;
    }
    if($sum==$num1){
        echo "$num1 is Armstrong Number";
    }
    else{
    echo "$num1 is not Armstrong Number";
    }
}
isArmstrong(407);



//6
echo "<br>";
function isPalindrome($str2){
    $cleanedStr=strtolower(preg_replace("/[^A-Za-z0-9]/", '', $str2));
    $reversedStr = strrev($cleanedStr);
if($cleanedStr==$reversedStr){
    echo "Yes it is a palindrome";
}
else{
    echo "Yes it is not a palindrome";
}
}

isPalindrome('Eva, can I see bees in a cave?');

//8
echo "<br>";
function removeDuplicates($arr){

print_r(array_unique($arr));
}

removeDuplicates([2,4,7,4,8,4]);




?>