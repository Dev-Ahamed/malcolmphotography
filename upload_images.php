<?php
include 'Common/db_connection.php';

session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit();
}

$message = "";
$uploadok = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // File upload setup
    $target_dir = "Gallery/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $uploadok = 1;

    // Check if image file is an actual image or fake image
    $check = getimagesize($_FILES["file"]["tmp_name"]);

    if ($check !== false) {
        $uploadok = 1;
    } else {
        $uploadok = 0;
        $message = "File is not an image";
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        $uploadok = 0;
        $message = "Sorry, file already exists.";
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $uploadOk = 0;
        $message = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    }

    // Check $uploadok, if 1 everything is ok, if 0 set an error
    if ($uploadok !== 0) {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            // If file upload success, insert into database
            $fileName = $_POST['fileName'];
            $category_id = $_POST['category'];

            $sql = "INSERT INTO images(filename, category_id) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("si", $fileName, $category_id);

            if ($stmt->execute()) {
                $message = 'The file ' . basename($_FILES["file"]["name"]) . ' has been uploaded.';
            } else {
                $message = 'Sorry, there was an error uploading your file.';
            }
            $stmt->close();
        } else {
            $message = 'Sorry, there was an error uploading your file.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Images</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Styles/upload_images.css">
</head>

<body>
    <?php include 'Common/header.php' ?>

    <section class="heading">
        <h1>Upload Images</h1>
    </section>

    <section class="upload">
        <form action="upload_images.php" method="post" enctype="multipart/form-data">
            <div class="fields">
                <label for="file">Select Image:</label>
                <input type="file" name="file" id="file" onchange="setFileName()" required>
            </div>
            <div class="fields">
                <label for="fileName">Image Name:</label>
                <input type="text" name="fileName" id="fileName" required>
            </div>
            <div class="fields">
                <label for="category">Choose a category:</label>

                <select name="category" id="category" required>
                    <?php
                    $sql = "SELECT * FROM `categories` WHERE 1";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row['category_id'] . '">' . $row['category_name'] . '</option>';
                        }
                    } else {
                        echo '<option value="">No categories found.</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="fields submit-btn">
                <input type="submit" value="Upload">
            </div class="fields">
            <div class="message">
                <?php
                echo '<p>' . $message . '</p>';
                ?>
            </div>
        </form>
    </section>


    <?php include 'Common/footer.php' ?>
    <script src="https://kit.fontawesome.com/0894db3b48.js" crossorigin="anonymous"></script>

    <script>
        function setFileName() {
            let fileInput = document.getElementById('file');
            let fileName = document.getElementById('fileName');
            fileName.value = fileInput.files[0].name;
        }
    </script>

    <?php
    $conn->close();
    ?>
</body>

</html>