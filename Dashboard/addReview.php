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
        if (isset($_POST['submit']) && isset($_POST['rating']) && isset($_POST['name']) && isset($_POST['review']))
        {
            $rating = $_POST['rating'] ?? "";
            $name = $_POST['name'] ?? "";
            $review = $_POST['review'] ?? "";

            $error = User::setReview($rating, $name, $review);
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
                                <h4 class="mb-4 mb-sm-0 card-title">Add Review Form</h4>
                                <p class="<?= $error ? 'text-danger' : 'text-success' ?>"><?= $error ?></p>
                                <div class="card-body">
                                    <form class="form" method="POST">
                                        <div class="mb-3">
                                            <label class="form-label">Rating</label>
                                            <input type="number" class="form-control" min="1" max="5" placeholder="Enter Star Rating" name="rating" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Reviewer Name" name="name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Review</label>
                                            <textarea class="form-control" rows="4" name="review" placeholder="Enter Review..." required></textarea>
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