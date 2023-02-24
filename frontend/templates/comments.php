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




<h3>Comments</h3>

<p><div class="card gedf-card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active text-dark" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Make
                                    a comment</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <form action="../../includes/forms/action.php" method="post">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                <div class="form-group">
                                    <label class="sr-only" for="message">Post comment</label>
                                    <input type="hidden" name="postid" value="<?php echo $_GET['pid'];?>">
                                    <textarea class="form-control m-1" name="message" id="message" rows="3" placeholder="What are you thinking?"></textarea>
                                </div>

                            </div>
                        </div>
                        <div class="btn-toolbar justify-content-between">
                            <div class="btn-group">
                                <button type="submit" name="commentbtn" class="btn btn-secondary">Create Comment </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div></p>
<div class="d-flex justify-content-between">
    
<a href="#comments">Show Comments </a>
<a href="./home.php">  Go Back <i class="fa fa-arrow-left"></i></a>

</div>

<div id="comments">

<!-- 

If desired, the comments can also be hidden again.

<a href="#">Hide Comments</a> 

-->

    <h3>Comments</h3>
    <?php
        include '../../includes/dbconfiq.php';
        $query = mysqli_query($con, "SELECT * FROM comments WHERE post_id = '".$_GET['pid']."'");
        if($num = mysqli_num_rows($query) >= 1){
        while($row = mysqli_fetch_array($query)){
    ?>
    <div class="d-flex align-items-center">
                                <?php
                                    include '../../includes/dbconfiq.php';
                                    $query2 = mysqli_query($con, "SELECT * 
                                    FROM users 
                                    WHERE users.id = '".$row['user_id']."'");
                                    while($row2 = mysqli_fetch_array($query2)){
                                ?>
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" height="45" src="../forms/img/<?php echo $row2['profile'];?>" alt="">
                                </div>
                                <div class="ml-2">
                                

                                    <div class="h5 m-0"><?php echo $row2['username'];?></div>
                                    <div class="h7 text-muted"><?php echo $row2['email'];?></div>

                                <?php }?>
                                </div>
                            </div>
                            <br>
    <p><?php echo $row['message']?></p>
    <hr>
    <?php }}else{ echo "<p class='text-danger'>There are no comments!</p>";}?>
</div>





<style>
body {
    font: 15px/1.6 system-ui,-apple-system,segoe ui,sans-serif;
    max-width: 475px;
    margin: auto;
    padding: 35px;
}
a {
    font-weight: 700;
    display: inline-block;
    transition: 0.3s;
    text-decoration: none;
    color: grey;
}
a:hover {
    transform: translateY(-2px);
    box-shadow: inset 0 -2px grey;
    color: grey;
    text-decoration: none;
}
a:active {
    transition: 0.1s;
    transform: translateY(2px);
}
#comments:not(:target) {
    display: none;
}
#comments:target {
    display: block;
    margin: 50px 0 0;
}
</style>

</body>
</html>