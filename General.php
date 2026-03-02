
<?php
/*
function isPrime(){
    $num=readline("Enter A number:");
      if($num<=1)
        echo "Not a prime";
    for($i=2;$i<$num;$i++){
        if($num%$i==0){
            echo "Not a prime number";
            return;
          }
        else
            echo "$num is Primme";
         return;
    }
   }
 isPrime();


$num1=readline("Enter n1:");
$num2=readline("Enter n2:");
$num3=readline("Enter n3:");

if($num1 > $num2 && $num1 > $num3 ){
    echo "$num1 is large";
}
elseif($num2 > $num1 && $num2 > $num3 ){
    echo "$num2 is large";
}
else
    echo "$num3 is large"




?> 
 


<!-- 
  <form method="post">
    <input type="text" placeholder="Name" name="name"/>
  </form> -->


  <?php
  
  define("PI", 3.14);
   echo PI."<br>";
  if (defined("PI")) {
    echo "PI is defined"."<br>";
}
 #echo $_POST['name'];

 $greeting="Hello";

 function HI(){
    $name="Siva Nandini";
     $wish="HI";
     global $greeting;
     global $Greeting;
     $Greeting=$greeting;
     echo $Greeting."<br>";
     echo "Hey Pilla $wish $name"."<br>";

 }

HI();

function test(){
    static $c=0;
    $c++;
    echo $c."<br>";
}
test();
test();
test();


 $c="<b> Hiiii</b>";
    echo htmlspecialchars($c)."<br>";


$b="<script> alert('Hacked!!!');</script>";
 echo  htmlspecialchars($b)."<br>";
 
$email="sivanandini@gmail.com";

if(strpos($email,"&")){
    echo "Valid email";
}
else
    echo "Invalid email <br>";

echo strcmp("Hello", "Hello")."<br>"; 
echo strcmp("Hello", "hello")."<br>";   


echo substr("Hello World", 0, -1)."<br>";

echo str_replace("boy","good","He is a bad boy") ."<br>";  

echo str_word_count("www,nandini,nani,w")."<br>"; //4
$arr=["apple","banana","orange"];
$a=array_push($arr,"grape");
$array_pop=$arr;
echo array_pop($array_pop)."<br>";
echo implode(",",$arr)."<br>";
$str="my,name,is,nandini";
$strarr=explode(",",$str);
foreach($strarr as $s){
    echo $s."<br>";
}

$games = array(
array("Basketball", "A", "B"),
array("Cricket", "C", "B"),
array("Shuttle", "B", "C"));
 var_dump($games);

foreach($games as $game){
    foreach($game as $g){
        echo $g."<br>";
    }
    echo "<br>";
}

  ?>


#count of vowels and consonants in a string
$str="Hi my name is Nandini";
$chars=str_split($str); //returns an array of characters
$vowels=0;
$consonents=0;
foreach($chars as $c){
    if($c=='a'|| $c=='e'|| $c=='i'||$c=='o'||$c=='u'){
        $vowels++;

    }
    elseif($c>='A' && $c<='Z' || $c>='a' && $c<='z' ){
        $consonents++;

    }
}
echo "Vowels: $vowels <br>";
echo "Consonents: $consonents <br>";

$number=10;
$fact=1;
for($i=1;$i<=$number;$i++){
    $fact=$fact*$i;  
}
echo "Factorial of $number is $fact <br>";


$marks=array('tel'=>'95',
           'eng'=>'94',
           'maths'=>'100',
           'science'=>'98',
           'social'=>'96',
           'Hindi'=>'93');

$sum=0;
foreach($marks as $key=>$value){
    if(is_numeric($value)){
        $sum=$sum+$value;
    }
}
echo "Total marks: $sum <br>";

$average=$sum/count($marks);
echo "Average marks: $average <br>";


$str="NAndiNI";
$l=strtolower($str);
$u=strtoupper($str);
echo $l, $u ;


//without using temp variable
$num1=10;
$num2=20;
echo " Before: $num1  and $num2";
$num1=$num1+$num2; //30
$num2=$num1-$num2; //10
$num1=$num1-$num2; //20
echo " After: $num1  and $num2";

*/
if($_SERVER["REQUEST_METHOD"]!="POST"){
    echo "Invalid Request";
    exit;
}
// $username=$_POST['username'];
 $password=$_POST['password'];
 $email=$_POST['email'];

