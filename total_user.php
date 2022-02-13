<!DOCTYPE html>
<html>
    <head>
        <title>The Last Exam</title>
    </head>
    <body>
        <h1>Welcome Ko Yohan!</h1>
        <?php
            $conn = mysqli_connect("172.19.0.2", "root", "serveradmin", "trucorp");
            $query = "select * from users";
            $kirim = $conn->query($query);
            $total = 0;
            while($data = $kirim->fetch_assoc()){
                $total += 1;
            }
            echo "<h2>Total users in database: " . $total . "</h2>";
        ?>
    </body>
</html>