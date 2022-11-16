<?php
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "mhs");

$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($db->connect_error) {
    //  akan dieksekusi ketika terjadi error
    die("Koneksi Gagal");
}


// CREATE TABLE mahasiswa (
//     id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     nama VARCHAR(30) NOT NULL,
//     nim VARCHAR(30) NOT NULL,
//     email VARCHAR(30) NOT NULL,
//     jurusan VARCHAR(25) NOT NULL,
// );

// INSERT INTO mahasiswa (nama,nim, email, jurusan)
// VALUES
// ("Moh. Najib Fikri", "202410102033","iniemail@gmail.com", "Teknologi Informasi"),
// ...

// migration mwuehehe
$sql = "CREATE TABLE IF NOT EXISTS mahasiswa (
    id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(30) NOT NULL,
    nim VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    jurusan VARCHAR(25) NOT NULL
)";
$db->query($sql);

// make simple seeders
$seeder = "INSERT INTO mahasiswa (nama,nim, email, jurusan)
            VALUES
                ('Moh. Najib Fikri', '202410102033','iniemail@gmail.com', 'Teknologi Informasi'),
                ('Fulan','202920292029','emailjuga@gmail.com','Teknik Mesin'),
                ('Bob','201929182919','bobemail@gmail.com','Teknik Perkapalan'),
                ('Jone Doe','20292292829','gmm@gmail.com','Kedokteran'),
                ('Jane Doe','91829281822','akua@gmail.com','Hubungan Internasional'),
                ('Aband','92928228281','emailnih@gmail.com','Informatika'),
                ('Xuki','92029281231','emailbaruygy@gmail.com','Sistem Informasi'),
                ('Kiku','20292918221','seseorang@gmail.com','Software Engineer'),
                ('Joe','28272722621','joeajah@gmail.com','Matematika'),
                ('Zarr','28271622123','zarnih@gmail.com','Teknik Pertambangan'),
                ('Owie','202918272712','owiepunyaemail@gmail.com','Teknik Pembangunan')
";
$sql  = "SELECT * FROM mahasiswa";
$result = $db->query($sql);
if ($result->num_rows == 0) {
    $db->query($seeder);
}
