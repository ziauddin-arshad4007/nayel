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
        // CYBERSECURITY & COMPLIANCE — CONTENT DATA
        // ------------------------------------------------------------

        const hero = [
            {
                title: 'Cybersecurity & Compliance',
                breadcrumb: {
                    home: 'Home',
                    separator: '/',
                    current: 'Cybersecurity & Compliance',
                    homeLink: '/'
                }
            }
        ];
        const whyEpc = [
            {
                heading1: 'WHY CYBERSECURITY?',
                heading2: 'A Smarter Way to Protect Your Data',
                description: 'Cybersecurity and compliance are critical for protecting your digital infrastructure. We align policies with NCA requirements, assess risks, and implement security controls across IT and OT environments. This supports regulatory compliance, threat detection, and incident readiness.',
                valuesLabel: 'Key Benefits'
            }
        ];

        const valueCards = [
            {
                icon: 'fas fa-clipboard-check',
                title: 'NCA Compliance',
                desc: 'Policies, procedures, and audit readiness.',
                className: 'value-card'
            },
            {
                icon: 'fas fa-search',
                title: 'Risk Assessments',
                desc: 'IT/OT risk assessments, vulnerability reviews, and penetration testing.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-network-wired',
                title: 'Secure Architecture',
                desc: 'Network segmentation, firewalls, and secure remote access.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-lock',
                title: 'Security Hardening',
                desc: 'IDS/IPS, NAC, IAM, PAM, and MFA controls.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-industry',
                title: 'Industrial Cybersecurity',
                desc: 'SCADA/ICS visibility and operational technology security.',
                className: 'value-card value-card--limited'
            },
            {
                icon: 'fas fa-shield-alt',
                title: 'Incident Response',
                desc: 'SOC, SIEM, threat detection, and digital forensics.',
                className: 'value-card value-card--last'
            }
        ];

        const civilWorks = [
            {
                heading1: 'TYPES OF CYBERSECURITY SERVICES',
                heading2: 'Find the Right Solution for Your Goal',
                image: 'assets/img/Engineering & Design/Cybersecurity.webp',

                description: 'Our cybersecurity and compliance services address a range of IT and OT environments. Choose the solutions that best match your risk profile, infrastructure, and compliance requirements.',
                points: [
                    'Governance & Compliance — NCA-aligned policies and audit readiness.',
                    'Risk Assessments — IT/OT risk assessments and penetration testing.',
                    'Secure Architecture — Network segmentation and firewalls.',
                    'Security Hardening — IDS/IPS, NAC, IAM, PAM, and MFA.',
                    'Industrial Cybersecurity — SCADA/ICS visibility and OT security.',
                    'Cloud Security — Cloud controls and API security.',
                    'Incident Response — SOC, SIEM, and threat detection.'
                ]
            }
        ];

        const howItWorks = [
            {
                heading1: 'HOW IT WORKS',
                heading2: 'From Security Assessment to Continuous Monitoring',
                description: 'We use a structured approach to identify weaknesses, strengthen security controls, and improve your ability to detect and respond to cyber threats.',
                services: [
                    {
                        link: '#',
                        title: 'Assessment',
                        desc: 'We evaluate your current security posture.'
                    },
                    {
                        link: '#',
                        title: 'Gap Analysis',
                        desc: 'We identify security gaps and define remediation plans.'
                    },
                    {
                        link: '#',
                        title: 'Implementation',
                        desc: 'We deploy security controls and hardening measures.'
                    },
                    {
                        link: '#',
                        title: 'Monitoring',
                        desc: 'We monitor, detect, and respond to potential threats.'
                    }
                ]
            }
        ];

        const whoShouldInvest = [
            {
                heading1: 'WHO SHOULD INVEST?',
                heading2: 'Cybersecurity and compliance services are ideal for organizations that want to:',
                points: [
                    'Ensure compliance with applicable NCA requirements.',
                    'Protect IT and OT infrastructure from cyber threats.',
                    'Implement secure network architecture and security controls.',
                    'Establish incident response and monitoring capabilities.'
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