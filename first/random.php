    <?php
        $sql = "SELECT * FROM users;";
        $result = mysqli_query($conn, $sql);
        // better to check it here unless you get an ugly error on the website
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo $row['username']. "<br>";
                echo $row['lastname']. "<br>";
            }
        }
    ?>