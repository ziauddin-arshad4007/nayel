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
        // MECHANICAL WORKS — CONTENT DATA
        // ------------------------------------------------------------

        const hero = [
            {
                title: 'Mechanical Works',
                breadcrumb: {
                    home: 'Home',
                    separator: '/',
                    current: 'Mechanical Works',
                    homeLink: '/'
                }
            }
        ];

        const whyEpc = [
            {
                heading1: 'WHY MECHANICAL WORKS?',
                heading2: 'Reliable Mechanical Systems, Built to Perform',
                description: 'Mechanical systems are essential to industrial operations, production facilities, and infrastructure. Nayel supports mechanical installation, piping, fabrication, equipment integration, and maintenance activities with an emphasis on safe execution, technical coordination, and dependable performance.',
                valuesLabel: 'Key Benefits'
            }
        ];

        const valueCards = [
            {
                icon: 'fas fa-cogs',
                title: 'Equipment Installation',
                desc: 'Installation and integration of industrial equipment.',
                className: 'value-card'
            },
            {
                icon: 'fas fa-project-diagram',
                title: 'Piping & Pipelines',
                desc: 'Mechanical piping, pipeline installation, and connections.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-tools',
                title: 'Fabrication & Welding',
                desc: 'Fabrication, welding, and mechanical assembly.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-industry',
                title: 'Specialized Materials',
                desc: 'GRP, FRP, and GRE piping and related applications.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-fan',
                title: 'HVAC & Insulation',
                desc: 'Heating, ventilation, air conditioning, and insulation works.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-wrench',
                title: 'Maintenance & Repairs',
                desc: 'Inspection, testing, repairs, and mechanical upkeep.',
                className: 'value-card value-card--last'
            }
        ];

        const civilWorks = [
            {
                heading1: 'TYPES OF MECHANICAL WORKS',
                heading2: 'Find the Right Solution for Your Facility',
                description: 'Our mechanical services support industrial facilities and infrastructure projects through equipment installation, piping systems, fabrication, testing, and ongoing maintenance.',
                image: 'assets/img/Contracting/Mechanical.webp',
                imageAlt: 'Industrial mechanical installation and piping',
                points: [
                    'Equipment Installation — Installation, alignment, and integration of mechanical equipment.',
                    'Piping & Pipelines — Piping fabrication, installation, and pipeline connections.',
                    'Fabrication & Welding — Mechanical fabrication, welding, and assembly works.',
                    'GRP, FRP & GRE Systems — Installation of specialized composite piping systems.',
                    'HVAC Systems — Heating, ventilation, and air-conditioning installations.',
                    'Insulation Works — Mechanical and thermal insulation applications.',
                    'Testing & Commissioning — Inspection, system testing, and operational verification.',
                    'Maintenance & Repairs — Preventive maintenance, troubleshooting, and repairs.'
                ]
            }
        ];

        const howItWorks = [
            {
                heading1: 'HOW IT WORKS',
                heading2: 'From Technical Planning to System Commissioning',
                description: 'We coordinate mechanical works from initial assessment through installation, testing, and handover to help ensure systems meet project specifications.',
                services: [
                    {
                        link: '#',
                        title: 'Technical Assessment',
                        desc: 'We review equipment, drawings, site conditions, and specifications.'
                    },
                    {
                        link: '#',
                        title: 'Work Planning',
                        desc: 'We coordinate materials, fabrication, manpower, and installation sequences.'
                    },
                    {
                        link: '#',
                        title: 'Installation & Fabrication',
                        desc: 'We execute mechanical installation, piping, and fabrication works.'
                    },
                    {
                        link: '#',
                        title: 'Testing & Commissioning',
                        desc: 'We perform applicable inspections, tests, and handover activities.'
                    }
                ]
            }
        ];

        const whoShouldInvest = [
            {
                heading1: 'WHO SHOULD INVEST?',
                heading2: 'Mechanical works are ideal for organizations that want to:',
                points: [
                    'Install or upgrade industrial equipment and mechanical systems.',
                    'Develop piping networks and pipeline infrastructure.',
                    'Execute fabrication, welding, and HVAC projects.',
                    'Maintain the reliability of mechanical assets.',
                    'Coordinate mechanical scope within larger EPC projects.'
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