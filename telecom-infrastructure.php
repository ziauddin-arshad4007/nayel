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
        // TELECOM INFRASTRUCTURE & SUPPORT — CONTENT DATA
        // ------------------------------------------------------------

        const hero = [
            {
                title: 'Telecom Infrastructure & Support',
                breadcrumb: {
                    home: 'Home',
                    separator: '/',
                    current: 'Telecom Infrastructure & Support',
                    homeLink: '/'
                }
            }
        ];

        const whyEpc = [
            {
                heading1: 'WHY TELECOM INFRASTRUCTURE & SUPPORT?',
                heading2: 'The Physical Backbone of Reliable Communications',
                description: 'Telecom infrastructure and support services provide the foundation for reliable network operations. We support UPS interfaces, equipment grounding, cabinet installation, and structured cabling that keep your telecom systems powered, protected, and organized.',
                valuesLabel: 'Key Benefits'
            }
        ];

        const valueCards = [
            {
                icon: 'fas fa-plug',
                title: 'UPS Interfaces',
                desc: 'Power connections and backup integration for telecom equipment.',
                className: 'value-card'
            },
            {
                icon: 'fas fa-bolt',
                title: 'Equipment Grounding',
                desc: 'Safe grounding and labeling for surge and lightning protection.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-server',
                title: 'Cabinet Installation',
                desc: 'Telecom racks, cabinets, and equipment installation.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-network-wired',
                title: 'Cable Routing',
                desc: 'Termination, splicing, and labeling for structured cabling.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-tools',
                title: 'Room Infrastructure',
                desc: 'Racks, cabinets, and physical support for telecom rooms.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-shield-alt',
                title: 'Grounding Support',
                desc: 'Equipment grounding and labeling for safe operations.',
                className: 'value-card value-card--last'
            }
        ];

        const civilWorks = [
            {
                heading1: 'TYPES OF TELECOM INFRASTRUCTURE & SUPPORT',
                heading2: 'Find the Right Solution for Your Telecom Room',
                description: 'Our telecom infrastructure and support solutions cover power, grounding, cabling, and equipment installation. Choose services that suit your telecom room and operational requirements.',
                image: 'assets/img/Engineering & Design/Telecommunications.webp',
                imageAlt: 'Telecom infrastructure, racks, cabinets, and grounding systems',
                points: [
                    'UPS Interfaces — Power connections and backup integration.',
                    'Equipment Grounding — Safe grounding and labeling.',
                    'Cabinet Installation — Racks and telecom cabinets.',
                    'Cable Routing — Termination, splicing, and labeling.',
                    'Room Infrastructure — Racks, cabinets, and room readiness.',
                    'Grounding Support — Equipment grounding and labeling.',
                    'Telecom Room Setup — Structured cabling and equipment installation.',
                    'Infrastructure Support — Power, grounding, and cabinet services.'
                ]
            }
        ];

        const howItWorks = [
            {
                heading1: 'HOW IT WORKS',
                heading2: 'From Survey to Structured Infrastructure',
                description: 'We coordinate site assessment, design, installation, and testing to ensure your telecom infrastructure is reliable and safe.',
                services: [
                    {
                        link: '#',
                        title: 'Survey & Assessment',
                        desc: 'We assess your telecom room and power needs.'
                    },
                    {
                        link: '#',
                        title: 'Design & Planning',
                        desc: 'We design the grounding and cabinet layout.'
                    },
                    {
                        link: '#',
                        title: 'Installation',
                        desc: 'We install UPS interfaces, cabinets, and cabling.'
                    },
                    {
                        link: '#',
                        title: 'Testing & Handover',
                        desc: 'We test grounding, power, and labeling for safety.'
                    }
                ]
            }
        ];

        const whoShouldInvest =[ 
            {
                heading1: 'WHO SHOULD INVEST?',
                heading2: 'Telecom infrastructure and support is ideal for organizations that want to:',
                points: [
                    'Install telecom racks and cabinets safely.',
                    'Ensure proper grounding and power for telecom equipment.',
                    'Structure cable routing and labeling.',
                    'Build a reliable telecom room infrastructure.',
                    'Protect equipment from surge and lightning damage.'
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