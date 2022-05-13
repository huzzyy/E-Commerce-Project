<?php
 require("Connection.php")
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Admin Login Panel</title>
   
</head>
<body>

<div class="container">
    <div class="myform">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
            <h2>ADMIN LOGIN</h2>
            <input type="text" placeholder="Admin Name" name="AdminName">
            <input type="password" placeholder="Password" name="AdminPass">
            <button type="submit" name="Login">LOGIN</button>
</form>
</div>

<div class="image">
    <img src="">
</div>
</div>

<?php

    function input_filter($data)
    {
        $data=trim($data); 
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
 
  if(isset($_POST['Login']))  
  {
  
  $AdminName=input_filter($_POST['AdminName']);
  $AdminPass=input_filter($_POST['AdminPass']);
      

  $AdminName=mysqli_real_escape_string($con,$AdminName);
  $AdminPass=mysqli_real_escape_string($con,$AdminPass);
       
  $query="SELECT * FROM `admin_login` WHERE `Admin_Name`=? AND `Admin_Password` =?";

  #prepared statement
if($stmt=mysqli_prepare($con,$query))
{ 
    mysqli_stmt_bind_param($stmt,"ss",$AdminName,$AdminPass);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    if(mysqli_stmt_num_rows($stmt)==1)
    {
       session_start();
       $_SESSION['AdminLoginId']=$AdminName;
       header("location: Admin Panel.php");
    }
    else
    {
        echo"<script>alert('Invalid Admin Name or Password');</script>";
    }
   mysqli_stmt_close($stmt);
}
else
{
    echo"<script>alert('SQL QUERY can not be prepared');</script>";
    
}

  }        

?>

            
    
</body>
</html>