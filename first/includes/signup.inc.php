<?php
    include_once 'dbh.inc.php'; // needed to connect to database

    $f_username = $_POST['form_username']; // '' is the name in the input form
    $f_password = $_POST['form_password'];
    $f_first = $_POST['form_first'];
    $f_last = $_POST['form_last'];
    $f_date = $_POST['form_date'];


    $sql = "INSERT INTO users (username, password, firstname, lastname, created) VALUES ('$f_username', '$f_password', '$f_first', '$f_last', '$f_date')";
    mysqli_query($conn, $sql);
    header("location: ../index.php? signup=success"); // takes us to another file + optional success message
