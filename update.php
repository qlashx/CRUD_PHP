<?php include('inc/header.php');
?>


<div class="container">
    <div class="row">
        <div class="col-12 ">
            <h1 class="text-center display-4 border my-5 p-2"> Update</h1>
        </div>
        <div class="col-sm-6 mx-auto">
            <div class="border p-5 my-3">
                <form action="handel/update_handel.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Your New Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Your New Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="mobile" placeholder="Your New Mobile">
                    </div>
            </div>
            <div class="form-group">
                <button type="submit" class="form-control" name="submit" value="submit"> Update </button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>

<?php include('inc/footer.php');  ?>