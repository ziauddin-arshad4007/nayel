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
            title: "Engineering & Design",
            breadcrumb: [
                {
                    text: "Home",
                    link: "index.php"
                },
                {
                    text: "Engineering & Design",
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
        // ENGINEERING & DESIGN SERVICES DATA
        // =========================
        const engineeringServiceData = {
            image: "assets/img/Engineering & Design/Security & SAIS Contracting.webp",

            imageAlt: "Contracting and EPC services",

            title: " Our Engineering & Design Services",

            subtitle: "Precision Engineering, Advanced Technology & Integrated Design Solutions",

            description: "Nayel delivers comprehensive Engineering & Design services spanning Telecommunications, ICT, ELV, Security, and Cybersecurity. From initial site surveys and technical studies to detailed system architecture and compliance coordination, we provide end-to-end design solutions. Our approach integrates cutting-edge technology with rigorous engineering standards to ensure reliable, secure, and future-ready infrastructure.",

            featureHeading: "Features",

            features: [
                {
                    icon: `
                    <svg viewBox="0 0 24 24"
                         stroke="currentColor"
                         stroke-linecap="round"
                         stroke-linejoin="round">
                        <circle cx="12" cy="12" r="2" />
                        <path d="M16.24 7.76a6 6 0 0 1 0 8.49m-8.48-.01a6 6 0 0 1 0-8.49m11.31-2.82a10 10 0 0 1 0 14.14m-14.14 0a10 10 0 0 1 0-14.14" />
                    </svg>
                `,
                    label: "Telecom & ICT Infrastructure"
                },
                {
                    icon: `
                    <svg viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="1.8">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />
                        <path d="M13.73 21a2 2 0 0 1-3.46 0" />
                    </svg>
                `,
                    label: "ELV & Safety Systems"
                },
                {
                    icon: `
                    <svg viewBox="0 0 24 24"
                         stroke="currentColor"
                         stroke-width="1.6">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        <circle cx="12" cy="11" r="2" />
                        <path d="M12 13v3" />
                    </svg>
                `,
                    label: "Security & SAIS Compliance"
                },
                {
                    icon: `
                    <svg viewBox="0 0 24 24"
                         stroke="currentColor"
                         stroke-width="1.7">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
                        <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                        <circle cx="12" cy="16" r="1" />
                    </svg>
                `,
                    label: "Cybersecurity & Smart Safety"
                }
            ]
        };
        // =========================
        // RENDER ENGINEERING SECTION
        // =========================
        document.getElementById("serviceImage").src =
            engineeringServiceData.image;

        document.getElementById("serviceImage").alt =
            engineeringServiceData.imageAlt;
        document.getElementById("serviceTitle").textContent =
            engineeringServiceData.title;

        document.getElementById("serviceSubtitle").textContent =
            engineeringServiceData.subtitle;

        document.getElementById("serviceDescription").textContent =
            engineeringServiceData.description;

        document.getElementById("featureHeading").textContent =
            engineeringServiceData.featureHeading;

        document.getElementById("serviceFeatures").innerHTML =
            engineeringServiceData.features.map(feature => `
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
        icon: "fas fa-satellite-dish",
        title: "Telecommunications & ICT Infrastructure",
        description: "Structured cabling, fiber-optic networks, industrial radio, and wireless connectivity solutions.",
        buttonText: "Learn More",
        link: "telecom-ict.php"
    },
    {
        icon: "fas fa-bell",
        title: "Safety Notification & ELV Systems",
        description: "PAGA, intercom, fire detection, BMS, and integrated building management systems.",
        buttonText: "Learn More",
        link: "elv-safety-systems.php"
    },
    {
        icon: "fas fa-ruler-combined",
        title: "Engineering Surveys & Technical Studies",
        description: "Site surveys, duct studies, CCTV coverage, Wi-Fi surveys, and radio communication studies.",
        buttonText: "Learn More",
        link: "engineering-surveys-studies.php"
    },
    {
        icon: "fas fa-shield-alt",
        title: "Security Systems & SAIS Contracting",
        description: "SAIS compliance coordination, perimeter protection, access control, and CCTV surveillance.",
        buttonText: "Learn More",
        link: "security-sais-contracting.php"
    },
    {
        icon: "fas fa-lock",
        title: "Cybersecurity Governance & Compliance",
        description: "NCA-aligned policies, risk assessments, penetration testing, and compliance audits.",
        buttonText: "Learn More",
        link: "cybersecurity-compliance.php"
    },
    {
        icon: "fas fa-hard-hat",
        title: "4S Smart Site Safety System",
        description: "Command-center integration, smart workforce safety, and integrated pipeline monitoring.",
        buttonText: "Learn More",
        link: "4s-smart-site-safety.php"
    },
    {
        icon: "fas fa-desktop",
        title: "Audiovisual & Control-Room Systems",
        description: "Video conferencing, control-room displays, and integrated audio-visual communication systems.",
        buttonText: "Learn More",
        link: "audiovisual.php"
    },
    {
        icon: "fas fa-plug",
        title: "Telecom Infrastructure & Support",
        description: "UPS interfaces, equipment grounding, cabinet installation, and telecom room infrastructure.",
        buttonText: "Learn More",
        link: "telecom-infrastructure.php"
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