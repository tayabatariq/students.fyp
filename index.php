<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student.fyp || Build Projects</title>
  <!-- jqurry -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- font aswsome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">Student.fyp</a>

      <nav class="navbar" data-navbar>

        <div class="wrapper">
          <a href="#" class="logo">student.fyp</a>

          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link" data-nav-link>Home</a>
          </li>
          <li class="navbar-item">
            <a href="#about" class="navbar-link" data-nav-link>About</a>
          </li>


          <li class="navbar-item">
            <a href="#service" class="navbar-link" data-nav-link>Services</a>
          </li>

          <li class="navbar-item">
            <a href="#feature" class="navbar-link" data-nav-link>Features</a>
          </li>

          <li class="navbar-item">
            <a href="#project" class="navbar-link" data-nav-link>Portfolio</a>
          </li>

          <li class="navbar-item">
            <a href="#contact" class="navbar-link" data-nav-link>Contacts</a>
          </li>
          
        </ul>

      </nav>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
      </button>

      <a href="#hire" class="btn btn-primary has-before has-after">Hire Instructor🤝</a>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" id="home" aria-label="hero">
        <div class="container">

          <div class="hero-content">

            <h1 class="h1 hero-title">
              Build Your <span class="has-before">OWN </span> <br> Final Year Project with Ease
            </h1>

            <p class="hero-text">
              At student.fyp, we specialize in helping students craft standout final year web development projects using modern tech stacks. Whether it's MERN, WordPress, or AI-powered features — we’ve got you covered.
            </p>

            <div class="wrapper">
              <a href="#" class="btn btn-primary has-before has-after">Get Started Today</a>

              <button class="hero-btn" aria-label="pixology promo">
                <ion-icon name="play-outline" aria-hidden="true"></ion-icon>

                <span class="span">View Our Works</span>
              </button>
            </div>

            <ul class="social-list">

              <li>
                <a href="#" class="social-link" style="--color: hsl(241, 77%, 63%);">
                  <ion-icon name="logo-facebook"></ion-icon>

                  <span class="span">Facebook</span>
                </a>
              </li>

            

              <li>
                <a href="https://wa.me/03085437544"  target="_blank" class="social-link" style="--color: hsl(123, 89%, 53%);">
                  <ion-icon name="logo-whatsapp"></ion-icon>

                  <span class="span">Whatsapp</span>
                </a>
              </li>
              <li>
                <a href="" class="social-link" style="--color: hsl(203, 89%, 53%);">
                  <ion-icon name="logo-linkedin"></ion-icon>

                  <span class="span">LinkedIn</span>
                </a>
              </li>

            </ul>

          </div>

          <figure class="hero-banner">
            <img src="./assets/images/hero-banner.png" width="794" height="637" alt="hero banner" class="w-100">
          </figure>

        </div>
      </section>

      
 <!-- 
  - #ABOUT
-->
<section  class="section about" id="about" aria-label="about">
  <div class="container">

    <div class="about-heading text-center">
      <p class="section-subtitle has-before">Who We Are</p>
      <h2 class="h2 section-title">
        Empowering Students To <span class="has-before">Innovate and Succeed</span>
      </h2>
    </div>

    <div class="about-wrapper" >

      <div class="about-content" >
        <p class="section-text">
          We are a team of passionate developers and mentors dedicated to supporting <b>Final Year Project (FYP)</b> students
          through every phase of their journey. From ideation and design to development and deployment, we provide 
          expert guidance and tailored solutions that help students turn their academic visions into real-world success stories.
        </p>

        <p class="section-text">
          With years of experience in product development, our mission is to bridge the gap between learning and implementation — 
          making sure your final year project is not just another assignment, but a launchpad for your future.
        </p>

        <a href="#service" class="btn btn-primary servciebtn has-before has-after">Explore Our Services</a>
      </div>

      <div class="about-image" >
        <img src="assets/images/about.jpg" style="max-width: 100%; border-radius: 1rem; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1)" alt="Students working on FYP" >
      </div>

    </div>

  </div>
