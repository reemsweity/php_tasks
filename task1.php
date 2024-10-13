<?php
//1
//a
echo strtoupper('hello world!');

//b
echo "<br>";
echo strtolower('HELLO WORLD!');

//c
echo "<br>";
echo ucfirst('hello');

//d
echo "<br>";
echo ucwords('hello world');

//2
echo "<br>";
$time=date_create('085119');
echo date_format($time,"h:i:s");

//3
echo "<br>";
if(str_contains('I am a full stack developer at orange coding academy','orange'))
echo 'Word Found!';

//4
echo "<br>";
$url=pathinfo('www.orange.com/index.php');
    echo $url['basename'];

//5
echo "<br>";
$pathname=pathinfo('info@orange.com');
echo $pathname['basename'];


//6
echo "<br>";
echo $pathname['extension'];

//8 
echo "<br>";
echo str_replace('new','our','the new trainee is so genius');

//9
echo "<br>";
$String1 = 'dragonball';
$String2 = 'dragonboll';

for ($x = 0; $x < strlen($String1); $x++) {
    if ($String1[$x] != $String2[$x]) {
        echo 'First difference between two strings at position ' . ($x + 1) . ': "' . $String1[$x] . '" vs "' . $String2[$x] . "\"\n";
        
    }
}

//10
echo "<br>";
$str1= "Twinkle,twinkle,littlestar.";
$array1=explode(",",$str1);
 var_dump ($array1);

 //11
 echo "<br>";
$char1='a';
$next_char=++$char1;
if(strlen($next_char)>1){
    $next_char=$next_char[0];
}
echo $next_char;
//12
echo "<br>";
$str2 = 'The brown fox'; 
$str3 ='quick'; 
$pos = 4; 
$new_str = substr_replace($str2, $str3, $pos, 0); 
echo $new_str ;
echo '<br>';
$word=explode(' ',$str2);
echo $word[0];
//13
echo '<br>';
$str4='0000657022.24';
$rem0=ltrim($str4,0);
echo $rem0;

//14 
echo '<br>';
$str5='The quick brown fox jumps over the lazy dog';
echo str_replace("fox",' ',$str5);


//15
echo '<br>';
$str6='The quick brown fox jumps over the lazy dog---';
echo str_replace("-",' ',$str6);

//16
echo '<br>';
$str7= '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\:/*"+-'), '', $str7);

//17
echo '<br>';
$str8='The quick brown fox jumps over the lazy dog';
echo implode(' ',array_slice(explode(' ',$str8),0,5));



//18
echo '<br>';
$str9='2,543.12';
echo str_replace(',','',$str9);




//19
echo '<br>';
foreach(range('a','z') as $char)
{
    echo $char.' ';
}
?>
