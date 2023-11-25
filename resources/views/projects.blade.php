
@extends('layouts.master')

@section('content')

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Recent Works</h2>
        </div>



        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="images\portfolio\project1.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="images\portfolio\project1.png" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title="Building an indoor reservation system website called Kickindoor sounds like an interesting project. An indoor reservation system can be useful for managing reservations, bookings, and scheduling for various indoor activities or facilities."><i
                    class="bx bx-plus"></i></a>
                <a href="https://kickindoor.netlify.app/" target="_blank" title="More Details"><i
                    class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="images\portfolio\digital_clock.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="images\portfolio\digital_clock.png" data-gallery="portfolioGallery"
                  class="portfolio-lightbox"
                  title="By using the combination of HTML, CSS, and JavaScript, I have created a dynamic digital clock that accurately displays the current time and date."><i
                    class="bx bx-plus"></i></a>
                <a href="https://tareksclock.netlify.app/" target="_blank" title="More Details"><i
                    class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="images\portfolio\laundry.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="images\portfolio\laundry.png" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title="My project focuses on managing laundry items, allowing users to register, log in, add new laundry items, view the laundry list, perform CRUD operations, and generate invoices."><i
                    class="bx bx-plus"></i></a>
                <a href="https://clothsolution.000webhostapp.com/login.php" target="_blank" title="More Details"><i
                    class="bx bx-link"></i></a>
              </div>
            </div>
          </div>


        </div>
    </section>

    <section id="#" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Projects</h2>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">3rd Year Project</h3>
            <div class="resume-item pb-0">
              <h4>Teaching Companion</h4>
              <p>Teaching Companion is a React Native app designed to provide teachers and faculty members with a
                centralized platform for managing their courses, student tasks, project teams, and to-do lists. The app
                leverages Firebase for backend support, and is compatible with popular development and testing software
                such as Visual Studio Code, Android Studio, and Expo Go. Through the use of Teaching Companion, teachers
                can streamline their classroom management tasks and improve their organization and productivity. Key
                features of the app include the ability to create and edit courses, assign and track student tasks,
                manage project teams, and keep track of to-do lists. Additionally, the app includes user-friendly
                interfaces and customization options to support a personalized experience for each teacher.</p>
              <p><em>Team Mates LU CSE 52nd</em></p>
              <ul>
                <li>Abu Hurayra Uchchash</li>
                <li>Thasin Chowdhury Upoma</li>
              </ul>
              <h5><a href="https://github.com/tarekpredix/teaching-companion" target="_blank" style="text-decoration: none;">Github Repository</a></h5>

            </div>
          </div>


          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Courses Project</h3>
            <div class="resume-item">
              <h4>ATM Management System</h4>
              <p>Java program for ATM management that allows users to perform actions like depositing money, withdrawing
                money, checking the current balance, and applying for a loan.</p>
              <p><em>Team Mates LU CSE 52nd</em></p>
              <ul>
                <li>Shahinur Rahman</li>
                <li>Thasin Chowdhury Upoma</li>
              </ul>
            </div>

            <div class="resume-item">
              <h4>Laundry Managemnet System</h4>
              <p>Laundry management system is a web-based application designed to streamline and automate
                laundry-related tasks. It allows users to register, log in, and add new laundry items with details such
                as cloth type, quantity, and user name. Additionally, the system provides an invoice generation
                feature for generating invoices based on selected laundry items.</p>
              <h5><a href="https://clothsolution.000webhostapp.com/login.php" style="text-decoration: none;" target="_blank">Live Link</a></h5>
            </div>


    </section>


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Recommendations</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">


            <div class="testimonial-item" data-aos="fade-up">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Tarek is a punctual and obedient student. I wish his success.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="images\testimonials\moni_sir.jpg" class="testimonial-img" alt="">
              <h3>Jehadul Islam Mony</h3>
              <h4>Lecturer</h4>
              <h4>Dept. of CSE, LU</h4>
            </div>



            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                3rd Year project was super good, I am impressed on your team.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="images\testimonials\mjr_sir.png" class="testimonial-img" alt="">
              <h3>Md. Jamaner Rahman</h3>
              <h4>Lecturer</h4>
              <h4>Dept. of CSE, LU</h4>
            </div>

          </div>

        </div>
      </section>
            <section id="testimonials" class="testimonials section-bg">
              <div class="container">
            <div class="section-title">
              <h2>Fiverr Clients Review</h2>
            </div>

            <div class="row">
              <div class="col-md-4">
                  <iframe src="https://www.linkedin.com/embed/feed/update/urn:li:share:6903463696484446208" allowfullscreen="" title="Embedded post" class="embed-responsive-item" style="width: 100%; height: 300px;"></iframe>
              </div>
              <div class="col-md-4">
                  <iframe src="https://www.linkedin.com/embed/feed/update/urn:li:share:6856580025215451137" allowfullscreen="" title="Embedded post" class="embed-responsive-item" style="width: 100%; height: 300px;"></iframe>
              </div>
              <div class="col-md-4">
                <iframe src="https://www.linkedin.com/embed/feed/update/urn:li:share:6859237997242564608" allowfullscreen="" title="Embedded post" class="embed-responsive-item" style="width: 100%; height: 300px;"></iframe>
            </div>
          </div>
            

          </div>
        </div>

      </div>
    </section>
    <!-- End Testimonials Section -->

    <section id="awards" class="resume">
      <div class="container">

        <h3 class="resume-title">Certificates and Extra-Curricular</h3>



        <div class="resume-item">
          <h4>Fiverr Level Two Seller</h4>
          <p><em>Fiverr Freelance Co.</em></p>
          <h5><a href="https://drive.google.com/file/d/1rB9qBFrwMzRnxRxxNbD_750dutxEZedt/view" style="text-decoration: none;" target="_blank">Show Credentials</a></h5>
        </div>
        
        <div class="resume-item">
          <h4>Android App Development</h4>
          <p><em>Bongo Academy, Dhaka</em></p>
          <h5><a href="https://drive.google.com/file/d/1CaykmQPQXbs-O9zjELqUSHyhe9-vjEdH/view" style="text-decoration: none;" target="_blank">Show Credentials</a></h5>
        </div>

        <div class="resume-item">
          <h4>Professional WordPress Design & Development</h4>
          <p><em>Coders Foundation, Dhaka</em></p>

        </div>

        <div class="resume-item">
          <h4>Happiness Ambassador</h4>
          <p><em>IDLC Finance Limited</em></p>
          <h5><a href="https://drive.google.com/file/d/1UV--fNWw0H8xF1Ml2f4WbkTEMmNs3C4-/view" style="text-decoration: none;" target="_blank">Show Credentials</a></h5>
        </div>

        <div class="resume-item">
          <h4>Assistant Publicity sectary</h4>
          <p><em>Leading University Computer Club</em></p>
        </div>

      </div>
    </section>

@endsection
