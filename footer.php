<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>footer · ivory organic · curved layers + gradient</title>
  <!-- Font Awesome 6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <style>
    :root {
      /* ——— refreshed ivory / cream palette ——— */
      --clr-primary: #CE961B;
      /* warm gold – unchanged */
      --clr-secondary: #0A3CFF;
      /* deep blue – unchanged */
      --clr-dust: #0a3bff86;
      /* soft blue haze */
      --clr-accent: #fff58981;
      /* pale yellow glow */
      --clr-dark: #111827;
      /* kept for text contrast */
      --clr-text: #3e3a35;
      /* dark warm gray for body text */
      --clr-white: #ffffff;
      /* pure white accents */
      --clr-black: #000000;
      /* for deep shadows */

      /* ——— ivory foundation ——— */
      --clr-ivory: #fdfaf45e;
      /* main ivory background */
      --clr-ivory-deep: #f7f2e9;
      /* slightly warmer for depth */
      --clr-ivory-shadow: #e8e0d3;
      /* subtle shadow tone */
    }

    * {
      margin: 0 !important;
      padding: 0 !important;
      box-sizing: border-box;
    }



    /* dummy content just to give context */
    .page-content {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem !important;
      color: var(--clr-dark);
      font-size: 1.2rem;
      background: radial-gradient(circle at 20% 30%, var(--clr-accent), var(--clr-ivory-deep));
    }

    /* ---------- UNIQUE FOOTER DESIGN – IVORY VERSION ---------- */
    .footer-unique {
      background: var(--clr-ivory);
      /* ivory base */
      color: var(--clr-dark);
      /* dark text for contrast */
      position: relative;
      padding: 0 35px !important;
      box-shadow: 0 -20px 30px -10px rgba(0, 0, 0, 0.08),
        /* softer shadow */
        inset 0 1px 0 rgba(255, 255, 255, 0.8);
      border-top: 1px solid var(--clr-ivory-shadow);
    }

    /* decorative glow – now warm & subtle */
    .footer-unique::after {
      content: '';
      position: absolute;
      top: -12px;
      left: 10%;
      width: 80%;
      height: 24px;
      background: radial-gradient(ellipse at center, var(--clr-accent) 0%, transparent 70%);
      filter: blur(8px);
      z-index: 0;
      pointer-events: none;
      opacity: 0.7;
    }

    /* main container — uses flex with unique gap & alignment */
    .unique-container {
      display: flex;
      flex-wrap: wrap;
      gap: 40px 30px;
      padding: 50px 0 30px !important;
      position: relative;
      z-index: 3;
      justify-content: space-around;
      align-items: center;
    }

    .unique-about,
    .footer-col {
      transition: all 0.2s ease;
    }

    /* about section — organic asymmetric shape */
    .unique-about-wrapper {
      padding-right: 20px !important;
      border-right: 2px dotted var(--clr-dust);
    }

    .unique-about {
      width: 260px;
    }

    .unique-about .logo-placeholder {
      font-size: 2.2rem;
      font-weight: 600;
      letter-spacing: -0.02em;
      color: var(--clr-primary);
      margin-bottom: 12px !important;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 6px;
    }

    .unique-about .logo-placeholder i {
      font-size: 2rem;
      color: var(--clr-primary);
      background: var(--clr-ivory-deep);
      padding: 8px !important;
      border-radius: 40% 60% 40% 60% / 50% 40% 60% 50%;
      transform: rotate(5deg);
    }

    .unique-about p {
      line-height: 1.6;
      font-size: 0.85rem;
      opacity: 0.9;
      font-style: italic;
      color: var(--clr-black);
      border-left: 2px solid var(--clr-secondary);
      padding-left: 16px !important;
    }

    /* column headings — hand‑drawn underline */
    .footer-col h4 {
      color: var(--clr-primary);
      font-size: 1.2rem;
      font-weight: 600;
      margin-bottom: 22px !important;
      position: relative;
      display: inline-block;
      letter-spacing: -0.01em;
    }

    .footer-col h4::after {
      content: '';
      position: absolute;
      bottom: -8px;
      left: 0;
      width: 70%;
      height: 3px;
      background: linear-gradient(90deg, var(--clr-primary), var(--clr-accent), transparent);
      border-radius: 4px;
    }

    .footer-col ul {
      list-style: none;
      padding: 0 !important;
    }

    .footer-col ul li {
      margin-bottom: 12px !important;
    }

    .footer-col ul li a {
      color: var(--clr-text);
      text-decoration: none;
      font-size: 0.85rem;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: 0.2s;
      border-bottom: 1px solid transparent;
      font-weight: 400;
    }

    .footer-col ul li a i {
      color: var(--clr-primary);
      /* icons pop with gold */
      opacity: 0.9;
    }

    .footer-col ul li a:hover {
      color: var(--clr-primary);
      border-bottom: 1px solid var(--clr-dust);
      transform: translateX(5px);
    }

    /* newsletter — bubbly pill with gradient – adapted for ivory */
    .newsletter-box {
      display: flex;
      background: var(--clr-ivory-deep);
      border-radius: 60px 60px 60px 20px;
      overflow: hidden;
      border: 1px solid var(--clr-primary);
      max-width: 300px;
      box-shadow: 0 8px 14px -8px rgba(0, 0, 0, 0.2);
    }

    .newsletter-box input {
      flex: 1;
      padding: 15px 18px !important;
      border: none;
      background: transparent;
      color: var(--clr-text);
      outline: none;
      min-width: 0;
      font-style: italic;
    }

    .newsletter-box input::placeholder {
      color: #9b8e7c;
      font-style: italic;
    }

    .newsletter-box button {
      border: none;
      background: linear-gradient(to right, var(--clr-primary), #e5b84b, var(--clr-primary));
      padding: 0 22px !important;
      color: var(--clr-dark);
      font-size: 1.3rem;
      cursor: pointer;
      transition: 0.25s;
    }

    .newsletter-box button:hover {
      background: linear-gradient(to right, var(--clr-secondary), #3b5bff, var(--clr-secondary));
      color: var(--clr-white);
    }

    /* bottom row — wavy separator */
    .footer-bottom-unique {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 24px 0px 28px !important;
      flex-wrap: wrap;
      gap: 20px;
      border-top: 1px dashed var(--clr-dust);
      position: relative;
    }

    .socials-unique a {
      color: var(--clr-dark);
      margin-right: 24px !important;
      font-size: 1.3rem;
      background: var(--clr-ivory-deep);
      width: 44px;
      height: 44px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      transition: 0.2s;
      border: 1px solid #ddd2c0;
    }

    .socials-unique a:hover {
      background: var(--clr-primary);
      color: var(--clr-ivory);
      transform: scale(1.07) rotate(2deg);
      border-color: var(--clr-primary);
    }

    .footer-bottom-unique p {
      font-size: 0.9rem;
      background: var(--clr-ivory-deep);
      color: var(--clr-dark);
      padding: 8px 18px !important;
      border-radius: 60px;
      margin: 0px !important;
      border: 1px solid #e4d9c8;
    }

    .footer-bottom-unique strong {
      color: var(--clr-primary);
      font-weight: 600;
    }

    .info {
      margin-left: -30px !important;
    }

    /* ========== RESPONSIVE ========== */
    @media (max-width: 1100px) {
      .unique-about-wrapper {
        border-right: none;
      }
    }

    @media (max-width: 992px) {
      .footer-unique {
        padding: 0 28px !important;
      }

      .unique-about-wrapper {
        width: 100%;
        border-right: none;
      }

      .unique-about {
        width: 100%;
        max-width: 450px;
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .footer-col:nth-child(2) {
        flex: 1 1 200px;
      }

      .footer-col:nth-child(3),
      .footer-col:nth-child(4) {
        flex: 1 1 180px;
      }

      .footer-col:nth-child(5) {
        flex: 1 1 100%;
      }

      .footer-col:nth-child(6) {
        flex: 1 1 200px;
      }

      .footer-col:nth-child(7) {
        flex: 1 1 200px;
      }

      .newsletter-box {
        max-width: 340px;
      }
    }

    @media (max-width: 768px) {
      .unique-container {
        gap: 30px 20px;
        justify-content: start !important;
      }

      .unique-about-wrapper {
        width: 100%;
        flex: 1 1 100%;
      }

      .footer-col:nth-child(2) {
        width: calc(50% - 10px);
        flex: 0 0 calc(50% - 10px);
      }

      .footer-col:nth-child(3) {
        width: calc(50% - 10px);
        flex: 0 0 calc(50% - 10px);
      }

      .footer-col:nth-child(4) {
        width: 100%;
        flex: 1 1 100%;
      }

      .footer-col:nth-child(5) {
        width: 100%;
        flex: 1 1 100%;
      }

      .footer-col:nth-child(6),
      .footer-col:nth-child(7) {
        flex: 1 1 200px;
      }

      .footer-col:nth-child(8) {
        flex: 1 1 100%;
      }

      .footer-col:nth-child(9) {
        display: none;
      }

      .newsletter-box {
        max-width: 100%;
      }
      .info {
        margin-left: 0px !important;
      }
    }

    @media (max-width: 600px) {

      .footer-col:nth-child(6),
      .footer-col:nth-child(7) {
        flex: 1 1 100%;
      }

      .footer-bottom-unique {
        flex-direction: column;
        text-align: center;
      }

      .socials-unique a {
        margin: 0 10px !important;
      }
    }

    @media (max-width: 500px) {

      .footer-col:nth-child(2),
      .footer-col:nth-child(3),
      .footer-col:nth-child(4),
      .footer-col:nth-child(5),
      .footer-col:nth-child(6),
      .footer-col:nth-child(7) {
        width: 100%;
        flex: 1 1 100% !important;
      }

      .unique-about-wrapper {
        width: 100%;
      }

      

      .footer-unique {
        padding: 0 20px !important;
        border-radius: 40px 40px 0 0;
        background: var(--clr-ivory);
      }
    }

    .footer-col:last-child {
      display: none;
    }

    /* organic dots – now softer, on ivory */
    .footer-unique .organic-dots {
      content: '';
      position: absolute;
      bottom: 80px;
      right: 20px;
      width: 120px;
      height: 70px;
      background: radial-gradient(circle at 10px 20px, var(--clr-secondary) 4px, transparent 5px);
      background-size: 24px 24px;
      opacity: 0.12;
      pointer-events: none;
      z-index: 1;
      border-radius: 70% 30% 60% 40%;
    }

    /* extra ivory harmony */
    .footer-unique a,
    .footer-unique p,
    .footer-unique h4,
    .footer-unique input,
    .footer-unique button {
      transition: all 0.2s ease;
    }
  </style>
</head>

<body>

  <footer class="footer-unique">
  

    <!-- FIRST flex container (original columns) but with unique wrapper names -->
    <div class="unique-container" style="border-bottom: 1px solid var(--clr-dust) !important;">

      <!-- ABOUT (wrapper) with hand-drawn style -->
      <div class="unique-about-wrapper">
        <div class="unique-about">
          <div class="logo-placeholder"
            style="width: 200px; margin-left: 0px !important; margin-bottom: 50px !important;">
            <img src="assets/img/logo-new.png" width="100%"
              style="border-radius: 20px; filter: drop-shadow(0 6px 8px rgba(0,0,0,0.05));">
          </div>
          <p class="info">Integrated Engineering, Contracting &amp; Printing Solutions — Delivering Excellence.</p>
        </div>
      </div>

      <!-- ENGINEERING & DESIGN -->
      <div class="footer-col">
        <h4>Engineering &amp; Design</h4>
        <ul>
          <li><a href="#"><i class="fa-regular fa-circle-check" style="font-size:0.8rem;"></i> FEED &amp; Detailed
              Engineering</a></li>
          <li><a href="#"><i class="fa-regular fa-circle-check"></i> EPC &amp; Project Management</a></li>
          <li><a href="#"><i class="fa-regular fa-circle-check"></i> Value Engineering</a></li>
          <li><a href="#"><i class="fa-regular fa-circle-check"></i> Constructability Reviews</a></li>
          <li><a href="#"><i class="fa-regular fa-circle-check"></i> System Design &amp; Architecture</a></li>
          <li><a href="#"><i class="fa-regular fa-circle-check"></i> SAIS &amp; NCA Compliance</a></li>
          <li><a href="#"><i class="fa-regular fa-circle-check"></i> 3rd Party PE Stamp</a></li>
        </ul>
      </div>

      <!-- CONTRACTING -->
      <div class="footer-col">
        <h4>Contracting</h4>
        <ul>
          <li><a href="#">EPC Contracting</a></li>
          <li><a href="#">Civil Works</a></li>
          <li><a href="#">Mechanical Works</a></li>
          <li><a href="#">Electrical &amp; Instrumentation</a></li>
          <li><a href="#">Fire &amp; Safety Systems</a></li>
          <li><a href="#">Automation &amp; SCADA</a></li>
          <li><a href="#">ICT &amp; Smart Solutions</a></li>
          <li><a href="#">O&amp;M Services</a></li>
        </ul>
      </div>

      <!-- PRINTING -->
      <div class="footer-col">
        <h4>Printing</h4>
        <ul>
          <li><a href="#">Digital &amp; Offset Printing</a></li>
          <li><a href="#">Large Format Printing</a></li>
          <li><a href="#">Branding &amp; Fabrication</a></li>
          <li><a href="#">Corporate Stationery</a></li>
          <li><a href="#">Promotional Gifts</a></li>
          <li><a href="#">Exhibition Booths &amp; Stands</a></li>
          <li><a href="#">Vehicle Branding</a></li>
        </ul>
      </div>

      <!-- COMPANY -->
      <div class="footer-col">
        <h4>Company</h4>
        <ul>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Our Projects</a></li>
          <li><a href="#">Certifications</a></li>
          <li><a href="#">Careers</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
    </div> <!-- end first unique-container -->

    <!-- SECOND container (contact, legal, newsletter) -->
    <div class="unique-container">
      <!-- Contact Footer -->
      <div class="footer-col">
        <h4>Contact</h4>
        <ul>
          <li><a href="#"><i class="fa-solid fa-phone" style="color: var(--clr-primary);"></i> +966 13 123 4567</a></li>
          <li><a href="#"><i class="fa-solid fa-envelope" style="color: var(--clr-primary);"></i> info@nayel.com.sa</a>
          </li>
          <li><a href="#"><i class="fa-solid fa-location-dot" style="color: var(--clr-primary);"></i> Dammam &amp;
              Al-Jubail, KSA</a></li>
        </ul>
      </div>

      <!-- Legal -->
      <div class="footer-col">
        <h4>Legal</h4>
        <ul>
          <li><a href="#">Privacy Policy (Ar/En)</a></li>
          <li><a href="#">Terms of Service (Ar/En)</a></li>
          <li><a href="#">HSE Policy</a></li>
          <li><a href="#">Quality &amp; Environment Policy</a></li>
        </ul>
      </div>

      <!-- NEWSLETTER with unique shaped button -->
      <div class="footer-col">
        <h4>Newsletter</h4>
        <div class="newsletter-box">
          <input type="email" placeholder="your email">
          <button><i class="fa-regular fa-paper-plane"></i></button>
        </div>
        <p style="font-size:0.8rem; margin-top: 10px !important; opacity:0.8; color: var(--clr-text);">monthly insights, no spam
        </p>
      </div>
      <!-- empty placeholder (kept for structure) -->
      <div class="footer-col"></div>
    </div>

    <!-- BOTTOM with unique socials style -->
    <div class="footer-bottom-unique">
      <div class="socials-unique">
        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
        <a href="#"><i class="fa-solid fa-globe"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
      </div>
      <p>© 2026 <strong>Nayel</strong> · all rights reserved </p>
    </div>
  </footer>
</body>

</html>