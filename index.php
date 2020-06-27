<?php



 
  if(isset($_post["submit"])){

$server='sql308.epizy.com';
$username='epiz_26079418';
$password='cH01iUDQxEH0';
$db='epiz_26079418_student_name';

$con=mysqli_connect($server,$username,$password,$db);

if(!$con){
die("connection to this database fail due to". mysqli_connect_error());
}

else{

echo "connection established";
}
  
  $fname=$_post['fname'];
  $lname=$_post['lname'];
 
  
  //echo " $fname." ".$lname." ".$Standard." ".$rollnumber." ". $Username." ".$Password;
  
$sql= INSERT INTO 'epiz_26079418_student_name'. 'student_name'('firstname','lastname','date')VALUES('Aanu','patel'.'CURRENT_TIMESTAMP');
  
  }
  
 echo $sql;

if ($con->query($sql)==true){
echo "successfully inserted";
}
else{

echo"error: $sql<br> $con->error";

}

$con->close();





  
  

?> 

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>KSM Vidhyalay Hathipura</title>


  </head>
  
  
  
  
  
  <body>
  
   

<form action="student.php" method="post">
 
      <input type="text" class="form-control" name="fname" placeholder="Student's First name" required>
    
   
      <input type="text" class="form-control" name="lname" placeholder="Student's Last name" required>
  




  <button type="submit"  name="submit">Submit</button>
 

</form>


</body>