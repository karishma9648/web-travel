<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'header-link.php'; ?>
</head>
<body>
   <?php include 'header.php'; ?> 
   <!-- content sections start -->
    <section class="contact-main-section">

    <h1 class="contact-main-title">CONTACT US</h1>

    <div class="contact-wrapper">

        <!-- LEFT SIDE -->
        <div class="contact-left">

            <h3 class="contact-subtitle">Reach Out</h3>

            <div class="contact-info-box">
                <i class="fa-solid fa-phone contact-icon"></i>
                <div>
                    <strong>Landline</strong>
                    <p>1800-11-1363</p>
                </div>
            </div>

            <div class="contact-info-box">
                <i class="fa-solid fa-envelope contact-icon"></i>
                <div>
                    <strong>Emails & Support</strong>
                    <p>info.mot@gov.in</p>
                </div>
            </div>

            <div class="contact-info-box">
                <i class="fa-solid fa-location-dot contact-icon"></i>
                <div>
                    <strong>Address</strong>
                    <p>Ministry of Tourism, Transport Bhawan,<br>
                    Sansad Marg, New Delhi - 110001</p>
                </div>
            </div>

        </div>

        <!-- Divider -->
        <div class="contact-divider"></div>

        <!-- RIGHT SIDE -->
        <div class="contact-right">

            <h3 class="contact-subtitle">Inquire About</h3>

            <div class="contact-checkbox-group">
                <label><input type="checkbox"> Partnership opportunities</label>
                <label><input type="checkbox"> Media/Press</label>
                <label><input type="checkbox"> General Interest</label>
                <label><input type="checkbox"> Feedback</label>
            </div>

            <form class="contact-form">

                <input type="text" placeholder="Name*" required>
                <input type="text" placeholder="Surname*" required>
                <input type="text" placeholder="Organization*">
                <input type="email" placeholder="Email address*" required>
                <textarea placeholder="Comments"></textarea>

                <button type="submit" class="contact-send-btn">Send</button>

            </form>

        </div>

    </div>

</section>
   <!-- content section end -->
   <?php include 'footer.php'; ?>
</body>
</html>