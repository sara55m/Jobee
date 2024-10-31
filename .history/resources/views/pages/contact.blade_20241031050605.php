@extends('layouts.app')
@section('content')
<!-- HOME -->
<section class="section-hero overlay inner-page bg-image" style="background-image: url('{{asset('assets/images/hero_1.jpg')}}');margin-top:-24px;" id="home-section">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1 class="text-white font-weight-bold">Contact Us</h1>
          <div class="custom-breadcrumbs">
            <a href="#">Home</a> <span class="mx-2 slash">/</span>
            <span class="text-white"><strong>Contact Us</strong></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="site-section" id="next-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <form action="#" class="">

            <div class="row form-group">
              <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="fname">First Name</label>
                <input type="text" id="fname" class="form-control">
              </div>
              <div class="col-md-6">
                <label class="text-black" for="lname">Last Name</label>
                <input type="text" id="lname" class="form-control">
              </div>
            </div>

            <div class="row form-group">

              <div class="col-md-12">
                <label class="text-black" for="email">Email</label>
                <input type="email" id="email" class="form-control">
              </div>
            </div>

            <div class="row form-group">

              <div class="col-md-12">
                <label class="text-black" for="subject">Subject</label>
                <input type="subject" id="subject" class="form-control">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black" for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
              </div>
            </div>


          </form>
        </div>
        <div class="col-lg-5 ml-auto">
          <div class="p-4 mb-3 bg-white">
            <p class="mb-0 font-weight-bold">Address</p>
            <p class="mb-4"> Mansoura, Egypt</p>

            <p class="mb-0 font-weight-bold">Phone</p>
            <p class="mb-4"><a href="#">+20 151 4554 157</a></p>

            <p class="mb-0 font-weight-bold">Email Address</p>
            <p class="mb-0"><a href="#">jobee@domain.com</a></p>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="site-section bg-light">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center" data-aos="fade">
          <h2 class="section-title mb-3">Happy Candidates Says</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="block__87154 bg-white rounded">
            <blockquote>
              <p>&ldquo;“Jobee connected me with amazing opportunities tailored to my skillset in software engineering. The job matches were spot on, and I landed my first role as a backend developer in no time!”
               &rdquo;</p>
            </blockquote>
            <div class="block__91147 d-flex align-items-center">
              <figure class="mr-4"><img src="{{asset('assets/images/person_6.jpg')}}" alt="Image" class="img-fluid"></figure>
              <div>
                <h3>  Amina Hassan. </h3>
                <span class="position">Backend Developer</span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="block__87154 bg-white rounded">
            <blockquote>
              <p>&ldquo;“Thanks to Jobee, I transitioned into a data science role with a top tech company. The platform made it easy to find positions that matched my skills in machine learning and big data.”&rdquo;</p>
            </blockquote>
            <div class="block__91147 d-flex align-items-center">
              <figure class="mr-4"><img src="{{asset('assets/images/person_2.jpg')}}" alt="Image" class="img-fluid"></figure>
              <div>
                <h3>Chris Peter</h3>
                <span class="position">Web Designer</span>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>
  @endsection