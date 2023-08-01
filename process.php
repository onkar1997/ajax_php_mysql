<?php

// connect to db
$conn = mysqli_connect('localhost', 'root', '', 'ajax-php');

// check post data
if(isset($_POST['name']) || isset($_POST['email'])) {
    $u_name = mysqli_real_escape_string($conn, $_POST['name']);
    $u_email = mysqli_real_escape_string($conn, $_POST['email']);

    $query = "INSERT INTO users (fname, email) VALUES('$u_name', '$u_email');";

    if(mysqli_query($conn, $query)) {
        echo 'User Added . . .';
    } else {
        echo 'ERROR: '.mysqli_error($conn);
    }
}

$conn->close();


