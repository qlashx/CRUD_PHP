<?php include('inc/header.php');
?>


<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center display-4 border my-5 "> Data</h1>
            <?php if (isset($_SESSION['name'])) : ?>

                <div>
                    <h2> Name : <?php echo $_SESSION['name'] ?></h2>
                    <h2> Email : <?php echo $_SESSION['email'] ?></h2>
                    <h2> Mobile : <?php echo $_SESSION['phone'] ?></h2>
                </div>
            <?php else :
                $_SESSION['not'] = 1;
                header("location:login.php") ?>
            <?php endif; ?>
        </div>


    </div>
</div>

<?php include('inc/footer.php');  ?>