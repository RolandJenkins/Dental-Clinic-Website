<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Global.css">
    <link rel="stylesheet" href="CSS/ContactUs.css">
    <title>Contact Us</title>
</head>

    <?php if (isset($_GET['success'])): ?>
        <script>
            alert("Thank you! Your message has been sent successfully.");
        </script>
        <?php endif; ?>

        <?php if (isset($_GET['error'])): ?>
        <script>
            alert("Sorry, something went wrong. Please try again.");
        </script>
    <?php endif; ?>
    
<body>
<div id="container">

    <section class="nav">
        <div class="topnav">
            <a href="Home.html"><img class="logo" src="Images/Logo_no_text.png" alt="Logo"></a>

            <div class="dropdown">
                <button class="dropbtn">About</button>
                <div class="dropdown-content">
                    <a href="Team.html">Our Team</a>
                    <a href="Office.html">Office</a>
                    <a href="PhotoGallery.html">Photo Gallery</a>
                    <a href="ContactUs.php">Contact Us</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Services</button>
                <div class="dropdown-content">
                    <a href="Services.html">Services</a>
                    <a href="FAQS.html">FAQs</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Patients</button>
                <div class="dropdown-content">
                    <a href="PatientForms.html">Patient Forms</a>
                    <a href="BookAppointment.html">Book an Appointment</a>
                    <a href="Reviews.html">Reviews</a>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <main>
            <div class="page-wrapper">
                <div class="main-content">
                    <div class="header">
                        <h1>Contact Us</h1>
                        <p>Questions About Dental Services in Antigo, WI?</p>
                        <p>Contact us with the form below:</p>
                    </div>

                    <div class="form">
                        <form class="form" action="SubmitContact.php" method="POST">
                            <input type="text" name="name"
                                   placeholder="Enter Your Name (Required)" required>

                            <input type="email" name="email"
                                   placeholder="Enter Your Email (Required)" required>

                            <input type="text" name="phone"
                                   placeholder="Enter Your Phone Number (Required)"
                                   pattern="[0-9]{10}" required>

                            <textarea name="message"
                                      placeholder="Message (Required)" required></textarea>

                            <input class="submit" type="submit" value="Send Message">
                        </form>
                    </div>
                </div>

                <aside class="sidebar">
                    <h2>Our Location</h2>
                    <p>707 6th Ave.<br>Antigo, WI 54409-1803<br>(715) 627-4391</p>
                    <a class="map-btn" target="_blank"
                       href="https://maps.app.goo.gl/s1AReAYif4gv7ng36">
                        MAP & DIRECTIONS
                    </a>
                </aside>
            </div>
        </main>
    </section>

    <section class="footer">
        <p>&copy; 2025 Campus Dental Clinic | Student Web Design Project</p>
    </section>

</div>
</body>
</html>
