<?php
if(empty($_POST["name"]))
{
    die("name is required");
}
if(! filter_var($_POST["email"],
    FILTER_VALIDATE_EMAIL))
   {
    die("valid email is required");
   }
   if(strlen($_POST["password"])<8)
   {
    die("password must be at least 8 charecter");
   }
   if(! preg_match("/[a-z]/",)["password"])






?>