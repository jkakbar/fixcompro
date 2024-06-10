<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Personal Profile - Jindan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('inc_home.css')

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container p-3 me-0" style="background-color: rgba(0, 0, 0, 0.6)">
            <h1><a href="index.html">{{ $profile->name }}</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
            <h2>I'm a passionate <span>Junior Web Programming</span> from Jakarta</h2>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link active" href="#header">Home</a></li>
                    <li><a class="nav-link" href="#about">About</a></li>
                    <li><a class="nav-link" href="#resume">Resume</a></li>
                    <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="{{$profile->github_link}}" class="instagram"><i class="bi bi-github"></i></a>
                <a href="{{$profile->linkedin_link}}" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </header>

    <!-- End Header -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <!-- ======= About Me ======= -->
        <div class="about-me container">

            <div class="section-title">
                <h2>About</h2>
                <p>Learn more about me</p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="{{ asset('uploads/'. $setting->profile_picture)}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>Junior Web Programming</h3>
                    <p class="fst-italic">
                        Berikut ini adalah data diri saya :
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Fullname:</strong>
                                    <span>{{ $profile->name }}</span>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                    <span>www.example.com</span>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                                    <span>{{ $profile->phone }}</span>
                                </li>
                        </div>
                        </ul>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>Jakarta, Indonesia</span>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                    <span>{{ $profile->email }}</span>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                    <span>Available</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <p>
                        {{ $profile->description }}
                    </p>
                </div>
            </div>

        </div><!-- End About Me -->

        <!-- ======= Skills  ======= -->
        <div class="skills container">

            <div class="section-title">
                <h2>Skills</h2>
            </div>

            <div class="row skills-content">

                <div class="col-lg-6">
                    @foreach ($skills as $skills)
                        <div class="progress">
                            <span class="skill">{{ $skills->skills }}<i
                                    class="val">{{ $skills->persentase }}</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="" aria-valuemin="0"
                                    aria-valuemax="100" style="width:{{ $skills->persentase }}"></div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-6">
                    @endforeach

                </div>

            </div><!-- End Skills -->

    </section><!-- End About Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">
                <h2>Resume</h2>
                <p>Check My Resume</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <h3 class="resume-title">Sumary</h3>
                    <div class="resume-item pb-0">
                        <h4>{{ $profile->name }}</h4>
                        <p><em>Mampu mengoperasikan komputer dan melakukan installasi software dan hardware pada
                                komputer</em></p>
                        <p>
                        <ul>
                            <li>{{ $profile->address }}</li>
                            <li>{{ $profile->phone }}</li>
                            <li>{{ $profile->email }}</li>
                        </ul>
                        </p>
                    </div>

                    <h3 class="resume-title">Education</h3>
                    @foreach ($education as $education)
                        <div class="resume-item">
                            <h4>{{ $education->jurusan }}</h4>
                            <h5>{{ $education->mulai }} - {{ $education->selesai }}</h5>
                            <p><em>{{ $education->instansi }}</em></p>
                            <p>{{ $education->deskripsi }}</p>
                        </div>
                    @endforeach
                </div>


                <div class="col-lg-6">
                    <h3 class="resume-title">Professional Experience</h3>
                    @foreach ($experience as $experience)
                        <div class="resume-item">
                            <h4>{{ $experience->nama_pekerjaan }}</h4>
                            <h5>{{ $experience->tgl_mulai }} - {{ $experience->tgl_selesai }}</h5>
                            <p><em>Cakung, Jakarta Timur</em></p>
                            <p>
                            <ul>
                                <li>{{ $experience->deskripsi_pekerjaan }}</li>
                            </ul>
                            </p>
                        </div>
                    @endforeach

                    <h3 class="resume-title">Project</h3>
                    @foreach ($project as $project)
                        <div class="resume-item">
                            <h4>{{ $project->project }}</h4>
                            <h5>{{ $project->mulai }} - {{ $project->selesai }}</h5>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title">
                <h2>Portfolio</h2>
                <p>My Certificate</p>
            </div>

            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets/th/img/bnsp.jpg') }}" class="img-fluid"
                            style="width: 27rem; height: 25rem" alt="">
                        <div class="portfolio-info">
                            <h4>BNSP</h4>
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/th/img/bnsp.jpg') }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="2022"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery"
                                    data-glightbox="type: external" class="portfolio-details-lightbox"
                                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets/th/img/maxindo.jpg') }}" class="img-fluid"
                            style="width: 27rem; height: 25rem" alt="">
                        <div class="portfolio-info">
                            <h4>PT Maxindo</h4>
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/th/img/maxindo.jpg') }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="2021"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery"
                                    data-glightbox="type: external" class="portfolio-details-lightbox"
                                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets/th/img/p2kptk2.jpeg') }}" class="img-fluid"
                            style="width: 27rem; height: 25rem" alt="">
                        <div class="portfolio-info">
                            <h4>P2KPTK2</h4>
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/th/img/p2kptk2.jpeg') }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="2019"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery"
                                    data-glightbox="type: external" class="portfolio-details-lightbox"
                                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Contact Me</p>
            </div>

            <div class="row mt-2">

                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3>My Address</h3>
                        <p>{{ $profile->address }}</p>
                    </div>
                </div>

                <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-share-alt"></i>
                        <h3>Social Profiles</h3>
                        <div class="social-links">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                            <a href="{{ $profile->linkedin_link }}" class="linkedin"><i
                                    class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Me</h3>
                        <p>{{ $profile->email }}</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Me</h3>
                        <p>+{{ $profile->phone }}</p>
                    </div>
                </div>
            </div>

            <form action="{{ route('contact') }}" method="post" role="form" class="php-email-form mt-4">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Your Email" required>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                        required>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

        </div>
    </section><!-- End Contact Section -->

    @include('inc_home.js')

</body>

</html>
