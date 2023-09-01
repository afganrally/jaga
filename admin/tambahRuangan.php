<?php
ob_start();
include '../admin/layout/header.php';

include '../config/koneksi.php';
if (isset($_POST['submit'])) {
    $rfid = $_POST['rfid'];
    $nama_ruang = $_POST['nama_ruang'];
    $kelas = $_POST['kelas'];
    $kamar = $_POST['kamar'];
    $tempat_tidur = $_POST['tempat_tidur'];

    var_dump($kelas);

    if ($rfid != null && $nama_ruang != null && $kelas != null && $kamar != null && $tempat_tidur != null) {
        $query = mysqli_query($conn, "INSERT INTO ruangan (rfid, nama_ruang, kelas, kamar, tempat_tidur) VALUES ('$rfid', '$nama_ruang', '$kelas', '$kamar', '$tempat_tidur')");
        if ($query) {
            mysqli_query($conn, "DELETE FROM tmp");
            header("Location: ruangan.php");
            die();
        } else {
            echo E_ERROR;
        }
    }
}



?>

<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Jaga</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Ruangan</a></li>
                                <li class="breadcrumb-item active">Tambah Ruangan</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Tambah Ruangan</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3" id="getRfid">
                                            <input type="text" name="rfid" class="form-control" id="inputRfid" placeholder="rfid" readonly required>
                                            <label for="inputRfid">Rfid</label>
                                        </div>
                                        <h6 class="fs-15 mt-3">Kelas</h6>
                                        <div class="mt-2">
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="radio1" name="kelas" class="form-check-input" value="1" checked>
                                                <label class="form-check-label" for="radio1">1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="radio2" name="kelas" class="form-check-input" value="2">
                                                <label class="form-check-label" for="radio2">2</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="radio3" name="kelas" class="form-check-input" value="3">
                                                <label class="form-check-label" for="radio3">3</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="radiovip" name="kelas" class="form-check-input" value="VIP">
                                                <label class="form-check-label" for="radiovip">VIP</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating">
                                            <input type="text" name="nama_ruang" class="form-control" id="inputNamaRuangan" placeholder="Ruang" required>
                                            <label for="inputNamaRuangan">Ruang</label>
                                        </div>
                                        <div class="form-floating mt-4">
                                            <input type="text" name="kamar" class="form-control" id="inputKamar" placeholder="Kamar" required>
                                            <label for="inputKamar">Kamar</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-4">
                                        <div class="form-floating">
                                            <input type="text" name="tempat_tidur" class="form-control" id="inputTempatTidur" placeholder="Tempat Tidur" required>
                                            <label for="inputTempatTidur">Tempat Tidur</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-4">
                                        <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
                                        <!-- <button type="submit" class="btn btn-primary">Simpan</button> -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function loadXMLDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("getRfid").innerHTML =
                    this.responseText;
            }
        };
        xhttp.open("GET", "../inputRfid.php", true);
        xhttp.send();
    }
    setInterval(function() {
        loadXMLDoc();
        // 1sec
    }, 1000);

    window.onload = loadXMLDoc;
</script>
<?php
include '../admin/layout/footer.php';
ob_start();
?>