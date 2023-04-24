<?php
    if(isset($_SESSION["message"])){
        $message = $_SESSION['message'];
        echo 
        "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>Hey!</strong> $message
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
        </div>";
        unset($_SESSION['message']);
    }
?>