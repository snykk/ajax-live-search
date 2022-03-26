<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Ajax</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <h1>Live Search</h1>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cariii" id="search">
            <button class="btn btn-outline-secondary" type="button" id="submit">Button</button>
        </div>

        <table class="table table-success table-striped mt-4">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Nim</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                </tr>
            </thead>
            <tbody id="data">
                <?php
                require_once("./db.php");
                $sql = "SELECT * FROM mahasiswa";
                $result = $db->query($sql);
                while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["nim"]; ?></td>
                        <td><?= $row["email"]; ?></td>
                        <td><?= $row["jurusan"]; ?></td>
                    </tr>
                <?php }; ?>
            </tbody>
        </table>
    </div>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- pooper js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- <script src="./script.js"></script> -->
    <!-- <script src="./script2.js"></script> -->
    <script src="./script3.js"></script>
    <!-- <script src="./script4.js"></script> -->
</body>

</html>

<!--
CREATE TABLE mahasiswa (
    id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(30) NOT NULL,
    nim VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    jurusan VARCHAR(25) NOT NULL,
);

INSERT INTO mahasiswa (nama,nim, email, jurusan)
VALUES
("Moh. Najib Fikri", "202410102033","iniemail@gmail.com", "Teknologi Informasi"),
    -->