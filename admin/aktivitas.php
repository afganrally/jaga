<?php include 'layout/header.php'; ?>


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
                                <li class="breadcrumb-item active">Aktivitas</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Aktifitas</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>RFID</th>
                                        <th>Ruang</th>
                                        <th>Kelas</th>
                                        <th>Kamar</th>
                                        <th>Tempat Tidur</th>
                                        <th>Status</th>
                                        <th>Waktu</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php
                                    include '../config/koneksi.php';

                                    $query = mysqli_query($conn, "SELECT * FROM aktivitas INNER JOIN ruangan ON aktivitas.rfid = ruangan.rfid ORDER BY id DESC");
                                    $no = 1;
                                    if ($query->num_rows > 0) {
                                        while ($row = $query->fetch_assoc()) {
                                    ?>
                                            <tr>
                                                <td class="text-center"><?= $no++ ?></td>
                                                <td class="<?= $row['status'] == 'masuk' ? 'text-success' : 'text-danger' ?>"><?= $row['rfid'] ?></td>
                                                <td class="<?= $row['status'] == 'masuk' ? 'text-success' : 'text-danger' ?>"><?= ucwords($row['nama_ruang']) ?></td>
                                                <td class=" text-center <?= $row['status'] == 'masuk' ? 'text-success' : 'text-danger' ?>"> <?= $row['kelas'] ?></td>
                                                <td class="text-center <?= $row['status'] == 'masuk' ? 'text-success' : 'text-danger' ?>"><?= $row['kamar'] ?></td>
                                                <td class="text-center <?= $row['status'] == 'masuk' ? 'text-success' : 'text-danger' ?>"><?= $row['tempat_tidur'] ?></td>
                                                <td class="text-center <?= $row['status'] == 'masuk' ? 'text-success' : 'text-danger' ?>"><?= ucwords($row['status']) ?> <i class="<?= $row['status'] == 'masuk' ? 'ri-arrow-right-circle-fill' : 'ri-arrow-left-circle-fill' ?>"></i></td>
                                                <td class="text-center <?= $row['status'] == 'masuk' ? 'text-success' : 'text-danger' ?>"><?= $row['waktu'] ?></td>
                                            </tr>
                                        <?php
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td colspan="8" class="text-center"> Data Tidak Tersedia</td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div> <!-- end row-->
        </div>
    </div>
</div>
<?php include 'layout/footer.php'; ?>