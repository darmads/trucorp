<!DOCTYPE html>
<html>
    <head>
        <title>The Last Exam</title>
        <style>
            table, tr, th, td{
                border: 1px solid black;
                text-align: center;
            }
            th, td{
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <h1>Welcome Ko Yohan!</h1>
        <h2>Here is the users table:</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jabatan</th>
            </tr>
            <?php
                $conn = mysqli_connect("172.19.0.2", "root", "serveradmin", "trucorp");
                $query = "select * from users";
                $kirim = $conn->query($query);
                while($data = $kirim->fetch_assoc()){ ?>
                    <tr>
                        <td><?= $data['id'] ?></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['alamat'] ?></td>
                        <td><?= $data['jabatan'] ?></td>
                    </tr>
            <?php } ?>   
        </table>
    </body>
</html>