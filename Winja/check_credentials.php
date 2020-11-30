<?php

if(isset($_POST['submit'])){
    $conn = mysqli_connect("localhost", "root", "", "wanja");
    if (mysqli_connect_errno()) {
        echo "Unable to connect to MYSQL server";
    }
    else{
        $username = $_POST['username'];
        $password = $_POST['password'];
        $prep_q = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
        $result = mysqli_query($conn, $prep_q);
        $count = mysqli_num_rows($result);
        if (isset($result) && $count > 0) {
            // output data of each row
            echo "right";
            header("Location:level3.html");
        }
        else{
            echo "<p>Incorrect Credentials</p>";
        }
        
    }    
    mysqli_close($conn);
}

?>