<?php
    $age=12;
    switch($age)
    {

         /* koi bi ek case age se match hogi to sare age print ho jayega */
        case 12:
            echo "Yor are 12 years old <br>";
            break; /* breake se ek hi ko print krega */

        case 45:
            echo "Yor are 45 years old <br>";
            break;

        case 56:
            echo "Yor are 45 years old boy <br>";
            break;

            default:
            echo "Your age is weird <br>";
        }
?>