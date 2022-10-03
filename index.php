<?php
   $insert = false; 
   if (isset($_POST['name'])){ 
 $server = "localhost";
 $username ="root";
 $password="";
 $con = mysqli_connect($server, $username, $password);
 if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
 } 
//    echo "hello welcome sir in database"; 
 $name = $_POST['name'];
 $age = $_POST['age'];
 $gender= $_POST['gender'];
 $email= $_POST['email'];
 $phone = $_POST['phone'];
 $desc  = $_POST['desc'];
  $sql ="INSERT INTO `vk`.`vk` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
//  echo $sql;
// INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'good', '20', 'male', 'this@gamil.com', '999999999', 'hello good', current_timestamp());


 if ($con->query($sql) == true){
    //   echo "sussecfully inserted"; 
        $insert=true;
  }
 else{
     echo"ERROR: $sql <br> $con->error";

  }
   $con->close();
  }
?> 





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to travel from</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img  class="bg"src="bg.jpg" alt="sunset">
    <div class="container">
         <h1>Welcome To Udaipur Trip form</h1>
        <p>Enter your details to confirm your participation in the trip</p>
        <?php
        if($insert == true){
     echo "<p class='submitMsg'>Thanks for submitting the form we are happy to see you joining the udaipur trip</p>";
        }
    ?> 
   
     <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name"> 
        <input type="text" name="age" id="age" placeholder="Enter your age"> 
        <input type="text" name="gender" id="gender" placeholder="Enter your gender">
        <input type="email" name="email" id="email" placeholder="Enter your email"> 
        <input type="phone " name="phone" id="phone" placeholder="Enter your phone">
        <textarea name="desc" id="desc" cols="30" rows="10"
            placeholder= "enter any other information here "></textarea>
            <button class="btn">submit</button>
    </form>
    </div>
    <script src="index.js"></script>
    <!-- INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'bhai', '20', 'male', 'this@gamil.com', '999999999', 'this is my first try php', current_timestamp()); -->
</body>
</html>






