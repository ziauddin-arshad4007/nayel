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
        // ENGINEERING SURVEYS & STUDIES — CONTENT DATA
        // ------------------------------------------------------------

        const hero = [
            {
                title: 'Engineering Surveys & Studies',
                breadcrumb: {
                    home: 'Home',
                    separator: '/',
                    current: 'Engineering Surveys & Studies',
                    homeLink: '/'
                }
            }
        ];

        const whyEpc = [
            {
                heading1: 'WHY ENGINEERING SURVEYS?',
                heading2: 'A Smarter Way to Design Your Project',
                description: 'Engineering surveys and technical studies are the foundation of a successful project. We collect accurate site data, analyze constraints, and model system performance to help ensure your design is feasible, efficient, and compliant. This supports reduced risk, optimized design, and validated performance before construction begins.',
                valuesLabel: 'Key Benefits'
            }
        ];

        const valueCards = [
            {
                icon: 'fas fa-map-marked-alt',
                title: 'Accurate Site Data',
                desc: 'Site inspections and technical data collection.',
                className: 'value-card'
            },
            {
                icon: 'fas fa-project-diagram',
                title: 'Duct & Manhole Studies',
                desc: 'Mandrelling, conduit clearance, and fold-out drawings.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-video',
                title: 'CCTV Coverage Analysis',
                desc: 'Camera positioning, blind-spot identification, and storage calculations.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-wifi',
                title: 'Wi-Fi Coverage Surveys',
                desc: 'Predictive and on-site surveys with coverage heat maps.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-broadcast-tower',
                title: 'Radio Communication Studies',
                desc: 'TETRA, UHF, and VHF coverage modelling and field testing.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-calculator',
                title: 'Engineering Calculations',
                desc: 'Network capacity, UPS sizing, and heat-load calculations.',
                className: 'value-card value-card--last'
            }
        ];

        const civilWorks = [
            {
                heading1: 'TYPES OF ENGINEERING SURVEYS',
                heading2: 'Find the Right Study for Your Goal',
                image: 'assets/img/Engineering & Design/Engineering Surveys & Studies.webp',
                description: 'Our engineering surveys and technical studies support different project and technical requirements. Select the studies that best match your design, coverage, and compliance needs.',
                points: [
                    'Site Surveys — Site inspections and requirements analysis.',
                    'Duct & Manhole Studies — Mandrelling and conduit clearance.',
                    'CCTV Coverage — Camera positioning and blind-spot analysis.',
                    'Wi-Fi Surveys — Predictive and on-site wireless surveys.',
                    'Radio Studies — TETRA, UHF, and VHF coverage modelling.',
                    'PAGA Studies — Acoustic modelling and speech intelligibility.',
                    'Engineering Calculations — Network, UPS, and heat-load sizing.'
                ]
            }
        ];

        const howItWorks = [
            {
                heading1: 'HOW IT WORKS',
                heading2: 'From Site Inspection to Design Validation',
                description: 'We turn field data and technical analysis into practical recommendations that help validate your design before construction begins.',
                services: [
                    {
                        link: '#',
                        title: 'Site Inspection',
                        desc: 'We visit your site and collect technical data.'
                    },
                    {
                        link: '#',
                        title: 'Data Analysis',
                        desc: 'We analyze constraints and model system performance.'
                    },
                    {
                        link: '#',
                        title: 'Study Report',
                        desc: 'We deliver a detailed report with findings and recommendations.'
                    },
                    {
                        link: '#',
                        title: 'Design Validation',
                        desc: 'We validate the design before construction.'
                    }
                ]
            }
        ];

        const whoShouldInvest = [
            {
                heading1: 'WHO SHOULD INVEST?',
                heading2: 'Engineering surveys and studies are ideal for organizations that want to:',
                points: [
                    'Validate system design before construction.',
                    'Identify site constraints and installation feasibility.',
                    'Optimize coverage and system performance.',
                    'Ensure compliance with applicable technical standards.'
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