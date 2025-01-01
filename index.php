<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>LendSphere - "Learn, Lend, Grow"</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
<!-- 
   Favicons 
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">LendSphere</h1>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="learngrow.php">Learn & Grow</a></li>
          <li><a href="posthub.php">PostHub</a></li>              
          <li><a href="dashboard.php">Dashboard</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">


    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <img src="assets/img/hero-bg-2.jpg" alt="" class="hero-bg">

      <div class="container">
        <div class="row gy-4 justify-content-between">
          <div class="col-lg-4 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
            <img src="assets/img/top.png" class="" width="500" height="550" alt="">
          </div>

          <div class="col-lg-6  d-flex flex-column justify-content-center" data-aos="fade-in">
            <h1>Empowering You with Smarter <span>Financial Solutions</span></h1>
            <p>Learn, invest, connect, and grow your financial potential with a platform built for everyone.</p>
            <div class="d-flex">
              <a href="learngrow.php" class="btn-get-started">Get Started</a>
            </div>
          </div>

        </div>
      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
      </svg>

    </section> <!--/Hero Section -->

  

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">

          <div class="col-xl-5 content">
            <h3>About Us</h3>
            <h2>Why Choose LendSphere?</h2>
            <p>We bring together education, insights, and innovative financial tools to help you achieve your financial goals. Whether you're here to learn, invest, or connect with peers, we’ve got you covered.</p>
            <a href="learngrow.php" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="col-xl-7">
            <div class="row gy-4 icon-boxes">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                  <i class="bi bi-buildings"></i>
                  <h3>Master Financial Literacy</h3>
                  <p>Explore interactive courses designed to simplify personal finance, budgeting, and investments for everyone.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-clipboard-pulse"></i>
                  <h3>Community Investment Insights</h3>
                  <p>Learn from real-world experiences shared by users, and discover top-rated strategies for smarter investments.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-command"></i>
                  <h3>Peer-to-Peer Lending Hub</h3>
                  <p>Connect borrowers and lenders directly through a secure, transparent, and efficient marketplace.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-graph-up-arrow"></i>
                  <h3>Unlock DeFi Potential</h3>
                  <p>Stay ahead with resources on decentralized finance, empowering you with tools for the future of finance.</p>
                </div>
              </div> <!-- End Icon Box -->

            </div>
          </div>

        </div>
      </div>

    </section><!-- /About Section -->

    <!-- Details Section -->
    <section id="details" class="details section">


      <div class="container">

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
            <img src="assets/img/details-1.png" class="h-75 w-75" alt="">
          </div>
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
            <h3>Unlock Your Path to Financial Freedom: Master the Essentials of Personal Finance</h3>
            <p class="fst-italic">
              Mastering financial literacy is key to achieving financial independence and success. Understanding budgeting, saving, and investing empowers you to make informed decisions, take control of your finances, and build wealth confidently.
            </p>
            <ul>
              <li><i class="bi bi-check"></i><span> Master budgeting techniques to manage expenses effectively and eliminate unnecessary debt.</span></li>
              <li><i class="bi bi-check"></i> <span>Learn investing strategies that help you build a diversified portfolio and achieve long-term financial goals.</span></li>
              <li><i class="bi bi-check"></i> <span>Develop a financial plan that prioritizes saving, emergency funds, and future retirement needs for peace of mind.</span></li>
            </ul>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/details-2.png" class="h-75 w-75" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
            <h3>Kickstart Your Investment Journey: Smart Strategies for Beginners</h3>
            <p class="fst-italic">
              Starting your investment journey doesn’t have to be overwhelming. With the right strategies, you can begin building your wealth, managing risk, and making smart decisions for long-term financial growth. By understanding the basics and choosing the right investment options, you can set yourself up for success.</p>
              <p>
                Build a strong foundation by mastering the basics of investing, manage risk effectively by diversifying your portfolio, and maximize returns with research-driven strategies for long-term growth.
              </p>
           
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
            <img src="assets/img/details-3.png" class="h-75 w-75" alt="">
          </div>
          <div class="col-md-7" data-aos="fade-up">
            <h3>Master the Lending Process</h3>
            <p>Navigating the lending landscape can be straightforward with the right knowledge. By understanding your creditworthiness and comparing options, you can secure the best loan for your needs. Take control of your financial future with these key insights.</p>
            <ul>
              <li><i class="bi bi-check"></i> <span>Assess your creditworthiness to unlock better loan terms.</span></li>
              <li><i class="bi bi-check"></i><span>Choose the right lending options tailored to your goals.</span></li>
              <li><i class="bi bi-check"></i> <span>Build a strong financial foundation for future opportunities.</span>.</li>
            </ul>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
            <img src="assets/img/details-4.png" class="h-75 w-75" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
            <h3>Unleashing the Future of Finance with DeFi</h3>
            <p class="fst-italic">
              Decentralized Finance (DeFi) is revolutionizing traditional finance by leveraging blockchain technology and smart contracts. With DeFi, financial services like lending, borrowing, and investing are becoming more accessible, secure, and transparent. Embrace this innovative space to take control of your financial future.
            </p>
            <p>
              Enjoy increased security with blockchain-based transactions.
Access a broader range of financial services without intermediaries.
Empower yourself with decentralized platforms for greater financial freedom.
            </p>
          </div>
        </div><!-- Features Item -->

      </div>

    </section><!-- /Details Section -->

   
    <!-- Testimonials Section -->
     
    <section id="testimonials" class="testimonials section dark-background">
    

      <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/male1.jpg" class="testimonial-img" alt="">
                <h3>John D. - Financial Blogger</h3>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"LendSphere has transformed the way I share financial insights. I’ve been able to publish articles, videos, and even connect with a broader audience. The platform's user-friendly interface makes it so easy to share my knowledge and earn from it."</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/female.jpg" class="testimonial-img" alt="">
                <h3>Sarah P. - Freelance Financial Consultant</h3>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"As a freelancer, I rely on LendSphere to connect with potential clients and get paid projects. The platform has helped me grow my client base and build credibility in the finance industry. I also love posting financial tips that empower others."</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/female.jpg" class="testimonial-img" alt="">
                <h3>Emily R. - Personal Finance Enthusiast</h3>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"I’ve learned so much through the trending courses and financial resources on LendSphere. The community is amazing, and I love contributing by sharing videos and articles to help others. It’s a perfect space to learn, teach, and grow financially."</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/male1.jpg" class="testimonial-img" alt="">
                <h3>David T. - Small Business Owner</h3>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"Thanks to LendSphere, I was able to secure a loan through the marketplace to expand my business. I also regularly post content that shares my entrepreneurial journey, and I’ve received tremendous feedback from fellow users. This platform has been an incredible resource for me."</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>"Start Your Financial Journey Today!"</h2>
        <div><span>"Join our growing community and take control of your </span> <span class="description-title">financial future."</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>Kolkata - 700002, India</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+91 12345 00000</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>care.codecrunch@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  
  <footer id="footer" class="footer dark-background">
    <div class="container">
      <h3 class="sitename">LendSphere</h3>
      <p>"LendSphere empowers users with financial knowledge, community-driven insights, and secure lending solutions, fostering growth, education, and opportunities in a dynamic and collaborative financial ecosystem."</p>
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-skype"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="container">
        <div class="copyright">
          <span>Copyright</span> <strong class="px-1 sitename">LendSphere</strong> <span>All Rights Reserved 2024 - 26</span>
        </div>
        <div class="credits">
          Designed by <a href="">Codecrunch</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>