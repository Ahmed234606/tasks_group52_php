<?php
// task2
/*
search on constants types
search on truthy and falsy values
search on php arrays

use variable , gettype , var_dump , print_r

def  between const & variable scope inside function => global 
*/
//use def types of comment {// /* */ # /** */}
///////////////////////////////////////////
#search on constants types
echo 'constants types '. '<br/>' ;
$task_2_a ='search on constants types';
// define()  function ***define("name","value")
define('Define','define()  function ***define("name","value");'); 
echo '<br/>' . Define .'<br/>', gettype(Define) .'<br/>';
var_dump(Define);
// the const keyword *****const CONSTANT_NAME = value
const CONSTANT_NAME ='The const keyword *****const CONSTANT_NAME = value;';
echo '<br/>' . CONSTANT_NAME .'<br/>', gettype(CONSTANT_NAME) .'<br/>';
var_dump(CONSTANT_NAME  );
//Magic constants
$Magic_constants =__FILE__;
echo '<br/>' . $Magic_constants .'<br/>', gettype($Magic_constants) .'<br/>';
var_dump($Magic_constants);
/////////////////////////////////////////////
echo '<br/>' . '/////////////////////////////////////////////';
/**
 * earch on truthy and falsy values 
 * and and  array
 * and use  print_r
 * */
echo  '<br/>' .'falsy values in array with print_r and other value are true'. '<br/>' ;
$falsy_values =[null ,-0,false ,0.0,'',-0.0,[]];
print_r ($falsy_values);
echo '<br/>';
var_dump ($falsy_values);

if($falsy_values[5])
{
echo '<br/>' . $falsy_values[$i] .'=>i am falsy truevalues' ;
}

/////////////////////////////////////////
echo '<br/>' . '/////////////////////////////////////////////';
echo  '<br/>' .'def  between const & variable scope inside function => global '. '<br/>' ;
//global variable
$var ='i am varibale out function';
//Variable pass to Variable
$x='name';
$$x='Variable pass to Variable out function';
$y=$name;
//constant
define('CONSTANT','i am constant');

function test()
{
    global $var ;
    global $x ;
    global $y;
    echo $var .'<br>';
    echo $x .'<br>';
    echo $y .'<br>';
    echo CONSTANT .'<br>';

}
test();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <ul  class="task_2_a">
        <li>
            <h1 >
          <?php echo $task_2_a . '<br/>' ;
          ?>
        </h1>
        <h2>
            <?php echo Define . '<br/>' ;
          ?></h2>
        <p>
        To define a constant, you use the   define()  function. The   define()  function takes the
             constant’s name as the first argument and the constant value as the second argument.
        </p>
        
        <h2>
            <?php echo CONSTANT_NAME . '<br/>' ;
          ?></h2>
        <p>
        another way to define a constant via the const keyword. Here’s the syntax:

        </p>
        <h2>
        define vs const
        </h2>
        <p>
            
                 the define() is a function while the const is a language construct.
                 It means that the define() function defines a constant at run-time, whereas the const keyword
                  defines a constant at compile time.
        </p>
        <h2>
          Magic constants ***** echo __LINE__ 
        </h2>
        <ul>
            <li>
                <h3>
                _ _LINE_ _
                </h3>
                The current line number of the file

            </li>
            <li>
                <h3>
                __FILE__
                </h3>
                The full path and filename of the file. If used inside an include,the name of
the included file is returned. Since PHP 4.0.2, _ _FILE_ _ always contains an
absolute path whereas in older versions it contained relative path under some
circumstance
            </li>
            <li>
            <h3>
            __FUNCTION__
                </h3>
                The function name. (Added in PHP 4.3.0) As of PHP 5 this constant returns
the function name as it was declared (case-sensitive). In PHP 4 its value is
always lowercased.

            </li>
            <li>
              <h3>
              __CLASS__
                </h3>
                The class name. (Added in PHP 4.3.0) As of PHP 5 this constant returns the
class name as it was declared (case-sensitive). In PHP 4 its value is always
lowercased.

            </li>
            <li>
              <h3>
              __METHOD__
                </h3>
                The class method name. (Added in PHP 5.0.0) The method name is returned
as it was declared (case-sensitive)

            </li>
         

        </ul>
        
        </li >
       
        
        <li>
        <h1>
        Differences between constants and variables       </h1>
            
        <p>
       1-There is no need to write a dollar sign ($) before a constant, where as in Variable
one has to write a dollar sign. 
        </p>
        <p>
       2-Constants cannot be defined by simple assignment, they may only be defined
using the define() function.
        </p>
        <p>
       3-Constants may be defined and accessed anywhere without regard to variable
scoping rules
        </p>
        </li>
       
    </ul>
    
</body>
</html>