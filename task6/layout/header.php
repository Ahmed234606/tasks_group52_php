
<?php
include 'usersData/Data.php' ;

?>
<!Doctype html>
<html>
 <head>
    <title> Smart School  </title> 
    <meta http-equiv="This is a Wepsite About Smart School Online" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/style.css">
    
 </head>
 <body>
    <header>
    <nav>
        <?php foreach($headerdata as $data): ?>
        <a href="" ><?php echo $data?></a>
        <?php endforeach?>
    </nav>


</header>
