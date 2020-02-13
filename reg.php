




<?php
session_start();
$con=mysqli_connect("localhost","root","","fest");
if(!$con){
 die('Could not Connect My Sql:' .mysql_error());
}

if(isset($_POST['register_btn']))
{
    $name=$_POST['name'];
    $branch=$_POST['branch'];
    $mobile=$_POST['mobile'];
    $college=$_POST['college'];
    $email=$_POST['email'];
    $query="insert into register(name,branch,mobile,college,email)values('$name','$branch','$mobile','$college','$email')";
     $result=mysqli_query($con,$query);
    if($result)
    {

      echo "<script>alert('Registered successfully.')</script>";

    }
    else
    {
        echo "<script>alert(' Not Registered')</script>";
    }
}

 ?>




































































































































































































<?php
session_start();
$con=mysqli_connect("localhost","root","","register");
if(!$con){
 die('Could not Connect My Sql:' .mysql_error());
}

if(isset($_POST['register_btn']))
{
    $name=$_POST['name'];
    $branch=$_POST['branch'];
    $mobile=$_POST['mobile'];
    $college=$_POST['college'];
    $email=$_POST['email'];
    $query="insert into register(name,branch,mobile,college,email)values('$name','$branch','$mobile','$college','$email')";
     $result=mysqli_query($con,$query);
    if($result)
    {

      echo "<script>alert('Registered successfully.')</script>";

    }
    else
    {
        echo "<script>alert(' Not Registered')</script>";
    }
}

 ?>
