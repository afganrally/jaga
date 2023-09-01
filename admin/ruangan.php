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
                                <li class="breadcrumb-item active">Ruangan</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Ruangan</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <!-- <h4 class="header-title">Buttons example</h4> -->
                            <a href="tambahRuangan.php" class="btn btn-primary">+</a>
                            <!-- <p class="text-muted mb-0">
                                The Buttons extension for DataTables provides a common set of options, API
                                methods and styling to display buttons on a page
                                that will interact with a DataTable. The core library provides the based
                                framework upon which plug-ins can built.
                            </p> -->
                        </div>
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
                                        <th>Aksi</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php
                                    include '../config/koneksi.php';

                                    $query = mysqli_query($conn, "SELECT * FROM ruangan ");
                                    $no = 1;
                                    if ($query->num_rows > 0) {
                                        while ($row = $query->fetch_assoc()) {
                                    ?>
                                            <tr>
                                                <td class="text-center"><?= $no++ ?></td>
                                                <td><?= $row['rfid'] ?></td>
                                                <td><?= strtoupper($row['nama_ruang']) ?></td>
                                                <td class="text-center"> <?= $row['kelas'] ?></td>
                                                <td class="text-center"><?= $row['kamar'] ?></td>
                                                <td class="text-center"><?= $row['tempat_tidur'] ?></td>
                                                <td class=" text-center">
                                                    <a href="../admin/rubahRuangan.php?rfid=<?= $row['rfid'] ?>" class=" btn btn-outline-success"><i class="ri-edit-2-fill"></i></a>
                                                    <a href="../admin/hapusRuangan.php?rfid=<?= $row['rfid'] ?>" onclick="return confirm('Yakin Hapus Data Ini..?')" class="btn btn-outline-danger"><i class="ri-delete-bin-fill"></i></a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td colspan="7" class="text-center"> Data Tidak Tersedia</td>
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