<?php
session_start();
include '../includes/dbconfiq.php';
if(isset($_POST['postbtn'])){

    $title = $_POST['title'];
    $message = $_POST['message'];
    $file = $_FILES['file']['name'];
    $user_id = $_SESSION['user_id'];
    $ext = pathinfo($file, PATHINFO_EXTENSION);
    $select = mysqli_query($con, "SELECT * FROM posts WHERE file = '$file' AND file_ext = '$ext' And user_id = '$user_id'");
    $selectrows = mysqli_num_rows($select);
    if ($selectrows >= 1) {
        $msg = "File already Exists!";
        $uploadOk = 0;
        echo "<script type='text/javascript'>
        alert('$msg');
        window.location = '../templates/home.php';
    </script>";

    } else {

        $query = mysqli_query($con, "INSERT INTO posts(user_id, title, message, file, file_ext) VALUES('$user_id', '$title', '$message', '$file', '$ext')");
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





}elseif(isset($_POST['commentbtn'])){

    $user_id = $_SESSION['user_id'];
    $post_id = $_POST['postid'];
    $message = $_POST['message'];
    $select = mysqli_query($con, "SELECT * FROM posts WHERE message = '$message' And user_id = '$user_id'");
    $selectrows = mysqli_num_rows($select);
    if ($selectrows >= 1) {
        $msg = "Comment already Exists!";
        $uploadOk = 0;
        echo "<script type='text/javascript'>
        alert('$msg');
        window.location = '../templates/comments.php?pid=$post_id';
    </script>";

    } else {

        $query = mysqli_query($con, "INSERT INTO comments(post_id, user_id, message) VALUES('$post_id', '$user_id', '$message')");
        if ($query == true) {

            $msg = "Comment added successfully!";
            $uploadOk = 1;
            echo "<script type='text/javascript'>
            alert('$msg');
            window.location = '../templates/comments.php?pid=$post_id';
        </script>";
        } else {

            $msg = "An error ocuured! File is too large.";
            $uploadOk = 0;
            echo "<script type='text/javascript'>
            alert('$msg');
            window.location = '../templates/comments.php?pid=$post_id';
        </script>";
        }
    }
    

}
