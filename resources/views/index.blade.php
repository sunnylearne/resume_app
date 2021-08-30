<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sunday Chukwuebuka</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="{{ asset('assets/img/IMG_2766.jpg') }}" alt="Sunny" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="#">Sunny Lenz</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/sunnylearner" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://facebook.com/sunday.madubuike.1" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://github.com/sunnylearne" class="github"><i class="bx bxl-github"></i></a>
          <a href="https://medium.com/@ikesundayshield" class="medium"><i class="bx bxl-medium"></i></a>
          <a href="https://www.linkedin.com/in/sunday-chukwuebuka-madubuike-594252192/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="#hero"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>
          <li><a href="{{ route('login') }}"> <i class="bx bx-log-in"></i> Login</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Sunday Chukwuebuka</h1>
      <p>I'm <span class="typed" data-typed-items="a Backend Engineer, a Freelancer, a Photographer"></span></p>
    </div>
    @if(Session::has('success'))
      <div class=" alert alert-success form-group" role="alert">
        {{Session::get('success')}} 
    </div>

    @endif
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->

    

    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="{{ asset('assets/img/IMG_6680.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Laravel Developer.</h3>
            <p>
                I am a Software Engineer with an innate love of writing code to solve complex issues using Laravel but 
                not limited to it. i can changed to any stack with the shortest time possible because it isnt about the languages
                and frameworks, its about understanding programming Concepts. When one has this understanding, it becomes very
                easy to switch tracks with ease.
                I don't only rely on coding competencies, but also on team playing spirit. I am open to learning and hungry to grow.
                i am able to communicate my ideas clearly to any team and i am a great addition to your team
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 25th June</li>
                  {{-- <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> www.example.com</li> --}}
                  <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +2348131538090</li>
                  {{-- <li><i class="icofont-rounded-right"></i> <strong>City:</strong> City : Owerri</li> --}}
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  {{-- <li><i class="icofont-rounded-right"></i> <strong>Course:</strong> Computer Science</li> --}}
                  {{-- <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> Master</li> --}}
                  <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> ikesundayshield@gmail.com</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available</li>
                </ul>
              </div>
            </div>
            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">HTML <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">65%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">PHP <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Laravel <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Git <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
          
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
        

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>BSc Computer Science</h4>
              <h5>2018 - 2021</h5>
              <p><em>Imo State University Owerri</em></p>
              
            </div>

            <h3 class="resume-title">Employment History</h3>
            <div class="resume-item">
              <h4>Freelance Developer at Eaglons Services</h4>
              <h5>2020 - 2021</h5>
              <p><em><a href="http://eaglonservices.com">visit website</a></em></p>
              
            </div>

            <h3 class="resume-title">Volunteer Roles</h3>
            <div class="resume-item">
              <h4>Core Team Member DSC IMSU</h4>
              <h5>2019 - 2021</h5>
              <p><em>Imo State University Owerri</em></p>
              
            </div>

            <h3 class="resume-title">Personal Projects</h3>
            <div class="resume-item">
              <h4>LaraBlog</h4>
              <p>A blog for Laravel lovers</p>
              <h4>Crypto Tracker</h4>
              <p>A web app helps keep track of your Crypto transactions</p>
              <h4>My Portfolio App</h4>
              <p>A web page that reveals my skills </p>
              
              
              
            </div>
            
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Senior Software Engineert</h4>
              <h5>2019 - Present</h5>
              <p><em>Experion, New York, NY </em></p>
              <ul>
                <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Juniour Software Engineer</h4>
              <h5>2017 - 2018</h5>
              <p><em>Stepping Stone Advertising, New York, NY</em></p>
              <ul>
                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    

   
    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">


        <div class="section-title">
          <h2>Contact Me</h2>
          
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-6 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>COTHS, IMSU Owerri.</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>ikesundayshield@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+2348131538090</p>
              </div>

            </div>

          </div>

          <div class="col-lg-6 mt-2 info ">
            <form action="{{ url('/') }}" method="post">
                @csrf
            
                <div class="form-group">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required/>
                
                </div>

                <div class="form-group">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" required />
            
                </div>
            
              <div class="form-group">
                <label for="name">Phone</label>
                <input type="number" class="form-control" name="phone" required/>
              </div>

              <div class="form-group">
                <label >Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              
              <div class="text-center  "><button class="btn btn-primary" value="save" type="submit">Send Message</button></div>
              </div>
                
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>HNG8.0</span></strong>
      </div>
      <div class="credits">
        
        Designed by <a href="">SunnyLenz</a> 
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/typed.js/typed.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>