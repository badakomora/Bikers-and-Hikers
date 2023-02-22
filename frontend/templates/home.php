<?php 
session_start(); 
if(!isset($_SESSION['email'])) {
$msg = "Please Sign In Correctly or your Account will be De-activated Completely!";
echo "<script type='text/javascript'>alert('$msg');</script>";
header("refresh: 0, ../");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bikers & Hikers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
</head>

<style>body {
            background-color: #eeeeee;
        }

        .h7 {
            font-size: 0.8rem;
        }

        .gedf-wrapper {
            margin-top: 0.97rem;
        }

        @media (min-width: 992px) {
            .gedf-main {
                padding-left: 4rem;
                padding-right: 4rem;
            }
            .gedf-card {
                margin-bottom: 2.77rem;
            }
        }

        /**Reset Bootstrap*/
        .dropdown-toggle::after {
            content: none;
            display: none;
        }</style>
<body>
       
<nav class="navbar navbar-light bg-white">
        <a href="#" class="navbar-brand" style="font-family:'Dancing Script';font-size: 30px;"><b>Bikers & Hikers</b></a>
        <form class="form-inline">
            <div class="input-group">
                <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </nav>


    <div class="container-fluid gedf-wrapper">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="h5"><?php echo $_SESSION['username'];?></div>
                        <div class="h7 text-muted">My Bio</div>
                        <div class="h7">Some quick example text to build on the card title and make up the bulk of the card's content.
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="h6 text-muted">Followers</div>
                            <div class="h5">5.2342</div>
                        </li>
                        <li class="list-group-item">
                            <div class="h6 text-muted">Following</div>
                            <div class="h5">6758</div>
                        </li>
                        <li class="list-group-item"><a href="../includes/logout.php" class="text-dark text-decoration-none">Logout <i class="fa fa-sign-out"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 gedf-main">

                <!--- \\\\\\\Post-->
                <div class="card gedf-card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active text-dark" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Make
                                    a publication</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Images</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <form action="../forms/action.php" method="post" enctype="multipart/form-data">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                <div class="form-group">
                                    <label for="title" class="sr-only">Post Title</label>
                                    <input type="text" name="title" class="form-control m-1" placeholder="post title">
                                    <label class="sr-only" for="message">Post message</label>
                                    <textarea class="form-control m-1" name="message" id="message" rows="3" placeholder="What are you thinking?"></textarea>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" name="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Upload image</label>
                                    </div>
                                </div>
                                <div class="py-4"></div>
                            </div>
                        </div>
                        <div class="btn-toolbar justify-content-between">
                            <div class="btn-group">
                                <button type="submit" name="postbtn" class="btn btn-secondary">Create Post </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <!-- Post /////-->

                <!--- \\\\\\\Post-->
                <?php
                include '../includes/dbconfiq.php';
                $query = mysqli_query($con, "SELECT * 
                FROM posts 
                INNER JOIN users on users.id = posts.user_id");
                while($row = mysqli_fetch_array($query)){
                ?>
                <div class="card gedf-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" height="45" src="../forms/img/<?php echo $row['profile'];?>" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0"><?php echo $row['username'];?></div>
                                    <div class="h7 text-muted"><?php echo $row['email'];?></div>
                                </div>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-dark">Follow</button>
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h text-dark"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                        <a class="dropdown-item" href="#">Save</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <img class="img-fluid" src="../forms//img/<?php echo $row['file'];?>">
                        <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i><?php echo $row['timer'];?></div>
                        <a class="card-link" href="#">
                            <h5 class="card-title text-secondary"><b><?php echo $row['title'];?></b></h5>
                        </a>

                        <p class="card-text"><?php echo $row['message'];?></p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link text-secondary"><i class="fa fa-gittip"></i> Like</a>
                        <a href="#" class="card-link text-secondary"><i class="fa fa-comment"></i> Comment</a>
                        <a href="#" class="card-link text-secondary"><i class="fa fa-mail-forward"></i> Share</a>
                    </div>
                </div>
                <?php }?>
                <!-- Post /////-->



            </div>
            <div class="col-md-3">
                <div class="card gedf-card">
                    <div class="card-body">
                        <h5 class="card-title">Recommended for you</h5>
                        <hr>
                        <h6 class="card-subtitle mb-2 text-muted">Lorem ipsum dolor sit amet, consectetur adip.</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="card-link text-secondary">Refresh</a>
                        <a href="#" class="card-link text-secondary">Share</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script></script>
</body>
</html>
