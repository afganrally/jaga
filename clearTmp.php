<?php
include 'config/koneksi.php';
mysqli_query($conn, "DELETE FROM tmp");

$rfid = $_GET['rfid'];

if ($rfid != '') {
    $cek = mysqli_query($conn, "SELECT * FROM aktivitas WHERE rfid = $rfid ORDER BY id DESC LIMIT 1");
    $row = mysqli_fetch_assoc($cek);
    if ($row) {
        if ($row['status'] == 'masuk') {
            $status = 'keluar';
        } else {
            $status = 'masuk';
        }
    } else {
        $status = 'keluar';
    }

    $queryInsert = mysqli_query($conn, "INSERT INTO aktivitas (rfid , status) VALUES ('$rfid', '$status')");
}
