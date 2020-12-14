
<?php

    // Insert the content of connection.php file
    include('db_connect.php');

    // Update data into the database
    if(ISSET($_POST['updateData']))
    {   
        $id = $_POST['id'];
        $username = $_POST['username'];
        $visits = $_POST['visits'];
        $status = $_POST['status'];
        
        $sql = "UPDATE users SET name='$username' WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        
        $sql1 = "UPDATE visits SET visits='$visits', status = '$status' WHERE id='$id'";
        $result1 = mysqli_query($conn, $sql1);

        if($result1)
        {
            echo '<script> alert("Data Updated Successfully."); </script>';
            header("Location:index.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>