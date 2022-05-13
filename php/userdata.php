<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection_successful";

}else{
    echo "No Connection";
}

mysqli_select_db($con, 'salesemprieuser');
$user = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$comments = $_POST['message'];

$query = " insert into userinfodata (user, email, subject, comment)
values ('$user', '$email', '$subject', '$comments') ";

mysqli_query($con, $query) 


?>