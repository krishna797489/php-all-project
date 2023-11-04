
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        name: <input type="name" name="name"><br><br>
        marks <input type="text" name="marks"><br><br>
        school_name: <input type="text" name="school"><br><br>
        dob: <input type="date" name="dob"><br><br>
        city: <input type="text" name="city"><br><br>
        <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $marks=$_POST['marks'];
        $school=$_POST['school'];
        $dob=$_POST['dob'];
        $city=$_POST['city'];
    }
$host='localhost';
$user='root';
$pass='';
$dbname='tutorial';
$conn=mysqli_connect($host,$user,$pass,$dbname);
$sql=" insert into school(name,marks,school,dob,city) values ('$name','$marks','$school','$dob','$city')";
mysqli_query($conn,$sql);





?>
    
</body>
</html>