<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> DYPCET MLSA </title>
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="navbar">
    <div class="nav-logo1">
      <!-- <img src="./microsoft-logo.png"> -->
    </div>
    <button class="navbar-toggle" onclick="toggleSidebar()" id="navbar-toggle">
      &#8801;
    </button>
    <div class="center-nav">
      <li><a href="#" class="scroll-link" data-scroll-to="0">Home</a></li>
      <li><a href="#" class="scroll-link" data-scroll-to="800">About</a></li>
      <li><a href="#" class="scroll-link" data-scroll-to="800">Activities</a></li>
      <li><a href="#" class="scroll-link" data-scroll-to="800">Team</a></li>
      <li><a href="#" class="scroll-link" data-scroll-to="800">Contact us</a></li>
    </div>
    <div class="sidebar" id="sidebar">
      <ul class="sidebar-items">
        <li><a href="#" class="scroll-link" data-scroll-to="0">Home</a></li>
        <li><a href="#" class="scroll-link" data-scroll-to="700">About</a></li>
        <li><a href="#">Activities</a></li>
        <li><a href="#">Team</a></li>
        <li><a href="#">Contact us</a></li>
      </ul>
    </div>
    <div class="nav-logo2">
      <img src="./dyplgias-removebg-preview.png">
    </div>
  </div>
  <div class="home-page">
    <div class="home-page-center">
      <div class="home-page-left">
        <div>
          <!-- <h2>Microsoft Learn Students Club</h2> -->
          <h2>Microsoft Learn Student Ambassadors DYPCET Chapter</h2>
        </div>
        <div>
          <p>Accelerate innovation and grow the skills you need to have greater impact in the projects and
            communities that matter to you.</p>
        </div>
        <div class="join-button"><button> Join The Club</button></div>
      </div>
      <div class="home-page-right"><img src="./mlsa-logo-removebg-preview.png"></div>
    </div>
  </div>

  <div class="about-page">
    <div class="about-page-header">
      <h2>About MLSA</h2>
    </div>
    <div class="about-page-center">
      <div class="about-page-component1">
        <div>
          <h2>What is MLSA?</h2>
        </div>
        <div>
          <p>The Microsoft Learn Student Ambassador program is an initiative by Microsoft that empowers
            students to become technology leaders and advocates on their campuses. Student Ambassadors
            receive training and resources from Microsoft to enhance their technical skills and knowledge.
          </p>
        </div>
      </div>
      <div class="about-page-component2">
        <div>
          <h2>Who can join the MLSA program?</h2>
        </div>
        <div>
          <p>The Microsoft Learn Student Ambassador program is open to university and college students who are
            passionate about technology and have a strong desire to share their knowledge with their peers.
          </p>
        </div>
      </div>
      <div class="about-page-component3">
        <div>
          <h2>Benifits?</h2>
        </div>
        <div>
          <p>Career Opportunities: Access to Microsoft events, conferences, and networking opportunities that
            can open doors to potential internships and job opportunities.
            Recognition: Receive recognition as a Microsoft Learn Student Ambassador, which can be valuable
            on resumes and LinkedIn profiles.
            Free Microsoft Resources: Access to free Microsoft software, services, and cloud credits to
            support personal and project development.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="Aboutus">
    <center>
      <h1 style="font-size: 50px ;  color:white;">About Us</h1>
      <img src="Image\members.jpg" alt="" class="allmemberimg">
      <p class="Aboutmlsa">
      <h3> We are a vibrant community of passionate students from around the world who share a common enthusiasm for
        technology. As Microsoft Learn Student Ambassadors, we are dedicated to empowering ourselves and our peers
        through education, innovation, and collaboration. Our mission is simple: to inspire and empower students to
        explore, learn, and grow with Microsoft technologies.we're here to support you every step of the way.
        <h3>
          </p>
    </center>
  </div>



  <div class="profile-container">
    <?php include 'profile.php'; ?>
  </div>
  <div class="event-container">
    <?php include 'events.php'; ?>
  </div>
  <div class="event-container">
    <?php include 'contact.php'; ?>
  </div>
  <footer class="footer_area section_padding_130_0">
    <div class="container">
      <div class="row">
        <!-- Single Widget-->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="single-footer-widget section_padding_0_130">
            <!-- Footer Logo-->
            <div class="footer-logo mb-3"></div>
            <h1 style="color:rgb(9, 64, 141);">MLSA</h1>
            <p class="MLASAgenda">The program provides opportunities for networking, skill development, and
              collaboration with peers <br> and professionals in the tech industry</p>
            <!-- Copywrite Text-->
            <!-- Footer Social Area-->
            <div class="footer_social_area"><a href="#" data-toggle="tooltip" data-placement="top" title=""
                data-original-title="Facebook"><i class="fa fa-facebook"></i></a><a href="#" data-toggle="tooltip"
                data-placement="top" title="" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a><a
                href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype"><i
                  class="fa fa-skype"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title=""
                data-original-title="Twitter"><i class="fa fa-twitter"></i></a></div>
          </div>
        </div>
        <!-- Single Widget-->
        <div class="col-12 col-sm-6 col-lg">
          <div class="single-footer-widget section_padding_0_130">
            <!-- Widget Title-->
            <h5 class="widget-title">About</h5>
            <!-- Footer Menu-->
            <div class="footer_menu">
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Corporate Sale</a></li>
                <li><a href="#">Terms &amp; Policy</a></li>
                <li><a href="#">Community</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Single Widget-->
        <div class="col-12 col-sm-6 col-lg">
          <div class="single-footer-widget section_padding_0_130">
            <!-- Widget Title-->
            <h5 class="widget-title">Support</h5>
            <!-- Footer Menu-->
            <div class="footer_menu">
              <ul>
                <li><a href="#">Help</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Help &amp; Support</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Single Widget-->
        <div class="col-12 col-sm-6 col-lg">
          <div class="single-footer-widget section_padding_0_130">
            <!-- Widget Title-->
            <h5 class="widget-title">Contact</h5>
            <!-- Footer Menu-->
            <div class="footer_menu">
              <ul>
                <li><a href="#">Call Centre</a></li>
                <li><a href="#">Email Us</a></li>
                <li><a href="#">Term &amp; Conditions</a></li>
                <li><a href="#">Help Center</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  </div>

  <script src="./app.js"></script>

</body>

</html>