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
        // SECURITY & SAIS CONTRACTING — CONTENT DATA
        // ------------------------------------------------------------

        const hero = [
            {
                title: 'Security & SAIS Contracting',
                breadcrumb: {
                    home: 'Home',
                    separator: '/',
                    current: 'Security & SAIS Contracting',
                    homeLink: '/'
                }
            }
        ];

        const whyEpc = [
            {
                heading1: 'WHY SECURITY & SAIS?',
                heading2: 'A Smarter Way to Protect Your Facility',
                description: 'Security and SAIS compliance are critical for protecting people, assets, and infrastructure. We integrate perimeter protection, access control, CCTV, and command-and-control systems into a unified platform. This enables comprehensive security, regulatory compliance, and centralized monitoring.',
                valuesLabel: 'Key Benefits'
            }
        ];

        const valueCards = [
            {
                icon: 'fas fa-clipboard-check',
                title: 'SAIS Compliance',
                desc: 'Gap assessments, shop drawings, and compliance matrices.',
                className: 'value-card'
            },
            {
                icon: 'fas fa-shield-alt',
                title: 'Perimeter Protection',
                desc: 'Anti-climb fencing, barbed wire, and fence monitoring.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-door-closed',
                title: 'Access Control',
                desc: 'Crash-rated bollards, road blockers, and turnstiles.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-video',
                title: 'CCTV Surveillance',
                desc: 'IP CCTV, thermal imaging, VMS, and video analytics.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-user-shield',
                title: 'Intrusion Detection',
                desc: 'Fence monitoring, buried detection, and alarm zoning.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-desktop',
                title: 'Command & Control',
                desc: 'PSIM, video walls, and incident workflows.',
                className: 'value-card value-card--last'
            }
        ];

        const civilWorks = [
            {
                heading1: 'TYPES OF SECURITY SERVICES',
                heading2: 'Find the Right Solution for Your Goal',
                image: 'assets/img/Engineering & Design/Security & SAIS Contracting.webp',
                description: 'We provide security and SAIS solutions for different facility and operational needs. Choose the services that best match your security, access control, and compliance requirements.',
                points: [
                    'SAIS Compliance — Gap assessments and compliance coordination.',
                    'Perimeter Protection — Anti-climb fencing and fence monitoring.',
                    'Access Control — Bollards, road blockers, and turnstiles.',
                    'CCTV Surveillance — IP CCTV, thermal imaging, and VMS.',
                    'Intrusion Detection — Fence monitoring and alarm zoning.',
                    'Vehicle Screening — ANPR and vehicle access management.',
                    'Command & Control — PSIM, video walls, and incident workflows.'
                ]
            }
        ];

        const howItWorks = [
            {
                heading1: 'HOW IT WORKS',
                heading2: 'A Structured Approach to Site Security',
                description: 'From compliance assessment to installation and commissioning, we help build an integrated security environment tailored to your facility.',
                services: [
                    {
                        link: '#',
                        title: 'Site Survey & Gap Assessment',
                        desc: 'We inspect your site and assess compliance requirements.'
                    },
                    {
                        link: '#',
                        title: 'Security Design',
                        desc: 'We develop the security layout and basis of design.'
                    },
                    {
                        link: '#',
                        title: 'Installation & Integration',
                        desc: 'We install fencing, barriers, CCTV, and related systems.'
                    },
                    {
                        link: '#',
                        title: 'Testing & Handover',
                        desc: 'We test, commission, and train your team.'
                    }
                ]
            }
        ];

        const whoShouldInvest = [
            {
                heading1: 'WHO SHOULD INVEST?',
                heading2: 'Security and SAIS contracting is ideal for organizations that want to:',
                points: [
                    'Ensure compliance with applicable Saudi security regulations.',
                    'Protect perimeters, access points, and critical assets.',
                    'Integrate CCTV, access control, and intrusion detection.',
                    'Centralize security monitoring and incident response.'
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