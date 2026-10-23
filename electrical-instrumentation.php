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
        // ELECTRICAL & INSTRUMENTATION — CONTENT DATA
        // ------------------------------------------------------------

        const hero = [
            {
                title: 'Electrical & Instrumentation',
                breadcrumb: {
                    home: 'Home',
                    separator: '/',
                    current: 'Electrical & Instrumentation',
                    homeLink: '/'
                }
            }
        ];

        const whyEpc = [
            {
                heading1: 'WHY ELECTRICAL & INSTRUMENTATION?',
                heading2: 'Powering Operations with Precision and Control',
                description: 'Electrical and instrumentation systems help industrial facilities operate safely, efficiently, and reliably. Nayel supports electrical installation, instrumentation, control integration, testing, and commissioning to connect essential equipment and support dependable facility operations.',
                valuesLabel: 'Key Benefits'
            }
        ];

        const valueCards = [
            {
                icon: 'fas fa-bolt',
                title: 'Electrical Installation',
                desc: 'Electrical systems, equipment connections, and installation works.',
                className: 'value-card'
            },
            {
                icon: 'fas fa-plug',
                title: 'Power Distribution',
                desc: 'Distribution equipment, panels, and electrical connections.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-tachometer-alt',
                title: 'Instrumentation',
                desc: 'Field instruments and process measurement devices.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-sliders-h',
                title: 'Control Systems',
                desc: 'Control interfaces and integration with operational systems.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-clipboard-check',
                title: 'Testing & Inspection',
                desc: 'Electrical checks, instrument testing, and verification.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-tools',
                title: 'Maintenance Support',
                desc: 'Troubleshooting, repairs, and system reliability support.',
                className: 'value-card value-card--last'
            }
        ];

        const civilWorks = [
            {
                heading1: 'TYPES OF ELECTRICAL & INSTRUMENTATION SERVICES',
                heading2: 'Find the Right Solution for Your Operations',
                description: 'We support electrical and instrumentation requirements across industrial and infrastructure projects, with services selected according to project specifications and facility needs.',
                image: 'assets/img/Contracting/Electrical-Instrumentation.webp',
                imageAlt: 'Industrial electrical and instrumentation systems',
                points: [
                    'Electrical Installation — Electrical equipment, wiring, and installation activities.',
                    'Power Distribution — Electrical panels, distribution equipment, and connections.',
                    'Instrumentation — Field instruments and process measurement devices.',
                    'Control Integration — Integration of instruments with applicable control systems.',
                    'Testing & Inspection — Electrical and instrumentation testing and verification.',
                    'Commissioning Support — System checks and readiness for operation.',
                    'Troubleshooting — Identification and resolution of electrical and instrumentation issues.',
                    'Maintenance — Planned maintenance and equipment reliability support.'
                ]
            }
        ];

        const howItWorks = [
            {
                heading1: 'HOW IT WORKS',
                heading2: 'From Installation to Operational Readiness',
                description: 'We follow a coordinated process to help ensure electrical and instrumentation systems are installed, checked, and prepared for operation.',
                services: [
                    {
                        link: '#',
                        title: 'Scope & Site Assessment',
                        desc: 'We review specifications, drawings, site conditions, and requirements.'
                    },
                    {
                        link: '#',
                        title: 'Engineering & Preparation',
                        desc: 'We coordinate installation plans, equipment, and work activities.'
                    },
                    {
                        link: '#',
                        title: 'Installation & Integration',
                        desc: 'We install electrical components, instruments, and system connections.'
                    },
                    {
                        link: '#',
                        title: 'Testing & Handover',
                        desc: 'We conduct applicable tests and support commissioning and handover.'
                    }
                ]
            }
        ];

        const whoShouldInvest = [
            {
                heading1: 'WHO SHOULD INVEST?',
                heading2: 'Electrical and instrumentation services are ideal for organizations that want to:',
                points: [
                    'Install or upgrade electrical infrastructure.',
                    'Integrate instruments and control systems into industrial operations.',
                    'Improve equipment reliability and operational monitoring.',
                    'Verify installations through testing and commissioning.',
                    'Coordinate electrical and instrumentation works within EPC projects.'
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