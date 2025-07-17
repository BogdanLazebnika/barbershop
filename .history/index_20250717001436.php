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
                    <li class="service-item">
                        <div class="service-item-content">
                            <img class="service-item-icon" src="./assets/images/icons/services/icon_scissors.svg" alt="Scissors icon">
                            <h3 class="service-item-title">HAIRCUT & BEARD TRIM</h3>
                            <p class="service-item-description">
                                Get a tailored haircut with precision beard trimming for a well-groomed look.
                            </p>
                        </div>
                    </li>

                    <li class="service-item">
                        <div class="service-item-content">
                            <img class="service-item-icon" src="./assets/images/icons/services/icon_razor.svg" alt="Razor icon">
                            <h3 class="service-item-title">SHAVES & HAIRCUT</h3>
                            <p class="service-item-description">
                                Classic haircut and clean shave service to keep your style timeless and sharp.
                            </p>
                        </div>
                    </li>

                    <li class="service-item">
                        <div class="service-item-content">
                            <img class="service-item-icon" src="./assets/images/icons/services/icon_beard.svg" alt="Beard icon">
                            <h3 class="service-item-title">FACIAL & SHAVE</h3>
                            <p class="service-item-description">
                                A refreshing facial treatment combined with a traditional hot towel shave for a clean, sharp look.
                            </p>
                        </div>
                    </li>

                    <li class="service-item">
                        <div class="service-item-content">
                            <img class="service-item-icon" src="./assets/images/icons/services/icon_mustache.svg" alt="Mustache icon">
                            <h3 class="service-item-title">MUSTACHE TRIMMING</h3>
                            <p class="service-item-description">
                                Keep your mustache neat and defined with expert trimming and shaping.
                            </p>
                        </div>
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
                    <img src="assets/images/icons/counter/icon_razor.svg" alt="Razor" class="counter-item-icon">
                    <h3 class="counter-item-title">2500</h3>
                    <p class="counter-item-text">SHAVES</p>
                </li>
                <li class="counter-item">
                    <img src="assets/images/icons/counter/icon_sc" alt="Haircut" class="counter-item-icon">
                    <h3 class="counter-item-title">4500</h3>
                    <p class="counter-item-text">HAIRCUTS</p>
                </li>
                <li class="counter-item">
                    <img src="assets/images/icons/counter/icon_barbershop.svg" alt="Barbershop" class="counter-item-icon">
                    <h3 class="counter-item-title">23</h3>
                    <p class="counter-item-text">OPEN SHOPS</p>
                </li>
            </ul>
        </section>

    </main>
    
    <?php include 'components/footer.php'; ?>

</body>
</html>