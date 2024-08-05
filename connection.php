<?php

CONST HOST      = "localhost";
CONST USERNAME  = "root";
CONST PASSWORD  = "";
CONST DB_NAME   = "univ_brawijaya";

$connection = mysqli_connect(HOST, USERNAME, PASSWORD, DB_NAME);

function getAllMahasiswa()
{
global $connection;

$sql = "SELECT * FROM mahasiswa";

$query = mysqli_query($connection, $sql);

$result = [];

while($row = mysqli_fetch_assoc($query)){
    $result[] = $row;
}

return $result;
}

function createMahasiswa($nim, $name, $gender, $unit_id)
{
    global $connection;
    
    $sql = "INSERT INTO mahasiswa(nim, nama, gender, unit_id) VALUES('$nim', '$name', '$gender', '$unit_id')";

    mysqli_query($connection, $sql);
    $result = mysqli_affected_rows($connection);

    if($result > 0){
        return true;
    }else{
        return false;
    }
}

