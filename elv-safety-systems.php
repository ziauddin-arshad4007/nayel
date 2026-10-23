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
        // ELV & SAFETY SYSTEMS — CONTENT DATA
        // ------------------------------------------------------------

        const hero = [
            {
                title: 'ELV & Safety Systems',
                breadcrumb: {
                    home: 'Home',
                    separator: '/',
                    current: 'ELV & Safety Systems',
                    homeLink: '/'
                }
            }
        ];

        const whyEpc = [
            {
                heading1: 'WHY ELV & SAFETY?',
                heading2: 'A Smarter Way to Protect Your Facility',
                description: 'ELV and safety systems are critical for protecting people, property, and operations. We integrate public address, fire detection, building management, and communication systems into a unified platform. This enables centralized monitoring, emergency readiness, and seamless system integration.',
                valuesLabel: 'Key Benefits'
            }
        ];

        const valueCards = [
            {
                icon: 'fas fa-bullhorn',
                title: 'Emergency Notification',
                className: 'value-card'
            },
            {
                icon: 'fas fa-fire-extinguisher',
                title: 'Fire Detection',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-building',
                title: 'Building Management',
                desc: 'Centralized BMS with open-protocol integration.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-headset',
                title: 'Intercom & Communication',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-tv',
                title: 'Audiovisual Systems',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-sliders-h',
                title: 'Other ELV Systems',
                className: 'value-card value-card--last'
            }
        ];

        const civilWorks = [
            {
                heading1: 'TYPES OF ELV SERVICES',
                heading2: 'Find the Right System for Your Goal',
                image: 'assets/img/Engineering & Design/ELV-System-Integrators.webp',

                description: 'We provide ELV and safety systems for different facility and operational needs. Choose the solutions that best match your safety, communication, and building management requirements.',
                points: [
                    'PAGA Systems — Industrial paging, emergency sirens, and voice evacuation.',
                    'Intercom Systems — Audio/video intercom and emergency help points.',
                    'Fire Detection — Detection panels, aspirating systems, and interface monitoring.',
                    'BMS — Centralized monitoring and open-protocol integration.',
                    'Audiovisual — Video conferencing and control-room displays.',
                    'Other ELV Systems — Master clock, nurse call, queue management, and parking guidance.'
                ]
            }
        ];

        const howItWorks = [
            {
                heading1: 'HOW IT WORKS',
                heading2: 'Simple Steps to Improve Facility Safety',
                description: 'We follow a structured process to ensure your ELV systems are correctly designed, integrated, tested, and ready for operation.',
                services: [
                    {
                        link: '#',
                        title: 'Site Survey & Requirements',
                        desc: 'We inspect your site and collect technical data.'
                    },
                    {
                        link: '#',
                        title: 'System Design & Architecture',
                        desc: 'We develop the system layout and basis of design.'
                    },
                    {
                        link: '#',
                        title: 'Installation & Integration',
                        desc: 'We install panels, speakers, and system devices.'
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
                heading2: 'ELV and safety systems are ideal for organizations that want to:',
                points: [
                    'Ensure emergency notification and evacuation readiness.',
                    'Integrate fire detection and building management.',
                    'Centralize monitoring and control of facility systems.',
                    'Comply with applicable safety and building regulations.'
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