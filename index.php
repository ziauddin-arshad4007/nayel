<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Surface Restorizers | Home Page </title>
  <!-- Font Awesome -->
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
  <!--------------------------------------------- Header section start  -------------------------------------------------->
  <?php include 'header.php';?>
  <!--------------------------------------------- Hero section start  -------------------------------------------------->

  <section class="hero-section" id="heroSection">

    <!-- Previous button -->
    <button class="slider-btn prev" id="sliderPrev" aria-label="Previous services">
      <i class="fas fa-chevron-left"></i>
    </button>

    <div class="section">
      <div class="mt-md-4 mt-0 col-12 col-md-6">
        <div class="hero-content">

          <div class="live-badge">
            <span class="dot-wrapper">
              <span class="ping" id="heroPing"></span>
              <span class="dot" id="heroDot"></span>
            </span>

            <span id="heroBadgeText">Live Intelligence Platform</span>
          </div>

          <h1 class="hero-title" id="heroTitle">
            Innovative Engineering for a Smarter Tomorrow
          </h1>

          <div class="hero-description-wrapper">
            <p class="hero-description" id="heroDescription">
              We provide technical studies, systems integration, and expert
              consultancy to turn your vision into reliable, efficient,
              and sustainable solutions.
            </p>
          </div>

          <div class="button-group">
            <button class="btn-starting" id="heroCTA">
              Start Monitoring Today
              <span class="pl-2">
                <i class="fas fa-arrow-right"></i>
              </span>
            </button>
          </div>

        </div>
      </div>
    </div>

    <!-- Next button -->
    <button class="slider-btn next" id="sliderNext" aria-label="Next services">
      <i class="fas fa-chevron-right"></i>
    </button>

  </section>

  <!--------------------------------------------- Get way cards section start  -------------------------------------------------->

  <section class="growth-section">
    <div class="section">
      <h2 class="heading-1">
        <span> Engineering Ideas & Delivering Excellence
        </span>
      </h2>
      <h2 class="heading-2">
        A Diverse Company Built Around Expertise
      </h2>
      <p class="section-discription">
        We bring together engineering expertise, EPC and construction capabilities, and professional printing and
        branding
        solutions to deliver dependable, innovative, and future-ready solutions across industries.
      </p>
      <div class="growth-cards">
        <!-- Card 1: Engineering & Design -->
        <div class="growth-card">
          <div class="growth-icon">
            <i class="fas fa-drafting-compass"></i>
          </div>
          <h3>Engineering &amp; Design</h3>
          <h4>Engineering-Led Planning &amp; Technical Excellence</h4>
          <p>
            From FEED and detailed design to acoustic modelling, Wi-Fi surveys, and cybersecurity architecture.
            We deliver compliant, future-ready solutions.
          </p>
          <a href="engineering-design.php" class="growth-btn">
            Discover Engineering Services
            <i class="fas fa-chevron-right" style="font-size: 12px;"></i>
          </a>
        </div>

        <!-- Card 2: Contracting & EPC -->
        <div class="growth-card">
          <div class="growth-icon">
            <i class="fas fa-hard-hat"></i>
          </div>
          <h3>Contracting &amp; EPC</h3>
          <h4>World-Class EPC &amp; Construction Delivery</h4>
          <p>
            End-to-end Engineering, Procurement, and Construction. Civil, Mechanical, Electrical,
            Instrumentation, Fire Safety, and 4S Safety Command Centers.
          </p>
          <a href="contracting.php" class="growth-btn">
            View Contracting Projects
            <i class="fas fa-chevron-right" style="font-size: 12px;"></i>
          </a>
        </div>

        <!-- Card 3: Printing & Branding -->
        <div class="growth-card">
          <div class="growth-icon">
            <i class="fas fa-print"></i>
          </div>
          <h3>Printing &amp; Branding</h3>
          <h4>High-Quality Printing &amp; Corporate Branding</h4>
          <p>
            Professional design, digital &amp; offset printing, large format fabrication,
            and premium promotional gifts to elevate your brand identity.
          </p>
          <a href="printing.php" class="growth-btn">
            Explore Printing Solutions
            <i class="fas fa-chevron-right" style="font-size: 12px;"></i>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!--------------------------------------------- Who we are section start  -------------------------------------------------->

  <section class="growth-section">
    <div class="section">
      <div class="row align-items-stretch why-choose-row">
        <div class="col-lg-4 pr-4 pl-1">
          <img
            src="https://img.freepik.com/free-photo/flat-lay-business-concept_53876-14499.jpg?t=st=1777274632~exp=1777278232~hmac=60b4314779c785fa0af53bac722b929e1916a0f5ac108ee064a62ace56dd8d8d&amp;w=1060"
            alt="office" class="who-we-img why-choose-img">
        </div>
        <div class="col-lg-8 ">
          <h2 class="heading-1">
            <span> Why Choose Nayel?
            </span>
          </h2>
          <h2 class="heading-2">
            Excellence, Safety & Innovation in Every Project
          </h2>
          <p class="section-discription">
            Partner with Nayel for integrated project delivery, uncompromising safety, engineering excellence, and
            proven industry expertise. With innovative technologies, a strong track record, and a client-first approach,
            we deliver reliable, efficient, and sustainable solutions from start to finish.
          </p>
          <div class="features">
            <div class="feature">
              <span class="feature-icon">
                <i class="fas fa-project-diagram"></i>
              </span>
              <span class="feature-text">Seamless end-to-end project delivery under one trusted partner</span>
            </div>

            <div class="feature">
              <span class="feature-icon">
                <i class="fas fa-hard-hat"></i>
              </span>
              <span class="feature-text">Rigorous HSE standards (ISO 45001) and zero-compromise on safety.</span>
            </div>

            <div class="feature">
              <span class="feature-icon">
                <i class="fas fa-drafting-compass"></i>
              </span>
              <span class="feature-text">Multidisciplinary teams across civil, mechanical, electrical, and ICT.</span>
            </div>

            <div class="feature">
              <span class="feature-icon">
                <i class="fas fa-award"></i>
              </span>
              <span class="feature-text">Successful projects for Saudi Aramco, SABIC, and Saudi Energy.</span>
            </div>

            <div class="feature">
              <span class="feature-icon">
                <i class="fas fa-microchip"></i>
              </span>
              <span class="feature-text">Leveraging automation, PLC/SCADA, and smart site safety systems.</span>
            </div>

            <div class="feature">
              <span class="feature-icon">
                <i class="fas fa-handshake"></i>
              </span>
              <span class="feature-text">Transparent communication and long-term partnerships.</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--------------------------------------------- Industries We Serve section start  -------------------------------------------------->

  <section class="growth-section">
    <div class="section">
      <div class="industry-slider-section">

        <h2 class="heading-1">
          <span> Industries We Serve</span>
        </h2>

        <h2 class="heading-2">
          Engineering Excellence Across Every Industry
        </h2>

        <p class="section-discription pb-5">
          Nayel delivers integrated EPC, construction, engineering, and technology
          solutions across oil and gas, power generation, water treatment,
          infrastructure, smart cities, healthcare, education, and telecommunications.
          Combining technical expertise, safety-driven execution, and innovative
          technologies, we build reliable, efficient, and sustainable solutions
          tailored to the evolving needs of industries across Saudi Arabia and beyond.
        </p>
        <!-- SLIDER WRAPPER -->
        <div class="industry-slider-wrapper">

          <!-- PREVIOUS BUTTON -->
          <button class="industry-slider-btn industry-prev" id="industrySliderPrev" aria-label="Previous services"
            type="button">
            <i class="fas fa-chevron-left"></i>
          </button>

          <!-- SLIDER TRACK -->
          <div class="industry-slider-track" id="industrySliderTrack">
            <!-- Cards generated using JavaScript -->
          </div>

          <!-- NEXT BUTTON -->
          <button class="industry-slider-btn industry-next" id="industrySliderNext" aria-label="Next services"
            type="button">
            <i class="fas fa-chevron-right"></i>
          </button>

        </div>
      </div>
    </div>
  </section>

  <!---------------------------------------------  Our ISO Certificates section start  -------------------------------------------------->
  <section class="growth-section">
    <div class="section">
      <div class="row align-items-center">

        <div class="col-lg-7 order-1 order-lg-1">
          <h2 class="heading-1">
            <span> Our ISO Certificates
            </span>
          </h2>
          <h2 class="heading-2">
            Certified Standards, Quality & Safety You Can Trust
          </h2>
          <p class="section-discription">
            Nyle proudly holds ISO 9001, 14001, and 45001 certifications, demonstrating our commitment to the highest
            standards of quality, environmental management, and occupational health and safety. These prestigious
            certifications reflect our dedication to consistently delivering superior services while ensuring the
            well-being of our employees and minimizing our environmental impact.
          </p>
        </div>
        <div class="col-lg-5 order-2 order-lg-2 mt-5 mb-5">
          <div class="card-container">
            <div class="infoBox">
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" height="122" viewBox="0 0 511.775 511.775"
                  width="512">
                  <g>
                    <g>
                      <path
                        d="m367.758 329.093c4.045-3.76 4.276-10.087.516-14.133s-10.087-4.276-14.132-.516c-26.751 24.865-61.646 38.56-98.259 38.56-29.257 0-57.418-8.686-81.439-25.117-5.94-4.063-11.613-8.59-16.861-13.453-4.051-3.754-10.378-3.514-14.132.537s-3.514 10.378.537 14.133c5.967 5.529 12.415 10.674 19.164 15.291 27.361 18.717 59.427 28.609 92.731 28.609 41.681 0 81.412-15.594 111.875-43.911z">
                      </path>
                      <path
                        d="m255.883 44.058c-41.679 0-81.413 15.594-111.883 43.91-4.046 3.76-4.278 10.087-.518 14.133 3.759 4.045 10.086 4.276 14.132.518 26.758-24.866 61.657-38.561 98.269-38.561s71.508 13.694 98.259 38.56c1.926 1.791 4.369 2.676 6.806 2.676 2.682 0 5.357-1.072 7.327-3.191 3.76-4.046 3.529-10.373-.516-14.133-30.464-28.317-70.195-43.912-111.876-43.912z">
                      </path>
                      <path
                        d="m508.955 386.556-76.082-76.082c3.44-5.969 6.581-12.122 9.415-18.45h6.547c17.168 0 31.135-13.967 31.135-31.135v-7.176c0-5.522-4.477-10-10-10s-10 4.478-10 10v7.176c0 6.14-4.995 11.135-11.135 11.135h-385.907c-6.14 0-11.136-4.995-11.136-11.135v-104.717c0-6.141 4.996-11.136 11.136-11.136h385.907c6.14 0 11.135 4.995 11.135 11.136v9.57c0 5.522 4.477 10 10 10s10-4.478 10-10v-9.57c0-17.168-13.967-31.136-31.135-31.136h-6.547c-10.163-22.699-24.264-43.168-42.005-60.909-38.572-38.571-89.854-59.813-144.4-59.813-54.542 0-105.827 21.242-144.409 59.813-17.742 17.742-31.843 38.211-42.005 60.909h-6.541c-17.168 0-31.136 13.968-31.136 31.136v104.717c0 17.168 13.967 31.135 31.136 31.135h6.533c2.836 6.329 5.982 12.486 9.42 18.455l-76.069 76.078c-5.789 5.789-2.098 16.255 6.139 17.026l86.779 8.131 8.13 86.778c.765 8.155 11.158 12.008 17.027 6.139l95.678-95.669c25.896 5.046 52.754 5.042 78.652.016l95.663 95.653c5.798 5.798 16.255 2.094 17.027-6.139l8.13-86.778 86.779-8.131c8.152-.763 11.988-11.176 6.139-17.027zm-383.339-308.285c34.804-34.795 81.067-53.957 130.268-53.957 49.204 0 95.463 19.162 130.257 53.956 13.85 13.85 25.248 29.533 34.006 46.767h-328.536c8.757-17.234 20.155-32.917 34.005-46.766zm-3.828 397.177-6.918-73.85c-.448-4.786-4.238-8.575-9.024-9.023l-73.85-6.919 57.972-57.979c13.798 19.201 30.908 35.953 50.746 49.523 16.556 11.324 34.495 20.041 53.316 26.013zm93.59-87.167c-47.335-10.618-89.403-40.356-115.432-81.606-.026-.041-.057-.077-.084-.117-2.96-4.708-5.717-9.554-8.248-14.534h328.531c-2.531 4.98-5.289 9.826-8.256 14.54-26.815 41.05-67.375 70.963-115.621 81.746-26.517 5.927-54.373 5.914-80.89-.029zm190.543 4.294c-4.786.448-8.576 4.237-9.024 9.023l-6.918 73.85-72.217-72.21c41.668-13.191 78.5-40.136 104.013-75.577l57.995 57.995z">
                      </path>
                      <path
                        d="m158.271 171.424v74.213c0 5.522 4.477 10 10 10s10-4.478 10-10v-74.213c0-5.522-4.477-10-10-10s-10 4.478-10 10z">
                      </path>
                      <path
                        d="m235.1 235.637c-7.175 0-14.073-2.885-18.452-7.717-3.709-4.092-10.034-4.402-14.125-.693-4.092 3.708-4.403 10.032-.694 14.125 8.228 9.078 20.355 14.285 33.271 14.285 15.991 0 29.423-10.23 31.94-24.326 1.899-10.636-2.893-24.517-22.036-31.577-8.991-3.317-17.371-6.927-20.073-8.107-1.659-1.394-1.6-3.303-1.484-4.105.168-1.173 1.031-4.042 5.395-5.356 10.087-3.036 19.508 4.391 19.759 4.592 4.227 3.502 10.494 2.938 14.032-1.269 3.554-4.228 3.007-10.535-1.22-14.089-.712-.6-17.694-14.603-38.339-8.385-10.518 3.169-17.96 11.47-19.424 21.665-1.375 9.583 2.779 18.802 10.843 24.059.442.288.906.541 1.387.756.431.191 10.671 4.75 22.203 9.004 2.406.888 10.183 4.18 9.269 9.298-.688 3.853-5.459 7.84-12.252 7.84z">
                      </path>
                      <path
                        d="m279.279 208.531c0 25.975 21.132 47.106 47.106 47.106s47.106-21.132 47.106-47.106-21.132-47.106-47.106-47.106-47.106 21.131-47.106 47.106zm74.213 0c0 14.946-12.16 27.106-27.106 27.106s-27.106-12.16-27.106-27.106 12.16-27.106 27.106-27.106 27.106 12.159 27.106 27.106z">
                      </path>
                      <path
                        d="m479.203 204.706c-2.068-5.042-8.035-7.491-13.06-5.41-5.031 2.083-7.497 8.03-5.41 13.061 2.088 5.032 8.029 7.487 13.06 5.41 5.029-2.077 7.502-8.036 5.41-13.061z">
                      </path>
                    </g>
                  </g>
                </svg>

              </div>
              <h3>9001:2015</h3>
            </div>
            <div class="infoBox">
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" height="122" viewBox="0 0 511.775 511.775"
                  width="512">
                  <g>
                    <g>
                      <path
                        d="m367.758 329.093c4.045-3.76 4.276-10.087.516-14.133s-10.087-4.276-14.132-.516c-26.751 24.865-61.646 38.56-98.259 38.56-29.257 0-57.418-8.686-81.439-25.117-5.94-4.063-11.613-8.59-16.861-13.453-4.051-3.754-10.378-3.514-14.132.537s-3.514 10.378.537 14.133c5.967 5.529 12.415 10.674 19.164 15.291 27.361 18.717 59.427 28.609 92.731 28.609 41.681 0 81.412-15.594 111.875-43.911z">
                      </path>
                      <path
                        d="m255.883 44.058c-41.679 0-81.413 15.594-111.883 43.91-4.046 3.76-4.278 10.087-.518 14.133 3.759 4.045 10.086 4.276 14.132.518 26.758-24.866 61.657-38.561 98.269-38.561s71.508 13.694 98.259 38.56c1.926 1.791 4.369 2.676 6.806 2.676 2.682 0 5.357-1.072 7.327-3.191 3.76-4.046 3.529-10.373-.516-14.133-30.464-28.317-70.195-43.912-111.876-43.912z">
                      </path>
                      <path
                        d="m508.955 386.556-76.082-76.082c3.44-5.969 6.581-12.122 9.415-18.45h6.547c17.168 0 31.135-13.967 31.135-31.135v-7.176c0-5.522-4.477-10-10-10s-10 4.478-10 10v7.176c0 6.14-4.995 11.135-11.135 11.135h-385.907c-6.14 0-11.136-4.995-11.136-11.135v-104.717c0-6.141 4.996-11.136 11.136-11.136h385.907c6.14 0 11.135 4.995 11.135 11.136v9.57c0 5.522 4.477 10 10 10s10-4.478 10-10v-9.57c0-17.168-13.967-31.136-31.135-31.136h-6.547c-10.163-22.699-24.264-43.168-42.005-60.909-38.572-38.571-89.854-59.813-144.4-59.813-54.542 0-105.827 21.242-144.409 59.813-17.742 17.742-31.843 38.211-42.005 60.909h-6.541c-17.168 0-31.136 13.968-31.136 31.136v104.717c0 17.168 13.967 31.135 31.136 31.135h6.533c2.836 6.329 5.982 12.486 9.42 18.455l-76.069 76.078c-5.789 5.789-2.098 16.255 6.139 17.026l86.779 8.131 8.13 86.778c.765 8.155 11.158 12.008 17.027 6.139l95.678-95.669c25.896 5.046 52.754 5.042 78.652.016l95.663 95.653c5.798 5.798 16.255 2.094 17.027-6.139l8.13-86.778 86.779-8.131c8.152-.763 11.988-11.176 6.139-17.027zm-383.339-308.285c34.804-34.795 81.067-53.957 130.268-53.957 49.204 0 95.463 19.162 130.257 53.956 13.85 13.85 25.248 29.533 34.006 46.767h-328.536c8.757-17.234 20.155-32.917 34.005-46.766zm-3.828 397.177-6.918-73.85c-.448-4.786-4.238-8.575-9.024-9.023l-73.85-6.919 57.972-57.979c13.798 19.201 30.908 35.953 50.746 49.523 16.556 11.324 34.495 20.041 53.316 26.013zm93.59-87.167c-47.335-10.618-89.403-40.356-115.432-81.606-.026-.041-.057-.077-.084-.117-2.96-4.708-5.717-9.554-8.248-14.534h328.531c-2.531 4.98-5.289 9.826-8.256 14.54-26.815 41.05-67.375 70.963-115.621 81.746-26.517 5.927-54.373 5.914-80.89-.029zm190.543 4.294c-4.786.448-8.576 4.237-9.024 9.023l-6.918 73.85-72.217-72.21c41.668-13.191 78.5-40.136 104.013-75.577l57.995 57.995z">
                      </path>
                      <path
                        d="m158.271 171.424v74.213c0 5.522 4.477 10 10 10s10-4.478 10-10v-74.213c0-5.522-4.477-10-10-10s-10 4.478-10 10z">
                      </path>
                      <path
                        d="m235.1 235.637c-7.175 0-14.073-2.885-18.452-7.717-3.709-4.092-10.034-4.402-14.125-.693-4.092 3.708-4.403 10.032-.694 14.125 8.228 9.078 20.355 14.285 33.271 14.285 15.991 0 29.423-10.23 31.94-24.326 1.899-10.636-2.893-24.517-22.036-31.577-8.991-3.317-17.371-6.927-20.073-8.107-1.659-1.394-1.6-3.303-1.484-4.105.168-1.173 1.031-4.042 5.395-5.356 10.087-3.036 19.508 4.391 19.759 4.592 4.227 3.502 10.494 2.938 14.032-1.269 3.554-4.228 3.007-10.535-1.22-14.089-.712-.6-17.694-14.603-38.339-8.385-10.518 3.169-17.96 11.47-19.424 21.665-1.375 9.583 2.779 18.802 10.843 24.059.442.288.906.541 1.387.756.431.191 10.671 4.75 22.203 9.004 2.406.888 10.183 4.18 9.269 9.298-.688 3.853-5.459 7.84-12.252 7.84z">
                      </path>
                      <path
                        d="m279.279 208.531c0 25.975 21.132 47.106 47.106 47.106s47.106-21.132 47.106-47.106-21.132-47.106-47.106-47.106-47.106 21.131-47.106 47.106zm74.213 0c0 14.946-12.16 27.106-27.106 27.106s-27.106-12.16-27.106-27.106 12.16-27.106 27.106-27.106 27.106 12.159 27.106 27.106z">
                      </path>
                      <path
                        d="m479.203 204.706c-2.068-5.042-8.035-7.491-13.06-5.41-5.031 2.083-7.497 8.03-5.41 13.061 2.088 5.032 8.029 7.487 13.06 5.41 5.029-2.077 7.502-8.036 5.41-13.061z">
                      </path>
                    </g>
                  </g>
                </svg>

              </div>
              <h3>14001:2015</h3>
            </div>
            <div class="infoBox">
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" height="122" viewBox="0 0 511.775 511.775"
                  width="512">
                  <g>
                    <g>
                      <path
                        d="m367.758 329.093c4.045-3.76 4.276-10.087.516-14.133s-10.087-4.276-14.132-.516c-26.751 24.865-61.646 38.56-98.259 38.56-29.257 0-57.418-8.686-81.439-25.117-5.94-4.063-11.613-8.59-16.861-13.453-4.051-3.754-10.378-3.514-14.132.537s-3.514 10.378.537 14.133c5.967 5.529 12.415 10.674 19.164 15.291 27.361 18.717 59.427 28.609 92.731 28.609 41.681 0 81.412-15.594 111.875-43.911z">
                      </path>
                      <path
                        d="m255.883 44.058c-41.679 0-81.413 15.594-111.883 43.91-4.046 3.76-4.278 10.087-.518 14.133 3.759 4.045 10.086 4.276 14.132.518 26.758-24.866 61.657-38.561 98.269-38.561s71.508 13.694 98.259 38.56c1.926 1.791 4.369 2.676 6.806 2.676 2.682 0 5.357-1.072 7.327-3.191 3.76-4.046 3.529-10.373-.516-14.133-30.464-28.317-70.195-43.912-111.876-43.912z">
                      </path>
                      <path
                        d="m508.955 386.556-76.082-76.082c3.44-5.969 6.581-12.122 9.415-18.45h6.547c17.168 0 31.135-13.967 31.135-31.135v-7.176c0-5.522-4.477-10-10-10s-10 4.478-10 10v7.176c0 6.14-4.995 11.135-11.135 11.135h-385.907c-6.14 0-11.136-4.995-11.136-11.135v-104.717c0-6.141 4.996-11.136 11.136-11.136h385.907c6.14 0 11.135 4.995 11.135 11.136v9.57c0 5.522 4.477 10 10 10s10-4.478 10-10v-9.57c0-17.168-13.967-31.136-31.135-31.136h-6.547c-10.163-22.699-24.264-43.168-42.005-60.909-38.572-38.571-89.854-59.813-144.4-59.813-54.542 0-105.827 21.242-144.409 59.813-17.742 17.742-31.843 38.211-42.005 60.909h-6.541c-17.168 0-31.136 13.968-31.136 31.136v104.717c0 17.168 13.967 31.135 31.136 31.135h6.533c2.836 6.329 5.982 12.486 9.42 18.455l-76.069 76.078c-5.789 5.789-2.098 16.255 6.139 17.026l86.779 8.131 8.13 86.778c.765 8.155 11.158 12.008 17.027 6.139l95.678-95.669c25.896 5.046 52.754 5.042 78.652.016l95.663 95.653c5.798 5.798 16.255 2.094 17.027-6.139l8.13-86.778 86.779-8.131c8.152-.763 11.988-11.176 6.139-17.027zm-383.339-308.285c34.804-34.795 81.067-53.957 130.268-53.957 49.204 0 95.463 19.162 130.257 53.956 13.85 13.85 25.248 29.533 34.006 46.767h-328.536c8.757-17.234 20.155-32.917 34.005-46.766zm-3.828 397.177-6.918-73.85c-.448-4.786-4.238-8.575-9.024-9.023l-73.85-6.919 57.972-57.979c13.798 19.201 30.908 35.953 50.746 49.523 16.556 11.324 34.495 20.041 53.316 26.013zm93.59-87.167c-47.335-10.618-89.403-40.356-115.432-81.606-.026-.041-.057-.077-.084-.117-2.96-4.708-5.717-9.554-8.248-14.534h328.531c-2.531 4.98-5.289 9.826-8.256 14.54-26.815 41.05-67.375 70.963-115.621 81.746-26.517 5.927-54.373 5.914-80.89-.029zm190.543 4.294c-4.786.448-8.576 4.237-9.024 9.023l-6.918 73.85-72.217-72.21c41.668-13.191 78.5-40.136 104.013-75.577l57.995 57.995z">
                      </path>
                      <path
                        d="m158.271 171.424v74.213c0 5.522 4.477 10 10 10s10-4.478 10-10v-74.213c0-5.522-4.477-10-10-10s-10 4.478-10 10z">
                      </path>
                      <path
                        d="m235.1 235.637c-7.175 0-14.073-2.885-18.452-7.717-3.709-4.092-10.034-4.402-14.125-.693-4.092 3.708-4.403 10.032-.694 14.125 8.228 9.078 20.355 14.285 33.271 14.285 15.991 0 29.423-10.23 31.94-24.326 1.899-10.636-2.893-24.517-22.036-31.577-8.991-3.317-17.371-6.927-20.073-8.107-1.659-1.394-1.6-3.303-1.484-4.105.168-1.173 1.031-4.042 5.395-5.356 10.087-3.036 19.508 4.391 19.759 4.592 4.227 3.502 10.494 2.938 14.032-1.269 3.554-4.228 3.007-10.535-1.22-14.089-.712-.6-17.694-14.603-38.339-8.385-10.518 3.169-17.96 11.47-19.424 21.665-1.375 9.583 2.779 18.802 10.843 24.059.442.288.906.541 1.387.756.431.191 10.671 4.75 22.203 9.004 2.406.888 10.183 4.18 9.269 9.298-.688 3.853-5.459 7.84-12.252 7.84z">
                      </path>
                      <path
                        d="m279.279 208.531c0 25.975 21.132 47.106 47.106 47.106s47.106-21.132 47.106-47.106-21.132-47.106-47.106-47.106-47.106 21.131-47.106 47.106zm74.213 0c0 14.946-12.16 27.106-27.106 27.106s-27.106-12.16-27.106-27.106 12.16-27.106 27.106-27.106 27.106 12.159 27.106 27.106z">
                      </path>
                      <path
                        d="m479.203 204.706c-2.068-5.042-8.035-7.491-13.06-5.41-5.031 2.083-7.497 8.03-5.41 13.061 2.088 5.032 8.029 7.487 13.06 5.41 5.029-2.077 7.502-8.036 5.41-13.061z">
                      </path>
                    </g>
                  </g>
                </svg>

              </div>
              <h3>
                45001:2018</h3>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>



  <?php include 'footer.php'; ?>

  <script>
    document.addEventListener("DOMContentLoaded", function () {

      // Automatically detect the project base path.
      // Local: /nayel/
      // Live:  /
      const assetBase = window.location.pathname.startsWith("/nayel/")
        ? "/nayel/assets/img/"
        : "/assets/img/";

      // All hero slider content
      const slides = [
        {
          badge: "CONTRACTING",
          title: "Built with Expertise. Delivered with Confidence.",
          description:
            "From EPC and construction to civil, mechanical, electrical, security, and O&M, we deliver comprehensive contracting solutions for complex and diverse projects.",
          buttonText: "Start Monitoring Today",
          pingColor: "#22c55e",
          background: assetBase + "printing-right-1.webp"
        },
        {
          badge: "ENGINEERING & DESIGN",
          title: "Innovative Engineering for a Smarter Tomorrow",
          description:
            "We provide technical studies, systems integration, and expert consultancy to turn your vision into reliable, efficient, and sustainable solutions.",
          buttonText: "Explore Our Solutions",
          pingColor: "#3b82f6",
          background: assetBase + "printing-right-2.webp"
        },
        {
          badge: "PRINTING",
          title: "Your Ideas, Our Print Perfection",
          description:
            "From digital and UV printing to laser cutting, fabric printing, offset printing, and plotter cutting — we bring your brand to life with precision and quality.",
          buttonText: "Discover Our Services",
          pingColor: "#f59e0b",
          background: assetBase + "printing-right-3.webp"
        }
      ];

      // Get hero elements
      const heroSection = document.getElementById("heroSection");
      const heroBadgeText = document.getElementById("heroBadgeText");
      const heroTitle = document.getElementById("heroTitle");
      const heroDescription = document.getElementById("heroDescription");
      const heroPing = document.getElementById("heroPing");
      const heroDot = document.getElementById("heroDot");
      const heroCTA = document.getElementById("heroCTA");

      const prevButton = document.getElementById("sliderPrev");
      const nextButton = document.getElementById("sliderNext");

      // Stop safely if required elements are missing
      if (
        !heroSection ||
        !heroBadgeText ||
        !heroTitle ||
        !heroDescription ||
        !heroPing ||
        !heroDot ||
        !heroCTA ||
        !prevButton ||
        !nextButton
      ) {
        console.error("Hero slider: One or more required HTML elements are missing.");
        return;
      }

      let currentSlide = 0;
      let animationTimer;

      // Set background and preload the image
      function setHeroBackground(slide) {
        const imageUrl = slide.background;

        heroSection.style.setProperty(
          "--hero-bg",
          `url("${imageUrl}")`
        );

        // Log image loading errors in the browser console
        const image = new Image();

        image.onload = function () {
          console.log("Hero background loaded:", imageUrl);
        };

        image.onerror = function () {
          console.error("Hero background failed to load:", imageUrl);
        };

        image.src = imageUrl;
      }

      // Update the displayed slide
      function showSlide(index) {
        if (heroSection.dataset.animating === "true") return;

        heroSection.dataset.animating = "true";

        const content = heroSection.querySelector(".hero-content");

        if (content) {
          content.classList.add("is-changing");
        }

        clearTimeout(animationTimer);

        animationTimer = setTimeout(function () {
          currentSlide = (index + slides.length) % slides.length;

          const slide = slides[currentSlide];

          // Update text content
          heroBadgeText.textContent = slide.badge;
          heroTitle.textContent = slide.title;
          heroDescription.textContent = slide.description;

          // Update CTA text while preserving its arrow icon
          const arrow = heroCTA.querySelector("span");

          heroCTA.textContent = slide.buttonText + " ";

          if (arrow) {
            heroCTA.appendChild(arrow);
          }

          // Update indicator colors
          heroPing.style.backgroundColor = slide.pingColor;
          heroDot.style.backgroundColor = slide.pingColor;

          // Update the background image
          setHeroBackground(slide);

          // Fade content back in
          requestAnimationFrame(function () {
            requestAnimationFrame(function () {
              if (content) {
                content.classList.remove("is-changing");
              }

              heroSection.dataset.animating = "false";
            });
          });

        }, 350);
      }

      // Initialize the first slide immediately
      heroSection.dataset.animating = "false";

      const firstSlide = slides[0];

      heroBadgeText.textContent = firstSlide.badge;
      heroTitle.textContent = firstSlide.title;
      heroDescription.textContent = firstSlide.description;
      heroPing.style.backgroundColor = firstSlide.pingColor;
      heroDot.style.backgroundColor = firstSlide.pingColor;

      setHeroBackground(firstSlide);

      // Previous slide
      prevButton.addEventListener("click", function () {
        showSlide(currentSlide - 1);
      });

      // Next slide
      nextButton.addEventListener("click", function () {
        showSlide(currentSlide + 1);
      });

    });
  </script>

  <script>
    (function () {
      const industryServices = [
        {
          image: "assets/img/oil-and-gas.webp",
          imageAlt: "Oil and gas industrial facilities",
          icon: "fas fa-oil-well",
          title: "Oil & Gas",
          description:
            "Upstream and downstream oil and gas facilities, pipelines, refineries, and petrochemical plants with full EPC capabilities.",

        },
        {
          image: "assets/img/power-generation.webp",
          imageAlt: "Power generation plant and infrastructure",
          icon: "fas fa-bolt",
          title: "Power Generation",
          description:
            "Power plants, substations, transmission lines, and energy infrastructure supporting reliable generation and distribution.",

        },
        {
          image: "assets/img/water-treatment.webp",
          imageAlt: "Water treatment and desalination facility",
          icon: "fas fa-water",
          title: "Water Treatment",
          description:
            "Water treatment plants, desalination facilities, irrigation networks, and wastewater management infrastructure.",

        },
        // {
        //   image: "assets/img/industries/infrastructure-roads.jpg",
        //   imageAlt: "Highways and modern road infrastructure",
        //   icon: "fas fa-road",
        //   title: "Infrastructure & Roads",
        //   description:
        //     "Highways, bridges, roads, tunnels, and urban infrastructure development delivered with comprehensive civil construction expertise.",

        // },
        {
          image: "assets/img/construction.webp",
          imageAlt: "Commercial and industrial construction project",
          icon: "fas fa-hard-hat",
          title: "Construction & Infrastructure",
          description:
            "Civil, structural, and architectural works for commercial, residential, industrial, and public infrastructure projects across the Kingdom.",

        },
        {
          image: "assets/img/smart city.webp",
          imageAlt: "Smart city infrastructure and connected urban systems",
          icon: "fas fa-city",
          title: "Smart Cities",
          description:
            "Integrated ICT, automation, and intelligent infrastructure solutions supporting connected, efficient, and future-ready urban environments.",

        },
        {
          image: "assets/img/health-care.webp",
          imageAlt: "Modern healthcare facility and hospital infrastructure",
          icon: "fas fa-hospital",
          title: "Healthcare",
          description:
            "Infrastructure, ICT systems, security, and integrated technology solutions for hospitals, clinics, and modern healthcare facilities.",

        },
        {
          image: "assets/img/education.webp",
          imageAlt: "Modern educational institution and campus",
          icon: "fas fa-graduation-cap",
          title: "Education",
          description:
            "Reliable infrastructure, networking, security, and technology solutions for schools, universities, campuses, and educational institutions.",

        },
        {
          image: "assets/img/telecom.webp",
          imageAlt: "Telecommunications network and connectivity infrastructure",
          icon: "fas fa-broadcast-tower",
          title: "Telecom",
          description:
            "Telecommunications infrastructure, structured cabling, fiber-optic networks, and ICT solutions that enable reliable connectivity and digital communication.",

        }
      ];

      const industryTrack = document.getElementById("industrySliderTrack");
      const industryPrev = document.getElementById("industrySliderPrev");
      const industryNext = document.getElementById("industrySliderNext");

      if (!industryTrack || !industryPrev || !industryNext) return;

      industryTrack.innerHTML = industryServices.map(service => `
        <div class="industry-slider-item">
            <a class="industry-card-content" >
                <div class="card industry-card-services">

                    <img
                        src="${service.image}"
                        alt="${service.imageAlt}"
                    >

                    <div class="industry-icon-wrapper">
                        <div class="industry-icon-circle">
                            <i class="${service.icon}" aria-hidden="true"></i>
                        </div>
                    </div>

                    <div class="industry-card-body-custom">
                        <h4>${service.title}</h4>
                        <p>${service.description}</p>
                    </div>

                </div>
            </a>
        </div>
    `).join("");

      // Calculate the scroll distance for one card.
      function getIndustryScrollAmount() {
        const firstItem = industryTrack.querySelector(".industry-slider-item");

        if (!firstItem) return 300;

        const gap = parseFloat(
          window.getComputedStyle(industryTrack).gap
        ) || 0;

        return firstItem.offsetWidth + gap;
      }

      // Previous card.
      industryPrev.addEventListener("click", function () {
        industryTrack.scrollBy({
          left: -getIndustryScrollAmount(),
          behavior: "smooth"
        });
      });

      // Next card.
      industryNext.addEventListener("click", function () {
        industryTrack.scrollBy({
          left: getIndustryScrollAmount(),
          behavior: "smooth"
        });
      });

      // Keyboard navigation.
      industryTrack.setAttribute("tabindex", "0");

      industryTrack.addEventListener("keydown", function (event) {
        if (event.key === "ArrowLeft") {
          event.preventDefault();
          industryPrev.click();
        } else if (event.key === "ArrowRight") {
          event.preventDefault();
          industryNext.click();
        }
      });

      // Prevent unwanted mouse-down behavior.
      industryPrev.addEventListener("mousedown", function (event) {
        event.preventDefault();
      });

      industryNext.addEventListener("mousedown", function (event) {
        event.preventDefault();
      });

      // Update navigation button states.
      function updateIndustryArrows() {
        const scrollLeft = industryTrack.scrollLeft;
        const maxScroll = industryTrack.scrollWidth - industryTrack.clientWidth;

        industryPrev.style.opacity = scrollLeft <= 5 ? "0.4" : "1";
        industryPrev.style.pointerEvents = scrollLeft <= 5 ? "none" : "auto";

        industryNext.style.opacity =
          scrollLeft >= maxScroll - 5 ? "0.4" : "1";

        industryNext.style.pointerEvents =
          scrollLeft >= maxScroll - 5 ? "none" : "auto";
      }

      window.addEventListener("load", updateIndustryArrows);
      window.addEventListener("resize", updateIndustryArrows);
      industryTrack.addEventListener("scroll", updateIndustryArrows);

      updateIndustryArrows();
    })();
  </script>
  <!-- Bootstrap JS -->
  <!-- jQuery (required for Bootstrap 4) -->
  <script src="assets/js/jquery.min.js"></script>
  <!-- Popper.js (required for tooltips/popovers) -->
  <script src="assets/js/popper.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>