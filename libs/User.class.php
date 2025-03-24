<?php

class User
{
    public static function login($username, $password)
    {
        Session::start();
        $conn = Database::getConnect();
        
        $sql = "SELECT `id`, `password` FROM `auth` WHERE `username` = '$username' OR `email` = '$username'";
        $res = $conn->query($sql);
        if ($res->num_rows === 1)
        {
            $row = $res->fetch_assoc();
            if ($password === $row['password'])
            {
                Session::regenerate();
                Session::set('login_user', $username);
                header("Location: welcome.php");
                exit;
            }
        }

        return "Invalid Username and Password";
    }

    public static function setCategory($img, $cate)
    {
        $conn = Database::getConnect();
        $targetDir = "../uploads/Card/"; // Define your upload directory
        
        if (!is_dir($targetDir)) {
            // Create directory with proper permissions
            mkdir($targetDir, 0777, true);
        }

        $allowImageTypes = ['jpg', 'png', 'jpeg', 'gif'];

        // Required file uploads
        $requiredFiles = [
            'img' => $_FILES["img"]
        ];

        foreach ($requiredFiles as $key => $file) {
            $fileName = basename($file["name"]);
            $filePath = $targetDir . $fileName;
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
            
            if (!in_array($fileType, $allowImageTypes) || !move_uploaded_file($file["tmp_name"], $filePath)) {
                return "Error uploading required file: $key.";
            }
            $$key = $filePath; // Dynamically assign variable with directory
        }

        // Insert data into database
        $sql = "INSERT INTO `category` (`img`, `category`, `created_at`)
                VALUES ('$filePath', '$cate', NOW())";

        if ($conn->query($sql)) {
            header("Location: viewCate.php");
            exit;
        } else {
            return "Error occurred while saving data: " . $conn->error;
        }
    }
    public static function updateCategory($getID, $img, $cate, $conn)
    {
        $targetDir = "../uploads/Card/"; // Define your upload directory
        
        if (!is_dir($targetDir)) {
            // Create directory with proper permissions
            mkdir($targetDir, 0777, true);
        }

        $qry = $conn->query("SELECT * FROM `category` WHERE `id` = '$getID'")->fetch_array();

        $allowImageTypes = ['jpg', 'png', 'jpeg', 'gif'];

        // Check if a file was uploaded
        if (!empty($_FILES["img"]["name"])) {
            $fileName = basename($_FILES["img"]["name"]);
            $filePath = $targetDir . $fileName;
            $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

            // Validate file type
            if (!in_array($fileType, $allowImageTypes)) {
                return "Error: Only JPG, JPEG, PNG, and GIF files are allowed.";
            }

            // Validate file size (e.g., 5MB max)
            if ($_FILES["img"]["size"] > 5 * 1024 * 1024) {
                return "Error: File size exceeds the maximum limit of 5MB.";
            }

            // Move uploaded file to target directory
            if (!move_uploaded_file($_FILES["img"]["tmp_name"], $filePath)) {
                return "Error: Failed to upload file.";
            }

            // Delete old image if it exists
            if (!empty($qry['img']) && file_exists($qry['img'])) {
                unlink($qry['img']);
            }

            // Update database with new image path
            $sql = "UPDATE `category` SET `img` = '$filePath', `category` = '$cate', `created_at` = NOW() WHERE `id` = '$getID'";
        } else {
            // Update database without changing the image
            $sql = "UPDATE `category` SET `category` = '$cate', `created_at` = NOW() WHERE `id` = '$getID'";
        }

        if ($conn->query($sql)) {
            header("Location: viewCate.php");
            exit;
        } else {
            return "Error occurred while saving data: " . $conn->error;
        }
    }

