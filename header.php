<header>
    <div class="header-container" id="header">

        <div class="header-line">
            <div class="d-none d-lg-flex">
                <div class="header-section">
                    <div class="logo">
                        <img src="img/logo-2.png" id="logo" class="logo-img">
                    </div>
                    <nav class="navigation ">
                        <a class="header-action" href="index.php">Home</a>
                        <a class="header-action" href="about-us.php">Who we are </a>

                        <div class="account-dropdown" style="cursor:pointer">
                            <a class="header-action">
                                <span>Projects</span>
                                <i class="fas fa-chevron-down"
                                    style="font-size: 12px; margin-left: -2px; margin-top: 5px;"></i>
                            </a>
                            <div class="account-dropdown-content">
                                <div class="has-sub-dropdown">
                                    <a href="#"> Government<i class="fas fa-chevron-right"></i></a>

                                    <div class="sub-dropdown">
                                        <a href="pan.php"> PAN 2.0</a>
                                        <a href="apaar.php"> One Student Card (APAAR / ABC)</a>
                                        <a href="pmk.php"> PM-KUSUM</a>
                                        <a href="pmmmsy.php"> PMMSY</a>
                                        <a href="mame.php">MSME LEAN Program (QCI)</a>
                                        <a href="qic.php"> QCI DRC (District Resource Centre)</a>
                                        <a href="fostac.php"> FoSTaC – Food Safety Mitra (FSSAI)</a>
                                    </div>
                                </div>
                                <div class="has-sub-dropdown">
                                    <a href="#"> private <i class="fas fa-chevron-right"></i></a>

                                    <div class="sub-dropdown">
                                        <div>
                                            <a href="digital-services.php">Digital & IT Services</a>
                                            <a href="business.php">Business & Consultancy</a>
                                            <a href="real-estate.php">Real Estate & Construction</a>
                                            <a href="healthcare.php">Healthcare & Pharma</a>
                                            <a href="manpower.php">Manpower & Facility</a>
                                            <a href="manpower.php">Manpower & Facility</a>
                                            <a href="education.php">Education & Skills</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="header-action" href="#">Gallery</a>

                        <a class="header-action" href="contact_us.php">Contact us</a>


                    </nav>
                    <button>
                        get in touch
                    </button>
                </div>
            </div>
            <div class="d-lg-none">
                <div class="toggle-container">
                    <div class="logo">
                        <img src="img/logo-2.png" id="logo" class="logo-img">
                    </div>
                    <div class="toggle-container">
                        <button class="toggle-button" id="menuToggle">
                            <span></span><span></span><span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ================= SIDEBAR ================= -->
    <div class="sidebar-overlay" id="overlay"></div>

    <div class="sidebar-panel" id="sidebar">
        <div class="sidebar-header">
            <h4>Menu</h4>
            <button class="btn" id="menuClose"><span class="fs-1">&times;</span></button>
        </div>
        <div class="menu-links">
            <a href="index.php">Home</a>
            <a href="about-us.php">About us</a>
            <div class="accordion-box">
                <button class=" btn accordion-toggle">Services <i class="fas fa-chevron-down"></i></button>
                <div class="accordion-content">
                    <a href="service.php">Online Media Monitoring</a>
                    <a href="service.php">Print Publication Analysis</a>
                    <a href="service.php">Broadcast Media Tracking</a>
                    <a href="service.php">Social Platform Intelligence</a>
                    <a href="service.php">Emerging Channels &amp; Podcasts</a>
                    <a href="service.php">Saudi Market Localization</a>
                    <a href="service.php">Cultural Context &amp; Media Habits</a>
                    <a href="service.php">Regional Coverage (Riyadh, Jeddah, Eastern Province)</a>
                </div>

            </div>
            <a href="#">Contact us</a>
        </div>
    </div>
</header>
<script>
    const header = document.getElementById('header');
    // const logo = document.getElementById('logo');

    /* Sticky Scroll */
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('sticky');
            // logo.src = 'img/3.pnglogo-';
        } else {
            header.classList.remove('sticky');
            // logo.src = 'img/logo-2.png';
        }
    });
    /* Sidebar */
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');

    document.getElementById('menuToggle').onclick = () => {
        sidebar.classList.add('active');
        overlay.style.display = 'block';
    };

    document.getElementById('menuClose').onclick = closeMenu;
    overlay.onclick = closeMenu;

    function closeMenu() {
        sidebar.classList.remove('active');
        overlay.style.display = 'none';
    }

    /* Accordion */
    document.querySelectorAll('.accordion-toggle').forEach(btn => {
        btn.onclick = () => btn.closest('.accordion-box').classList.toggle('open');
    });
</script>