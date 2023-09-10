<?php
$insert=false;
if(isset($_POST['name'])){
    
$server = "localhost";
$username = "root";
$password = ""; 

$con = mysqli_connect($server,$username,$password);

if(!$con){
    die("connection to this database failed due to" . 
    mysqli_connect_error());

}
// echo "Success connecting to the db"; =;$_POST['']
$name=$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$desc=$_POST['desc'];

$sql = "INSERT INTO `russia.trip`.trip ( `Name`, `Age`, `Gender`, `Phone number`,
`Email`, `Other`, `DD`) VALUES ('$name  ', '$age', '$gender', '$phone', '$email', '$desc', current_timestamp());";
// echo $sql;
 if($con->query($sql) == true)
 {
   // echo "Successfully inserted";
   $insert=true;
 }
 else{
    echo "Error :$sql <br> $con->error";
    
 }
 $con->close();
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Russia Trip</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="Russia"src="russia.jpg" alt="Russia">
    <div class="container"> 
       <h3> Welcome to Russia trip With your Ashish Mishra  </h3>  
       <p> Plase Fill The Frome Right Information </p>
      <?php
       if($insert == true) {
       echo "<p class='SubmitMsg'>Thanks for submiting your from .we are happy to see you for Russia trip </p>";
       } 
       ?>
       <form action ="index.php" method="post">
       <input type="text" name="name"id="name"placeholder="Enter Your Name">
       <input type="text" name="age"id="age"placeholder="Enter Your Age">
       <input type="text" name="gender"id="gender"placeholder="Enter Your Gender">
       <input type="phone" name="phone"id="phone"placeholder="Enter Your Phone Number">
       <input type="email" name="email"id="email"placeholder="Enter Your Email">
       <textarea name="desc" id="desc" cols="30"row="10" placeholder="Enter other Information"></textarea>
       <button class="btn">Submit</button>
       
       </form>
        </div>

        <script src="index.js"></script>
      <!---->
</body>
</html>
