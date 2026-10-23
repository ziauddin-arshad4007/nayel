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
        // TELECOM & ICT INFRASTRUCTURE — CONTENT DATA
        // ------------------------------------------------------------

        const hero = [
            {
                title: 'Telecom & ICT Infrastructure',
                breadcrumb: {
                    home: 'Home',
                    separator: '/',
                    current: 'Telecom & ICT Infrastructure',
                    homeLink: '/'
                }
            }
        ];

        const whyEpc = [
            {
                heading1: 'WHY TELECOM & ICT?',
                heading2: 'A Smarter Way to Stay Connected',
                description: 'Telecom and ICT infrastructure form the nervous system of any modern facility. We combine copper, fiber, wireless, and radio technologies to deliver reliable, scalable, and high-performance networks. This gives you seamless connectivity, future-proof scalability, and expert management in one integrated solution. From structured cabling and backbone design to active equipment and wireless rollout, we engineer every layer to work as one cohesive system. Our team handles design, deployment, testing, and ongoing support—so your network stays fast, secure, and resilient as your needs evolve. Whether you are building new or upgrading existing infrastructure, we deliver connectivity that grows with you—without compromise.', valuesLabel: 'Key Benefits'
            }
        ];

        const valueCards = [
            {
                icon: 'fas fa-network-wired',
                title: 'High-Speed Connectivity',
                className: 'value-card'
            },
            {
                icon: 'fas fa-expand-arrows-alt',
                title: 'Scalable Architecture',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-broadcast-tower',
                title: 'Industrial Radio',
                desc: 'TETRA, DMR, UHF/VHF for mission-critical communication.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-wifi',
                title: 'Wireless Flexibility',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-phone-volume',
                title: 'Unified Communications',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-server',
                title: 'Reliable Infrastructure',
                className: 'value-card value-card--last'
            }
        ];

        const civilWorks = [
            {
                heading1: 'TYPES OF TELECOM SERVICES',
                heading2: 'Find the Right Solution for Your Goal',
                image: 'assets/img/Engineering & Design/Telecom & ICT Infrastructure.webp',

                description: 'We provide a range of telecom and ICT solutions designed for different connectivity and operational needs. Choose the services that best match your infrastructure requirements.',
                points: [
                    'Structured Cabling — Copper and fiber-optic backbone, termination, splicing, and labeling.',
                    'Network Infrastructure — LAN/WAN, Industrial Ethernet, routing, and switching.',
                    'Voice & Unified Communications — IP telephony, hybrid PBX, and voice recording.',
                    'Industrial Radio — TETRA, DMR, UHF/VHF, and dispatch systems.',
                    'Wireless Networks — Industrial Wi-Fi and point-to-point or multipoint links.',
                    'Telecom Support — UPS interfaces, grounding, and cabinet installation.'
                ]
            }
        ];

        const howItWorks = [
            {
                heading1: 'HOW IT WORKS',
                heading2: 'Simple Steps to Build Your Network',
                description: 'Our structured process helps deliver dependable connectivity, from the initial site assessment through installation, testing, and handover.',
                services: [
                    {
                        link: '#',
                        title: 'Site Survey & Requirements',
                        desc: 'We inspect your site and collect technical data.'
                    },
                    {
                        link: '#',
                        title: 'System Architecture Design',
                        desc: 'We develop the network layout and basis of design.'
                    },
                    {
                        link: '#',
                        title: 'Installation & Integration',
                        desc: 'We install cabling, racks, and network equipment.'
                    },
                    {
                        link: '#',
                        title: 'Testing & Handover',
                        desc: 'We test, commission, and train your team.'
                    }
                ]
            }
        ];

        const whoShouldInvest = [
            {
                heading1: 'WHO SHOULD INVEST?',
                heading2: 'Telecom & ICT infrastructure is ideal for organizations that want to:',
                points: [
                    'Build a reliable, high-speed network backbone.',
                    'Support industrial radio and wireless communications.',
                    'Integrate voice, data, and unified communications.',
                    'Ensure future-proof scalability and connectivity.'
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