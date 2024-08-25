<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $conn= mysqli_connect('localhost', 'root', '', 'database') or die("Connection Failed:" .mysqli_connect_error());
        if(isset($_POST['name'])) {
            $name= $_POST['name'];
            $message= $_POST['message'];

            $sql= "INSERT INTO `messages` (`user`, `message`) VALUES ('$name', '$message')";

            $query= mysqli_query($conn,$sql);
            if($query) {
                header("Location: index.php");
                exit();
            }
            else {
                echo 'error :(';
            }
        }
    }
?>