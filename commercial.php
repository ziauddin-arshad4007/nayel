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
        // COMMERCIAL & DIGITAL PRINTING — CONTENT DATA
        // ------------------------------------------------------------

        const hero = [
            {
                title: 'Commercial & Digital Printing',
                breadcrumb: {
                    home: 'Home',
                    separator: '/',
                    current: 'Commercial & Digital Printing',
                    homeLink: '/'
                }
            }
        ];

        const whyEpc = [
            {
                heading1: 'WHY COMMERCIAL & DIGITAL PRINTING?',
                heading2: 'Print Quality That Elevates Your Brand',
                description: 'Commercial and digital printing help businesses communicate professionally through high-quality printed materials. From everyday business stationery to marketing collateral and customized print runs, we deliver consistent presentation, flexible production, and dependable results aligned with your brand identity.',
                valuesLabel: 'Key Benefits'
            }
        ];

        const valueCards = [
            {
                icon: 'fas fa-print',
                title: 'High-Quality Printing',
                desc: 'Sharp text, clear graphics, and professional finishes.',
                className: 'value-card'
            },
            {
                icon: 'fas fa-palette',
                title: 'Color Consistency',
                desc: 'Consistent brand colors across printed materials.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-bolt',
                title: 'Quick Turnaround',
                desc: 'Efficient production for time-sensitive print requirements.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-layer-group',
                title: 'Flexible Print Runs',
                desc: 'Options for small quantities and larger print orders.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-expand-arrows-alt',
                title: 'Material Choices',
                desc: 'Different paper stocks, sizes, and finishing options.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-briefcase',
                title: 'Professional Branding',
                desc: 'Printed materials that reinforce your corporate identity.',
                className: 'value-card value-card--last'
            }
        ];

        const civilWorks = [
            {
                heading1: 'TYPES OF PRINTING SERVICES',
                heading2: 'Find the Right Print Solution for Your Business',
                description: 'Our commercial and digital printing services cover a range of business and marketing needs. Choose the print products and finishing options that best suit your brand, audience, and project requirements.',
                image: 'assets/img/Printing/Commercial.webp',
                imageAlt: 'Commercial and digital printing services',
                points: [
                    'Business Stationery — Letterheads, envelopes, business cards, and office stationery.',
                    'Marketing Collateral — Flyers, brochures, leaflets, and promotional handouts.',
                    'Catalogues & Booklets — Product catalogues, company profiles, and informational booklets.',
                    'Corporate Documents — Reports, presentations, manuals, and business documents.',
                    'Custom Digital Printing — Customized print jobs for specific quantities and requirements.',
                    'Finishing Services — Lamination, binding, cutting, folding, and other finishing options.'
                ]
            }
        ];

        const howItWorks = [
            {
                heading1: 'HOW IT WORKS',
                heading2: 'From Artwork to Finished Prints',
                description: 'Our printing workflow helps ensure that your artwork, materials, and finishing requirements are coordinated before the final products are delivered.',
                services: [
                    {
                        link: '#',
                        title: 'Requirements & Artwork',
                        desc: 'We review your print requirements, artwork, sizes, and quantities.'
                    },
                    {
                        link: '#',
                        title: 'Material & Proofing',
                        desc: 'We coordinate paper selection, colors, layout, and proof approval.'
                    },
                    {
                        link: '#',
                        title: 'Printing & Finishing',
                        desc: 'We produce your materials and apply the selected finishing options.'
                    },
                    {
                        link: '#',
                        title: 'Quality Check & Delivery',
                        desc: 'We check the finished order and coordinate delivery.'
                    }
                ]
            }
        ];

        const whoShouldInvest = [
            {
                heading1: 'WHO SHOULD INVEST?',
                heading2: 'Commercial and digital printing is ideal for organizations that want to:',
                points: [
                    'Produce professional business stationery and corporate documents.',
                    'Promote products and services through printed marketing materials.',
                    'Maintain consistent branding across printed communications.',
                    'Print customized quantities for campaigns and business activities.',
                    'Create polished company profiles, catalogues, and presentations.'
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