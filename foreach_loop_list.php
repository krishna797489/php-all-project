<?php
$emp=[
    [1,"Krishna","Manager",5000],
    [2,"Salman","Salesman",2000],
    [3,"Mohan","Computer_operator",12002],
    [4,"Amir","Driver",5000],
];
echo "<table border='2px' cellpadding=5px cellspacing=0px>";
echo "<tr>
        <th>Emp_Id</th>
        <th>Emp_Name</th>
        <th>Emp_designation</th>
        <th>Salary</th>
</tr>";
foreach($emp as list($id,$name,$designation,$salary))
{
    echo "<tr><td>$id</td> <td>$name</td> <td>$designation</td> <td>$salary</td> </tr></td>";
}
echo "</table>";


?>