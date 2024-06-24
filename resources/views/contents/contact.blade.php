<!-- resources/views/contents/welcome/welcome.blade.php -->
@extends('layouts.app')

@section('title', 'Motoya Kouture - Home')

@section('content')

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="{{url('/')}}">Home</a></li>
      <li>Contact Us</li>
    </ol>
    <!-- <h2>Get in touch with us</h2> -->

  </div>
</section><!-- End Breadcrumbs -->


<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Contact</h2>
      <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
    </div>

    <div class="row">
      <div class="mt-5 mt-lg-0">
        <iframe name="hiddenConfirmed" id="hiddenConfirmed" style="display: none;" onload="if(submitted){window.location='submit.html';}"></iframe>
        <form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSdf3PTiX8D0KwMk1TeEi2rQoO4bDWnZXiDDfN_E2BUUhrObQA/formResponse" method="post" target="hiddenConfirmed" onsubmit="submitted=true" class="contact-email-form">
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Your Name</label>
              <input type="text" name="entry.853299025" class="form-control" id="name" data-name="Name" required>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Your Email</label>
              <input type="email" class="form-control" name="entry.1177851090" id="email" data-name="Email" required>
            </div>

            <div class="form-group col-md-6">
              <label for="country">Country</label>
              <input type="text" class="form-control" name="entry.1476324540" id="country" data-name="Country"required>
            </div>

            <div class="form-group col-md-6">
              <label for="tel">Phone</label>
              <input type="phone" class="form-control" name="entry.320622107" id="phone" data-name="Phone" required>
            </div>
          </div>
          <div class="form-group">
            <label for="name">Subject</label>
            <input type="text" class="form-control" name="entry.766859809" id="subject" data-name="Subject"required>
          </div>
          <div class="form-group">
            <label for="name">Message</label>
            <textarea class="form-control" name="entry.1426031262" rows="10" data-name="Message" id="nessage" required></textarea>
          </div>
          <!-- Add a hidden field to indicate AJAX submission -->
          <input type="hidden" name="ajax" value="1">

        
          <div class="text-center">
            <button type="submit" id="contact-submit">Send Message</button>
          </div>
        </form>
      </div>
<!-- 
      <div class="col-lg-5 d-flex align-items-stretch">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Location:</h4>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>

          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>info@example.com</p>
          </div>

          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Call:</h4>
            <p>+1 5589 55488 553</p>
          </div>

          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
        </div>

      </div> -->

    </div>

  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->

@endsection
