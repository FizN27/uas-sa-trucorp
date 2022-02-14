<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Address</th>
            <th>Jabatan</th>
        </tr>
        <?php
            $db = mysqli_connect("trucorpDB", "root", "root", "trucorp");
            
            $query = "SELECT * FROM users";

            $result = mysqli_query($db, $query);
            
            $total = 0;
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                <td>" . $row['id'] . "</td>" .
                "<td>" . $row['nama'] . "</td>" .
                "<td>" . $row['alamat'] . "</td>" .
                "<td>" . $row['jabatan'] . "</td>
                </tr>";
                $total++;
            }

            echo "Total: $total users in db";

            mysqli_close($db);
        ?>
    </table>
</body>
</html>