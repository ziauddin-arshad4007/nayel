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
    <!--------------------------------------------- business page Start  -------------------------------------------------->
    <?php include 'business.php';?>
    <!--------------------------------------------- Contracting script Start  -------------------------------------------------->
    <script>
        // =========================
        // HERO SECTION DATA
        // =========================
        const heroData = {
            title: "Contracting",
            breadcrumb: [
                {
                    text: "Home",
                    link: "index.php"
                },
                {
                    text: "Contracting",
                    link: null
                }
            ]
        };
        // =========================
        // Render Hero Section
        // =========================
        const heroContent = document.getElementById("heroContent");

        heroContent.innerHTML = `
        <div class="mt-md-5 mt-5 pl-md-4 pl-0 col-12 col-md-12">
            <h1 class="hero-title text-uppercase"
                style="color: var(--clr-black);">
                ${heroData.title}
            </h1>

            <nav class="hero-description inner-breadcrumb"
                 aria-label="Breadcrumb">

                ${heroData.breadcrumb.map((item, index) => `
                    ${index > 0 ? '<span class="text-dark">/</span>' : ''}

                    ${item.link
                ? `<a href="${item.link}">${item.text}</a>`
                : `<span aria-current="page">${item.text}</span>`
            }
                `).join("")}
            </nav>
        </div>
    `;
        // =========================
        // OUR SERVICES SECTION DATA
        // =========================
        const serviceSectionData = {
            image: "assets/img/Contracting/civil.webp",
            imageAlt: "Contracting and EPC services",

            title: " Our Contracting & EPC Services",

            subtitle: "Integrated Engineering, Procurement & Construction Excellence",

            description: "Nayel delivers comprehensive Contracting and EPC solutions across civil, mechanical, electrical, and automation disciplines. From Front-End Engineering Design (FEED) to final handover, we manage every phase of your project. Our approach combines rigorous HSE compliance, value engineering, and turnkey project management to ensure reliable, efficient, and sustainable infrastructure delivery.",

            featureHeading: "Features",

            features: [
                {
                    icon: `
                    <svg viewBox="0 0 24 24"
                         stroke="currentColor"
                         stroke-linecap="round"
                         stroke-linejoin="round">
                        <path d="M3 21h18"/>
                        <path d="M5 21V7l8-4v18"/>
                        <path d="M19 21V11l-6-4"/>
                        <path d="M9 9v.01M9 12v.01M9 15v.01M9 18v.01"/>
                    </svg>
                `,
                    label: "End-to-End EPC Delivery"
                },
                {
                    icon: `
                    <svg viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="1.8">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        <path d="M9 12l2 2 4-4"/>
                    </svg>
                `,
                    label: "HSE & Quality Compliance"
                },
                {
                    icon: `
                    <svg viewBox="0 0 24 24"
                         stroke="currentColor"
                         stroke-width="1.6">
                        <circle cx="12" cy="12" r="3"/>
                        <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/>
                    </svg>
                `,
                    label: "Value Engineering"
                },
                {
                    icon: `
                    <svg viewBox="0 0 24 24"
                         stroke="currentColor"
                         stroke-width="1.7">
                        <path d="M9 5H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-2"/>
                        <rect x="9" y="3" width="6" height="4" rx="2"/>
                        <path d="M9 12h6M9 16h6"/>
                    </svg>
                `,
                    label: "Turnkey Project Management"
                }
            ]
        };
        // Render Services Section
        document.getElementById("serviceImage").src =
            serviceSectionData.image;

        document.getElementById("serviceImage").alt =
            serviceSectionData.imageAlt;

        document.getElementById("serviceTitle").textContent =
            serviceSectionData.title;

        document.getElementById("serviceSubtitle").textContent =
            serviceSectionData.subtitle;

        document.getElementById("serviceDescription").textContent =
            serviceSectionData.description;

        document.getElementById("featureHeading").textContent =
            serviceSectionData.featureHeading;

        document.getElementById("serviceFeatures").innerHTML =
            serviceSectionData.features.map(feature => `
            <div class="adv-feature-item">

                <span class="adv-feature-icon">
                    ${feature.icon}
                </span>

                <span class="adv-feature-label">
                    ${feature.label}
                </span>

            </div>
        `).join("");
    </script>
    <script>
        const services = [
    {
        icon: "fas fa-hard-hat",
        title: "EPC Contracting",
        description: "End-to-end project delivery from engineering and procurement through construction, commissioning, and handover.",
        buttonText: "Learn More",
        link: "contracting-epc.php"
    },
    {
        icon: "fas fa-building",
        title: "Civil Works",
        description: "Comprehensive ground preparation, foundations, structural frameworks, and external infrastructure.",
        buttonText: "Learn More",
        link: "civil-works.php"
    },
    {
        icon: "fas fa-cogs",
        title: "Mechanical Works",
        description: "Installation and maintenance of industrial equipment, piping networks, and HVAC systems.",
        buttonText: "Learn More",
        link: "mechanical-works.php"
    },
    {
        icon: "fas fa-bolt",
        title: "Electrical & Instrumentation",
        description: "Power distribution, industrial measurement, control instrumentation, and connected building systems.",
        buttonText: "Learn More",
        link: "electrical-instrumentation.php"
    },
    {
        icon: "fas fa-fire-extinguisher",
        title: "Fire Safety & HSE",
        description: "Fire detection, suppression systems, and comprehensive Health, Safety & Environment compliance.",
        buttonText: "Learn More",
        link: "fire-safety.php"
    },
    {
        icon: "fas fa-robot",
        title: "Automation & ICT",
        description: "PLC, SCADA, DCS, BMS integration, enterprise networks, and smart building solutions.",
        buttonText: "Learn More",
        link: "automation-digital-solutions.php"
    }
];
        const growthCards = document.getElementById("growthCards");
        growthCards.innerHTML = services.map(service => `
                        <div class="growth-card-1">

                            <div class="growth-icon-1">
                                <i class="${service.icon}"></i>
                            </div>

                            <h3>${service.title}</h3>

                            <p>${service.description}</p>

                            <a href="${service.link}" class="growth-btn">
                                ${service.buttonText}
                                <i class="fas fa-chevron-right"
                                style="font-size: 12px;"></i>
                            </a>

                        </div>
                    `).join("");
    </script>
    <!--------------------------------------------- Footer section Start  -------------------------------------------------->
    <?php include 'footer.php'; ?>
    <!-- Bootstrap JS -->
    <!-- jQuery (required for Bootstrap 4) -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Popper.js (required for tooltips/popovers) -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>