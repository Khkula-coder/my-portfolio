<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khkula Sahar Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navbar -->
   <nav class="navbar">
  <div class="logo">
  <span class="white-part">Khkula</span><span class="pink-part">Codes</span>
</div>

  <ul class="nav-links">
    <li><a href="#home">Home</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#services">Services</a></li>
    <li><a href="#skills">Skills</a></li>
    <li><a href="#projects">Projects</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</nav>


    <!-- Hero Section -->
    <section id="home" class="hero">
  <div class="hero-left">
    <h1>Hello, it's me</h1>
    <h2>Khkula Sahar</h2>
    <h3>Full Stack Web Developer</h3>
    <p>I develop modern web solutions that combine aesthetics, efficiency, and user satisfaction.</p>
    <a href="#contact" class="btn">Hire Me</a>
  </div>
  <div class="hero-right">
    <div class="avatar-ring">
      <img src="assets/avatar.png" alt="Khkula Sahar">
    </div>
  </div>
</section>


<!-- About Me Section -->
<section id="about" class="about">
  <div class="about-left">
    <div class="avatar-ring">
      <img src="assets/avatar.png" alt="Khkula Sahar">
    </div>
  </div>
  <div class="about-right">
    <h2><span class="white-part">About </span><span class="pink-part">Me</span></h2>
    <h3>Full Stack Developer</h3>
    <p>
      I am a skilled web developer currently studying BS in Computer Science. I specialize in creating modern, user-friendly websites that are both beautiful and efficient. My passion is to design websites that not only look great but also provide smooth, enjoyable experiences for users. My goal is to create web solutions that inspire trust, leave a lasting impression, and help businesses grow online. I am dedicated to continuous learning, staying updated with the latest technologies, and turning ideas into impactful digital experiences.
    </p>
  </div>
</section>
<!-- Services Section -->
<section id="services" class="services">
  <h2><span class="white-part">My </span><span class="pink-part">Services</span></h2>

  <div class="services-container">

    <div class="service-card">
      <div class="service-icon">&#x1F4BB;</div>
      <h3>Web Design</h3>
      <p>Creating responsive, modern websites that are user-friendly and visually engaging across all devices.</p>
      
    </div>

    <div class="service-card">
     <div class="service-icon">&#x26A1;</div> <!-- lightning bolt icon -->
    <h3>Website Optimization</h3>
    <p>Improving website speed, performance, and overall user experience for better engagement.</p>
    </div>

    <div class="service-card">
      <div class="service-icon">&#x3C;/&#x3E;</div>
      <h3>UI/UX Design</h3>
      <p>Creating easy-to-use and attractive designs for websites and apps to improve user experience.</p>
         
    </div> 
  </div>
</section>
<!-- Skills Section -->
<section id="skills" class="skills">
  <h2>My <span class="skills-span">Skills</span></h2>
  <div class="skills-container">
    <!-- Technical Skills -->
    <div class="skills-left">
      <h3 class="skills-heading">Technical Skills</h3>
      <div class="skill-bar">
        <div class="icon"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML" /></div>
        <span>HTML</span>
        <div class="progress-bar">
          <div class="progress" style="width:96%"><span>96%</span></div>
        </div>
      </div>
      <div class="skill-bar">
        <div class="icon"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS" /></div>
        <span>CSS</span>
        <div class="progress-bar">
          <div class="progress" style="width:85%"><span>85%</span></div>
        </div>
      </div>
      <div class="skill-bar">
        <div class="icon"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript" /></div>
        <span>JavaScript</span>
        <div class="progress-bar">
          <div class="progress" style="width:68%"><span>68%</span></div>
        </div>
      </div>
      <div class="skill-bar">
        <div class="icon"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React" /></div>
        <span>React</span>
        <div class="progress-bar">
          <div class="progress" style="width:75%"><span>75%</span></div>
        </div>
      </div>
      <div class="skill-bar">
        <div class="icon"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP" /></div>
        <span>PHP</span>
        <div class="progress-bar">
          <div class="progress" style="width:90%"><span>90%</span></div>
        </div>
      </div>
      <div class="skill-bar">
        <div class="icon"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL" /></div>
        <span>MySQL</span>
        <div class="progress-bar">
          <div class="progress" style="width:82%"><span>82%</span></div>
        </div>
      </div>
    </div>
    <!-- Professional Skills -->
    <div class="skills-right">
      <h3 class="skills-heading">Professional Skills</h3>
      <div class="circle-row">
        <div class="circle-skill">
          <div class="circle" data-percentage="90"></div>
          <span>Creativity</span>
        </div>
        <div class="circle-skill">
          <div class="circle" data-percentage="65"></div>
          <span>Communication</span>
        </div>
      </div>
      <div class="circle-row">
        <div class="circle-skill">
          <div class="circle" data-percentage="75"></div>
          <span>Problem Solving</span>
        </div>
        <div class="circle-skill">
          <div class="circle" data-percentage="80"></div>
          <span>Adaptability</span>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Projects Section -->
