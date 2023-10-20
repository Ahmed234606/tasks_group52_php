<?php

$Name=$_GET['Name'];
echo 'your name ';
print_r ($Name);
echo '<br/>';

$ID=$_GET['ID'];
echo 'your id ';
print_r ($ID);
echo '<br/>';

$phone=$_GET['phone'];
echo'your phone ';
print_r ($phone);
echo '<br/>';

$adress=$_GET['adress'];
echo 'address ';
print_r ($adress);
echo '<br/>';

$jop_title=$_GET['jop_title'];
echo'jop_title ';
print_r ($jop_title);
echo '<br/>';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get" action="" >
            <div id="ins_man">
            <p> Teacher Name </p><br/><input name="Name" placeholder="Enter Your Name"> <br/><br/>
            <p> Teacher ID   </p><br/><input name="ID"  placeholder="Enter ID Of Teacher"><br/><br/>
            <p> Teacher Phone </p><br/><input name="phone" placeholder="Enter Phone Number"><br/><br/>
            <p> Teacher Adress </p><br/><input name="adress"  placeholder="Enter The Stage"><br/><br/>
            <p>  Jop Title </p> <br/> <input name="jop_title" placeholder="Enter The Jop Title"><br/><br/>
            <input  id="lg_btn" class="btn-primary btn-lg" type="submit"  value="Login">
             
</form>
</body>
</html>

