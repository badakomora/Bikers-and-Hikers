<?php include './header.php'; ?>

<div class="container">
    <div class="jumbotron p-3" style="display: flex; justify-content:space-between">
        <h2>Users</h2>
        <h6><?php echo $_SESSION['username']; ?> <br> <?php echo $_SESSION['email']; ?></h6>
    </div>
    <hr>
</div>
<div class="container body">

    <table class="table table-striped" style="width: 100%;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">profile</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <?php
        $query = mysqli_query($con, "SELECT * FROM users");
        $count = 1;
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <tbody>
                <tr>
                    <form action="../../includes/forms/edit.php" method="post">
                        <td scope="row"><?php echo $count; ?></td>
                        <td><input type="text" name="username" value="<?php echo $row['username']; ?>"></td>
                        <td><input type="text" name="email" value="<?php echo $row['email'] ?>"></td>
                        <td><img src="../../includes/forms/img/<?php echo $row['profile']; ?>" width="45" height="45" alt=""></td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button class="btn btn-warning" type="submit" name="edituser">Edit</button>
                        </td>
                    </form>
                    <td>
                        <form action="../../includes/forms/delete.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button type="submit" class="btn btn-danger" name="deleteuser">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        <?php } ?>
    </table>

</div>