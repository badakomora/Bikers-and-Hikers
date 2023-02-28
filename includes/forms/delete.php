<?php
include '../dbconfiq.php';
if(isset($_POST['deleteuser'])){

    $uid = $_POST['id'];
    $query1 = mysqli_query($con, "DELETE FROM users WHERE id = '$uid'");
    if($query1){
        mysqli_query($con, "DELETE FROM posts WHERE id = '$uid'");
        mysqli_query($con, "DELETE FROM comments WHERE id = '$uid'");
        $msg = "User records deleted successfully!";
        echo "<script type='text/javascript'>
        alert('$msg');
        window.location = '../../backend/templates/users.php';
        </script>";
    }

}
if(isset($_POST['deletepost'])){

    $uid = $_POST['id'];
    $query1 = mysqli_query($con, "DELETE FROM posts WHERE id = '$uid'");
    if($query1){
    mysqli_query($con, "DELETE FROM comments WHERE id = '$uid'");
    $msg = "Post records deleted successfully!";
    echo "<script type='text/javascript'>
    alert('$msg');
    window.location = '../../backend/templates/posts.php';
    </script>";
    }

}
if(isset($_POST['deletecomment'])){

    $uid = $_POST['id'];
    mysqli_query($con, "DELETE FROM comments WHERE id = '$uid'");
    $msg = "Comment records deleted successfully!";
    echo "<script type='text/javascript'>
    alert('$msg');
    window.location = '../../backend/templates/comments.php';
    </script>";

}

if(isset($_GET['pid'])){

    mysqli_query($con, "DELETE FROM posts WHERE id = '".$_GET['pid']."'");
    $msg = "Post records deleted successfully!";
    echo "<script type='text/javascript'>
    alert('$msg');
    window.location = '../../frontend/templates/home.php';
    </script>";

}



?>