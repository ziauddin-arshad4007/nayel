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
        // CORPORATE GIFTS & AWARDS — CONTENT DATA
        // ------------------------------------------------------------

        const hero = [
            {
                title: 'Corporate Gifts & Awards',
                breadcrumb: {
                    home: 'Home',
                    separator: '/',
                    current: 'Corporate Gifts & Awards',
                    homeLink: '/'
                }
            }
        ];

        const whyEpc = [
            {
                heading1: 'WHY CORPORATE GIFTS & AWARDS?',
                heading2: 'Celebrate Achievements and Build Lasting Relationships',
                description: 'Corporate gifts and awards help organizations recognize achievements, appreciate employees, strengthen business relationships, and celebrate important milestones. We support customized gifting and recognition products that reflect your brand identity and make professional occasions more memorable.',
                valuesLabel: 'Key Benefits'
            }
        ];

        const valueCards = [
            {
                icon: 'fas fa-gift',
                title: 'Personalized Gifts',
                desc: 'Customized gifts suited to recipients and occasions.',
                className: 'value-card'
            },
            {
                icon: 'fas fa-trophy',
                title: 'Achievement Awards',
                desc: 'Awards and trophies to recognize outstanding performance.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-medal',
                title: 'Recognition & Appreciation',
                desc: 'Products for employee recognition and milestone celebrations.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-building',
                title: 'Corporate Branding',
                desc: 'Branded gifts that reflect your company identity.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-handshake',
                title: 'Business Relationships',
                desc: 'Thoughtful gifts for clients, partners, and stakeholders.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-box-open',
                title: 'Custom Gift Sets',
                desc: 'Coordinated gift selections for events and special occasions.',
                className: 'value-card value-card--last'
            }
        ];

        const civilWorks = [
            {
                heading1: 'TYPES OF CORPORATE GIFTS & AWARDS',
                heading2: 'Find the Right Gift for Every Occasion',
                description: 'Our corporate gifting and awards solutions support employee appreciation, business events, recognition programs, and client relationships. Choose products that suit your occasion, audience, and branding requirements.',
                image: 'assets/img/Printing/Corporate Gifts.webp',
                imageAlt: 'Corporate gifts, trophies, and achievement awards',
                points: [
                    'Corporate Gift Sets — Coordinated gift selections for business occasions.',
                    'Branded Business Gifts — Customized gifts featuring your company identity.',
                    'Trophies & Awards — Recognition products for achievements and competitions.',
                    'Plaques & Appreciation Awards — Recognition pieces for milestones and contributions.',
                    'Employee Appreciation Gifts — Gifts for staff recognition and celebrations.',
                    'Client & Partner Gifts — Customized products for professional relationships.',
                    'Event & Conference Gifts — Branded gifts for corporate gatherings and launches.',
                    'Personalized Keepsakes — Customized items for special occasions and commemorations.'
                ]
            }
        ];

        const howItWorks = [
            {
                heading1: 'HOW IT WORKS',
                heading2: 'From Gift Selection to Meaningful Recognition',
                description: 'We coordinate product selection, customization, branding, and finishing to help you create thoughtful corporate gifts and recognition products.',
                services: [
                    {
                        link: '#',
                        title: 'Occasion & Requirements',
                        desc: 'We understand the event, recipients, quantity, and budget.'
                    },
                    {
                        link: '#',
                        title: 'Product Selection',
                        desc: 'We recommend suitable gifts, awards, and customization options.'
                    },
                    {
                        link: '#',
                        title: 'Customization & Production',
                        desc: 'We apply approved branding, engraving, or personalization.'
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
                heading2: 'Corporate gifts and awards are ideal for organizations that want to:',
                points: [
                    'Recognize employee achievements and professional milestones.',
                    'Appreciate clients, partners, and important business relationships.',
                    'Prepare customized gifts for corporate events and conferences.',
                    'Celebrate company anniversaries, launches, and special occasions.',
                    'Strengthen brand identity through personalized corporate gifting.'
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