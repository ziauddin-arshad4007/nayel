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
        // AUTOMATION & DIGITAL SOLUTIONS — CONTENT DATA
        // ------------------------------------------------------------

        const hero = [
            {
                title: 'Automation & Digital Solutions',
                breadcrumb: {
                    home: 'Home',
                    separator: '/',
                    current: 'Automation & Digital Solutions',
                    homeLink: '/'
                }
            }
        ];

        const whyEpc = [
            {
                heading1: 'WHY AUTOMATION & DIGITAL SOLUTIONS?',
                heading2: 'Smarter Systems for More Efficient Operations',
                description: 'Automation and digital technologies help organizations improve visibility, coordination, and operational efficiency. Nayel supports the integration of industrial control, monitoring, and digital solutions to connect systems, improve access to operational information, and support informed decision-making.',
                valuesLabel: 'Key Benefits'
            }
        ];

        const valueCards = [
            {
                icon: 'fas fa-robot',
                title: 'Industrial Automation',
                desc: 'Automation solutions for industrial processes and operations.',
                className: 'value-card'
            },
            {
                icon: 'fas fa-microchip',
                title: 'Control System Integration',
                desc: 'Integration of control systems and connected equipment.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-chart-line',
                title: 'Real-Time Monitoring',
                desc: 'Operational visibility through connected monitoring systems.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-network-wired',
                title: 'System Connectivity',
                desc: 'Communication and integration across compatible systems.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-database',
                title: 'Data & Insights',
                desc: 'Structured operational data for analysis and reporting.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-cogs',
                title: 'Operational Optimization',
                desc: 'Technology integration to support more efficient workflows.',
                className: 'value-card value-card--last'
            }
        ];

        const civilWorks = [
            {
                heading1: 'TYPES OF AUTOMATION & DIGITAL SERVICES',
                heading2: 'Find the Right Solution for Your Operations',
                description: 'Our automation and digital solutions support connected industrial environments, system monitoring, and operational integration. The scope can be aligned with your facility, equipment, and project requirements.',
                image: 'assets/img/Contracting/automatiion.webp',
                imageAlt: 'Industrial automation and digital monitoring',
                points: [
                    'Industrial Automation — Automation solutions for industrial processes.',
                    'PLC & Control Systems — Programmable logic control and compatible system integration.',
                    'SCADA & Monitoring — Supervisory control and operational monitoring solutions.',
                    'System Integration — Integration of compatible equipment and control platforms.',
                    'Digital Dashboards — Operational information displays and monitoring interfaces.',
                    'Data Acquisition — Collection and presentation of available operational data.',
                    'Remote Monitoring — Remote visibility for supported equipment and locations.',
                    'System Optimization — Improvements to system coordination and operational workflows.'
                ]
            }
        ];

        const howItWorks = [
            {
                heading1: 'HOW IT WORKS',
                heading2: 'From System Assessment to Integration',
                description: 'We evaluate operational needs and coordinate suitable technologies to help integrate systems and improve visibility across supported operations.',
                services: [
                    {
                        link: '#',
                        title: 'Requirements Assessment',
                        desc: 'We review operational needs, existing systems, and integration requirements.'
                    },
                    {
                        link: '#',
                        title: 'Solution Design',
                        desc: 'We plan the system architecture and suitable integration approach.'
                    },
                    {
                        link: '#',
                        title: 'Implementation & Integration',
                        desc: 'We coordinate configuration, installation, and system integration.'
                    },
                    {
                        link: '#',
                        title: 'Testing & Handover',
                        desc: 'We verify system operation and provide relevant documentation.'
                    }
                ]
            }
        ];

        const whoShouldInvest = [
            {
                heading1: 'WHO SHOULD INVEST?',
                heading2: 'Automation and digital solutions are ideal for organizations that want to:',
                points: [
                    'Improve visibility across industrial processes and equipment.',
                    'Integrate compatible control and monitoring systems.',
                    'Access operational data for reporting and decision-making.',
                    'Improve coordination between connected systems.',
                    'Modernize operations through appropriate automation technologies.'
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