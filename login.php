<?php include('inc/header.php');
?>


<div class="container">
    <div class="row">
        <div class="col-12 ">
            <h1 class="text-center display-4 border my-5 p-2"> Login</h1>
        </div>

        <div class="col-sm-6 mx-auto">
            <?php if (isset($_SESSION['error'])) : ?>
                <?php if ($_SESSION['error'] == 1) : ?>
                    <div class="alert alert-danger mt-3">
                        <?php echo 'unvalid email or password'; ?>
                    </div>
                <?php endif; ?>
                <?php unset($_SESSION['error']); ?>
            <?php endif; ?>
            <?php if (isset($_SESSION['not'])) : ?>
                <?php if ($_SESSION['not'] == 1) : ?>
                    <div class="alert alert-danger mt-3">
                        <?php echo 'login first '; ?>
                    </div>
                <?php endif; ?>
                <?php unset($_SESSION['not']); ?>
            <?php endif; ?>






            <div class="border p-5 my-3">
                <form action="handel/login_handel.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Your Password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control" name="submit" value="submit"> Log in </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('inc/footer.php');  ?>