<section id="projects" class="projects">
  <h2><span class="white-part">Latest </span><span class="pink-part">Projects</span></h2>

  <div class="projects-container">
    <!-- Project 1 -->
    <div class="project-card">
      <img src="assets/projects/project1.JPG" alt="Weather Website">
      <div class="overlay">
        <p>Simple interactive calculator.</p>
      </div>
    </div>

    <!-- Project 2 -->
            <div class="project-card">
      <img src="assets/projects/project5.JPG" alt="Quiz App">
      <div class="overlay">
        <p>20-question general knowledge quiz.</p>
      </div>
    </div>
    <!-- Project 3 -->

        <div class="project-card">
      <img src="assets/projects/project4.JPG" alt="Calculator">
      <div class="overlay">
        <p>A small weather app showing live conditions.</p>
      </div>
    </div>

    <!-- Project 4 -->
       <div class="project-card">
      <img src="assets/projects/project2.JPG" alt="Pakistan-US Trip Registration">
      <div class="overlay">
        <p>Registration form for international trips.</p>
      </div>
    </div>

    <!-- Project 5 -->
    <div class="project-card">
      <img src="assets/projects/project3.JPG" alt="Ecommerce Store">
      <div class="overlay">
        <p>Mini ecommerce store demo.</p>
      </div>
    </div>

    <!-- Project 6 -->
    <div class="project-card">
      <img src="assets/projects/project6.JPG" alt="Sign In/Up Form">
      <div class="overlay">
        <p>Login & Signup forms with validation.</p>
      </div>
    </div>

    <!-- Project 7 -->
    <div class="project-card">
      <img src="assets/projects/project7.JPG" alt="Satellite System">
      <div class="overlay">
        <p>Visualization of satellite system view.</p>
      </div>
    </div>
  </div>
</section>

<!-- Lightbox -->
<div id="lightbox" class="lightbox">
  <span class="close">&times;</span>
  <img class="lightbox-content" id="lightbox-img">
</div>
<!-- Contact Section -->
<section id="contact" class="contact">
  <h2><span class="white-part">Contact </span><span class="pink-part">Me</span></h2>

  <div class="contact-container">
    <form class="contact-form" id="contactForm" action="contact.php" method="POST">
      <div class="form-row">
        <div class="form-group">
          <label for="name">Full Name</label>
          <input type="text" name="name" id="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" name="email" id="email" placeholder="Enter your email" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group full-width">
          <label for="subject">Subject</label>
          <input type="text" name="subject" id="subject" placeholder="Enter subject  (e.g., Project Inquiry, Freelance Request, Job Offer, collaboration)" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group full-width">
          <label for="message">Message</label>
          <textarea name="message" id="message" rows="6" placeholder="Write your message..." required></textarea>
        </div>
      </div>
      <button type="submit" id="sendMsgBtn" class="btn-submit">Send Message</button>

    </form>
  </div>
</section>


<!-- Footer -->
<footer class="footer">
  <div class="footer-container">
    <div class="footer-logo">
      <span class="white-part">Khkula</span><span class="pink-part">Codes</span>
    </div>
    <p class="footer-text">© 2025 Khkula Sahar. All Rights Reserved.</p>
  </div>
</footer>



<script src="script.js"></script>
</body>

