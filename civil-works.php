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
        // CIVIL WORKS — CONTENT DATA
        // ------------------------------------------------------------

        const hero = [
            {
                title: 'Civil Works',
                breadcrumb: {
                    home: 'Home',
                    separator: '/',
                    current: 'Civil Works',
                    homeLink: '/'
                }
            }
        ];

        const whyEpc = [
            {
                heading1: 'WHY CIVIL WORKS?',
                heading2: 'Building Strong Foundations for Every Project',
                description: 'Civil works provide the structural foundation for industrial, commercial, and infrastructure projects. From earthworks and foundations to roads, utilities, and structural rehabilitation, Nayel supports project execution with a focus on engineering coordination, quality, safety, and long-term durability.',
                valuesLabel: 'Key Benefits'
            }
        ];

        const valueCards = [
            {
                icon: 'fas fa-mountain',
                title: 'Earthworks',
                desc: 'Excavation, grading, embankments, and soil compaction.',
                className: 'value-card'
            },
            {
                icon: 'fas fa-cubes',
                title: 'Strong Foundations',
                desc: 'Footings, piling, retaining walls, and deep foundations.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-building',
                title: 'Structural Works',
                desc: 'Reinforced concrete, precast, and steel structures.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-road',
                title: 'Roads & Utilities',
                desc: 'Road construction, drainage, and underground utilities.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-tools',
                title: 'Structural Rehabilitation',
                desc: 'Retrofitting, strengthening, and restoration works.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-ruler-combined',
                title: 'Site Development',
                desc: 'Site levelling, internal roads, fencing, and landscaping.',
                className: 'value-card value-card--last'
            }
        ];

        const civilWorks = [
            {
                heading1: 'TYPES OF CIVIL WORKS',
                heading2: 'Find the Right Solution for Your Project',
                description: 'Our civil works cover essential construction and infrastructure activities, from preparing the site to delivering structural and external works tailored to your project scope.',
                image: 'assets/img/Contracting/civil.webp',
                imageAlt: 'Civil construction and infrastructure works',
                points: [
                    'Earthworks — Excavation, embankment, grading, and soil compaction.',
                    'Foundations — Piling, deep foundations, footings, and retaining walls.',
                    'Concrete Structures — Reinforced concrete, precast, and post-tensioned structures.',
                    'Steel Structures — Fabrication, erection, bolting, welding, and corrosion protection.',
                    'Roads & Utilities — Road base, asphalt, drainage, and underground utilities.',
                    'Land Development — Site levelling, internal roads, and landscaping.',
                    'Retrofitting — Rehabilitation and structural strengthening of existing structures.',
                    'Fencing & Signage — Site fencing, barriers, and project signage.'
                ]
            }
        ];

        const howItWorks = [
            {
                heading1: 'HOW IT WORKS',
                heading2: 'From Site Preparation to Completion',
                description: 'We coordinate civil construction activities through a structured process focused on site conditions, engineering requirements, safe execution, and quality checks.',
                services: [
                    {
                        link: '#',
                        title: 'Site Assessment',
                        desc: 'We review site conditions, scope, drawings, and requirements.'
                    },
                    {
                        link: '#',
                        title: 'Planning & Preparation',
                        desc: 'We plan resources, materials, work sequences, and site readiness.'
                    },
                    {
                        link: '#',
                        title: 'Construction & Supervision',
                        desc: 'We coordinate civil works, site execution, safety, and quality.'
                    },
                    {
                        link: '#',
                        title: 'Inspection & Handover',
                        desc: 'We verify completed works and coordinate project documentation.'
                    }
                ]
            }
        ];

        const whoShouldInvest = [
            {
                heading1: 'WHO SHOULD INVEST?',
                heading2: 'Civil works services are ideal for organizations that want to:',
                points: [
                    'Develop industrial, commercial, or infrastructure sites.',
                    'Construct foundations and structural components.',
                    'Build roads, drainage systems, and utility infrastructure.',
                    'Upgrade, repair, or strengthen existing structures.',
                    'Coordinate civil works with wider EPC project requirements.'
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