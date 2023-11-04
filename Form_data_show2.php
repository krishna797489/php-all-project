<html>

<head>
    <title>Document</title>
</head>
<body>
    <table border="3px" cellpadding="5px" cellspacing="0px">
        <tr>
            <th>S_no</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>City</th>
        </tr>
        <?php

        $host='localhost';
        $user='root';
        $pass='';
        $dbname='tutorial';

        $conn=mysqli_connect($host,$user,$pass,$dbname);

        $sql = "SELECT * FROM student";
        $Result=$conn->query($sql);
        if($Result->num_rows >0)
        {
            while($row=$Result->fetch_assoc())
            {
                echo "<tr><td>" . $row["s_no"]. "</td><td>". $row["name"]. "</td><td>". $row["email"]. "</td><td>". $row["mobile"]. "</td><td>". $row["city"]. "</td><tr>";
            }
        }
        else
        {
            echo "No result";
        }
        $conn->close();
        ?>

    </table>
</body>
</html>