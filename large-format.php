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
        // LARGE-FORMAT PRINTING — CONTENT DATA
        // ------------------------------------------------------------

        const hero = [
            {
                title: 'Large-Format Printing',
                breadcrumb: {
                    home: 'Home',
                    separator: '/',
                    current: 'Large-Format Printing',
                    homeLink: '/'
                }
            }
        ];

        const whyEpc = [
            {
                heading1: 'WHY LARGE-FORMAT PRINTING?',
                heading2: 'Make Your Brand Impossible to Miss',
                description: 'Large-format printing helps businesses communicate their message across expansive visual spaces. From banners and posters to exhibition graphics and promotional displays, we create impactful printed visuals designed to attract attention, communicate clearly, and strengthen brand visibility.',
                valuesLabel: 'Key Benefits'
            }
        ];

        const valueCards = [
            {
                icon: 'fas fa-expand',
                title: 'Large Visual Impact',
                desc: 'Oversized graphics designed to capture attention.',
                className: 'value-card'
            },
            {
                icon: 'fas fa-eye',
                title: 'Enhanced Visibility',
                desc: 'Clear messaging for public, retail, and event spaces.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-palette',
                title: 'Vibrant Graphics',
                desc: 'Bold colors and detailed visual reproduction.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-ruler-combined',
                title: 'Custom Dimensions',
                desc: 'Print sizes tailored to your display requirements.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-layer-group',
                title: 'Material Options',
                desc: 'Media choices suited to different display environments.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-bullhorn',
                title: 'Promotional Reach',
                desc: 'Visual advertising for campaigns, venues, and events.',
                className: 'value-card value-card--last'
            }
        ];

        const civilWorks = [
            {
                heading1: 'TYPES OF LARGE-FORMAT PRINTING',
                heading2: 'Find the Right Display for Your Message',
                description: 'Our large-format printing solutions support advertising, events, retail displays, and corporate environments. Choose the format and materials that best fit your location and communication goals.',
                image: 'assets/img/Printing/Large-Format Printing.webp',
                imageAlt: 'Large-format printing and advertising displays',
                points: [
                    'Banners — Promotional banners for campaigns, events, and business locations.',
                    'Posters — Large printed graphics for advertising and information displays.',
                    'Wall Graphics — Printed graphics for offices, showrooms, and interior spaces.',
                    'Exhibition Graphics — Visual displays for exhibitions, trade shows, and events.',
                    'Window Graphics — Printed graphics for shopfronts and glass surfaces.',
                    'Backdrops & Displays — Branded backgrounds for events and promotional settings.',
                    'Vehicle Graphics — Printed graphics for vehicle branding and advertising.',
                    'Custom Large Prints — Oversized visuals created to meet specific display requirements.'
                ]
            }
        ];

        const howItWorks = [
            {
                heading1: 'HOW IT WORKS',
                heading2: 'From Design to Display',
                description: 'We coordinate your large-format printing project from artwork preparation to print production and final delivery.',
                services: [
                    {
                        link: '#',
                        title: 'Project Requirements',
                        desc: 'We confirm display dimensions, location, quantity, and purpose.'
                    },
                    {
                        link: '#',
                        title: 'Artwork & Material Selection',
                        desc: 'We prepare artwork and select suitable print media.'
                    },
                    {
                        link: '#',
                        title: 'Printing & Finishing',
                        desc: 'We produce the graphics and apply the required finishing.'
                    },
                    {
                        link: '#',
                        title: 'Quality Check & Delivery',
                        desc: 'We check dimensions and print quality before delivery.'
                    }
                ]
            }
        ];

        const whoShouldInvest = [
            {
                heading1: 'WHO SHOULD INVEST?',
                heading2: 'Large-format printing is ideal for organizations that want to:',
                points: [
                    'Increase brand visibility in high-traffic locations.',
                    'Promote products, services, and campaigns using large graphics.',
                    'Create exhibition booths, event backdrops, and display materials.',
                    'Improve visual communication in retail and commercial spaces.',
                    'Display branded graphics across suitable walls, windows, and vehicles.'
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