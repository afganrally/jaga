<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Jaga Scan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/hesti.png">

    <!-- Theme Config Js -->
    <script src="assets/js/config.js"></script>

    <!-- App css -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg position-relative">
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-lg-10 w-75">
                    <div class="card overflow-hidden opacity-75 ">
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="d-flex flex-column h-100 ">
                                    <div class="auth-brand p-4 position-relative">
                                        <a href="" class="logo-dark position-absolute top-0 start-0 pt-4 ps-4">
                                            <img src="assets/images/hesti.png" alt="" height="100">
                                        </a>
                                        <h4 class="text-center ps-4 pe-4 pt-4">RUMAH SAKIT Tk.III WIRASAKTI KUPANG</h4>
                                        <a href="" class=" logo-dark position-absolute top-0 end-0 pt-4 pe-4">
                                            <img src="assets/images/udayana.png" alt="" height="100">
                                        </a>
                                    </div>
                                    <div class="p-4 my-auto" id="rfid">
                                        <div class="d-flex justify-content-center">
                                            <img src="assets/images/tap.jpeg" alt="" style="width: 300px;">
                                        </div>
                                        <input type="text" id="val_ruang" value="" hidden>
                                        <input type="text" id="valRfid" value="" hidden>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end container -->
    </div>
    <script>
        function loadXMLDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("rfid").innerHTML =
                        this.responseText;
                }
            };
            xhttp.open("GET", "rfid.php", true);
            xhttp.send();
        }

        function clearTmp() {
            var xhttp = new XMLHttpRequest();
            xhttp.open("GET", "clearTmp.php?rfid=" + document.getElementById("valRfid").value, true);
            xhttp.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
            xhttp.onload = function() {
                console.log(this.responseText);
            };
            xhttp.send();
            return false;
        }


        setInterval(function() {
            loadXMLDoc();
            loop()
        }, 1500)

        window.onload = loadXMLDoc;

        function loop() {
            if (document.getElementById("val_ruang").value != '') {
                setTimeout(function() {
                    clearTmp()
                }, 5000);
            }
        }
    </script>
    <!-- end page -->
    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>



</html>