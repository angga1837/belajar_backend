<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div class="container">

        <div id="page-h" class="page-header">
            <div class="page-logo">
                <img src="" alt="logo" class="logo">
            </div>
            <h3 class="menu-heading">Dashboard</h3>
            <a href="?page=dashboard"><i class="fa fa-tachometer fa-icon" aria-hidden="true"></i>Dashboard</a>
            <h3 class="menu-heading">Dosen</h3>
            <a href="?page=dosen"><i class="fa fa-user-o fa-icon" aria-hidden="true"></i>Daftar Dosen</a>
            <h3 class="menu-heading">Mahasiswa</h3>
            <a href="?page=mahasiswa"><i class="fa fa-user fa-icon" aria-hidden="true"></i>Daftar Mahasiswa</a>
        </div>

        <div class="page-content">
            <div class="content">
                <?php
                    if (isset($_GET["page"])) {
                        $page = $_GET["page"];
                        switch ($page) {
                            case "dashboard":
                                include "dashboard.php";
                                break;
                            case "dosen":
                                include "dosen/index.php";
                                break;
                            case "mahasiswa":
                                include "mahasiswa/index.php";
                                break;
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>