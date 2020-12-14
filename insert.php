<?php

    // Insert the content of connection.php file
    include('db_connect.php');
    
    // Insert data into the database
    if(ISSET($_POST['insertData']))
    {
        $username    = $_POST['username'];
        $visitnumber = $_POST['visits'];

        $sql = "INSERT INTO users(name) VALUES('$username')";       
        $result = mysqli_query($conn, $sql);
        $userid = mysqli_insert_id($conn);
        
        $sql2 = "INSERT INTO visits(id,visits) VALUES ('$userid','$visitnumber')";
        $result2 = mysqli_query($conn, $sql2);

        if($result2){
            echo '<script> alert("Data saved."); </script>';
            header('Location: index.php');
        }else{
            echo '<script> alert("Data Not saved."); </script>';
        }
    }
?>