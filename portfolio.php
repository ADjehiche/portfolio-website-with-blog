<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="shortcut icon" href="favicons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="CSS/reset.css">
    <link rel="stylesheet" type="text/css" href="CSS/Shared.css">
    <link rel="stylesheet" type="text/css" href="CSS/portfolio.css">
</head>
<body>
    <header class="navmenu">
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="myExperience.php">Qualifications</a></li>
            <?php
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                echo '<li><a href="viewblog.php">Blog</a></li>';
            }else{
                echo '<li><a href="Login.html">Login to view blog</a></li>';
            }
            ?>
        </ul>
    </nav>
    </header>
<div id="project-container">
    <div id="top">
        <h1>My Portfolio</h1>
    </div>
    
        <section class="project">
            <h3>Hotel MIS</h3>
            <p>I developed a comprehensive Management Information System (MIS) for a hotel,
                 utilizing Python and Tkinter for the GUI front-end, coupled with SQLite3 for robust database management. 
                 This system streamlines operations by providing integrated solutions for managing reservations, customer data, 
                 and operational analytics.
            </p>
        </section>
        <section class="project">
            <h3>Raspberry Pi Wireless Access Point</h3>
            <p>Using Debian, I configured a Raspberry Pi to function as a Wi-Fi router. 
                This setup provided secure internet access with built-in encryption and efficiently managed IP address allocation,
                 enhancing network reliability and security</p>
        </section>
        <section class="project">
            <h3>Personal Portfolio website</h3>
            <p>My personal portfolio website is a testament to my skills in web design and development, 
                crafted using HTML5, CSS3, and JavaScript to ensure responsiveness and visual appeal across 
                devices. The site features a clean, user-friendly interface with intuitive navigation, 
                structured through advanced CSS techniques like grid and flexbox. 
                It showcases not only my technical capabilities but also the integration of various web 
                technologies in a polished, functional project. 
            </p>
        </section>
</div>

    <footer>
        <h2>Contact me:</h2>
        <p>Mobile: 075...</p>
        <a href="mailto:acil.djehiche@outlook.com" id="email">acil.djehiche@outlook.com</a>
        <p>
    <?php
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        echo '<a href="logout.php" id="loginButton">Logout</a>';
    } else {
        echo '<a href="login.html" id="loginButton">Login</a>';
    }
    ?>
</p>

    
        <div class="socials">
            <p>Find me here:</p>
            <a href="https://www.linkedin.com/in/acil-djehiche-771986281/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" id="linkedinicon" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg></a>
            <a href="https://github.com/ADjehiche" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" id="githubicon" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M448 96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96zM265.8 407.7c0-1.8 0-6 .1-11.6c.1-11.4 .1-28.8 .1-43.7c0-15.6-5.2-25.5-11.3-30.7c37-4.1 76-9.2 76-73.1c0-18.2-6.5-27.3-17.1-39c1.7-4.3 7.4-22-1.7-45c-13.9-4.3-45.7 17.9-45.7 17.9c-13.2-3.7-27.5-5.6-41.6-5.6s-28.4 1.9-41.6 5.6c0 0-31.8-22.2-45.7-17.9c-9.1 22.9-3.5 40.6-1.7 45c-10.6 11.7-15.6 20.8-15.6 39c0 63.6 37.3 69 74.3 73.1c-4.8 4.3-9.1 11.7-10.6 22.3c-9.5 4.3-33.8 11.7-48.3-13.9c-9.1-15.8-25.5-17.1-25.5-17.1c-16.2-.2-1.1 10.2-1.1 10.2c10.8 5 18.4 24.2 18.4 24.2c9.7 29.7 56.1 19.7 56.1 19.7c0 9 .1 21.7 .1 30.6c0 4.8 .1 8.6 .1 10c0 4.3-3 9.5-11.5 8C106 393.6 59.8 330.8 59.8 257.4c0-91.8 70.2-161.5 162-161.5s166.2 69.7 166.2 161.5c.1 73.4-44.7 136.3-110.7 158.3c-8.4 1.5-11.5-3.7-11.5-8zm-90.5-54.8c-.2-1.5 1.1-2.8 3-3.2c1.9-.2 3.7 .6 3.9 1.9c.3 1.3-1 2.6-3 3c-1.9 .4-3.7-.4-3.9-1.7zm-9.1 3.2c-2.2 .2-3.7-.9-3.7-2.4c0-1.3 1.5-2.4 3.5-2.4c1.9-.2 3.7 .9 3.7 2.4c0 1.3-1.5 2.4-3.5 2.4zm-14.3-2.2c-1.9-.4-3.2-1.9-2.8-3.2s2.4-1.9 4.1-1.5c2 .6 3.3 2.1 2.8 3.4c-.4 1.3-2.4 1.9-4.1 1.3zm-12.5-7.3c-1.5-1.3-1.9-3.2-.9-4.1c.9-1.1 2.8-.9 4.3 .6c1.3 1.3 1.8 3.3 .9 4.1c-.9 1.1-2.8 .9-4.3-.6zm-8.5-10c-1.1-1.5-1.1-3.2 0-3.9c1.1-.9 2.8-.2 3.7 1.3c1.1 1.5 1.1 3.3 0 4.1c-.9 .6-2.6 0-3.7-1.5zm-6.3-8.8c-1.1-1.3-1.3-2.8-.4-3.5c.9-.9 2.4-.4 3.5 .6c1.1 1.3 1.3 2.8 .4 3.5c-.9 .9-2.4 .4-3.5-.6zm-6-6.4c-1.3-.6-1.9-1.7-1.5-2.6c.4-.6 1.5-.9 2.8-.4c1.3 .7 1.9 1.8 1.5 2.6c-.4 .9-1.7 1.1-2.8 .4z"/></svg></a>
            <p>Acil Djehiche 2024©</p>
        </div>
    </footer>
</body>
</html>