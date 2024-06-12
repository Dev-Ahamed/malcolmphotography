<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malcolm Photography</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Styles/index.css">
</head>

<body>
    <?php include 'Common/header.php' ?>

    <!-- Hero Section Start -->
    <section class="hero">
        <h1>Malcolm Lismore Photography</h1>
        <p>Explore the rugged landscapes, diverse wildlife, and stunning coastal vistas through Malcom's lens.</p>
        <div class="buttons">
            <a href="./Gallery/gallery_landscape.php">View Gallery</a>
            <a href="contact.php">Contact</a>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Experience Count Section Start -->
    <section class="experience">
        <div>
            <p>100+</p>
            <p>Photographed</p>
        </div>
        <div>
            <p>5+</p>
            <p>Year Experience</p>
        </div>
        <div>
            <p>10,000+</p>
            <p>Photographs Delivered</p>
        </div>
    </section>
    <!-- Experience Count Section End -->

    <!-- About Section Start -->
    <section class="about">
        <div class="about-content">
            <h2>About Me</h2>
            <p>This is Malcolm Lismore, a freelance photographer based on the picturesque North West coast of Scotland, specializes in capturing the natural beauty of rugged landscapes, wildlife, and coastal birds. With a keen eye for detail and years of experience, Malcolm's work brings the breathtaking Scottish scenery to life. In addition to his passion for nature photography, Malcolm offers professional services for weddings, portraits, and special events. Explore the portfolio to see the world through Malcolm's lens.</p>
            <a href="about.php">Read More</a>
        </div>
        <div class="about-img">
            <img src="Profile.jpg" alt="">
        </div>
    </section>
    <!-- About Section End -->

    <!-- Pricing Section Start -->
    <section class="pricing">
        <h2>Pricing</h2>
        <p>Welcome to Malcolm Lismore Photography! My love for capturing the natural world has led me to create stunning images of our breathtaking landscapes, diverse wildlife, and vibrant coastal birds. In addition to my nature photography, I also specialize in wedding, portrait, and event photography, ensuring that every special moment is beautifully preserved. My competitive pricing packages are designed to suit your specific needs, whether you're planning an intimate gathering or a grand celebration. I'm dedicated to providing you with exceptional service and unforgettable images. Let's work together to create priceless memories and extraordinary photographs that you will cherish forever. Reach out to learn more about how I can bring your vision to life through my lens.</p>
        <a href="pricing.php">See Packages</a>
    </section>
    <!-- Pricing Section End -->

    <!-- Recent Clicks Section Start -->
    <section class="recent-clicks">
        <?php include 'Common/recent-clicks.php' ?>
    </section>
    <!-- Recent Clicks Section End -->

    <?php include 'Common/footer.php' ?>
    <script src="https://kit.fontawesome.com/0894db3b48.js" crossorigin="anonymous"></script>
</body>

</html>