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
        // FIRE SAFETY & HSE — CONTENT DATA
        // ------------------------------------------------------------

        const hero = [
            {
                title: 'Fire Safety & HSE',
                breadcrumb: {
                    home: 'Home',
                    separator: '/',
                    current: 'Fire Safety & HSE',
                    homeLink: '/'
                }
            }
        ];

        const whyEpc = [
            {
                heading1: 'WHY FIRE SAFETY & HSE?',
                heading2: 'Protecting People, Property, and Operations',
                description: 'Fire safety and health, safety, and environmental practices are essential for protecting people, assets, and project operations. Nayel supports fire protection, safety planning, hazard management, and compliance coordination to help create safer working environments and reduce operational risks.',
                valuesLabel: 'Key Benefits'
            }
        ];

        const valueCards = [
            {
                icon: 'fas fa-fire-extinguisher',
                title: 'Fire Protection',
                desc: 'Fire safety systems and facility protection solutions.',
                className: 'value-card'
            },
            {
                icon: 'fas fa-hard-hat',
                title: 'Workplace Safety',
                desc: 'Site safety planning and safe working practices.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-exclamation-triangle',
                title: 'Risk Management',
                desc: 'Hazard identification and risk mitigation planning.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-clipboard-check',
                title: 'Safety Compliance',
                desc: 'Safety documentation and compliance coordination.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-users',
                title: 'Safety Awareness',
                desc: 'Workforce awareness and site safety coordination.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-leaf',
                title: 'Environmental Practices',
                desc: 'Environmental risk awareness and responsible site practices.',
                className: 'value-card value-card--last'
            }
        ];

        const civilWorks = [
            {
                heading1: 'TYPES OF FIRE SAFETY & HSE SERVICES',
                heading2: 'Find the Right Solution for Your Site',
                description: 'Our fire safety and HSE services help organizations address workplace hazards, fire protection needs, and project safety requirements. The exact scope is tailored to the facility and applicable standards.',
                image: 'assets/img/Contracting/Fire-Safety.webp',
                imageAlt: 'Fire safety and workplace HSE',
                points: [
                    'Fire Protection — Fire protection systems and related facility safety measures.',
                    'Hazard Identification — Identification of workplace and operational hazards.',
                    'Risk Assessment — Evaluation of risks and appropriate mitigation measures.',
                    'HSE Planning — Project safety plans, procedures, and coordination.',
                    'Safety Inspections — Site inspections and identification of safety issues.',
                    'Emergency Preparedness — Emergency planning and response coordination.',
                    'Safety Documentation — HSE records and compliance documentation.',
                    'Environmental Practices — Environmental risk awareness and site controls.'
                ]
            }
        ];

        const howItWorks = [
            {
                heading1: 'HOW IT WORKS',
                heading2: 'A Structured Approach to Site Safety',
                description: 'We work with your project requirements to identify risks, coordinate safety measures, and support implementation and review throughout project activities.',
                services: [
                    {
                        link: '#',
                        title: 'Site Assessment',
                        desc: 'We review site conditions, hazards, and applicable requirements.'
                    },
                    {
                        link: '#',
                        title: 'Safety Planning',
                        desc: 'We develop the required safety approach and coordinate controls.'
                    },
                    {
                        link: '#',
                        title: 'Implementation',
                        desc: 'We support the implementation of agreed safety measures and procedures.'
                    },
                    {
                        link: '#',
                        title: 'Review & Documentation',
                        desc: 'We review safety measures and coordinate relevant records and handover.'
                    }
                ]
            }
        ];

        const whoShouldInvest = [
            {
                heading1: 'WHO SHOULD INVEST?',
                heading2: 'Fire safety and HSE services are ideal for organizations that want to:',
                points: [
                    'Improve workplace and construction-site safety.',
                    'Address fire protection and emergency preparedness requirements.',
                    'Identify hazards and reduce operational risks.',
                    'Coordinate safety practices across project teams and contractors.',
                    'Support applicable HSE and environmental compliance requirements.'
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