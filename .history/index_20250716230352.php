<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage Barbershop</title>
    
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/index.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">

</head>
<body>

    <!-- Header -->
    <?php include 'components/header.php'; ?>

    <main>
        <!-- Hero -->
        <section class="hero" role="banner" aria-label="Barbershop hero section">
            <div class="content-hero-wrapper">
                <img src="./assets/images/logo/logo1.svg" alt="Barbershop Logo" class="content-hero-logo">
                <h1 class="content-hero-title">BARBERSHOP</h1>
            </div>
        </section>

        <!-- Services -->
        <section class="services" role="region" aria-label="Barbershop services">
            <h3 class="services-subtitle">OUR TREATMENT</h3>
            <h2 class="services-title">SERVICES</h2>

            <div class="services-list-wrapper">
                <ul class="services-list">
                    <li class="service-item-wrapper">
                        <ul class="service-item">
                            <li class="service-item-icon">
                                <img src="./assets/images/icons/services/icon_scissors.svg" alt="scissors">
                            </li>
                            <li class="service-item-title">
                                <h3>HAIRCUT & BEARD TRIM</h3>
                            </li>
                            <li class="service-item-description">
                                <p>Get a tailored haircut with precision beard trimming for a well-groomed look.</p>
                            </li>
                        </ul>
                    </li>
                    <li class="service-item-wrapper">
                        <ul class="service-item">
                            <li class="service-item-icon">
                                <img src="./assets/images/icons/services/icon_razor.svg" alt="shave">
                            </li>
                            <li class="service-item-title">
                                <h3>SHAVES & HAIRCUT</h3>
                            </li>
                            <li class="service-item-description">
                                <p>Classic haircut and clean shave service to keep your style timeless and sharp.</p>
                            </li>
                        </ul>
                    </li>
                    <li class="service-item-wrapper">
                        <ul class="service-item">
                            <li class="service-item-icon">
                                <img src="./assets/images/icons/services/icon_beard.svg" alt="beard">
                            </li>
                            <li class="service-item-title">
                                <h3>FACIAL & SHAVE</h3>
                            </li>
                            <li class="service-item-description">
                                <p>A refreshing facial treatment combined with a traditional hot towel shave for a clean, sharp look.</p>
                            </li>
                        </ul>
                    </li>
                    <li class="service-item-wrapper">
                        <ul class="service-item">
                            <li class="service-item-icon">
                                <img src="./assets/images/icons/services/icon_mustache.svg" alt="mustache">
                            </li>
                            <li class="service-item-title">
                                <h3>MUSTACHE TRIMMING</h3>
                            </li>
                            <li class="service-item-description">
                                <p>Keep your mustache neat and defined with expert trimming and shaping.</p>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="services-list-line-button-wrapper">
                    <a href="#" class="explore-now-button-services-list">EXPLORE NOW</a>
                </div>
            </div>
            
        </section>


        <section class="counter" role="region" aria-label="Barbershop statistics">
            <ul class="counter-list">
                <li class="counter-item">
                    <ul>
                        <li>
                            <img src="./assets/images/icons/counter/icon_razor.svg" alt="happy customers">
                        </li>
                        <li class="counter-item-number"><2500</li>
                        <li class="counter-item-text">SHAVES</li>
                    </ul>
                </li>
            </ul>
        </section>

    </main>
    
    <?php include 'components/footer.php'; ?>

</body>
</html>