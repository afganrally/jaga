<?php
include 'layout/header.php';
include '../config/koneksi.php';

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
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Dashboard</h4>
                        <div id="rfid"></div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xxl-3 col-sm-6">
                    <div class="card widget-flat text-bg-pink">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="ri-pass-valid-line widget-icon"></i>
                            </div>
                            <h6 class="text-uppercase mt-0" title="Customers">Kartu Aktif</h6>
                            <h2 class="my-2">
                                <?php
                                $queryRuangan = mysqli_query($conn, "SELECT * FROM ruangan");
                                $count = mysqli_num_rows($queryRuangan);
                                echo $count;
                                ?>
                            </h2>
                        </div>
                    </div>
                </div> <!-- end col-->

                <div class="col-xxl-3 col-sm-6">
                    <div class="card widget-flat text-bg-purple">
                        <div class="card-body">
                            <div class="float-end">
                                <i class="ri-arrow-left-right-fills widget-icon"></i>
                            </div>
                            <h6 class="text-uppercase mt-0" title="Customers">Aktivitas</h6>
                            <h2 class="my-2">
                                <?php
                                $queryRuangan = mysqli_query($conn, "SELECT * FROM aktivitas");
                                $count = mysqli_num_rows($queryRuangan);
                                echo $count;
                                ?>
                            </h2>
                        </div>
                    </div>
                </div> <!-- end col-->

            </div>

        </div> <!-- container -->

    </div> <!-- content -->

    <?php include 'layout/footer.php'; ?>