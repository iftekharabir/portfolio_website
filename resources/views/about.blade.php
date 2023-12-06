@extends('layouts.app')
@section('custom-style')
    <style>
        .progress {
            height: 30px;
        }

        .progress-bar {
            line-height: 30px;
        }

        
    </style>
@endsection
@section('content')
    <section class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2 class="heading-underline">About</h2>
                <p>I'm Iftekhar Uddin, a dedicated Web Developer with a deep-rooted passion for coding and design,
                    bringing to life vibrant, user-centric websites and applications. With a strong foundation in both
                    front-end and back-end technologies, I excel in crafting responsive, intuitive interfaces, and robust
                    backend systems that propel businesses forward. Bridging functionality with creativity, I strive to push
                    the boundaries of web development to deliver immersive digital experiences.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 aos-init aos-animate" data-aos="fade-right">
                <img src="{{asset('storage/images/profile.jpg')}}"
                    class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content aos-init aos-animate" data-aos="fade-left">
                <h3>Web Developer.</h3>

                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>01 January 1993</span>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><a
                                        href="www.ashickurrahman.com">www.iftekharabir.com</a></span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+01878833666</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Noakhali, Bangladesh</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>30</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Under Grad</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong>
                                <span>email@example.com</span>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Facts Section -->
    <section class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2 class="heading-underline">Facts</h2>
                <p>As an adept web developer, I excel at untangling complex coding challenges, transforming hurdles into catalysts for innovative solutions and professional advancement. My analytical and creative skills have been instrumental in driving project success and personal growth within the tech industry.</p>
            </div>
            <div class="col-md-3 text-center">
                <h3>232</h3>
                <p>Happy Clients</p>
            </div>
            <div class="col-md-3 text-center">
                <h3>521</h3>
                <p>Projects</p>
            </div>
            <div class="col-md-3 text-center">
                <h3>1,453</h3>
                <p>Hours of Support</p>
            </div>
            <div class="col-md-3 text-center">
                <h3>32</h3>
                <p>Hard Workers</p>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2 class="heading-underline">Skills</h2>
                <p>Some text about your skills here...</p>
            </div>
            <div class="col-12">
                <div class="progress mb-3">
                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0"
                        aria-valuemax="100">HTML</div>
                </div>
                <div class="progress mb-3">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 90%;" aria-valuenow="90"
                        aria-valuemin="0" aria-valuemax="100">CSS</div>
                </div>
                <div class="progress mb-3">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%;" aria-valuenow="80"
                        aria-valuemin="0" aria-valuemax="100">JavaScript</div>
                </div>
                <!-- Add more skills as needed -->
            </div>
        </div>
    </section>
@endsection
