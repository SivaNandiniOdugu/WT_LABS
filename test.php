<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!-- <form action=test.php method="get">
        <input type=text name="username" placeholder="Enter your username"/>
        <br><br>
        <input type=password name="password" placeholder="Enter your password"/><br><br>
        <input type=submit value="LOG IN"/>
    </form> -->
</body>
</html>


<?php
// echo $_GET["username"] . "<br>";
// echo "$_GET[password] <br>";
// echo "{$_GET["username"]} <br>";

// echo "Hello, siva nandini <br>"; 
// $name="Siva Nandini";
// $age=20;
// echo "My name is $name and I am $age years old.";
/*

$_GET,$_POST = special variables used to collect data from an html form
             data is sent to the file in the action attribute of <form>
             <form action="some_file.php" method="get">

$_GET = DAta is appended to the url
       Not Secure
       Char limit
       Bookmark is possible w/ values 
       GET requests can be  cached
       Better for a search page


$_POST = Data is packaged inside the body of the HTTP request
        MOST SECURE
        No Data limit
        cannot bookmark
        GET requests are not  cached
        Better for submitting credentials

 */

?>
