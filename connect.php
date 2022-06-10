<?php

$connection = mysqli_connect('localhost','root','','tguide');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $country = $_POST['country'];
    $subject = $_POST['subject'];

    $request = " insert into contact(name,	email,	number	,country,	subject) values('$name','$email','$number','$country' ,'$subject') ";

    mysqli_query($connection , $request);
    header('location:contact');
    
}else{
    echo 'Something Went wrong !
   ! ';
}

?>
