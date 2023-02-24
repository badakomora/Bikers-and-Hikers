<?php 
session_start();
include '../../includes/dbconfiq.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Bikers & Hikers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- font -->
    <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
</head>
<body>
    
    <!-- nav-bar -->
    <nav class="navbar navbar-expand-lg  navbar-light bg-white shadow sticky-top" id="navbar">
        <a href="#" class="navbar-brand text-dark p-2 logo" style="font-family:'Dancing Script';font-size: 30px;"><b>Bikers & Hikers</b></a>
        <button class="navbar-toggler border border-light text-light" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse nav navbar-collapse justify-content-end p-2" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
        <a href="users.php" class="nav-link text-dark"> <i class="fa fa-users m-2"></i> Users </a>
                </li>
                <li class="nav-item">
        <a href="posts.php" class="nav-link text-dark"> <i class="fa fa-sticky-note m-2"></i> Posts</a>
                </li>
                <li class="nav-item">
        <a href="comments.php" class="nav-link text-dark"> <i class="fa fa-comment m-2"></i> Comments</a>
                </li>
                <li class="nav-item">
        <a href="../../includes/logout.php" class="nav-link text-dark"> <i class="fa fa-sign-in m-2"></i> Logout</a>
                </li>
            </ul>
        </div>
    </nav>