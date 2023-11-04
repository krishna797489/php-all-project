<?php
$marks=[
    "Krishna"=>[
        "Physics"=> 85,
        "Math"=> 78,
        "Chemistry" =>55,
    ],
    "Salman"=>[
        "Physics"=> 68,
        "Math"=> 73,
        "Chemistry" =>79
    ],
    "Mohan"=>[
        "Physics"=> 62,
        "Math"=> 67,
        "Chemistry"=>92
    ]
    ];


/* table ke throw print  krna */
    echo "<table border='2px' cellpadding='5px' cellspacing='0'>
    <tr>
        <th>Student Name</th>
        <th>Physics</th>
        <th>Maths</th>
        <th>Chamistry</th>
    </tr>";
    foreach($marks as $key=> $v1)
    {
        echo "<tr>
                <td> $key </td>";
                foreach($v1 as $v2)
            {
                echo "<td> $v2 </td> ";
            }
        echo "</tr>";
    }
        echo "</table>";


?>