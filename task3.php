<?php
//1
for($x=1;$x<=10;$x++){
    if($x<10){
    echo $x."-";}
    else{
        echo$x;
    }
}

//2
echo '<br>';
$sum=0;
for($x=0;$x<=30;$x++){
    $sum=$sum+$x;
}
echo $sum;

//3
echo '<br>';
for ($i = 1; $i <= 5; $i++) {
    $char = chr(64 + $i); 
    echo '<br>';
    for ($j = 1; $j <= 5 - $i; $j++) {
        echo "A ";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo $char . " ";
    }
}
//4
echo '<br>';
for ($i = 1; $i <= 5; $i++) {
    echo '<br>';
    for ($j = 1; $j <= 5 - $i; $j++) {
        echo "1 ";
    }
   
    for ($k = 1; $k <= $i; $k++) {
        echo $i . " ";
    }

  
}
//5

echo '<br>';
for ($i = 1; $i <= 5; $i++) {
    echo '<br>';
    for ($j = 1; $j <= 5; $j++) {
        if ($i == $j) {
            echo $i . " "; 
        } else {
            echo "0 ";
        }
    }
}
//6
echo '<br>';
$num1=5;
$factorialnum1=1;
for ($i = 1; $i <= $num1; $i++) {
$factorialnum1=$factorialnum1*$i;

}
echo $factorialnum1;


//7
echo '<br>';
$n=10;
$f1 = 0;
$f2 = 1;
echo $f1 . ", " . $f2;
for ($i = 3; $i <= $n; $i++) {
    $f3 = $f1 + $f2; 
    echo ", " . $f3;    
    $f1 = $f2;
    $f2 = $f3;
}




//8
echo '<br>';
$text = "Orange Coding Academy";
$lowercaseText = strtolower($text);
$count = substr_count($lowercaseText, 'c');
echo $count;

//9
echo '<br>';
echo '<table cellpadding="3px" cellspacing="0px" border="1">'; 

for ($i = 1; $i <= 6; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 5; $j++) {
        $result = $i * $j;
       
        echo '<td>' . $i . ' * ' . $j . ' = ' . $result . '</td>';
    }
    echo '</tr>';
}
echo '</table>';


//10
echo '<br>';
for ($i = 1; $i <= 35; $i++) {
    if($i%3==0 && $i%5==0){
        echo 'FizzBuzz ';
    }
    elseif($i%3==0){
        echo 'Fizz ';
    }
    elseif($i%5==0){
        echo 'Buzz ';
    }
    else{
        echo $i.' ';
    }
}
//11
echo '<br>';
function generatePyramidPattern($n) {
    for ($i = 1; $i <= $n; $i++) {
        for ($k = $n - $i; $k > 0; $k--) {
            echo "&nbsp;&nbsp;"; 
        }

        for ($j = 1; $j <= $i; $j++) {
            echo chr(64 + $j) . " ";
        }
        echo "<br>";
    }


    for ($i = $n - 1; $i >= 1; $i--) {

        for ($k = $n - $i; $k > 0; $k--) {
            echo "&nbsp;&nbsp;"; 
        }

        for ($j = 1; $j <= $i; $j++) {
            echo chr(64 + $j) . " ";
        }
        echo "<br>";
    }
}
$num = 9;
generatePyramidPattern($num);




?>

     