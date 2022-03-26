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

while ($row = $result->fetch_assoc()) {
    echo "
    <tr>
        <td>{$row["nama"]}</td>
        <td>{$row["nim"]}</td>
        <td>{$row["email"]}</td>
        <td>{$row["jurusan"]}</td>
    </tr>
    ";
}
