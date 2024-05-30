@extends('frontend.layout')

@section('content')
    <!-- bradcam_area  -->
    <div class="bradcam_area" style="background-image: url('images/contact bg.jpg'); height:80vh;">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="bradcam_text text-center">
              <h3>contact</h3>
              <p>Kami siap mendengarkan setiap pertanyaan dan memberikan <br> bantuan yang Anda butuhkan untuk merencanakan petualangan <br> Anda berikutnya.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="contact-title">Kontak Kami</h2>
          </div>
          <div class="col-lg-8">
            <form
              class="form-contact contact_form"
              action="contact_process.php"
              method="post"
              id="contactForm"
              novalidate="novalidate"
              style="width: 70vw;"
            >
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <textarea
                      class="form-control w-100"
                      name="message"
                      id="message"
                      cols="30"
                      rows="9"
                      onfocus="this.placeholder = ''"
                      onblur="this.placeholder = 'Pesan Anda'"
                      placeholder=" Pesan Anda"
                    ></textarea>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input
                      class="form-control valid"
                      name="name"
                      id="name"
                      type="text"
                      onfocus="this.placeholder = ''"
                      onblur="this.placeholder = 'Nama Anda'"
                      placeholder="Nama Anda"
                    />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input
                      class="form-control valid"
                      name="email"
                      id="email"
                      type="email"
                      onfocus="this.placeholder = ''"
                      onblur="this.placeholder = 'Email Anda'"
                      placeholder="Email Anda"
                    />
                  </div>
                </div>
              </div>
              <div class="form-group mt-3">
                <button
                  type="submit"
                  class="button button-contactForm boxed-btn"
                >
                  Send
                </button>
              </div>
            </form>
          </div>
          <!-- <div class="col-lg-3 offset-lg-1">
            <div class="media contact-info">
              <span class="contact-info__icon"><i class="ti-home"></i></span>
              <div class="media-body">
                <h3>Buttonwood, California.</h3>
                <p>Rosemead, CA 91770</p>
              </div>
            </div>
            <div class="media contact-info">
              <span class="contact-info__icon"><i class="ti-tablet"></i></span>
              <div class="media-body">
                <h3>+1 253 565 2365</h3>
                <p>Mon to Fri 9am to 6pm</p>
              </div>
            </div>
            <div class="media contact-info">
              <span class="contact-info__icon"><i class="ti-email"></i></span>
              <div class="media-body">
                <h3>support@colorlib.com</h3>
                <p>Send us your query anytime!</p>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </section>
    <!-- ================ contact section end ================= -->
@endsection