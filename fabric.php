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
        // FABRIC & TEXTILE BRANDING — CONTENT DATA
        // ------------------------------------------------------------

        const hero= [
            {
                title: 'Fabric & Textile Branding',
                breadcrumb: {
                    home: 'Home',
                    separator: '/',
                    current: 'Fabric & Textile Branding',
                    homeLink: '/'
                }
            }
        ];

        const whyEpc = [
            {
                heading1: 'WHY FABRIC & TEXTILE BRANDING?',
                heading2: 'Bring Your Brand to Life on Fabric',
                description: 'Fabric and textile branding helps businesses create a consistent visual identity across apparel, uniforms, fabric displays, and promotional textiles. We support customized branding solutions that combine your logo, colors, and design with suitable textile products for corporate, promotional, and event applications.',
                valuesLabel: 'Key Benefits'
            }
        ];

        const valueCards = [
            {
                icon: 'fas fa-tshirt',
                title: 'Branded Apparel',
                desc: 'Customized clothing for teams, staff, and promotions.',
                className: 'value-card'
            },
            {
                icon: 'fas fa-users',
                title: 'Team Identity',
                desc: 'Consistent branded clothing for employees and event teams.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-palette',
                title: 'Custom Designs',
                desc: 'Brand colors, logos, and artwork applied to textiles.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-cut',
                title: 'Textile Flexibility',
                desc: 'Options suited to different fabric products and uses.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-bullhorn',
                title: 'Promotional Branding',
                desc: 'Fabric products for campaigns, events, and giveaways.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-layer-group',
                title: 'Consistent Presentation',
                desc: 'Coordinated textile branding across selected products.',
                className: 'value-card value-card--last'
            }
        ];

        const civilWorks = [
            {
                heading1: 'TYPES OF TEXTILE BRANDING',
                heading2: 'Find the Right Branding for Your Fabric',
                description: 'Our fabric and textile branding services support uniforms, promotional clothing, and customized fabric products. The branding method can be selected according to the garment, fabric, artwork, and intended use.',
                image: 'assets/img/Printing/custom Fabrication.webp',
                imageAlt: 'Branded apparel and customized textile products',
                points: [
                    'Corporate Uniforms — Branded workwear and employee clothing.',
                    'T-Shirt Printing — Customized shirts for teams, campaigns, and events.',
                    'Logo Branding — Application of company logos to suitable textile products.',
                    'Fabric Printing — Custom graphics and designs for selected fabric applications.',
                    'Event Apparel — Branded clothing for conferences, exhibitions, and promotional events.',
                    'Promotional Textiles — Customized textile products for marketing campaigns.',
                    'Teamwear — Coordinated clothing for staff and organized teams.',
                    'Custom Textile Orders — Fabric branding based on product and project requirements.'
                ]
            }
        ];

        const howItWorks = [
            {
                heading1: 'HOW IT WORKS',
                heading2: 'From Fabric Selection to Finished Branding',
                description: 'We coordinate textile selection, artwork, branding techniques, and production details to help ensure the finished products match your requirements.',
                services: [
                    {
                        link: '#',
                        title: 'Requirements & Product Selection',
                        desc: 'We confirm the textile type, garment styles, quantities, and intended use.'
                    },
                    {
                        link: '#',
                        title: 'Artwork & Branding Method',
                        desc: 'We prepare the artwork and select a suitable branding approach.'
                    },
                    {
                        link: '#',
                        title: 'Branding & Production',
                        desc: 'We apply the approved design to the selected textile products.'
                    },
                    {
                        link: '#',
                        title: 'Quality Check & Delivery',
                        desc: 'We inspect the finished items and coordinate delivery.'
                    }
                ]
            }
        ];

        const whoShouldInvest = [
            {
                heading1: 'WHO SHOULD INVEST?',
                heading2: 'Fabric and textile branding is ideal for organizations that want to:',
                points: [
                    'Create consistent branded uniforms and workwear.',
                    'Prepare customized clothing for events and promotional campaigns.',
                    'Strengthen team identity through coordinated apparel.',
                    'Apply logos and designs to suitable fabric products.',
                    'Maintain a consistent visual identity across branded textiles.'
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