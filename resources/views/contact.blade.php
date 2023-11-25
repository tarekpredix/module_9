
@extends('layouts.master')

@section('content')

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>I would love to hear from you! If you have any questions, inquiries, or collaboration opportunities, please
            feel free to reach out to me using the contact form below. Whether it's a potential project, feedback, or
            simply wanting to connect, I value every interaction and look forward to engaging with you. Please provide
            your name, email address, and a brief message, and I will get back to you as soon as possible. Thank you for
            your interest, and I'm excited to connect with you!</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
              <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Sylhet, Bangladesh</p>
              </div>

              <div class="email">
              <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>tarekcse.lus@gmail.com</p>
              </div>

              <div class="phone">
              <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+8801710518805</p>
              </div>

              <!-- <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe> -->

              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.7465620258326!2d91.85584182556951!3d24.906625027899207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750553a599e8e5f%3A0x5cd095a90f8138a6!2zU3ViaWQgQmF6YXIsIOCmuOCmv-CmsuCnh-Cmnw!5e0!3m2!1sbn!2sbd!4v1687413524176!5m2!1sen!2sbd"
                frameborder="0" width="100%" height="290px" style="border:0;" allowfullscreen=""></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="#" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

@endsection
