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
        // SIGNAGE & ENGRAVING — CONTENT DATA
        // ------------------------------------------------------------

        const hero = [
            {
                title: 'Signage & Engraving',
                breadcrumb: {
                    home: 'Home',
                    separator: '/',
                    current: 'Signage & Engraving',
                    homeLink: '/'
                }
            }
        ];

        const whyEpc = [
            {
                heading1: 'WHY SIGNAGE & ENGRAVING?',
                heading2: 'Clear Identification with a Professional Finish',
                description: 'Signage and engraving help organizations communicate directions, identify spaces, display important information, and reinforce their brand identity. From business signs and wayfinding systems to engraved nameplates and identification plates, we provide customized solutions for professional environments.',
                valuesLabel: 'Key Benefits'
            }
        ];

        const valueCards = [
            {
                icon: 'fas fa-sign',
                title: 'Custom Signage',
                desc: 'Signs designed around your branding and communication needs.',
                className: 'value-card'
            },
            {
                icon: 'fas fa-compass',
                title: 'Wayfinding & Direction',
                desc: 'Directional signs that help people navigate spaces.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-id-card',
                title: 'Clear Identification',
                desc: 'Nameplates, labels, and identification signage.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-tools',
                title: 'Engraved Details',
                desc: 'Customized engraved text, markings, and information.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-industry',
                title: 'Industrial Applications',
                desc: 'Equipment labels and identification plates for facilities.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-building',
                title: 'Brand Consistency',
                desc: 'Coordinated signage across offices and business locations.',
                className: 'value-card value-card--last'
            }
        ];

        const civilWorks = [
            {
                heading1: 'TYPES OF SIGNAGE & ENGRAVING',
                heading2: 'Find the Right Sign for Your Space',
                image: 'assets/img/Printing/Signage.webp',
                description: 'We provide signage and engraving solutions for corporate, commercial, retail, and industrial environments. Choose the sign type, material, and finish that suit your application.',
               
                imageAlt: 'Custom signage and engraved identification plates',
                points: [
                    'Corporate Signage — Branded signs for offices, reception areas, and business premises.',
                    'Directional Signage — Wayfinding and navigation signs for buildings and facilities.',
                    'Safety Signage — Signs for warnings, instructions, and safety information.',
                    'Nameplates & Labels — Identification plates, room labels, and equipment markings.',
                    'Engraved Plates — Customized engraved text, numbering, and identification.',
                    'Retail Signage — Signs for stores, showrooms, and commercial displays.',
                    'Exhibition Signage — Branded signs for events, booths, and displays.',
                    'Custom Sign Solutions — Signage tailored to specific dimensions and applications.'
                ]
            }
        ];

        const howItWorks = [
            {
                heading1: 'HOW IT WORKS',
                heading2: 'From Concept to Installation-Ready Signage',
                description: 'We coordinate signage and engraving requirements to create clear, consistent, and application-appropriate finished products.',
                services: [
                    {
                        link: '#',
                        title: 'Requirements & Site Review',
                        desc: 'We confirm sign purpose, location, dimensions, and application.'
                    },
                    {
                        link: '#',
                        title: 'Design & Material Selection',
                        desc: 'We prepare layouts and select appropriate materials and finishes.'
                    },
                    {
                        link: '#',
                        title: 'Production & Engraving',
                        desc: 'We produce the signage and complete the required engraving.'
                    },
                    {
                        link: '#',
                        title: 'Quality Check & Handover',
                        desc: 'We check the finished signs and coordinate delivery or installation where agreed.'
                    }
                ]
            }
        ];

        const whoShouldInvest = [
            {
                heading1: 'WHO SHOULD INVEST?',
                heading2: 'Signage and engraving services are ideal for organizations that want to:',
                points: [
                    'Improve navigation and identification across their facilities.',
                    'Display consistent branding at offices, shops, and commercial sites.',
                    'Identify equipment, rooms, assets, and operational areas.',
                    'Communicate safety information through clearly visible signage.',
                    'Create customized engraved plates and professional signs.'
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