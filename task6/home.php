<?php
include "layout/header.php";
include 'usersData/Data.php' ;
?>
<!Doctype html>
<html>
 <head>
    <title> Smart School  </title> 
    <meta http-equiv="This is a Wepsite About Smart School Online" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="style.css">
    
 </head>
 <body>
    
<section>
    <img class="mainimg" src="img/pro.jpeg" alt="" srcset="">
    <a href="" class="shcool_logo">Smart School</a>
</section>

<h1 class="our_team">

    Our Team
    </h1>
    <p class="our_team_parg">
    <?php echo $p?> 



    <?php  foreach($data as $key=> $Data )://///////////////////////////////////?>
<section>
    
    <div class="flex">
        <?php  foreach($Data as $key1=> $ahmed )://///////////////////////////////?>
           <div class="division">
            <img class="avater" src="img/imge<?php  echo ($key1); ////////////?>.jpeg" alt="">
            <h3 class="Ahmed">
            <?php echo $ahmed ,$key1;/////////////////?> 
            </h3>
            <p>
               <?php echo $p;///////////////  ?> 
            </p>

            </div>
        <?php    endforeach ///////////////////////////////////////////?>
       
        
    </div>
</section>
<br/>
<?php  endforeach/////////////////////////////////////////?>

   



</body>  
</html>

<?php

include "layout/footer.php";   
?>