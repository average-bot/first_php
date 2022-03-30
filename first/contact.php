<?php
    include 'header.php';
    include_once 'includes/dbh.inc.php';
?>
    <section>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <p>This is a contact page</p>
        <?php
            // trying out variables and names
            $names = array("Sandra","Maria","Cassie");
            echo $names['2'];
            echo "<p>This is also a paragraph!</p>";

            // session
            echo $_SESSION['name'];
            
            // cookie
            if(!isset($_COOKIE["location"])){
                echo "error";
                
            }else{
                echo $_COOKIE["location"];
            }
        ?>
        <?php
            $data = "chris11";
            // Created a template
            $sql = "SELECT * FROM users WHERE username=?;";
            // Create a prepared statement
            $stmt = mysqli_stmt_init($conn);
            // Prepare the prepared statements
            // Always check for failure before success
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                echo "SQL statement failed";
            } else {
                // Bind parameters to the placeholder
                // s means that the parameter will be a string (i=integer, B=BLOB, d=double)
                // one s for 1 string, ss for 2 etc
                mysqli_stmt_bind_param($stmt, "s", $data);
                // Run parameters inside database
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                while($row = mysqli_fetch_assoc($result)){
                    echo  "<br>". $row['username']. "<br>";
                }
            }

            
        ?>
        <p>This is a paragraph</p>
    </section>

</body>
</html>