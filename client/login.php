<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body ">
                        <div class="form-group mb-3">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter Username">
                        </div>
                        <div class="form-group mb-3">
                            <label for="username">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter Password">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" name="login_btn" class="btn btn-primary btn-lg">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php' ?>