if( empty($password) ||empty($email) ){
    echo "All Fields are Required";
    exit;
}
$HashPassword=password_hash($password,PASSWORD_DEFAULT);


$conn=new mysqli("localhost","root","","mydb");
if($conn->connect_error){
    die("database connection is failed!");
}
// $checkEmail="select id from Users where EMAIL='$email'";
// $Result=$conn->query($checkEmail);
// if($Result->num_rows>0){
//     echo "Account already exists. Please login.";
//     exit;
// }

// $insertquery="
// INSERT INTO Users(NAME,PASSWORD,EMAIL)
//  VALUES('$username','$HashPassword','$email')";

 //fetching records
$fetchQuery="SELECT * FROM Users where EMAIL='$email'";
$Records=$conn->query($fetchQuery);
if($Records->num_rows>0){
        while($row=$Records->fetch_assoc()){
        echo "ID: ".$row['ID']. " Name: ".$row['NAME']. " Email: ".$row['EMAIL']. "<br>";
    }
  
    echo "SignUp successfull";
}
else
    echo "SignUp Unsuccessfull";



//deleting a row
// $deleteQuery="DELETE FROM Users WHERE ID=4";
// if($conn->query($deleteQuery)){
//     echo "Record deleted successfully";
// }
// else
//     echo "Failed to delete record";




// if($conn->query($insertquery)){
//     echo "SignUp successfull";
// }
// else
//     echo "SignUp Unsuccessfull";




//     while($row=$Records->fetch_assoc()){
//         echo "ID: ".$row['ID']. " Name: ".$row['NAME']. " Email: ".$row['EMAIL']. "<br>";
//     }
// }
// else
//     echo "No records found";






/*


$conn=new mysqli("localhost","root","","imgdb");
if($conn->connect_error){
    die("Database connection failed!");
}
if(isset($_POST['upload'])){
$img_name=$_FILES['image']['name'];
$img_tmp=$_FILES['image']['tmp_name'];
$target_dir="uploads/";
$target_file=$target_dir.basename($img_name);
if(!is_dir($target_dir)){
    mkdir($target_dir);
}
if(move_uploaded_file($img_tmp,$target_file)){
    $insertImg="INSERT INTO images(NAME,PATH) VALUES('$img_name','$target_file')";
    if($conn->query($insertImg)){
        echo "Image uploaded and saved to database successfully.";
    }
    else
        echo "Failed to save image to database.";
}

}

$Records=$conn->query("SELECT * FROM images");
if($Records->num_rows>0){
    while($row=$Records->fetch_assoc()){
        echo "ID: ".$row['ID']. " Name: ".$row['NAME']. " Path: ".$row['PATH']. "<br>";
    }
}
else
    echo "No records found";



$conn=new mysqli("localhost","root","","db");
if($conn->connect_error){
    die("Database connection failed!");
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $password=$_POST['password'];
    $email=$_POST['email'];
$stmt=$conn->prepare("SELECT id,password FROM users WHERE email=?");
$stmt->bind_param("s",$email);
$stmt->execute();
$result=$stmt->get_result();
if($result->num_rows === 1){
        echo "Login successful";
    }
    else
        echo "Invalid password/user not Exists .";
}
else
    echo "No account found with that username.";
$stmt->close();

$conn->close();




$marks=array('tel'=>'95',
           'eng'=>'94',
           'maths'=>'100',
           'science'=>'98',
           'social'=>'96',
           'Hindi'=>'93');

$values=array();

foreach($marks as $key=>$value){
        if(is_numeric($value)){
         $values[]=$value;
        }
}
echo"original array: <br>";
   foreach($values as $v){
    echo $v."<br>";
   }


echo"sorted array: "."<br>";

sort($values);
foreach($values as $v){
    echo $v."<br>";
   }
*/
