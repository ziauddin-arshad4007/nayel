<header>
    <div class="header-container" id="header">

        <div class="header-line">
            <div class="d-none d-lg-flex">
                <div class="header-section">
                    <div class="logo">
                        <img src="assets/img/logo-new.png" id="logo" class="logo-img">
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

                                <!-- Engineering & Design -->
                                <div class="has-sub-dropdown">
                                    <a href="#">
                                        Engineering &amp; Design
                                        <i class="fas fa-chevron-right"></i>
                                    </a>

                                    <div class="sub-dropdown">
                                        <a href="#">FEED &amp; Detailed Engineering</a>
                                        <a href="#">EPC &amp; Project Management</a>
                                        <a href="#">Value Engineering</a>
                                        <a href="#">Constructability Reviews</a>
                                        <a href="#">System Design &amp; Architecture</a>
                                        <a href="#">SAIS &amp; NCA Compliance</a>
                                        <a href="#">3rd Party PE Stamp</a>
                                    </div>
                                </div>

                                <!-- Contracting -->
                                <div class="has-sub-dropdown">
                                    <a href="#">
                                        Contracting
                                        <i class="fas fa-chevron-right"></i>
                                    </a>

                                    <div class="sub-dropdown">
                                        <a href="#">EPC Contracting</a>
                                        <a href="#">Civil Works</a>
                                        <a href="#">Mechanical Works</a>
                                        <a href="#">Electrical &amp; Instrumentation</a>
                                        <a href="#">Fire &amp; Safety Systems</a>
                                        <a href="#">Automation &amp; SCADA</a>
                                        <a href="#">ICT &amp; Smart Solutions</a>
                                        <a href="#">O&amp;M Services</a>
                                    </div>
                                </div>

                                <!-- Printing -->
                                <div class="has-sub-dropdown">
                                    <a href="#">
                                        Printing
                                        <i class="fas fa-chevron-right"></i>
                                    </a>

                                    <div class="sub-dropdown">
                                        <a href="#">Digital &amp; Offset Printing</a>
                                        <a href="#">Large Format Printing</a>
                                        <a href="#">Branding &amp; Fabrication</a>
                                        <a href="#">Corporate Stationery</a>
                                        <a href="#">Promotional Gifts</a>
                                        <a href="#">Exhibition Booths &amp; Stands</a>
                                        <a href="#">Vehicle Branding</a>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <a class="header-action" href="#">Gallery</a>

                        <a class="header-action" href="contact_us.php">Contact us</a>


                    </nav>
                    <button class="btn btn pr-3 pl-3 pt-1 pb-1 "
                        style="border:1px solid var(--clr-primary); border-radius: 20px; color: var(--clr-primary) !important;">
                        get in touch
                    </button>
                </div>
            </div>
            <div class="d-lg-none">
                <div class="toggle-container">
                    <div class="logo">
                        <img src="assets/img/logo-new.png" id="logo" class="logo-img">
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
                    <div class="accordion-box-sub">
                        <button class=" btn accordion-toggle-sub"> Engineering &amp; Design <i
                                class="fas fa-chevron-down"></i></button>
                        <div class="accordion-box-sub">
                            <div class="accordion-content-sub">
                                <a href="#">FEED &amp; Detailed Engineering</a>
                                <a href="#">EPC &amp; Project Management</a>
                                <a href="#">Value Engineering</a>
                                <a href="#">Constructability Reviews</a>
                                <a href="#">System Design &amp; Architecture</a>
                                <a href="#">SAIS &amp; NCA Compliance</a>
                                <a href="#">3rd Party PE Stamp</a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-box-sub">
                        <button class=" btn accordion-toggle-sub"> Contracting <i
                                class="fas fa-chevron-down"></i></button>
                        <div class="accordion-box-sub">
                            <div class="accordion-content-sub">
                                <a href="#">EPC Contracting</a>
                                <a href="#">Civil Works</a>
                                <a href="#">Mechanical Works</a>
                                <a href="#">Electrical &amp; Instrumentation</a>
                                <a href="#">Fire &amp; Safety Systems</a>
                                <a href="#">Automation &amp; SCADA</a>
                                <a href="#">ICT &amp; Smart Solutions</a>
                                <a href="#">O&amp;M Services</a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-box-sub">
                        <button class=" btn accordion-toggle-sub"> Printing <i class="fas fa-chevron-down"></i></button>
                        <div class="accordion-box-sub">
                            <div class="accordion-content-sub">
                                <a href="#">Digital &amp; Offset Printing</a>
                                <a href="#">Large Format Printing</a>
                                <a href="#">Branding &amp; Fabrication</a>
                                <a href="#">Corporate Stationery</a>
                                <a href="#">Promotional Gifts</a>
                                <a href="#">Exhibition Booths &amp; Stands</a>
                                <a href="#">Vehicle Branding</a>
                            </div>
                        </div>
                    </div>
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

    /* Main Accordion */
    document.querySelectorAll('.accordion-toggle').forEach(btn => {
        btn.onclick = () => {
            btn.closest('.accordion-box').classList.toggle('open');
        };
    });

    /* Sub Accordion */
    document.querySelectorAll('.accordion-toggle-sub').forEach(btn => {
        btn.onclick = () => {
            btn.closest('.accordion-box-sub').classList.toggle('open-sub');
        };
    });

</script>