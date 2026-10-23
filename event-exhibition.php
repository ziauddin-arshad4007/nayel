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
        // EVENT & EXHIBITION DISPLAYS — CONTENT DATA
        // ------------------------------------------------------------

        const hero = [
            {
                title: 'Event & Exhibition Displays',
                breadcrumb: {
                    home: 'Home',
                    separator: '/',
                    current: 'Event & Exhibition Displays',
                    homeLink: '/'
                }
            }
        ];

        const whyEpc = [
            {
                heading1: 'WHY EVENT & EXHIBITION DISPLAYS?',
                heading2: 'Command Attention at Your Next Event',
                description: 'Event and exhibition displays help organizations stand out at trade shows, conferences, and corporate events. We support pop-up displays, printed backdrops, and customized exhibition booths that communicate your brand message with impact.',
                valuesLabel: 'Key Benefits'
            }
        ];

        const valueCards = [
            {
                icon: 'fas fa-expand',
                title: 'Pop-Up Displays',
                desc: 'Portable, high-impact graphics for events and exhibitions.',
                className: 'value-card'
            },
            {
                icon: 'fas fa-image',
                title: 'Printed Backdrops',
                desc: 'Large-scale event backdrops for brand visibility.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-store',
                title: 'Exhibition Booths',
                desc: 'Customized booths and stands tailored to your brand.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-bullhorn',
                title: 'Promotional Graphics',
                desc: 'Large-format event materials for maximum impact.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-layer-group',
                title: 'Foam-Board Panels',
                desc: 'Printed foam-board graphics and display panels.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-sign',
                title: 'Branded Stands',
                desc: 'Custom display stands for events and exhibitions.',
                className: 'value-card value-card--last'
            }
        ];

        const civilWorks = [
            {
                heading1: 'TYPES OF EVENT & EXHIBITION DISPLAYS',
                heading2: 'Find the Right Display for Your Event',
                description: 'Our event and exhibition display solutions support trade shows, conferences, product launches, and corporate events. Choose displays that suit your event, audience, and branding requirements.',
                image: 'assets/img/Printing/Event & Exhibition.webp',
                imageAlt: 'Event displays, exhibition booths, and promotional backdrops',
                points: [
                    'Pop-Up Displays — Portable display graphics for events.',
                    'Printed Backdrops — Large-scale backdrops for brand visibility.',
                    'Exhibition Booths — Customized booths and stands.',
                    'Promotional Graphics — Large-format event materials.',
                    'Foam-Board Panels — Printed foam-board graphics.',
                    'Branded Stands — Custom display stands for events.',
                    'Event Fabrication — Custom event-specific displays.',
                    'Display Assembly — On-site assembly and setup.'
                ]
            }
        ];

        const howItWorks = [
            {
                heading1: 'HOW IT WORKS',
                heading2: 'From Design to On-Site Delivery',
                description: 'We coordinate design, production, assembly, and delivery to ensure your event displays make a lasting impression.',
                services: [
                    {
                        link: '#',
                        title: 'Design & Consultation',
                        desc: 'We review your event requirements and design the display.'
                    },
                    {
                        link: '#',
                        title: 'Production',
                        desc: 'We print and fabricate your display.'
                    },
                    {
                        link: '#',
                        title: 'Assembly',
                        desc: 'We assemble and prepare the display for transport.'
                    },
                    {
                        link: '#',
                        title: 'Delivery & Setup',
                        desc: 'We deliver and set up your display on-site.'
                    }
                ]
            }
        ];

        const whoShouldInvest = [
            {
                heading1: 'WHO SHOULD INVEST?',
                heading2: 'Event and exhibition displays are ideal for organizations that want to:',
                points: [
                    'Create high-impact pop-up displays for events.',
                    'Build custom exhibition booths and stands.',
                    'Print large-scale backdrops and promotional graphics.',
                    'Design event-specific displays and branded stands.',
                    'Stand out at trade shows, conferences, and corporate events.'
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