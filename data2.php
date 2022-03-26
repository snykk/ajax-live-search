<?php
require_once("./db.php");
$search = $_GET["search"];

$sql = "SELECT * FROM mahasiswa
            WHERE 
        nama LIKE '%{$search}%' OR
        nim LIKE '%{$search}%' OR
        email LIKE '%{$search}%' OR
        jurusan LIKE '%{$search}%'
        ";
$result = $db->query($sql);

$data = [];
while ($row = $result->fetch_assoc()) {
    array_push($data, $row);
}
header("Content-Type: application/json");
echo json_encode($data);
