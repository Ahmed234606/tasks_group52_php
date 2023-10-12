<?php
echo '////////////////////////////////////ex1///////////////////////';
echo '<br/>';
function factorial($num)
{
    if($num<0 )
    {
       echo 'can not accept negative number' ;
    }
    elseif($num==0 )
    {
       echo 0 ;
    }
    else {
        for($x=1,$num;$num>0;$num--)
    {
        $x*=$num;
    }
   
    print_r( $x);

           }
           echo '<br/>';
 }
 factorial(5);//5*4*3*2*1
 factorial(0);
 factorial(-1);
 /////////////////////////////////////////
 function factorial2(...$nums)
{
    $total = 1 ;

    foreach($nums as $num) {
        $total *= $num ; // $total = $total + $num
    }

    echo $total ;
    echo '<br/>';

}

factorial2(5,5);
echo '////////////////////////////////////ex2///////////////////////';
echo '<br/>';

 function Reverse($str){ 
    // 4,0
    for($i=strlen($str)-1, $j=0; $j<$i; $i--, $j++)  
    { 
        $x = $str[$i]; 
        $str[$i] = $str[$j]; 
        $str[$j] = $x; 
    } 
    return $str; 
    echo '<br/>';
} 
  
$str = "ahmed";


print_r(Reverse($str)); 
echo '<br/>';
echo '////////////////////////////////////ex3///////////////////////';
echo '<br/>';

function myfunction($value,$key)
{
echo "The key $key has the value $value<br>";
echo '<br/>';
}
$a1=array("a"=>"red","b"=>"green");
$a2=array($a1,"1"=>"blue","2"=>"yellow");
array_walk_recursive($a2,"myfunction");
echo '////////////////////////////////////ex4///////////////////////';
echo '<br/>';
function first_Word ($str)
{
print_r (explode(" ",$str));
echo '<br/>';
$x=(explode(" ",$str));
echo $x[0];
echo '<br/>';
}
 
first_Word('ahmed mohamed hamdy');
echo '////////////////////////////////////ex5///////////////////////';
echo '<br/>';

function pwGenerator($len = 10) {
    $charRange = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
    $pw = null;
    $length = strlen($charRange);
    for ($x = 0; $x < $len; $x++) {
        $n = rand(0, $length);
        $pw .= $charRange[$n];
    }
    return $pw;
}
echo pwGenerator();
echo '<br/>';

echo '////////////////////////////////////ex6///////////////////////';
echo '<br/>';
function print_online($x=[1,2,3,4,5,6,7,8,9,10])
{
foreach($x as $y)
{
    echo $y.' ';
}

}echo '<br/>';
print_online ();
?>