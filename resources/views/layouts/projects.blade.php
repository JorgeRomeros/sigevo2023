@extends('layouts.simple')

@section('content')
 <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
        <hr>
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2> Nuestros Proyectos</h2>
                <p></p>
            </div>
            <div class="row">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="post-box">
                        <div class="post-img"><img src="{{asset('assets/img/Conavi2Bueno.png')}}" class="img-fluid" alt=""></div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="post-box">
                        <div class="post-img"><img src="{{asset('assets/img/inr_grid.png')}}" class="img-fluid" alt=""></div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="post-box">
                        <div class="post-img"><img src="{{asset('assets/img/bester_grid.png')}}" class="img-fluid" alt=""></div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="post-box">
                        <div class="post-img"><img src="{{asset('assets/img/mofa_grid.png')}}" class="img-fluid" alt=""></div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="post-box">
                        <div class="post-img"><img src="{{asset('assets/img/cinepolis_grid.png')}}" class="img-fluid" alt=""></div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="post-box">
                        <div class="post-img"><img src="{{asset('assets/img/dosbocas_grid.png')}}" class="img-fluid" alt=""></div>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- End Recent Blog Posts Section -->
    @endsection

