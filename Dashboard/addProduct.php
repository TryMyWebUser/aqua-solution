<?php

    include "../libs/load.php";

    // Start a session
    Session::start();

    if (!Session::get('login_user'))
    {
        header("Location: index.php");
        exit;
    }

    $error = "";

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        // Check if both username and password keys exist in $_POST
        if (isset($_POST['submit']) && isset($_POST['category']) && isset($_POST['title']) && isset($_POST['dec']) && isset($_FILES['img']))
        {
            $cate = $_POST['category'] ?? "";
            $title = $_POST['title'] ?? "";
            $dec = $_POST['dec'] ?? "";
            $img = $_FILES['img'] ?? "";

            $error = User::setProducts($title, $dec, $img, $cate);
        }
    }

?>

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

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 my-5">
                            <div class="card bg-secondary rounded h-100 p-4">
                                <h4 class="mb-4 mb-sm-0 card-title">Add Product Form</h4>
                                <p class="<?= $error ? 'text-danger' : 'text-success' ?>"><?= $error ?></p>
                                <div class="card-body">
                                    <form class="form" method="POST" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label class="form-label">Select Category</label>
                                            <select class="select2 form-control custom-select" name="category" required>
                                                <option>Select Category</option>
                                                <?php
                                                    $category = Operations::getCategory();
                                                    foreach ($category as $cate) :
                                                ?>
                                                <option value="<?= $cate['category'] ?>"><?= $cate['category'] ?></option>
                                                <?php
                                                    endforeach;
                                                ?>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Title</label>
                                            <input type="text" class="form-control" placeholder="Enter Title" name="title" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control" rows="4" name="dec" required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Image Upload</label>
                                            <input type="file" name="img" class="form-control" accept="image/*" required>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-md-flex align-items-center">
                                                <div class="ms-auto mt-3 mt-md-0">
                                                    <button type="submit" name="submit" class="btn btn-primary hstack gap-6">
                                                        Submit
                                                    </button>
                                                </div>
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

        <?php include "template/footer.php"; ?>
        
    </body>

</html>