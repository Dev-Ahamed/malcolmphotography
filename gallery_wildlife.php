<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wildlife</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Styles/gallery.css">
</head>

<body>
    <?php include 'Common/header.php' ?>

    <!-- Heading Section Start -->
    <section class="heading">
        <h1>Wildlife Images</h1>
    </section>
    <!-- Heading Section End -->

    <!-- Gallery Section Start -->
    <section class="gallery">
        <?php
        include 'Common/db_connection.php';

        $current_page = basename($_SERVER['SCRIPT_NAME']);
        $category_id = '';

        // Get category id based on URL
        if ($current_page == "gallery_wildlife.php") {
            $sql_category = "SELECT * FROM `categories` WHERE category_name = 'Wildlife'";
            $result_category = $conn->query($sql_category);

            if ($result_category->num_rows > 0) {
                while ($row_category = $result_category->fetch_assoc()) {
                    $category_id = $row_category["category_id"];
                }
            } else {
                echo "Category not found";
            }
        }

        // Get the images for the category id
        $sql_images = "SELECT * FROM `images` WHERE category_id = $category_id";
        $result_images = $conn->query($sql_images);

        if ($result_images->num_rows > 0) {
            while ($row_images = $result_images->fetch_assoc()) {
                echo '<div>';
                echo '<img src="Gallery/' . $row_images['filename'] . '" alt="" onclick="fullView(this.src)">';
                echo '</div>';
            }
        } else {
            echo 'Images not found.';
        }

        ?>
    </section>
    <div id="imageFullView">
        <img src="" alt="" id="fullImage">
        <span id="closeButton" onclick="closeButton()">&times;</span>
    </div>
    <!-- Gallery Section End -->

    <?php include 'Common/footer.php' ?>

    <script src="Scripts/gallery.js"></script>
    <script src="https://kit.fontawesome.com/0894db3b48.js" crossorigin="anonymous"></script>
</body>

</html>