<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'dbconn.php';
    
    $Email = $_POST['name'];
    $pass = $_POST['roomNo'];
    


    $sql = "SELECT * FROM `users` WHERE email ='roomNo'";
    $res = mysqli_query($conn,$sql);
    if($res){
        $num = mysqli_num_rows($res);
        if($num>0){
            echo "Room already booked";
        }else{
        
            $sql = "INSERT INTO `users`(`roomNo`, `email`) VALUES ('$roomNo','$email')";
    
    $res = mysqli_query($conn,$sql);

    if($res){
       echo 'Booking successful';
    }
    }

        }
    }

