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
        // AUDIOVISUAL & CONTROL-ROOM SYSTEMS — CONTENT DATA
        // ------------------------------------------------------------

        const hero = [
            {
                title: 'Audiovisual & Control-Room Systems',
                breadcrumb: {
                    home: 'Home',
                    separator: '/',
                    current: 'Audiovisual & Control-Room Systems',
                    homeLink: '/'
                }
            }
        ];

        const whyEpc = [
            {
                heading1: 'WHY AUDIOVISUAL & CONTROL-ROOM SYSTEMS?',
                heading2: 'Seamless Communication and Real-Time Situational Awareness',
                description: 'Audiovisual and control-room systems enable organizations to communicate effectively, monitor operations, and make informed decisions in real time. We support the integration of video conferencing, control-room displays, and audio systems that enhance collaboration and operational efficiency.',
                valuesLabel: 'Key Benefits'
            }
        ];

        const valueCards = [
            {
                icon: 'fas fa-video',
                title: 'Video Conferencing',
                desc: 'High-definition collaboration systems for meeting rooms and boardrooms.',
                className: 'value-card'
            },
            {
                icon: 'fas fa-tv',
                title: 'Control-Room Displays',
                desc: 'Video walls and operator consoles for real-time monitoring.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-volume-up',
                title: 'Integrated Audio',
                desc: 'Clear, reliable communication across all zones and spaces.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-clock',
                title: 'Master Clock Systems',
                desc: 'Facility-wide time synchronization for coordinated operations.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-desktop',
                title: 'Operator Consoles',
                desc: 'Ergonomic workstations designed for long shifts and efficiency.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-link',
                title: 'System Integration',
                desc: 'Linking AV systems with BMS and security platforms.',
                className: 'value-card value-card--last'
            }
        ];

        const civilWorks = [
            {
                heading1: 'TYPES OF AUDIOVISUAL & CONTROL-ROOM SYSTEMS',
                heading2: 'Find the Right Solution for Your Facility',
                description: 'Our audiovisual and control-room solutions support meeting rooms, control centers, boardrooms, and event spaces. Choose systems that suit your collaboration, monitoring, and communication requirements.',
                image: 'assets/img/Engineering & Design/Audiovisual & Control-Room Systems.webp',
                imageAlt: 'Audiovisual systems, control-room displays, and video conferencing',
                points: [
                    'Video Conferencing — Collaboration systems for meeting rooms and boardrooms.',
                    'Control-Room Displays — Video walls and operator consoles for monitoring.',
                    'Audio/Visual Communications — Integrated audio and visual communication systems.',
                    'Master Clock Systems — Facility-wide time synchronization.',
                    'Digital Signage — Queue management and information displays.',
                    'BMS Integration — Linking AV systems with building management systems.',
                    'Operator Consoles — Ergonomic workstations for control rooms.',
                    'Audiovisual System Integration — Seamless integration with existing platforms.'
                ]
            }
        ];

        const howItWorks = [
            {
                heading1: 'HOW IT WORKS',
                heading2: 'From Consultation to Seamless Integration',
                description: 'We coordinate system design, installation, integration, and commissioning to ensure your audiovisual and control-room systems operate flawlessly.',
                services: [
                    {
                        link: '#',
                        title: 'Consultation & Requirements',
                        desc: 'We understand your AV and control-room requirements.'
                    },
                    {
                        link: '#',
                        title: 'System Design',
                        desc: 'We design the layout, displays, and audio systems.'
                    },
                    {
                        link: '#',
                        title: 'Installation & Integration',
                        desc: 'We install and integrate AV systems with existing platforms.'
                    },
                    {
                        link: '#',
                        title: 'Testing & Handover',
                        desc: 'We test, calibrate, and train operators for seamless use.'
                    }
                ]
            }
        ];

        const whoShouldInvest = [
            {
                heading1: 'WHO SHOULD INVEST?',
                heading2: 'Audiovisual and control-room systems are ideal for organizations that want to:',
                points: [
                    'Build a centralized, real-time control room for monitoring.',
                    'Equip boardrooms with high-definition video conferencing.',
                    'Synchronize facility time with master clock systems.',
                    'Integrate AV systems with security and BMS platforms.',
                    'Enhance collaboration and communication across teams.'
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