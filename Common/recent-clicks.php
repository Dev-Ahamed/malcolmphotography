<?php
include 'db_connection.php';
?>

<h2>Recent Clicks</h2>
<div class="recent-images">
    <div class="image-container">
        <?php
        // Query to select the last 5 inserted images 
        $sql = "SELECT * FROM `images` ORDER BY image_id DESC LIMIT 5";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div>';
                echo '<img src="Gallery/' . $row["filename"] . '" alt="' . htmlspecialchars($row['filename']) . '">';
                echo '</div>';
            }
        } else {
            echo "No recent images found";
        }

        $conn->close();
        ?>
    </div>
    <div class="explore-btn">
        <a href="Gallery/gallery_landscape.php">Explore More</a>
    </div>
</div>