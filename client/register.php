<?php
include 'includes/navbar.php';
include 'includes/header.php';
?>
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body ">
                        <form action="registercode.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="username">First Name</label>
                                <input type="text" class="form-control" name="firstname" placeholder="Enter Firstname">
                            </div>
                            <div class="form-group mb-3">
                                <label for="username">Last Name</label>
                                <input type="text" class="form-control" name="lastname" placeholder="Enter Lastname">
                            </div>
                            <div class="form-group mb-3">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Enter Username">
                            </div>
                            <div class="form-group mb-3">
                                <label for="username">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter Email">
                            </div>
                            <div class="form-group mb-3">
                                <label for="username">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter Password">
                            </div>
                            <div class="form-group mb-3">
                                <label for="username">Confirm Password</label>
                                <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="register_btn" class="btn btn-primary btn-lg">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php' ?>