    public static function setProducts($title, $dec, $img, $cate)
    {
        $conn = Database::getConnect();
        $targetDir = "../uploads/Products/"; // Define your upload directory
        
        if (!is_dir($targetDir)) {
            // Create directory with proper permissions
            mkdir($targetDir, 0777, true);
        }

        $allowImageTypes = ['jpg', 'png', 'jpeg', 'gif'];

        // Required file uploads
        $requiredFiles = [
            'img' => $_FILES["img"]
        ];

        foreach ($requiredFiles as $key => $file) {
            $fileName = basename($file["name"]);
            $filePath = $targetDir . $fileName;
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
            
            if (!in_array($fileType, $allowImageTypes) || !move_uploaded_file($file["tmp_name"], $filePath)) {
                return "Error uploading required file: $key.";
            }
            $$key = $filePath; // Dynamically assign variable with directory
        }

        // Insert data into database
        $sql = "INSERT INTO `products` (`img`, `title`, `dec`, `category`, `created_at`) 
                VALUES ('$filePath', '$title', '$dec', '$cate', NOW())";

        if ($conn->query($sql)) {
            header("Location: viewProduct.php");
            exit;
        } else {
            return "Error occurred while saving data: " . $conn->error;
        }
    }
    public static function updateProducts($title, $dec, $img, $cate, $getID, $conn)
    {
        $targetDir = "../uploads/Products/"; // Define your upload directory
        
        if (!is_dir($targetDir)) {
            // Create directory with proper permissions
            mkdir($targetDir, 0777, true);
        }

        $qry = $conn->query("SELECT * FROM `products` WHERE `id` = '$getID'")->fetch_array();

        $allowImageTypes = ['jpg', 'png', 'jpeg', 'gif'];

        // Check if a file was uploaded
        if (!empty($_FILES["img"]["name"])) {
            $fileName = basename($_FILES["img"]["name"]);
            $filePath = $targetDir . $fileName;
            $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

            // Validate file type
            if (!in_array($fileType, $allowImageTypes)) {
                return "Error: Only JPG, JPEG, PNG, and GIF files are allowed.";
            }

            // Validate file size (e.g., 5MB max)
            if ($_FILES["img"]["size"] > 5 * 1024 * 1024) {
                return "Error: File size exceeds the maximum limit of 5MB.";
            }

            // Move uploaded file to target directory
            if (!move_uploaded_file($_FILES["img"]["tmp_name"], $filePath)) {
                return "Error: Failed to upload file.";
            }

            // Delete old image if it exists
            if (!empty($qry['img']) && file_exists($qry['img'])) {
                unlink($qry['img']);
            }

            // Update database with new image path
            $sql = "UPDATE `products` SET `img` = ?, `title` = ?, `dec` = ?, `category` = ?, `created_at` = NOW() WHERE `id` = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssi", $filePath, $title, $dec, $cate, $getID);
        } else {
            // Update database without changing the image
            $sql = "UPDATE `products` SET `title` = ?, `dec` = ?, `category` = ?, `created_at` = NOW() WHERE `id` = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssi", $title, $dec, $cate, $getID);
        }

        // Execute the statement
        if ($stmt->execute()) {
            header("Location: viewProduct.php");
            exit;
        } else {
            return "Error occurred while saving data: " . $stmt->error;
        }
    }

    public static function setReview($rating, $name, $review)
    {
        $conn = Database::getConnect();

        // Insert data into database
        $sql = "INSERT INTO `review`(`rating`, `name`, `review`, `created_at`)
                VALUES ('$rating', '$name', '$review', NOW())";

        if ($conn->query($sql)) {
            header("Location: viewReviews.php");
            exit;
        } else {
            return "Error occurred while saving data: " . $conn->error;
        }
    }
    public static function updateReview($rating, $name, $review, $getID, $conn)
    {
        // Insert data into database
        $sql = "UPDATE `review` SET `rating` = '$rating', `name` = '$name', `review` = '$review', `created_at` = NOW() WHERE `id` = '$getID'";

        if ($conn->query($sql)) {
            header("Location: viewReviews.php");
            exit;
        } else {
            return "Error occurred while saving data: " . $conn->error;
        }
    }

    public static function setGallery($img)
    {
        $conn = Database::getConnect();
        $targetDir = "../uploads/gallery/";

        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $allowTypes = ['jpg', 'png', 'jpeg', 'gif'];

        // If no images are uploaded, insert only category
        if (empty($img['name'][0])) {
            $sql = "INSERT INTO `gallery` (`img`, `created_at`) 
                    VALUES (NULL, NOW())";
            if ($conn->query($sql)) {
                header("Location: viewGallery.php");
                exit;
            } else {
                return "Error occurred while saving data: " . $conn->error;
            }
        }

        // Upload multiple images
        foreach ($img['name'] as $key => $fileName) {
            $fileTmp = $img['tmp_name'][$key];
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

            if (in_array($fileType, $allowTypes)) {
                $uniqueName = time() . "_" . basename($fileName);
                $filePath = $targetDir . $uniqueName;

                if (move_uploaded_file($fileTmp, $filePath)) {
                    // Insert each image separately
                    $sql = "INSERT INTO `gallery` (`img`, `created_at`) 
                            VALUES ('$filePath', NOW())";
                    $conn->query($sql);
                }
            }
        }

        header("Location: viewGallery.php");
        exit;
    }

}

?>