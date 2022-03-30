<?php
    include 'header.php';
    $cookie_name = "location";
    setcookie($cookie_name, "world", time() + 86400); // 1 day
?>
    <section>        
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <p>This is an index page</p>
        <?php
            // trying out variables and names
            $names = array("Sandra","Maria","Cassie");
            echo $names['1'];
            echo "<p>This is also a paragraph!</p>";

            //session
            $_SESSION['name'] = 'Sandy';
            echo $_SESSION['name'];
            
            // cookie
            if(!isset($_COOKIE[$cookie_name])){
                echo "error";
                
            }else{
                echo $_COOKIE[$cookie_name];
            }
            
        ?>
        <p>This is a paragraph</p>
    </section>

</body>
</html>