</section>




      <!-- 
        - #SERVICE
      -->

      <section class="section service" id="service" aria-label="service">
        <div class="container">

          <p class="section-subtitle has-before text-center">Our Services</p>

          <h2 class="h2 section-title text-center">
            Tailored web development services for <span class="has-before">final year projects</span>. Pick the tech stack that best fits your goals and let's build something exceptional. </h2>
            

            <ul class="grid-list">

              <li>
                <div class="service-card" style="--color: 174, 77%, 50%">
  
                  <div class="card-icon">
                    <i class="fas fa-code mernstack"></i>
                  </div>
  
                  <h3 class="h3">
                    <a href="#" class="card-title">MERN Stack Development</a>
                  </h3>
  
                </div>
              </li>
  
              <li>
                <div class="service-card" style="--color: 267, 76%, 57%">
  
                  <div class="card-icon">
                    <i class="fa-brands fa-wordpress WordPress"></i>
                  </div>
  
                  <h3 class="h3">
                    <a href="#" class="card-title">WordPress Development</a>
                  </h3>
  
                </div>
              </li>
  
              <li>
                <div class="service-card" style="--color: 17, 100%, 68%">
  
                  <div class="card-icon">
                    <i class="fa-solid fa-hexagon-nodes ai"></i>
                  </div>
  
                  <h3 class="h3">
                    <a href="#" class="card-title">AI Integration</a>
                  </h3>
  
                </div>
              </li>
  
              <li>
                <div class="service-card" style="--color: 343, 98%, 60%">
  
                  <div class="card-icon">
                    <i class="fa-brands fa-shopify shopify"></i>
                  </div>
  
                  <h3 class="h3">
                    <a href="#" class="card-title">Shopify</a>
                  </h3>
  
                </div>
              </li>
  
              <li>
                <div class="service-card" style="--color: 210, 100%, 53%">
  
                  <div class="card-icon">
                    <i class="fas fa-shopping-cart wocommerece"></i>

                  </div>
  
                  <h3 class="h3">
                    <a href="#" class="card-title">Wo-commerce</a>
                  </h3>
  
                </div>
              </li>
  
              <li>
                <div class="service-card" style="--color: 157, 89%, 44%">
  
                  <div class="card-icon">
                    <img src="./assets/images/service-icon-6.png" width="30" height="30" loading="lazy"
                      alt="service icon">
                  </div>
  
                  <h3 class="h3">
                    <a href="#" class="card-title">Digital Marketing</a>
                  </h3>
  
                </div>
              </li>
  
              
  
            </ul>

        </div>
      </section>





      <!-- 
        - #FEATURE
      -->

      <section class="section feature" id="feature" aria-label="feature">
        <div class="container">

          <figure class="feature-banner">
            <img src="./assets/images/feature-banner.png" width="582" height="585" loading="lazy" alt="feature banner"
              class="w-100">
          </figure>

          <div class="feature-content">

            <p class="section-subtitle has-before">Why Choose us</p>

            <h2 class="h2 section-title">
              Specialist in aviding clients of financial <span class="has-before">challenges</span>
              Elevate Your Final Year Project with <span class="has-before">student.fyp</span>
            </h2>

            <ul class="feature-list">

              <li>
                <div class="feature-card">

                  <div class="card-icon" style="--color: 174, 77%, 50%">
                    <ion-icon name="rocket-sharp" aria-hidden="true"></ion-icon>
                  </div>

                  <div>
                    <h3 class="h3 card-title">Tailored Academic Solutions</h3>

                    <p class="card-text">
                      Expert guidance designed specifically to help you excel in your final year web projects.
                    </p>
                  </div>

                </div>
              </li>

              <li>
                <div class="feature-card">

                  <div class="card-icon" style="--color: 241, 77%, 63%;">
                    <ion-icon name="people-sharp" aria-hidden="true"></ion-icon>
                  </div>

                  <div>
                    <h3 class="h3 card-title">Efficient Project Flow
                    </h3>

                    <p class="card-text">
                      We streamline development processes to ensure your project is delivered on time.
                    </p>
                  </div>

                </div>
              </li>

              <li>
                <div class="feature-card">

                  <div class="card-icon" style="--color: 343, 98%, 60%;">
                    <ion-icon name="headset-sharp" aria-hidden="true"></ion-icon>
                  </div>

                  <div>
                    <h3 class="h3 card-title">Dedicated Support Team</h3>

                    <p class="card-text">Our passionate team works closely with you, from design to deployment, ensuring success.
                    </p>
                  </div>

                </div>
              </li>

            </ul>

          </div>

        </div>
      </section>





      <!-- 
        - #PROJECT
      -->

      <section class="section project" id="project" aria-label="project">
        <div class="container">

          <p class="section-subtitle has-before text-center">Projects</p>

          <h2 class="h2 section-title text-center">
            Explore our expert-built projects tailored for your <span class="has-before">final year success</span> — from web apps to AI-powered solutions!
          </h2>

          <ul class="filter-list">

            <li>
              <button class="filter-btn active" data-filter-btn>MERN Stack Projects</button>
            </li>

            <li>
              <button class="filter-btn" data-filter-btn>WordPress Development</button>
            </li>

            <li>
              <button class="filter-btn" data-filter-btn>AI Integration</button>
            </li>

            <li>
              <button class="filter-btn" data-filter-btn>Portfolio Websites</button>
            </li>

            <li>
              <button class="filter-btn" data-filter-btn>E-Commerce Solutions</button>
            </li>

          </ul>

          <ul class="grid-list">

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 835; --height: 429;">
                  <img src="./assets/images/project1.png" width="835" height="429" loading="lazy" alt="Book art design"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Tourly - Travel Agency Website</a>
                  </h3>

                  <a href="#" class="card-tag">A modern and responsive travel agency website designed to help users explore top destinations, book packages, and plan their perfect journey — built using HTML, CSS, and JavaScript.</a>
                </div>

              </div>
            </li>

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 416; --height: 429;">
                  <img src="./assets/images/project2.png" width="416" height="429" loading="lazy" alt="Graphic Design"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title"> Foofie - Food Delivery Website</a>
                  </h3>

                  <a href="#" class="card-tag">Order food online with ease — fast, tasty, and at your doorstep.</a>
                </div>

              </div>
            </li>

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 416; --height: 429;">
                  <img src="./assets/images/project3.png" width="416" height="429" loading="lazy" alt="3d Digital Art"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title"> Makaan - Property Booking Website</a>
                  </h3>

                  <a href="#" class="card-tag">Find and book your dream home in just a few clicks.</a>
                </div>

              </div>
            </li>

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 416; --height: 429;">
                  <img src="./assets/images/project4.png" width="416" height="429" loading="lazy" alt="Web Design"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Experience Comfort, Luxury, and Joy at Harborlights</a>
                  </h3>

                  <a href="#" class="card-tag">Harborlights offers unforgettable memories, stunning views, and year-round comfort.</a>
                </div>

              </div>
            </li>

            <li>
              <div class="project-card">

                <figure class="card-banner img-holder" style="--width: 416; --height: 429;">
                  <img src="./assets/images/project5.png" width="416" height="429" loading="lazy"
                    alt="Mobile App Design" class="img-cover">
                </figure>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Reliable Construction, Built to Last</a>
                  </h3>

                  <a href="#" class="card-tag">Constra builds strong structures with precision, safety, and trusted expertise.</a>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #NEWSLETTER
      -->

      <section class="section newsletter has-bg-image" aria-label="newsletter"
        style="background-image: url('./assets/images/newsletter-bg.jpg')">
        <div class="container">

          <figure class="newsletter-banner">
            <img src="./assets/images/newsletter-banner.png" height="2px" loading="lazy"
              alt="newsletter banner" class="w-100">
          </figure>

          <div class="newsletter-content">

            <p class="section-subtitle has-before">Elevate Your Final Year Journey</p>

            <h2 class="h2 section-title">Stay ahead with expert tips, free resources, and exclusive deals for your final year projects.</h2>

            <form action="" class="newsletter-form">
              <input type="email" name="email_address" placeholder="Enter your Email" required class="email-field">

              <button type="submit" class="btn btn-secondary has-before has-after">
                <span class="span">Proceed</span>

                <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
              </button>
            </form>

          </div>

        </div>
      </section>





      <!-- 
      contact!-->
        <div class="contact-main">
          <form id="userForm" method="post" action="contactprocess.php" enctype="multipart/form-data">
  <h2>Contact Us</h2>

  <div class="form-group fullname">
    <label for="fullname">Full Name</label>
    <input type="text" id="fullname" name="fullname" required placeholder="Enter your full name">
  </div>

  <div class="form-group email">
    <label for="email">Email Address</label>
    <input type="text" id="email" name="email" required placeholder="Enter your email address">
    <span id="email-msg"></span>
  </div>

  <div class="form-group file">
    <label for="file">Choose File</label>
    <input type="file" id="file" name="file" required>
  </div>

  <div class="form-group number">
    <label for="contact">Contact Number</label>
    <input type="number"  class="no-arrow" id="contact" name="Contact" required placeholder="Enter your Number">
    <span id="contact-msg"></span>
  </div>

  <div class="form-group">
    <label for="message">Message</label>
    <textarea class="msg" name="message" id="message"></textarea>
  </div>

  <div class="form-group submit-btn">
    <input type="submit" value="Submit">
  </div>
