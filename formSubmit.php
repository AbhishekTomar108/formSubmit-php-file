<?php

header('Access-Control-Allow-Origin: *');
        $conn = new mysqli('localhost', 'root', '', 'user');

        if(mysqli_connect_error()){
            echo mysqli_connect_error();
            exit();
        }

        else{
           $name = $_POST['name'];
           $email = $_POST['email'];
           $mobile = $_POST['mobile'];
           $location = $_POST['location'];

           $sql = "INSERT INTO userdetails(name,email,mobile,location) VALUES ('$name','$email','$mobile','$location')";
           $res = mysqli_query($conn,$sql);

           if($res){
            echo 'data submitted!';
           }

           else{
            echo 'Error!';
           }

           $conn->close();
        }
?>