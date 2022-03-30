<?php
    include 'header.php';
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
        <p>This is a paragraph</p>
    </section>

</body>
</html>