<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <title>IKLANKU</title>
<!--

ART FACTORY

https://templatemo.com/tm-537-art-factory

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('frontend/assets/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href= "{{ asset ('frontend/assets/css/templatemo-art-factory.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('frontend/assets/css/owl-carousel.css') }}">
    <link rel="stylesheet" type="text/css" href= "{{ asset ('frontend/assets/css/home.css') }}">

    </head>

    <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    @include('frontend/layouts/navbar')

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1><strong>IKLANKU</strong></h1>
                        <p>Sebuah platform digital yang menyediakan jasa untuk mengiklankan event webinar dan lowongan pekerjaan untuk Anda. Temukan
                            webinar dan loker serta dapatkan kemudahan dan keuntunganya hanya di Iklanku. </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <img src="{{ asset ('frontend/assets/images/slider-icon.png') }}" class="rounded img-fluid d-block mx-auto" alt="First Vector Graphic">
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->


    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12 mt-5" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="{{ asset('frontend/assets/images/left-image.png') }}" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="left-text col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix">
                    <div class="left-heading mt-5">
                        <h5>WEBINAR</h5>
                    </div>
                    <p class="mt-5">Pasang iklan webinar Anda agar terhubung dengan leads berpotensi untuk event Anda. Dapatkan juga sarana Branding
                    dan promosi produk yang tertarget dengan Iklanku. </p>
                    <ul>
                        <a href="{{ url('addwebinar') }}" class="main-button">Pasang Iklan Webinar</a>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->


   <!-- ***** Features Small Start ***** -->
   <section class="section" id="services">
    <div class="container">
        <div class="row text-center mb-5 " style ="margin-top: -70px;">
            <div class="col">
                <h2>WEBINAR</h2>
                <p class="text-end fst-normal"><a href="{{ url('listwebinar') }}">Lihat Semua ></a></p>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel owl-theme">
              @foreach ($webinar as $item)
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/webinar/'. $item->pamflet_webinar) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $item->judul_webinar }}</h5>
                      <p class="card-text" style="overflow: hidden; display:-webkit-box; -webkit-line-clamp:3; -webkit-box-orient:vertical;">
                        {{ $item->deskripsi }}</p>
                      <a href="{{ url('detailwebinar/'. $item->id) }}" class="btn btn-outline-info">Read More</a>
                    </div>
                </div>
              @endforeach
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Small End ***** -->



    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about2">
        <div class="container">
            <div class="row">
                <div class="left-text col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix">
                    <div class="left-heading">
                        <h5>LOWONGAN PEKERJAAN</h5>
                    </div>
                    <p>Pasang iklan lowongan pekerjaan dan temukan pencari kerja yang potensial. Dapatkan kemudahan dan keuntungan di Iklanku.</p>
                    <ul>
                        <li>
                            <img src="{{ asset ('frontend/assets/images/about-icon-01.png') }}" alt="">
                            <div class="text">
                                <h6>Menjangkau Lebih Banyak Kandidat</h6>
                                <p></p>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('frontend/assets/images/about-icon-02.png') }}" alt="">
                            <div class="text">
                                <h6>Fleksibel dan tak Terbatas</h6>
                                <p></p>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset ('frontend/assets/images/about-icon-03.png') }}" alt="">
                            <div class="text">
                                <h6>Membangun dan Menarik Minat Kandidat</h6>
                                <p></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="right-image col-lg-7 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img src="{{ asset ('frontend/assets/images/right-image.png') }}" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->


    <!-- ***** Features Small Start ***** -->
    <section class="section" id="services">
        <div class="container">
            <div class="row text-center mb-5 " style ="margin-top: -70px;">
                <div class="col">
                    <h2>LOWONGAN PEKERJAAN</h2>
                    <p class="text-end fst-normal"><a href="{{ url('listloker') }}">Lihat Semua ></a></p>
                </div>
            </div>
            <div class="row">
                <div class="owl-carousel owl-theme">
                  @foreach ($loker as $item)
                  <div class="col-md-3 mb-3">
                      <div class="card mb-5" style="width: 18rem;">
                          <img src="{{ asset('images/loker/'. $item->pamflet_loker) }}" class="card-img-top" class="img-fluid" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">{{ $item->judul_loker }}</h5>
                            <p class="card-text" style="overflow: hidden; display:-webkit-box; -webkit-line-clamp:3; -webkit-box-orient:vertical;">
                              {{ $item->deskripsi }} </p>
                            <a href="{{ url('detailloker/'. $item->id) }}" class="btn btn-outline-info">Read More</a>
                          </div>
                      </div>
                  </div>
                  @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Small End ***** -->


    <!-- ***** Frequently Question Start ***** -->
    <section class="section" id="frequently-question">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Frequently Asked Questions</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="section-heading">
                        <p></p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Bagaimana cara menggunakan Website ini?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>Kunjungi iklanku.com</strong> Search webinar atau loker yang diinginkan dan nantikan informasi terbarunya.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Bagaimana cara beriklan lewat website ini?
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>Login menggunakna email terlebih dahulu</strong> Pilih tombol Add webinar untuuk menambahkan webinar dan klik Add loker untuk menambahkan loker.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                     Apakah beriklan lewat website ini berbayar?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>GRATIS dengan syarat ketentuan yang berlaku</strong> User tidak dipungut biaya apapun dalam beriklan di iklanku dengan syarat ketentuan yang berlaku.
                    </div>
                  </div>
                </div>
              </div>
            </div>
    </section>
    <!-- ***** Frequently Question End ***** -->


    <!-- ***** Contact Us Start ***** -->
    <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <!-- ***** Contact Map Start ***** -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div id="map">
                      <!-- How to change your own map point
                           1. Go to Google Maps
                           2. Click on your location point
                           3. Click "Share" and choose "Embed map" tab
                           4. Copy only URL and paste it within the src="" field below
                    -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.428878694446!2d113.7202710146991!3d-8.15947178400688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695b617d8f623%3A0xf6c4437632474338!2sPoliteknik%20Negeri%20Jember!5e0!3m2!1sid!2sid!4v1625462278248!5m2!1sid!2sid" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <!-- ***** Contact Map End ***** -->

                <!-- ***** Contact Form Start ***** -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Full Name" required="" class="contact-field">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" placeholder="E-mail" required="" class="contact-field">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Your Message" required="" class="contact-field"></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Send It</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Contact Us End ***** -->


    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <p class="copyright">Copyright &copy; HI-DEV

                </p>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('frontend/assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('frontend/assets/js/popper.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('frontend/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/imgfix.min.js') }}"></script>

    <!-- Global Init -->
    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>

  </body>
</html>
