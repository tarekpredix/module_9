@extends('layouts.master')

@section('content')
<section id="about" class="about">
  <div class="container">

    <div class="section-title">
      <h2>About</h2>
      <p>Welcome to my portfolio website! I am Tarek Aziz, a passionate and ambitious student pursuing a degree in
        Computer Science and Engineering. I am thrilled to share my journey, projects, and skills with you.</p>
    </div>

    <div class="row">
      <div class="col-lg-4" data-aos="fade-right">
        <img src="images/pro.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
        <h3>Web Design &amp; Developer.</h3>
        <p>
          Personal Details
        </p>
        <p class="fst-italic">
          "Tarek Aziz, born on 06 October 1999, hails from the vibrant city of Sylhet, Bangladesh. At the age of 23, Tarek is a dedicated individual pursuing a B.Sc degree. His digital presence can be explored on his website, www.tarekazizwp.com. For any inquiries or collaborations, you can reach him at +8801710518805 or via email at tarekcse.lus@gmail.com. Tarek is not only academically inclined but also a freelance enthusiast, making his skills and expertise available to various projects."
        </p>
        <p>
          Throughout my academic journey, I have gained a solid foundation in programming languages such as Java,
          C++, and Python. I have developed a strong understanding of data structures, algorithms, and software
          development principles. I enjoy solving complex problems and leveraging my skills to create innovative and
          efficient solutions.
        </p>
      </div>
    </div>

  </div>
</section>


<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Skills</h2>
      <p>Frontend and Backend Skill including Content Management System.</p>
    </div>

    <div class="row skills-content">

      <div class="col-lg-6" data-aos="fade-up">

        <div class="progress">
          <span class="skill">HTML <i class="val">100%</i></span>
          <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>


        <div class="progress">
          <span class="skill">CSS <i class="val">90%</i></span>
          <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div class="progress">
          <span class="skill">Bootstrap <i class="val">80%</i></span>
          <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

      </div>

      <div class="col-lg-6" data-aos="fade-up">

        <div class="progress">
          <span class="skill">JavaScript <i class="val">75%</i></span>
          <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div class="progress">
          <span class="skill">PHP <i class="val">80%</i></span>
          <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div class="progress">
          <span class="skill">WordPress/CMS <i class="val">90%</i></span>
          <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>

    </div>

  </div>

  </div>
</section>
<!-- End Skills Section -->

<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
  <div class="container">

    <div class="section-title">
      <h2>Resume</h2>
      <p>Welcome to my resume section! Here you will find a comprehensive overview of my educational background,
        professional experience, and key skills.</p>
    </div>

    <div class="row">
      <div class="col-lg-6" data-aos="fade-up">
        <h3 class="resume-title">Sumary</h3>
        <div class="resume-item pb-0">
          <h4>Tarek Aziz</h4>

          <ul>
            <li>Sylhet, Bangladesh</li>
            <li>+8801710518805</li>
            <li>tarekcse.lus@gmail.com</li>
          </ul>
        </div>

        <h3 class="resume-title">Education</h3>
        <div class="resume-item">
          <h4>B.Sc in CSE</h4>
          <h5>2019 - 2023</h5>
          <p><em>Leading University, Sylhet</em></p>

        </div>
        <div class="resume-item">
          <h4>Higher Secondary Certificate</h4>
          <h5>2016 - 2018</h5>
          <p><em>Murari Chand College, Sylhet</em></p>
        </div>

        <div class="resume-item">
          <h4>Secondary School Certificate</h4>
          <h5>2015 - 2016</h5>
          <p><em>Osmani Medical High School, Sylhet</em></p>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <h3 class="resume-title">Professional Experience</h3>
        <div class="resume-item">
          <h4>Web Design and Developer</h4>
          <h5>2020 - Present</h5>
          <p><em>Fiverr</em></p>
          <ul>
            <li>User Experience (UX)</li>
            <li>Visual Design</li>
            <li>Functionality and Performance</li>
            <li>SEO and Accessibility</li>
          </ul>
        </div>
        <div class="resume-item">
          <h4>Google ads specialist</h4>
          <h5>2018 - 2019</h5>
          <p><em>Fiverr</em></p>
          <ul>
            <li>Expertise and Experience</li>
            <li>Strategic Approach</li>
            <li>Return on Investment(ROI) Focus</li>
            <li>Communication and Transparency</li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</section>
<!-- End Resume Section -->
@endsection