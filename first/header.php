<?php
    include 'functions/user-functions.php';
    //include_once ''; show it only one time on the website
    //include_once 'includes/dbh.inc.php'; // could remove it when taking out all the sql queries
?>
<?php
    session_start(); // will remember the session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <br>
        <form action="includes/signup.inc.php" method="POST">
            <input type="text" name="form_username" placeholder="username"><br>
            <input type="password" name="form_password" placeholder="password"><br>
            <input type="text" name="form_first" placeholder="firstName"><br>
            <input type="text" name="form_last" placeholder="lastName"><br>
            <input type="text" name="form_date" placeholder="date"><br>
            <button type= "submit" name="submit">Sign up</button>
        </form>

    </section>
