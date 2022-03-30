<?php
    include_once 'dbh.inc.php'; // needed to connect to database
    // mysqli_real_escape_string so that the database doesn't see it as code, SQLInjection safe
    
    $f_username = mysqli_real_escape_string($conn, $_POST['form_username']); // '' is the name in the input form
    $f_password = mysqli_real_escape_string($conn, $_POST['form_password']);
    $f_first = mysqli_real_escape_string($conn, $_POST['form_first']);
    $f_last = mysqli_real_escape_string($conn, $_POST['form_last']);
    $f_date = mysqli_real_escape_string($conn, $_POST['form_date']);

    //prepared statements


    $sql = "INSERT INTO users (username, password, firstname, lastname, created) VALUES ('$f_username', '$f_password', '$f_first', '$f_last', '$f_date')";
    mysqli_query($conn, $sql);
    header("location: ../index.php? signup=success"); // takes us to another file + optional success message
