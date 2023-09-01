<?php

include 'config/koneksi.php';
$rfid = $_GET['rfid_key'];
mysqli_query($conn, "INSERT INTO tmp (rfid) VALUES ($rfid)");
