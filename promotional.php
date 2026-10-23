<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Surface Restorizers | Home Page </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link href="assets/img/new-logo.png" sizes="158x158" rel="shortcut icon" type="image/x-icon">
    <link href="assets/img/new-logo.png" sizes="158x158" rel="shortcut icon">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/component.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>

<body>
    <!--------------------------------------------- Header section Start  -------------------------------------------------->
    <?php include 'header.php';?>
    <!--------------------------------------------- Hero section Start  -------------------------------------------------->
    <?php include 'services.php';?>
    <!--------------------------------------------- Footer section Start  -------------------------------------------------->
    <?php include 'footer.php'; ?>
    <!-- Bootstrap JS -->
    <!-- jQuery (required for Bootstrap 4) -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Popper.js (required for tooltips/popovers) -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- ============================================================ -->
    <!-- DYNAMIC CONTENT: Arrays of Objects (JavaScript)              -->
    <!-- ============================================================ -->
    <script>
        // ------------------------------------------------------------
        // CONTENT DATA — Arrays of Objects
        // ------------------------------------------------------------

        // ------------------------------------------------------------
        // PROMOTIONAL MERCHANDISE — CONTENT DATA
        // ------------------------------------------------------------

        const hero = [
            {
                title: 'Promotional Merchandise',
                breadcrumb: {
                    home: 'Home',
                    separator: '/',
                    current: 'Promotional Merchandise',
                    homeLink: '/'
                }
            }
        ];

        const whyEpc = [
            {
                heading1: 'WHY PROMOTIONAL MERCHANDISE?',
                heading2: 'Turn Everyday Items into Brand Experiences',
                description: 'Promotional merchandise gives businesses a practical way to increase brand awareness and create memorable connections with customers, employees, and partners. From branded everyday essentials to campaign giveaways, we help businesses select customized items that communicate their identity beyond traditional advertising.',
                valuesLabel: 'Key Benefits'
            }
        ];

        const valueCards = [
            {
                icon: 'fas fa-gift',
                title: 'Memorable Giveaways',
                desc: 'Useful branded items for campaigns and business events.',
                className: 'value-card'
            },
            {
                icon: 'fas fa-pen',
                title: 'Everyday Brand Exposure',
                desc: 'Customized products that keep your brand visible.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-palette',
                title: 'Custom Branding',
                desc: 'Logo and brand applications suited to selected products.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-users',
                title: 'Customer Engagement',
                desc: 'Merchandise for outreach, promotions, and appreciation.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-calendar-alt',
                title: 'Event-Ready Products',
                desc: 'Branded items for conferences, exhibitions, and launches.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-box-open',
                title: 'Flexible Product Choices',
                desc: 'Merchandise options for different audiences and budgets.',
                className: 'value-card value-card--last'
            }
        ];

        const civilWorks = [
            {
                heading1: 'TYPES OF PROMOTIONAL MERCHANDISE',
                heading2: 'Find the Right Products for Your Brand',
                description: 'Our promotional merchandise solutions support marketing campaigns, corporate events, customer engagement, and employee initiatives. Select products that align with your audience, brand identity, and campaign objectives.',
                image: 'assets/img/Printing/Promotional Branding.webp',
                imageAlt: 'Customized promotional merchandise and branded products',
                points: [
                    'Branded Stationery — Pens, notebooks, notepads, and office accessories.',
                    'Drinkware — Customized bottles, mugs, and reusable cups.',
                    'Bags & Accessories — Branded bags, pouches, and practical accessories.',
                    'Apparel & Wearables — Customized clothing and wearable promotional items.',
                    'Event Giveaways — Promotional products for exhibitions, launches, and conferences.',
                    'Corporate Promotional Kits — Coordinated merchandise sets for customers and employees.',
                    'Technology Accessories — Selected customizable accessories for everyday use.',
                    'Campaign Merchandise — Branded products tailored to marketing initiatives.'
                ]
            }
        ];

        const howItWorks = [
            {
                heading1: 'HOW IT WORKS',
                heading2: 'From Product Selection to Branded Merchandise',
                description: 'We help coordinate product selection, artwork, branding methods, and production requirements for a consistent promotional merchandise order.',
                services: [
                    {
                        link: '#',
                        title: 'Campaign Requirements',
                        desc: 'We understand your audience, purpose, quantity, and budget.'
                    },
                    {
                        link: '#',
                        title: 'Product & Branding Selection',
                        desc: 'We shortlist suitable products and branding options.'
                    },
                    {
                        link: '#',
                        title: 'Customization & Production',
                        desc: 'We apply the approved artwork and produce your branded items.'
                    },
                    {
                        link: '#',
                        title: 'Quality Check & Delivery',
                        desc: 'We check the finished products and coordinate delivery.'
                    }
                ]
            }
        ];

        const whoShouldInvest = [
            {
                heading1: 'WHO SHOULD INVEST?',
                heading2: 'Promotional merchandise is ideal for organizations that want to:',
                points: [
                    'Increase brand awareness through useful branded products.',
                    'Create giveaways for trade shows, conferences, and campaigns.',
                    'Recognize customers, employees, and business partners.',
                    'Build coordinated promotional kits for marketing initiatives.',
                    'Strengthen brand recognition beyond digital and print advertising.'
                ]
            }
        ];

        // ------------------------------------------------------------
        // RENDERERS — build HTML strings and inject into data-render targets
        // ------------------------------------------------------------

        // Hero
        document.querySelector('[data-render="hero"]').innerHTML = hero.map(h => `
        <h1 class="hero-title" style="color: var(--clr-black);">${h.title}</h1>
        <nav class="hero-description inner-breadcrumb" aria-label="Breadcrumb">
            <a href="${h.breadcrumb.homeLink}">${h.breadcrumb.home}</a>
            <span class="text-dark">${h.breadcrumb.separator}</span>
            <span aria-current="page">${h.breadcrumb.current}</span>
        </nav>
    `).join('');

        // Why EPC
        document.querySelector('[data-render="why-epc"]').innerHTML = whyEpc.map(e => `
        <h2 class="heading-1">
            <span> ${e.heading1}
            </span>
        </h2>
        <h2 class="heading-2">
            ${e.heading2}
        </h2>
        <p class="section-discription">${e.description}</p>
    `).join('');

        // Values label
        document.querySelector('[data-render="values-label"]').innerHTML = whyEpc[0].valuesLabel;

        // Value cards
        document.querySelector('[data-render="value-cards"]').innerHTML = valueCards.map(c => `
        <div class="${c.className}">
            <div class="value-card__header">
                <div class="value-card__icon">
                    <i class="${c.icon}"></i>
                </div>
                <h4 class="value-card__title">${c.title}</h4>
            </div>
         
        </div>
    `).join('');

        // Civil works
        document.querySelector('[data-render="civil-works"]').innerHTML = civilWorks.map(cw => `
        <h2 class="heading-1">
            <span> ${cw.heading1}
            </span>
        </h2>
        <h2 class="heading-2">
            ${cw.heading2}
        </h2>
        <p class="section-discription">
            ${cw.description}
        </p>
        <div class="row align-items-center why-choose-row pt-3">
            <div class="col-lg-4 pr-md-4 pl-1">
                <img src="${cw.image}"
                    alt="${cw.imageAlt}" class="who-we-img why-choose-img">
            </div>
            <div class="col-lg-8 ">

                <div class="services-list">
                    ${cw.points.map(p => `
                    <p class="services-points">
                        ${p}
                    </p>`).join('')}
                    <!-- repeat -->
                </div>
            </div>
        </div>
    `).join('');

        // How it works
        document.querySelector('[data-render="how-it-works"]').innerHTML = howItWorks.map(hiw => `
        <h2 class="heading-1">
            <span> ${hiw.heading1}
            </span>
        </h2>
        <h2 class="heading-2">
            ${hiw.heading2}
        </h2>
        <p class="section-discription">
            ${hiw.description}
        </p>
        <div class="engineering-services">
            <div class="services-grid">
                ${hiw.services.map(s => `
                <a href="${s.link}" class="service-card">
                    <div class="service-content">
                        <h3>${s.title}</h3>
                        <p>${s.desc}</p>
                    </div>
                    <span class="service-arrow">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </a>`).join('')}
            </div>
        </div>
    `).join('');

        // Who should invest
        document.querySelector('[data-render="who-should-invest"]').innerHTML = whoShouldInvest.map(w => `
        <h2 class="heading-1">
            <span> ${w.heading1}
            </span>
        </h2>
        <h2 class="heading-2">
            ${w.heading2}
        </h2>

        <div class="epc-invest-card-container">
            ${w.points.map(p => `
            <p class="epc-invest-card-text">
                ${p}
            </p>`).join('')}
        </div>
    `).join('');
    </script>

</body>

</html>