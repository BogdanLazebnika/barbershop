<?php
$current = basename($_SERVER['PHP_SELF']);
?>
<header class="header">
    <div class="center-header-container">
        <!-- Link to Header CSS -->
        <link rel="stylesheet" href="assets/css/header.css">
        

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
                    <?php if ($current == 'index.php'): ?>
                        <span class="active">Home</span>
                    <?php else: ?>
                        <a href="index.php">Home</a>
                    <?php endif; ?>
                </li>

                <li class="nav-item">
                    <?php if ($current == 'services.php'): ?>
                        <span class="active">Services</span>
                    <?php else: ?>
                        <a href="services.php">Services</a>
                    <?php endif; ?>
                </li>

                <li class="nav-item">
                    <?php if ($current == 'about.php'): ?>
                        <span class="active">About Us</span>
                    <?php else: ?>
                        <a href="about.php">About Us</a>
                    <?php endif; ?>
                </li>

                <li class="nav-item">
                    <?php if ($current == 'blog.php'): ?>
                        <span class="active">Blog</span>
                    <?php else: ?>
                        <a href="blog.php">Blog</a>
                    <?php endif; ?>
                </li>

                <li class="nav-item">
                    <?php if ($current == 'contact.php'): ?>
                        <span class="active">Contact Us</span>
                    <?php else: ?>
                        <a href="contact.php">Contact Us</a>
                    <?php endif; ?>
                </li>
            </ul>
        </nav>
        <a class="button-book-appointment" href="#">BOOK APPOINTMENT</a>
    </div>


    
</header>