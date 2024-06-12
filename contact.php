<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Malcolm Photography</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Styles/contact.css">
</head>

<body>
    <?php include 'Common/header.php' ?>

    <!-- Heading Section Start -->
    <section class="heading">
        <h1>Get In Touch</h1>
    </section>
    <!-- Heading Section End -->

    <section class="content">
        <p>Thank you for your interest in Malcolm Lismore Photography. Whether you have questions, would like to discuss a potential project, or are ready to book a session, Malcolm is here to help. Please use the form below to reach out, and he will get back to you as soon as possible.</p>
    </section>

    <!-- Form Section Start -->
    <section class="form-section">
        <h2>Contact Me</h2>
        <form action="submit_enquiry.php" class="form-container" method="post">
            <div class="name-container">
                <div>
                    <label for="fname">First Name: (required)</label>
                    <input type="text" name="fname" id="fname" required>
                </div>
                <div>
                    <label for="lname">Last Name: (required)</label>
                    <input type="text" name="lname" id="lname" required>
                </div>
            </div>
            <div class="email-container">
                <label for="email">E-mail: (required)</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="phone-container">
                <label for="phone">Phone Number: (required)</label>
                <input type="tel" name="phone" id="phone" required>
            </div>
            <div class="radio-container">
                <label for="service">Please select the service you're interested in: (required)</label>
                <div>
                    <input type="radio" name="service" id="landscape" value="Landscape Photography" required>
                    <label for="landscape">Landscape Photography</label>
                </div>
                <div>
                    <input type="radio" name="service" id="wildlife" value="Wildlife Photography">
                    <label for="wildlife">Wildlife Photography</label>
                </div>
                <div>
                    <input type="radio" name="service" id="wedding" value="Wedding Photography">
                    <label for="wedding">Wedding Photography</label>
                </div>
                <div>
                    <input type="radio" name="service" id="portrait" value="Portrait Photography">
                    <label for="portrait">Portrait Photography</label>
                </div>
                <div>
                    <input type="radio" name="service" id="other" value="Other">
                    <label for="other">Other</label>
                </div>
            </div>
            <div class="date-container">
                <label for="date">Wedding/Event Date:</label>
                <input type="date" name="date" id="date">
            </div>
            <div class="venue-container">
                <label for="venue">Wedding/Event Venue:</label>
                <input type="text" name="venue" id="venue">
            </div>
            <div class="message-container">
                <label for="message">Message: (required)</label>
                <textarea name="message" id="message" rows="10" required></textarea>
            </div>
            <div class="submit-container">
                <input type="submit" value="Send">
            </div>
        </form>
    </section>
    <!-- Form Section End -->

    <?php include 'Common/footer.php' ?>
    <script src="https://kit.fontawesome.com/0894db3b48.js" crossorigin="anonymous"></script>
</body>

</html>