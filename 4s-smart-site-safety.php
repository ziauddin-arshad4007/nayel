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
        // 4S SMART SITE SAFETY SYSTEM — CONTENT DATA
        // ------------------------------------------------------------

        const hero = [
            {
                title: '4S Smart Site Safety System',
                breadcrumb: {
                    home: 'Home',
                    separator: '/',
                    current: '4S Smart Site Safety System',
                    homeLink: '/'
                }
            }
        ];

        const whyEpc = [
            {
                heading1: 'WHY 4S SMART SAFETY?',
                heading2: 'A Smarter Way to Protect Your Site',
                description: '4S smart site safety systems integrate command centers, workforce safety, and pipeline monitoring into a unified platform. We combine PAGA, CCTV, fire and gas monitoring, and remote-site monitoring to provide comprehensive safety coverage. This enables centralized monitoring, emergency readiness, and regulatory compliance.',
                valuesLabel: 'Key Benefits'
            }
        ];

        const valueCards = [

            {
                icon: 'fas fa-video',
                title: 'Integrated Monitoring',
                desc: 'PAGA, fire, gas, CCTV, and thermal imaging.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-broadcast-tower',
                title: 'Pipeline Monitoring',
                desc: 'RTUs, field sensors, and remote alarm points.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-exclamation-triangle',
                title: 'Emergency Response',
                desc: 'Incident logging, escalation, and reporting.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-battery-full',
                title: 'System Resilience',
                desc: 'Backup power, UPS, and cybersecurity planning.',
                className: 'value-card value-card--last'
            },
            {
                icon: 'fas fa-desktop',
                title: 'Command-Center Integration',
                desc: 'Centralized architecture, video walls, and dashboards.',
                className: 'value-card'
            },
            {
                icon: 'fas fa-hard-hat',
                title: 'Smart Workforce Safety',
                desc: 'Digital safety passports and permit-to-work workflows.',
                className: 'value-card value-card--limited'
            }
        ];

        const civilWorks = [
            {
                heading1: 'TYPES OF 4S SERVICES',
                heading2: 'Find the Right Solution for Your Goal',
                description: 'Our 4S smart site safety solutions are designed for different site and operational needs. Choose the systems that best match your safety, monitoring, and emergency response requirements.',
                image: 'assets/img/Engineering & Design/4S Smart Site Safety.webp',

                points: [
                    'Integrated Monitoring — PAGA, fire, gas, CCTV, and thermal imaging.',
                    'Pipeline Monitoring — RTUs, field sensors, and remote alarm points.',
                    'Emergency Response — Incident logging, escalation, and reporting.',
                    'System Resilience — Backup power, UPS, and cybersecurity planning.',
                    'Command-Center Design — Centralized architecture and video walls.',
                    'Smart Workforce Safety — Digital safety passports and permit-to-work workflows.'
                ]
            }
        ];
        const howItWorks = [
            {
                heading1: 'HOW IT WORKS',
                heading2: 'A Smarter Process for Site-Wide Safety',
                description: 'We integrate monitoring, workforce safety, and emergency response into a coordinated safety system designed around your site requirements.',
                services: [
                    {
                        link: '#',
                        title: 'Site Assessment',
                        desc: 'We review site conditions, safety requirements, and existing systems.'
                    },
                    {
                        link: '#',
                        title: 'System Architecture',
                        desc: 'We plan command-center integration, monitoring, and communication.'
                    },
                    {
                        link: '#',
                        title: 'Installation & Integration',
                        desc: 'We integrate safety devices, sensors, and monitoring systems.'
                    },
                    {
                        link: '#',
                        title: 'Testing & Handover',
                        desc: 'We verify system operation and prepare your team for handover.'
                    }
                ]
            }
        ];

        const whoShouldInvest = [
            {
                heading1: 'WHO SHOULD INVEST?',
                heading2: '4S smart site safety systems are ideal for organizations that want to:',
                points: [
                    'Centralize site safety monitoring and command-center operations.',
                    'Improve workforce safety and permit-to-work management.',
                    'Integrate PAGA, CCTV, fire, gas, and pipeline monitoring.',
                    'Strengthen emergency response and incident reporting.',
                    'Improve system resilience through backup power and cybersecurity planning.'
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