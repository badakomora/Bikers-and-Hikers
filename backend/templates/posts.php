<?php include './header.php'; ?>

<div class="container">
    <div class="jumbotron p-3" style="display: flex; justify-content:space-between">
        <h2>Posts</h2>
        <h6><?php echo $_SESSION['username']; ?> <br> <?php echo $_SESSION['email']; ?></h6>
    </div>
    <hr>
</div>
<div class="container body">

    <table class="table table-striped" style="width: 100%;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Message</th>
                <th scope="col">Image</th>
                <th scope="col">Posted By</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <?php
        $query = mysqli_query($con, "SELECT * FROM posts");
        $count = 1;
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <tbody>
                <tr>
                        <td scope="row"><?php echo $count; ?></td>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['message'] ?></td>
                        <td><img src="../../includes/forms/img/<?php echo $row['file']; ?>" width="45" height="45" alt=""></td>
                        <?php
                        $query2 = mysqli_query($con, "SELECT * FROM users where id = '".$row['user_id']."'");
                        while ($row1 = mysqli_fetch_array($query2)) {
                        ?>
                        <td><?php echo $row1['email'] ?></td>
                        <?php }?>
                        <td>
                        <form action="../../includes/forms/delete.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button type="submit" class="btn btn-danger" name="deletepost">Delete</button>
                        </form>
                        </td>
                </tr>
            </tbody>
        <?php $count++; } ?>
    </table>

</div>