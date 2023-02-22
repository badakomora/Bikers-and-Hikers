<?php
include '../includes/dbconfiq.php';
if(isset($_POST['postbtn'])){

    $title = $_POST['title'];
    $message = $_POST['message'];
    $file = $_FILES['file']['name'];
    $ext = pathinfo($file, PATHINFO_EXTENSION);
    $select = mysqli_query($con, "SELECT * FROM posts WHERE file = '$file' AND file_ext = '$ext'");
    $selectrows = mysqli_num_rows($select);
    if ($selectrows >= 1) {
        $msg = "File already Exists!";
        $uploadOk = 0;
        echo "<script type='text/javascript'>
        alert('$msg');
        window.location = '../templates/home.php';
    </script>";

    } else {

        $query = mysqli_query($con, "INSERT INTO posts(title, message, file, file_ext) VALUES('$title', '$message', '$file', '$ext')");
        $target = "img/".basename($file);
        move_uploaded_file($_FILES['file']['tmp_name'], $target);
        if ($query == true) {

            $msg = "Post added successfully!";
            $uploadOk = 1;
            echo "<script type='text/javascript'>
            alert('$msg');
            window.location = '../templates/home.php';
        </script>";
        } else {

            $msg = "An error ocuured! File is too large.";
            $uploadOk = 0;
            echo "<script type='text/javascript'>
            alert('$msg');
            window.location = '../templates/home.php';
        </script>";
        }
    }





}elseif(isset($_POST['editbtn'])){





    

}
