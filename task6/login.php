<?php
include 'usersData/data1.php' ;
$flag = 0;
foreach($users_data as $user) {
    // var_dump($user);
    if($user['username'] == $_GET['username'] && $user['pass'] == $_GET['password']) {
        $flag = 1;
       // echo "data is correct";
        break;
        echo '<br/>';
    } 
}
if($flag == 1) {
    header('location:home.php');
    
    } else {
     header('location:404.php');

    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>
<body>

        
        <form class="login" method="get" action="" >
        <h1>Login </h1>
          <p> UserName </p>
           <input id="txt1" required="required" name="username" class="input-lg" type="text" placeholder="please enter a username"><br>
           <br>
            <p> Password</p> 
            <input  id="txt1" required="required" name="password" class="input-lg" type="password" placeholder="please enter a password"> <br>
            <br>
           <input  id="lg_btn" class="btn-primary btn-lg" type="submit"  value="Login">
           
           <br>
        </form>
    
</body>
</html>