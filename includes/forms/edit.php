<?php
include '../dbconfiq.php';
if(isset($_POST['edituser'])){

    $uid = $_POST['id'];
    $email = $_POST['email'];
    $name = $_POST['username'];

    mysqli_query($con, "UPDATE users SET username = '$name', email = '$email' where id = '$uid'");
    $msg = "User record updated successfully!";
        echo "<script type='text/javascript'>
        alert('$msg');
        window.location = '../../backend/templates/users.php';
    </script>";

}

if(isset($_POST['editpost'])){
    
    $title = $_POST['title'];
    $message = $_POST['message'];
    $file = $_FILES['file']['name'];
    $pid = $_POST['pid'];
    $ext = pathinfo($file, PATHINFO_EXTENSION);

        $query = mysqli_query($con, "UPDATE posts SET title = '$title', message = '$message', file ='$file', file_ext = '$ext' WHERE id = '$pid'");
        $target = "img/" . basename($file);
        move_uploaded_file($_FILES['file']['tmp_name'], $target);
        if ($query == true) {

            $msg = "Post updated successfully!";
            $uploadOk = 1;
            echo "<script type='text/javascript'>
            alert('$msg');
            window.location = '../../frontend/templates/edit.php?pid=$pid';
        </script>";
        } else {

            $msg = "An error ocuured! File is too large.";
            $uploadOk = 0;
            echo "<script type='text/javascript'>
            alert('$msg');
            window.location = '../../frontend/templates/edit.php?pid=$pid';
        </script>";
        }
}