</form>

        </div>
  
      </div>
      
    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

      <div class="footer-top section">

        <div class="footer-brand">

          <p class="footer-list-title">ABOUT STUDENT.FYP</p>

          <p class="footer-text">
            At Student.fyp, we empower final-year students to build outstanding web projects 
            using modern technologies. Let us guide you from concept to completion.
          </p>

          <ul class="social-list">

           

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-whatsapp"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Usefull Links</p>
          </li>

          <li>
            <a href="#home" class="footer-link">Home</a>
          </li>

          <li>
            <a href="#service" class="footer-link">Services</a>
          </li>

          <li>
            <a href="#project" class="footer-link">Projects</a>
          </li>

          <li>
            <a href="#about" class="footer-link">About us</a>
          </li>

          <li>
            <a href="#contact" class="footer-link">Contacts</a>
          </li>

        </ul>

        <ul class="footer-list" id="hire">

          <li>
            <p class="footer-list-title">Contact Us</p>
          </li>
        
          <li>
            <a href="mailto:info@student.fyp.com" class="footer-link">info@student.fyp.com</a>
          </li>
        
          <li>
            <a href="mailto:support@student.fyp.com" class="footer-link">support@student.fyp.com</a>
          </li>
        
          <li>
            <a href="https://wa.me/1234567890" class="footer-link">WhatsApp: +1-234-567-890</a>
          </li>
        
        </ul>
        

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Instagram post</p>
          </li>

          <li>
            <ul class="insta-post">

              <li>
                <div class="insta-card">

                  <figure class="post-banner">
                    <img src="./assets/images/insta-post-1.jpg" width="77" height="63" loading="lazy"
                      alt="instagram post" class="img-cover">
                  </figure>

                  <a href="#" class="card-content">
                    <ion-icon name="logo-instagram" aria-hidden="true"></ion-icon>
                  </a>

                </div>
              </li>

              <li>
                <div class="insta-card">

                  <figure class="post-banner">
                    <img src="./assets/images/insta-post-2.jpg" width="77" height="63" loading="lazy"
                      alt="instagram post" class="img-cover">
                  </figure>

                  <a href="#" class="card-content">
                    <ion-icon name="logo-instagram" aria-hidden="true"></ion-icon>
                  </a>

                </div>
              </li>

              <li>
                <div class="insta-card">

                  <figure class="post-banner">
                    <img src="./assets/images/insta-post-3.jpg" width="77" height="63" loading="lazy"
                      alt="instagram post" class="img-cover">
                  </figure>

                  <a href="#" class="card-content">
                    <ion-icon name="logo-instagram" aria-hidden="true"></ion-icon>
                  </a>

                </div>
              </li>

              <li>
                <div class="insta-card">

                  <figure class="post-banner">
                    <img src="./assets/images/insta-post-4.jpg" width="77" height="63" loading="lazy"
                      alt="instagram post" class="img-cover">
                  </figure>

                  <a href="#" class="card-content">
                    <ion-icon name="logo-instagram" aria-hidden="true"></ion-icon>
                  </a>

                </div>
              </li>

              <li>
                <div class="insta-card">

                  <figure class="post-banner">
                    <img src="./assets/images/insta-post-5.jpg" width="77" height="63" loading="lazy"
                      alt="instagram post" class="img-cover">
                  </figure>

                  <a href="#" class="card-content">
                    <ion-icon name="logo-instagram" aria-hidden="true"></ion-icon>
                  </a>

                </div>
              </li>

              <li>
                <div class="insta-card">

                  <figure class="post-banner">
                    <img src="./assets/images/insta-post-6.jpg" width="77" height="63" loading="lazy"
                      alt="instagram post" class="img-cover">
                  </figure>

                  <a href="#" class="card-content">
                    <ion-icon name="logo-instagram" aria-hidden="true"></ion-icon>
                  </a>

                </div>
              </li>

            </ul>
          </li>

        </ul>

      </div>

      <div class="footer-bottom">

        <p class="copyright">
          &copy; 2025 Student.fyp. All Rights Reserved.
        </p>

        <ul class="footer-bottom-list">

          <li>
            <a href="#" class="footer-bottom-link">Terms and conditions</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">Privacy policy</a>
          </li>

          

        </ul>

      </div>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn has-after active" aria-label="back to top" data-back-top-btn>
    <ion-icon name="arrow-up" aria-hidden="true"></ion-icon>
  </a>


  <script>
  $(document).ready(function () {
    let emailValid = false;
    let contactValid = false;

    // Email validation
    $('#email').on('blur', function () {
      var email = $(this).val();
      if (email !== '') {
        $.ajax({
          url: 'check_duplicate.php',
          method: 'POST',
          data: { email: email },
          success: function (response) {
            $('#email-msg').html(response);
            if (response.includes("already exists")) {
              $('#email').addClass("input-error").removeClass("input-success");
              emailValid = false;
            } else {
              $('#email').addClass("input-success").removeClass("input-error");
              emailValid = true;
            }
          }
        });
      }
    });

    // Contact number validation
    $('#contact').on('blur', function () {
      var contact = $(this).val();
      if (contact !== '') {
        $.ajax({
          url: 'check_duplicate.php',
          method: 'POST',
          data: { contact: contact },
          success: function (response) {
            $('#contact-msg').html(response);
            if (response.includes("already exists")) {
              $('#contact').addClass("input-error").removeClass("input-success");
              contactValid = false;
            } else {
              $('#contact').addClass("input-success").removeClass("input-error");
              contactValid = true;
            }
          }
        });
      }
    });

    // Form submission
    $('#userForm').on('submit', function (e) {
      if (!emailValid || !contactValid) {
        e.preventDefault();
        alert("Form can't be submitted. Please fix errors in email or contact number.");
      }
    });
  });

</script>


  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>