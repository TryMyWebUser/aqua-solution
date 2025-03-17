<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        
        <?php include "template/head.php" ?>

    </head>

    <body>
        <div class="container-fluid position-relative d-flex p-0">
            <!-- Spinner Start -->
            <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <!-- Spinner End -->


            <!-- Sidebar Start -->
            <?php include "template/sideheader.php" ?>
            <!-- Sidebar End -->
                
                
            <!-- Content Start -->
            <div class="content">
                <!-- Navbar Start --> 
                <?php include "template/header.php" ?>
                <!-- Navbar End -->


                <!-- Sale & Revenue Start -->
                <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">
                        <div class="col-sm-6 col-xl-3">
                            <div class="bg-secondary rounded d-flex align-items-center p-4">
                                <!-- <i class="fa fa-chart-line fa-3x text-primary"></i> -->
                                <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="ms-3">
                                    <p class="mb-2">Welcome Back</p>
                                    <h6 class="mb-0">Admin</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sale & Revenue End -->

                <!-- Footer Start -->
                <div class="container-fluid pt-4 px-4" style="width: -webkit-fill-available; position: absolute; bottom: 0;">
                    <div class="bg-secondary rounded-top p-4">
                        <div class="row">
                            <div class="col-12 col-sm-6 text-center text-sm-end">
                                Designed & Developed By <a href="https://trymywebsites.com">Trymywebsites</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer End -->
            </div>
            <!-- Content End -->


            <!-- Back to Top -->
            <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> -->
        </div>

        <?php include "template/footer.php" ?>

    </body>

</html>