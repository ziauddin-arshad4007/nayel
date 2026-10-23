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
        // NAYEL CONTRACTING & EPC — CONTENT DATA
        // ------------------------------------------------------------

        const hero = [
            {
                title: 'Contracting & EPC Services',
                breadcrumb: {
                    home: 'Home',
                    separator: '/',
                    current: 'Contracting & EPC',
                    homeLink: '/'
                }
            }
        ];
        const whyEpc = [
            {
                heading1: 'WHY EPC CONTRACTING?',
                heading2: 'A Smarter Way to Deliver Your Project',
                description: 'EPC contracting integrates engineering, procurement, and construction into a single, streamlined delivery model. We coordinate design, supply chains, subcontractors, construction, and commissioning throughout the project lifecycle. This provides better project coordination, improved cost control, reduced delivery risks, and a single point of responsibility.',
                valuesLabel: 'Key Benefits'
            }
        ];

        const valueCards = [
            {
                icon: 'fas fa-drafting-compass',
                title: 'Integrated Engineering',
                desc: 'FEED, detailed engineering, and coordinated design.',
                className: 'value-card'
            },
            {
                icon: 'fas fa-truck-loading',
                title: 'Reliable Procurement',
                desc: 'Vendor selection, material sourcing, and supply coordination.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-hard-hat',
                title: 'Construction Delivery',
                desc: 'Coordinated site execution, supervision, and subcontractors.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-chart-line',
                title: 'Value Engineering',
                desc: 'Practical design improvements and cost optimization.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-clipboard-check',
                title: 'Quality & Safety',
                desc: 'Quality assurance, HSE planning, and compliance controls.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-tasks',
                title: 'Project Control',
                desc: 'Planning, scheduling, commissioning, and handover.',
                className: 'value-card value-card--last'
            }
        ];

        const civilWorks = [
            {
                heading1: 'TYPES OF CONTRACTING SERVICES',
                heading2: 'Complete Solutions for Every Project Stage',
                description: 'Nayel provides integrated contracting and EPC capabilities across engineering, procurement, construction, and technical services. Select the service that matches your project scope and delivery requirements.',
                image: 'assets/img/Contracting/EPC.webp',
                imageAlt: 'Contracting and EPC project delivery',
                points: [
                    'EPC Contracting — Integrated engineering, procurement, construction, and commissioning.',
                    'Civil Works — Earthworks, foundations, concrete structures, roads, and utilities.',
                    'Mechanical Works — Equipment installation, piping, fabrication, HVAC, and maintenance.',
                    'Electrical & Instrumentation — Electrical installations, instrumentation, controls, and testing.',
                    'Fire Safety & HSE — Fire protection, workplace safety, and risk management.',
                    'Automation & Digital Solutions — Industrial automation, monitoring, and integrated technology systems.',
                    'Project Management — Project planning, budgeting, scheduling, and progress control.',
                    'Procurement & Supply — Vendor coordination, material sourcing, and supply management.',
                    'Operations & Maintenance — Asset support, inspections, repairs, and maintenance.'
                ]
            }
        ];

        const howItWorks = [
            {
                heading1: 'HOW IT WORKS',
                heading2: 'From Project Planning to Final Handover',
                description: 'Our coordinated project delivery process helps align engineering, materials, construction, and commissioning with your project objectives.',
                services: [
                    {
                        link: '#',
                        title: 'Engineering & Planning',
                        desc: 'We define the scope, develop designs, and establish project plans.'
                    },
                    {
                        link: '#',
                        title: 'Procurement & Coordination',
                        desc: 'We coordinate suppliers, materials, and project resources.'
                    },
                    {
                        link: '#',
                        title: 'Construction & Execution',
                        desc: 'We manage site activities, subcontractors, quality, and safety.'
                    },
                    {
                        link: '#',
                        title: 'Testing & Handover',
                        desc: 'We coordinate commissioning, documentation, and final handover.'
                    }
                ]
            }
        ];

        const whoShouldInvest = [
            {
                heading1: 'WHO SHOULD INVEST?',
                heading2: 'Contracting and EPC services are ideal for organizations that want to:',
                points: [
                    'Manage engineering, procurement, and construction through an integrated delivery model.',
                    'Improve project coordination, cost control, and scheduling.',
                    'Execute complex industrial and infrastructure projects.',
                    'Maintain quality, safety, and compliance throughout project delivery.',
                    'Coordinate commissioning, documentation, and final handover.'
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