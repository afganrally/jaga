<?php
include 'config/koneksi.php';
$tmp = mysqli_query($conn, "SELECT * FROM tmp ORDER BY id DESC LIMIT 1");
$row = mysqli_fetch_assoc($tmp);
if ($row) {
?>
    <input type="text" name="rfid" value="<?= $row['rfid'] ?>" class="form-control" id="inputRfid" placeholder="rfid" readonly required>
    <label for="inputRfid">Rfid</label>
<?php
} else {
?>
    <input type="text" name="rfid" class="form-control" id="inputRfid" placeholder="rfid" readonly required>
    <label for="inputRfid">Tempelkan Rfid</label>
<?php
}
