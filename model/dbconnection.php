<?php

define('host', "localhost");

define('user', "root");

define('password', 'AdItYa$h');

define('database', "lrms");





function getConnection(){

    

   $con = new mysqli(host, user, password, database);

    

    mysqli_error($con);

    

return $con;



}

//print_r(getConnection());



?>

