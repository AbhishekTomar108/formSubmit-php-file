<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

        header('Access-Control-Allow-Origin: *');
        $conn = mysqli_connect('localhost', 'id19546599_bootcampuser', 'XDpp3#S=K6g1rE{h', 'id19546599_user');

        if(mysqli_connect_error()){
            echo mysqli_connect_error();
            exit();
        }

        else{
            if ($_SERVER['REQUEST_METHOD'] === 'POST'){
           
           $name = $_POST['name'];
           $email = $_POST['email'];
           $mobile = $_POST['mobile'];
           $location = $_POST['location'];
           $mode = $_POST['mode'];

     

           $sql = "INSERT INTO FullStackUserDetails(name,email,mobile,location,mode) VALUES ('$name','$email','$mobile','$location','$mode')";
           $res = mysqli_query($conn,$sql);

           if($res){
            echo true;
           }

           else{
            echo false;
           }

        }
    }
        $conn->close();
?>