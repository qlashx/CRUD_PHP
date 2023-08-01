<?php
include('inc/header.php');
$sql = 'SELECT * FROM `users`';
$result = mysqli_query($conn, $sql);
?>

<h1 class="text-center display-4 border p-3 my-5"> ALL USERS </h1>

<div class="row">
    <?php if (isset($_SESSION['del']) == 1) : ?>
        <div class="alert alert-success mt-3">
            <?php echo 'USER DELETED '; ?>
        </div>
    <?php endif; ?>
    <div class="col-sm-12">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">phone</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <th scope="row"><?php echo $row['id']; ?></th>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td>
                            <a href="Delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include('inc/footer.php'); ?>