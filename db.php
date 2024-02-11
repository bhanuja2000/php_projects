<?php
$dbhost='localhost';
$dbuser='root';
$dbpassword='';
$dbname='Westminister';

$conn=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

if($conn){
//echo "databse connection sucsessfull";
}
else{
    echo "connection faild";
}

?>