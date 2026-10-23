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
        // CUTTING, FINISHING & PRODUCTION — CONTENT DATA
        // ------------------------------------------------------------

        const hero = [
            {
                title: 'Cutting, Finishing & Production',
                breadcrumb: {
                    home: 'Home',
                    separator: '/',
                    current: 'Cutting, Finishing & Production',
                    homeLink: '/'
                }
            }
        ];

        const whyEpc = [
            {
                heading1: 'WHY CUTTING, FINISHING & PRODUCTION?',
                heading2: 'Precision Finishing for Professional Results',
                description: 'Cutting and finishing services ensure printed materials are produced to the highest standards. We support vinyl cutting, die cutting, sticker application, and custom production based on supplied artwork, delivering clean edges and professional-grade finishes.',
                valuesLabel: 'Key Benefits'
            }
        ];

        const valueCards = [
            {
                icon: 'fas fa-cut',
                title: 'Vinyl & Stencil Cutting',
                desc: 'Precision custom cuts for vinyl and stencil materials.',
                className: 'value-card'
            },
            {
                icon: 'fas fa-shapes',
                title: 'Die Cutting',
                desc: 'Custom shapes and finishing for printed materials.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-tags',
                title: 'Sticker Application',
                desc: 'Professional application of stickers and decals.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-cogs',
                title: 'Custom Production',
                desc: 'Tailored production based on your supplied artwork.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-print',
                title: 'Roland & Audley Machines',
                desc: 'High-precision large-format production equipment.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-check-circle',
                title: 'Clean Edges',
                desc: 'Finishing services that ensure quality and precision.',
                className: 'value-card value-card--last'
            }
        ];

        const civilWorks = [
            {
                heading1: 'TYPES OF CUTTING, FINISHING & PRODUCTION',
                heading2: 'Find the Right Finishing Solution for Your Project',
                description: 'Our cutting and finishing solutions support signage, branding, promotional materials, and custom production. Choose services that suit your project and artwork requirements.',
                image: 'assets/img/Printing/Cutting, Finishing.webp',
                imageAlt: 'Cutting, finishing, and production equipment for printed materials',
                points: [
                    'Vinyl Cutting — Precision vinyl and stencil cuts.',
                    'Die Cutting — Custom shapes and finishing.',
                    'Sticker Application — Professional application services.',
                    'Custom Production — Based on supplied artwork.',
                    'Roland Production — Large-format production.',
                    'Audley Production — Large-format production.',
                    'Shape Cutting — Custom shape cutting for suitable materials.',
                    'Finishing Services — Clean edges and professional finishing.'
                ]
            }
        ];

        const howItWorks = [
            {
                heading1: 'HOW IT WORKS',
                heading2: 'From Artwork to Finished Product',
                description: 'We coordinate artwork review, cutting setup, production, and quality checks to ensure your finished materials meet your specifications.',
                services: [
                    {
                        link: '#',
                        title: 'Artwork Review',
                        desc: 'We review your supplied artwork for production.'
                    },
                    {
                        link: '#',
                        title: 'Cutting Setup',
                        desc: 'We set up the cutting or die-cut machines.'
                    },
                    {
                        link: '#',
                        title: 'Production',
                        desc: 'We cut, finish, and apply the materials.'
                    },
                    {
                        link: '#',
                        title: 'Quality Check & Delivery',
                        desc: 'We inspect and deliver the finished product.'
                    }
                ]
            }
        ];

        const whoShouldInvest = [
            {
                heading1: 'WHO SHOULD INVEST?',
                heading2: 'Cutting, finishing, and production is ideal for organizations that want to:',
                points: [
                    'Cut custom vinyl and stencils for branding.',
                    'Die-cut printed materials into custom shapes.',
                    'Apply stickers and decals professionally.',
                    'Produce custom materials based on supplied artwork.',
                    'Achieve clean edges and professional-grade finishes.'
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