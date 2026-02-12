<?php
    if(isset($_GET["status"])) {
        echo"<script>alert('input Data Gagal')</script>";
    }
    include"../config/db_connection.php";
    if(!isset($_SESSION["logged-in"])) {
        include"../session_check.php";
    }

    $sql = "select * from mahasiswa";
    $result = mysqli_query($conn, $sql);


?>

<div class="tabel-page">
    <div class="tabel-heading">
        Data mahasiswa
    </div>

    <div class="button-container">
        <button class="button-input" id="myBtn" onclick="show_modal(0)">
            <i class="fa fa-plus" aria-hidden="true"></i>Tambah Data
        </button>
    </div>

    <table id="list-data" class="display">
        <thead>
            <tr>
                <th><h5>NIM</h5></th>
                <th><h5>Nama</h5></th>
                <th><h5>fakultas</h5></th>
                <th><h5>Alamat</h5></th>
                <th><h5>Uppdate</h5></th>
                <th><h5>Delete</h5></th>
            </tr>
        </thead>
        
        <?php
            if(mysqli_num_rows($result) > 0) {
                $i = 1;
                while($row = mysqli_fetch_assoc($result)) {

        ?>
        <tr>
            <td><?php echo $row["Id_mahasiswa"];?></td>
            <td><?php echo $row["nama_mahasiswa"];?></td>
            <td><?php echo $row["fakultas"];?></td>
            <td><?php echo $row["alamat"];?></td>

            <td>
                <button class="button-edit" onclick="show_modal(<?php echo $i?>)">
                    <i class="fa fa-pencil" aria-hidden="true"></i>Update
                </button>
            </td>

            <td>
                <a href="javascript:hapusDataMhs('<?php echo $row["Id_mahasiswa"]?>')">
                    <button class="button-delete">
                        <i class="fa fa-trash" aria-hidden="true"></i>Delete
                    </button>
                </a>
            </td>
        </tr>

        <?php
            $i++;
                }
            }
            $conn->close() ;
        ?>
    </table>
</div>