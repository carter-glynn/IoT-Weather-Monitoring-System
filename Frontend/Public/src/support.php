<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DCA</title>

    <link rel="stylesheet" type="text/css" href="../assets/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/hamburgermenu.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/sessionkeycheck.js"></script>
    <script src="../assets/js/contact.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get the menu toggle button and the menu container
            const menuToggle = document.getElementById('menu-toggle');
            const menuContainer = document.getElementById('menu-container');
            const contentContainer = document.getElementById('content');

            // Opens menu on default
            menuContainer.classList.add('active');
            contentContainer.classList.add('menu-open');

            // Add a click event listener to the menu toggle button
            menuToggle.addEventListener('click', function() {
                // Toggle the 'active' class on the menu container to open/close it
                menuContainer.classList.toggle('active');

                // Add/remove the 'menu-open' class to the content container to adjust the margin left
                contentContainer.classList.toggle('menu-open');
            });
        });
    </script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar sticky">
        <!-- Hamburger menu icon -->
        <button id="menu-toggle" class="menu-toggle">
            <i class="fas fa-bars"></i>
        </button>
        <!-- Logo -->
        <div class="logo-container">
            <img src="../assets/img/logo.png" alt="Logo">
        </div>
        <!-- Login button -->
        <div class="login-button">
            <span id="UserEmail"></span>
            <span class="tooltip" data-tooltip="Logout">
                    <button id="login-button"><i class="fas fa-lock"></i></button>
                    <div class="tooltip-text">Logout</div>
                </span>
            <span class="tooltip" data-tooltip="Support">
                    <button id="Support-button"><i class="fas fa-question-circle"></i></button>
                    <div class="tooltip-text">Support</div>
                </span>
        </div>
    </nav>

    <!-- Menu -->
    <div id="menu-container" class="menu-container">
        <ul class="menu">
            <li><i class="fas fa-lock menuicons"></i><a href="homepage.php#Temperature">Temperature</a></li>
            <li><i class="fas fa-cog menuicons"></i><a href="humidity.php#Humidity">Humidity</a></li>
            <li><i class="fas fa-bug menuicons"></i><a href="pressure.php#Pressure">Pressure</a></li>
            <li><i class="fas fa-bug menuicons"></i><a href="#">N/A</a></li>
            <li><i class="fas fa-bug menuicons"></i><a href="#">N/A</a></li>
            <li><i class="fas fa-bug menuicons"></i><a href="#">N/A</a></li>
            <li><i class="fas fa-bug menuicons"></i><a href="#">N/A</a></li>
            <li><i class="fas fa-bug menuicons"></i><a href="#">N/A</a></li>
            <li><i class="fas fa-bug menuicons"></i><a href="#">N/A</a></li>
            <li><i class="fas fa-lock menuicons"></i><a href="configuration.php#Configuration">Configuration</a></li>
            <li><i class="fas fa-graduation-cap menuicons"></i><a href="about.php#About">About</a></li>
            <li><i class="fas fa-question-circle menuicons"></i><a href="support.php#Support">Support</a></li>
        </ul>
    </div>

    <!-- Content -->
    <div id="content" class="content">
        <h1>Contact Us</h1>
        <div class="contact-form-wrapper">
            <form class="contact-form">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="messageType">Reason</label>
                    <select class="form-control select" id="messageType" name="messageType" required>
                        <option value="" selected disabled>Select a support reason</option>
                        <option value="bug">Report a Bug</option>
                        <option value="feedback">Feedback</option>
                        <option value="support">Support Inquiry</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
        <!-- Modal dialog box -->
        <div id="modal" class="modal">
            <div id="modal-content" class="modal-content">
                <p>Support request sent!</p>
                <button class="modal-close-btn">&times;</button>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="footer">
        <span>&copy; 2023 DCA</span>
    </footer>
</body>
</html>
