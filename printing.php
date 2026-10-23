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
    <!--------------------------------------------- Printing & Branding Services script Start  -------------------------------------------------->
    <script>
        // =========================
        // HERO SECTION DATA
        // =========================
        const heroData = {
            title: "Printing & Branding Services",
            breadcrumb: [
                {
                    text: "Home",
                    link: "index.php"
                },
                {
                    text: "Printing & Branding Services",
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
        // PRINTING & BRANDING SERVICES DATA
        // =========================
        const printingBrandingData = {
            image: "assets/img/Printing/Commercial.webp",

            imageAlt: "Contracting and EPC services",

            title: " Our Printing & Branding Services",

            subtitle: "Creative Printing, Precision Branding & Custom Fabrication Solutions",

            description: "Nayel delivers comprehensive Printing & Branding services spanning commercial printing, large-format advertising, signage, promotional merchandise, and corporate gifts. From business stationery and vehicle branding to exhibition booths and custom awards, we provide end-to-end visual communication solutions. Our approach combines advanced printing technology with creative design to ensure high-quality, impactful, and brand-aligned results.",

            featureHeading: "Features",

            features: [
                {
                    icon: `
                    <svg viewBox="0 0 24 24" stroke="currentColor"
                         stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 6 2 18 2 18 9" />
                        <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
                        <rect x="6" y="14" width="12" height="8" />
                    </svg>
                `,
                    label: "Commercial & Digital Printing"
                },
                {
                    icon: `
                    <svg viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="1.8">
                        <rect x="2" y="3" width="20" height="14" rx="2" />
                        <path d="M8 21h8M12 17v4" />
                        <path d="M7 8h10M7 12h6" />
                    </svg>
                `,
                    label: "Large-Format & Signage"
                },
                {
                    icon: `
                    <svg viewBox="0 0 24 24" stroke="currentColor"
                         stroke-width="1.6">
                        <path d="M20 12V8H6a2 2 0 0 1-2-2c0-1.1.9-2 2-2h12v4" />
                        <path d="M4 6v12a2 2 0 0 0 2 2h14v-4" />
                        <path d="M18 12a2 2 0 0 0-2 2c0 1.1.9 2 2 2h4v-4h-4z" />
                    </svg>
                `,
                    label: "Promotional Merchandise"
                },
                {
                    icon: `
                    <svg viewBox="0 0 24 24" stroke="currentColor"
                         stroke-width="1.7">
                        <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6" />
                        <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18" />
                        <path d="M4 22h16" />
                        <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22" />
                        <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22" />
                        <path d="M18 2H6v7a6 6 0 0 0 12 0V2z" />
                    </svg>
                `,
                    label: "Corporate Gifts & Awards"
                }
            ]
        };


        // =========================
        // RENDER PRINTING & BRANDING SECTION
        // =========================
         document.getElementById("serviceImage").src =
        printingBrandingData.image;

        document.getElementById("serviceImage").alt =
            printingBrandingData.imageAlt;

        document.getElementById("serviceTitle").textContent =
            printingBrandingData.title;

        document.getElementById("serviceSubtitle").textContent =
            printingBrandingData.subtitle;

        document.getElementById("serviceDescription").textContent =
            printingBrandingData.description;

        document.getElementById("featureHeading").textContent =
            printingBrandingData.featureHeading;

        document.getElementById("serviceFeatures").innerHTML =
            printingBrandingData.features.map(feature => `
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
        icon: "fas fa-print",
        title: "Commercial & Digital Printing",
        description: "Business stationery, marketing materials, booklets, publications, and specialized digital printing.",
        buttonText: "Learn More",
        link: "commercial.php"
    },
    {
        icon: "fas fa-image",
        title: "Large-Format Printing & Advertising",
        description: "Banners, posters, wall graphics, vinyl printing, vehicle branding, and exhibition displays.",
        buttonText: "Learn More",
        link: "large-format.php"
    },
    {
        icon: "fas fa-tools",
        title: "Signage, Engraving & Custom Fabrication",
        description: "Acrylic signage, industrial tags, laser engraving, signboards, and exhibition booths.",
        buttonText: "Learn More",
        link: "elv-safety-systems.php"
    },
    {
        icon: "fas fa-tshirt",
        title: "Promotional Branding & Merchandise",
        description: "Corporate apparel, office merchandise, drinkware, technology gifts, and branding techniques.",
        buttonText: "Learn More",
        link: "promotional.php"
    },
    {
        icon: "fas fa-cut",
        title: "Fabric Printing & Textile Branding",
        description: "Fabric backdrops, flags, apparel printing, embroidery, heat transfer, and display branding.",
        buttonText: "Learn More",
        link: "fabric.php"
    },
    {
        icon: "fas fa-trophy",
        title: "Corporate Gifts & Awards",
        description: "Technology gifts, office gifts, drinkware, apparel, awards, trophies, and seasonal gifts.",
        buttonText: "Learn More",
        link: "gifts-awards.php"
    },
    {
        icon: "fas fa-store",
        title: "Event & Exhibition Displays",
        description: "Pop-up displays, printed backdrops, exhibition booths, and event-specific fabrication.",
        buttonText: "Learn More",
        link: "event-exhibition.php"
    },
    {
        icon: "fas fa-cut",
        title: "Cutting, Finishing & Production",
        description: "Vinyl cutting, die cutting, custom production, and specialized finishing services.",
        buttonText: "Learn More",
        link: "cutting-finishing6.php"
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