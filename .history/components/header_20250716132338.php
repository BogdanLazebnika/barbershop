<?php
$current = basename($_SERVER['PHP_SELF']);
?>
<header class="header">
    <di
    <!-- Link to Header CSS -->
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <script src="assets/js/header.js" defer></script>


    <div class="header-left">
        <button class="burger" id="burger">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
    
    <nav class="nav">
        <ul class="nav-list">
            <li class="nav-item">
            <a href="index.php" class="<?= $current == 'index.php' ? 'active' : '' ?>">Home</a>
            </li>
            <li class="nav-item">
            <a href="services.php" class="<?= $current == 'services.php' ? 'active' : '' ?>">Services</a>
            </li>
            <li class="nav-item">
            <a href="about.php" class="<?= $current == 'about.php' ? 'active' : '' ?>">About Us</a>
            </li>
            <li class="nav-item">
            <a href="blog.php" class="<?= $current == 'blog.php' ? 'active' : '' ?>">Blog</a>
            </li>
            <li class="nav-item">
            <a href="contact.php" class="<?= $current == 'contact.php' ? 'active' : '' ?>">Contact Us</a>
            </li>
        </ul>
    </nav>
    <a class="button-book-appointment" href="#">BOOK APPOINTMENT</a>

</header>