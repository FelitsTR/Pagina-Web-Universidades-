<?php
$con=mysql_connect("localhost","root","");
    if(!$con)
    {
        die("Nu se poate face conexiunea la baza de date" . mysql_error());
    }
    ?>