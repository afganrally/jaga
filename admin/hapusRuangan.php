<?php
include '../config/koneksi.php';

$rfid = $_GET['rfid'];
if (isset($rfid)) {
    $queryDelete = mysqli_query($conn, "DELETE FROM ruangan WHERE rfid='$rfid'");
    if ($queryDelete) {
        header("Location:ruangan.php");
    }
} else {
    header("Location:ruangan.php");
}
