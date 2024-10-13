<?php
//1
$colors=['red','green','white'];
echo '<p>';
echo 'The memory of that scene for me is like a frame of film forever frozen at that moment: the '. $colors[0].' carpet, 
the ' . $colors[1] .' lawn, the '.$colors[2].' house, the leaden sky. The new president and his first lady. - Richard M. 
Nixon';
echo '</p>';

//2
echo '<ul>'.
'<li>'.$colors[0].'</li>'.
'<li>'.$colors[1].'</li>'.
'<li>'.$colors[2].'</li>'.
'</ul>';

//3
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", 
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", 
"Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", 
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );

foreach($cities as $x=>$y){
    echo 'The capital of '.$x.' is '.$y."<br>";
}


//4
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo $color[4];
//5
$num=[1, 2, 3, 4 ,5 ];
$Location= 4;
$newItem='$';
array_splice($num,$Location,0,$newItem);
var_dump( $num);

//6
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
ksort($fruits);
var_dump ($fruits);
//7
$temp=[78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 
65, 64, 68, 73, 75, 79, 73];
$avg=array_sum($temp)/count($temp);
echo $avg;
sort($temp);
$ltemp=array_slice($temp,0,5);
$utemp=array_slice($temp,-5);
echo '<br>';
echo implode(', ',$ltemp) ;
echo '<br>';
echo implode(', ',$utemp) ;

//8
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$newarr=array_merge($array1,$array2);
var_dump ($newarr);

//9
$colors1 = array("red","blue", "white","yellow");
foreach($colors1 as $x){
    echo strtoupper($x).'<br>';
}

//10
$colors1 = array("RED","BLUE", "WHITE","YELLOW");
foreach($colors1 as $x){
    echo strtolower($x).'<br>';
}
//11
$num4=range(200,250);

foreach($num4 as $x){
    if($x%4==0){
    echo ($x).' ';
    }
}
//12
echo '<br>';
$words = array("abcd", "abc", "de", "hjjj", "g", "wer");

$strlen = []; 
foreach ($words as $x) {
    array_push($strlen, strlen($x));
}

$minLength = min($strlen);
$maxLength = max($strlen);

echo  $minLength;
echo '<br>';
echo  $maxLength;



//13
echo '<br>';
$numbers = range(11, 20);
shuffle($numbers);
foreach($numbers as $x) {
    echo $x . " ";
}

//14
echo '<br>';
$array2 = array( 2, 0, 10, 12, 6);
sort($array2);

    if(min($array2)==0){
        echo $array2[1];
    }
    else{
        echo $array2[0];
    }

?>