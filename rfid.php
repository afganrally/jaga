<?php
include 'config/koneksi.php';
$tmp = mysqli_query($conn, "SELECT * FROM tmp ORDER BY id DESC LIMIT 1");
$row = mysqli_fetch_assoc($tmp);
if ($row) {
    $rfid = $row['rfid'];
    $query = mysqli_query($conn, "SELECT * FROM ruangan WHERE rfid = $rfid");
    $rowQuery = mysqli_fetch_assoc($query);

    if ($rowQuery > 0) {
?>
        <h3 class=" row">
            <div class="col-lg-3">Ruang</div>
            <div class="col-lg-1">:</div>
            <div class="col-lg-8"><?= $rowQuery['nama_ruang'] ?></div>
            <input type="text" id="val_ruang" value="<?= $rowQuery['nama_ruang'] ?>" hidden>
            <input type="text" id="valRfid" value="<?= $rowQuery['rfid'] ?>" hidden>
        </h3>
        <h3 class=" row">
            <div class="col-lg-3">Kelas</div>
            <div class="col-lg-1">:</div>
            <div class="col-lg-8"><?= $rowQuery['kelas'] ?></div>
        </h3>
        <h3 class=" row">
            <div class="col-lg-3">Kamar</div>
            <div class="col-lg-1">:</div>
            <div class="col-lg-8"><?= $rowQuery['kamar'] ?></div>
        </h3>
        <h3 class=" row">
            <div class="col-lg-3">Tempat Tidur</div>
            <div class="col-lg-1">:</div>
            <div class="col-lg-8"><?= $rowQuery['tempat_tidur'] ?></div>
        </h3>

    <?php
    } else {
    ?>
        <div class="d-flex justify-content-center">
            <img src="assets/images/tap.jpeg" alt="" style="width: 300px;">
        </div>
        <input type="text" id="val_ruang" value="" hidden>
        <input type="text" id="valRfid" value="" hidden>


    <?php
    }
} else {
    ?>
    <div class="d-flex justify-content-center">
        <img src="assets/images/tap.jpeg" alt="" style="width: 300px;">
    </div>
    <input type="text" id="val_ruang" value="" hidden>
    <input type="text" id="valRfid" value="" hidden>

<?php
}

?>