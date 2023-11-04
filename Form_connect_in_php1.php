<?php
    if(isset($_POST['submit']))
    {
        $name =$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $city=$_POST['city'];
       

        $host='localhost';
        $user='root';
        $pass='';
        $dbname='tutorial';

        $conn=mysqli_connect($host,$user,$pass,$dbname);

        $sql="insert into student(name,email,mobile,city) values('$name','$email','$mobile','$city')";
        mysqli_query($conn,$sql);
    }

?>


<html>
<head>
    <title>Home</title>
</head>
<body>
    <form action="#" method="POSt">
        Name:<input type="text" name="name"> <br><br>
        Email:<input type="email" name="email"> <br><br>
        Mobile:<input type="number" name="mobile"> <br><br>
        City:<input type="text" name="city"> <br><br>
        <input type="Submit" name="submit" value="Submit"> <input type="Button" name="view" value="View">
    </form>
    
</body>
</html>