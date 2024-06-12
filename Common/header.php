<header>
    <div class="logo">
        <!-- <h1><a href="index.php">Malcolm Lismore Photography</a></h1> -->
        <a href="#"><img src="Logo.png" alt=""></a>
    </div>
    <nav>
        <ul>
            <?php
            // Get the current script name
            $current_page = basename($_SERVER['SCRIPT_NAME']);
            ?>
            <li><a href="index.php" class="<?php echo $current_page == 'index.php' ? 'active' : '' ?>">Home</a></li>
            <li><a href="about.php" class="<?php echo $current_page == 'about.php' ? 'active' : '' ?>">About</a></li>
            <li><a href="pricing.php" class="<?php echo $current_page == 'pricing.php' ? 'active' : '' ?>">Pricing</a></li>
            <li><a href="#" class="subnav-btn">Gallery</a>
                <ul class="categories">
                    <li><a href="gallery_landscape.php" class="<?php echo $current_page == 'gallery_landscape.php' ? 'active' : '' ?>">Landscape</a></li>
                    <li><a href="gallery_wildlife.php" class="<?php echo $current_page == 'gallery_wildlife.php' ? 'active' : '' ?>">Wildlife</a></li>
                    <li><a href="gallery_weddings.php" class="<?php echo $current_page == 'gallery_weddings.php' ? 'active' : '' ?>">Weddings</a></li>
                    <li><a href="gallery_portraits.php" class="<?php echo $current_page == 'gallery_weddings.php' ? 'active' : '' ?>">Portraits</a></li>
                </ul>
            </li>
            <li><a href="contact.php" class="<?php echo $current_page == 'contact.php' ? 'active' : '' ?>">Contact</a></li>
        </ul>
    </nav>
</header>