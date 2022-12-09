@extends('layouts.simple')

@section('content')
        <section id="hero-fullscreen" class="hero-fullscreen d-flex align-items-center">
            <div class="container d-flex flex-column align-items-center position-relative" data-aos="zoom-out">
            <h2>Bienvenido a <span>SIGEVO</span></h2>
            <p>Sistema de gestion y verificacion de obra</p>
            <div class="d-flex">
                <a href="/proyectos" class="btn-get-started scrollto">Proyectos</a>
            </div>
            </div>
        </section>
        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
                        <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-bookmark-check icon"></i></div>
                        <h4><a class="stretched-link">Verificacion</a></h4>
                        <p></p>
                        </div>
                    </div><!-- End Service Item -->
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
                        <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-boxes"></i></div>
                        <h4><a class="stretched-link">Estructura</a></h4>
                        <p></p>
                        </div>
                    </div><!-- End Service Item -->
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
                        <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-building icon"></i></div>
                        <h4><a class="stretched-link">Gerencia</a></h4>
                        <p></p>
                        </div>
                    </div><!-- End Service Item -->
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
                        <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-clipboard-data icon"></i></div>
                        <h4><a class="stretched-link">Valores</a></h4>
                        <p></p>
                        </div>
                    </div><!-- End Service Item -->
                </div>
            </div>
            </section><!-- End Featured Services Section -->
            <!-- ======= About Section ======= -->
            <section id="about" class="about">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                    <h2>Sobre Nosotros</h2>
                    <p>Realizamos proyectos arquitectónicos y de ingeniería, brindando servicios de seguimiento, supervisión y gerencia de proyecto.
                        Hemos desarrollado proyectos tanto para organismos de gobierno como para el sector privado. Logrando alianzas estratégicas con importantes empresas nacionales e internacionales.
                        </p>
                    </div>
                    <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-5">
                        <div class="about-img">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h3 class="pt-0 pt-lg-5">Somos una empresa mexicana con más de 30 años de trayectoria en el sector de la construcción.</h3>
                        <!-- Tabs -->
                        <ul class="nav nav-pills mb-3">
                        <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">Mision</a></li>
                        <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">Visión</a></li>
                        <li><a class="nav-link" data-bs-toggle="pill" href="#tab3">Valores</a></li>
                        </ul><!-- End Tabs -->
                        <!-- Tab Content -->
                        <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab1">
                            <p class="fst-italic">Satisfacer las necesidades de nuestros clientes bajo el principio de cambio, transformación y eficiencia generando oportunidades a nuestra sociedad.</p>
                        </div><!-- End Tab 1 Content -->
                        <div class="tab-pane fade show" id="tab2">
                            <p class="fst-italic">Ser una empresa dinámica y eficiente que responde a los cambios y al desarrollo de la sociedad contemporánea.
                            Socialmente responsable y que a través de la innovación y la incorporación de nuevas tecnologías cumple sus objetivos permitiendo el desarrollo de su comunidad.</p>
                            </div><!-- End Tab 2 Content -->
                        <div class="tab-pane fade show" id="tab3">
                            <p class="fst-italic">Los valores son elementos que caracterizan la cultura dentro de DELTA PROYECTOS Y DESARROLLO, dadas nuestras características competitivas, las condiciones de nuestro entorno, las expectativas de nuestros clientes y la perspectiva de la dirección general.</p>
                        <ul>
                            <li><b>D</b>isciplina</li>
                            <li><b>E</b>ntusiasmo</li>
                            <li><b>L</b>ealtad</li>
                            <li><b>T</b>rabajo en equipo</li>
                            <li><b>A</b>ctitud</li>
                        </ul>
                        </div><!-- End Tab 3 Content -->
                        </div>
                    </div>
                    </div>
                </div>
            </section><!-- End About Section -->
            <!-- ======= Clients Section ======= -->
            <section id="clients" class="clients">
                <div class="container" data-aos="zoom-out">
                    <div class="clients-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide"><img src="{{asset ('assets/img/clients/client-1.png')}}" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="{{asset ('assets/img/clients/client-2.png')}}" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="{{asset ('assets/img/clients/client-3.png')}}" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="{{asset ('assets/img/clients/client-4.png')}}" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="{{asset ('assets/img/clients/client-5.png')}}" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="{{asset ('assets/img/clients/client-6.png')}}" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="{{asset ('assets/img/clients/client-7.png')}}" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="{{asset ('assets/img/clients/client-8.png')}}" class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="{{asset ('assets/img/clients/client-9.png')}}" class="img-fluid" alt=""></div>
                        </div>
                    </div>
                </div>
            </section><!-- End Clients Section -->
            <!-- ======= Services Section ======= -->
            <section id="services" class="services">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                        <h2>Servicios</h2>
                        <p></p>
                    </div>
                    <div class="row gy-5">
                        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                            <div class="service-item">
                            <div class="img">
                                <img src="assets/img/services-1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                <i class="bi bi-rulers"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                <h3>Proyectos</h3>
                                </a>
                                <p>Anteproyecto. <br>
                                Proyecto ejecutivo arquitectónico. <br>
                                Diseño estructural y cimentaciones. <br>
                                Instalaciones MEP y especiales. <br>
                                Análisis de precios unitarios. <br>
                                Memorias de cálculo. <br>
                                Firma de peritos especializados.</p>
                            </div>
                            </div>
                        </div><!-- End Service Item -->
                        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                            <div class="service-item">
                            <div class="img">
                                <img src="assets/img/services-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                <i class="bi bi-pin-angle"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                <h3>Seguimiento</h3>
                                </a>
                                <p>
                                Sistema de gestión documental. <br>
                                Sistema de seguimiento de proyectos y monitoreo tiempo real.
                                </p>
                            </div>
                            </div>
                        </div><!-- End Service Item -->
                        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                            <div class="service-item">
                            <div class="img">
                                <img src="assets/img/services-3.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                <i class="bi bi-person-workspace"></i>
                                </div>
                                <a href="#" class="stretched-link">
                                <h3>Supervision</h3>
                                </a>
                                <p>
                                Plataforma basada en sistemas de información geográfica .<br>
                                Modelado de información de la construcción (BIM).
                                </p>
                            </div>
                            </div>
                        </div><!-- End Service Item -->
                    </div>
                </div>
            </section><!-- End Services Section -->
            <section id="contact" class="contact">
                <div class="container">
                    <div class="section-header">
                    <h2>Contacto</h2>
                    <p></p>
                    </div>
                </div>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1881.3261764141357!2d-99.17286003574426!3d19.427421171470286!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xacc8ade333e668f9!2sDelta%20Group!5e0!3m2!1ses-419!2smx!4v1669998055404!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Google Maps -->
                <div class="container">
                    <div class="row gy-5 gx-lg-5">
                    <div class="col-lg-4">
                        <div class="info">
                        <h3>Contáctanos</h3>
                        <p></p>
                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                            <h4>Ubicacion:</h4>
                            <p>Río Ganges No. 80, Col. Cuauhtémoc
                                Del. Cuauhtémoc
                                Cuidad de México</p>
                            </div>
                        </div><!-- End Info Item -->
                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                            <h4>Email:</h4>
                            <p>info@deltaproyectos.com</p>
                            </div>
                        </div><!-- End Info Item -->
                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                            <h4>Telefono:</h4>
                            <p>+52 55-5533-4616</p>
                            </div>
                        </div><!-- End Info Item -->
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <form method="post" role="form" action="{{ route('contact.store') }}"  class="php-email-form">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" value="{{ old('name') }}" required>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Tu correo electronico" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" value="{{ old('subject') }}" required>
                                @if ($errors->has('subject'))
                                    <span class="text-danger">{{ $errors->first('subject') }}</span>
                                @endif
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" placeholder="Mensaje" required>{{ old('message') }}</textarea>
                                @if ($errors->has('message'))
                                    <span class="text-danger">{{ $errors->first('message') }}</span>
                                @endif
                            </div>
                            <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
                        </form>
                    </div><!-- End Contact Form -->
                    </div>
                </div>
            </section><!-- End Contact Section -->
@endsection
