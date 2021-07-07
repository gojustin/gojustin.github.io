<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>
    <!-- Meet Us Section -->
    <div id="meet-us">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
                        <h2>Meet Us</h2>
                        <hr>
                    </div>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                    <a href="#services" class="down-btn page-scroll">
                        <span class="fa fa-angle-down"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Overview Video Section -->
    <div id="overview-video">
        <div class="overlay">
            <div class="container">
                <a href="#">
                    <span class="fa fa-play"></span>
                </a>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div id="services">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
                        <h2>Services</h2>
                        <hr>
                    </div>
                    <p>We make from school projects to a company's dream websites.</p>
                </div>
            </div>

            <div class="space"></div>

            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="service">
                        <span class="fa fa-phone fa-3x"></span>
                        <h4>Branding</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis. </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="service">
                        <span class="fa fa-laptop fa-3x"></span>
                        <h4>Web Devepment</h4>
                        <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Accusamus et. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="service">
                        <span class="fa fa-plug fa-3x"></span>
                        <h4>App Design</h4>
                        <p>Nulla vitae elit libero, a pharetra augue. At vero eos et accusamus et iusto odio dignissimos ducimus. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. </p>
                    </div>
                </div>
            </div>
            <a href="#works" class="down-btn page-scroll">
                <span class="fa fa-angle-down"></span>
            </a>
        </div>
    </div>

    <!-- Call-to-Action Section -->
    <!-- <div id="cta">
        <div class="container text-center">
            <a href="#" class="btn go-to-btn">Check our shop</a>
        </div>
    </div> -->

    <!-- Portfolio Section -->
    <div id="works">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
                        <h2>Our Recent Projects</h2>
                        <hr>
                    </div>
                    <p>Here are our most recent and most estimable works overtime 2020-2021. The portfolio is shown dependent on the remarks of customers by their fulfillment.</p>
                </div>
            </div>
            <div class="space"></div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6 nopadding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <!-- == 01 Lightbox == -->
                                <div class="hover-text">
                                    <div class="fa fa-search" onclick="openModal();currentSlide(1)"></div>
                                    <h5>We can create your desired</h5>
                                    <p class="lead">Business Website</p>
                                    <div class="hline"></div>
                                </div>

                                <img src="img/portfolio/aggtedeck.jpg" class="img-responsive" alt="...">
                                <!-- SINGLE MODAL -->
                                <!-- <div id="myModal" class="modal">
                                    <span class="close-modal">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                    
                                </div> -->
                                <!--  -->
                            <!-- == End 01 Lightbox == -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 nopadding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <!-- == 02 Lightbox == -->
                                <div class="hover-text">
                                    <div class="fa fa-search" onclick="openModal();currentSlide(2)"></div>
                                    <h5>Exclusive</h5>
                                    <p class="lead">School Projects</p>
                                    <div class="hline"></div>
                                </div>

                                <img src="img/portfolio/school-project.jpg" class="img-responsive" alt="...">
                            <!-- == End 02 Lightbox == -->                        
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 nopadding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <!-- == 03 Lightbox == -->
                            <div class="hover-text">
                                <div class="fa fa-search" onclick="openModal();currentSlide(3)"></div>
                                <h5>Branding</h5>
                                <p class="lead">Metalbrand</p>
                                <div class="hline"></div>
                            </div>

                            <img src="img/portfolio/03.jpg" class="img-responsive" alt="...">
                            <!-- == End 03 Lightbox == -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 nopadding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <!-- == 04 Lightbox == -->
                            <div class="hover-text">
                                <div class="fa fa-search" onclick="openModal();currentSlide(4)"></div>
                                <h5>Business Card</h5>
                                <p class="lead">Clothing Line</p>
                                <div class="hline"></div>
                            </div>

                            <img src="img/portfolio/04.jpg" class="img-responsive" alt="...">
                            <!-- == End 04 Lightbox == -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space"></div>
        <div class="text-center">
            <a href="#" class="btn read-more-btn">Check on Dribbble</a>
            <br>
            <a href="#about-us" class="down-btn page-scroll"><span class="fa fa-angle-down"></span></a>
        </div>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal">
        <span class="close-modal cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">
            <div class="caption-container">
                <p id="caption"></p>
            </div>

            <div class="mySlides">
                <img src="img/portfolio/aggtedeck.jpg" style="width:100%;max-width:800px;">
            </div>

            <div class="mySlides">
                <img src="img/portfolio/school-project.jpg" style="width:100%;max-width:800px;">
            </div>

            <div class="mySlides">
                <img src="img/portfolio/03.jpg" style="width:100%;max-width:800px;">
            </div>
            
            <div class="mySlides">
                <img src="img/portfolio/04.jpg" style="width:100%;max-width:800px;">
            </div>
            
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <!-- Demo -->
            <div class="column">
                <img class="demo cursor" src="img/portfolio/aggtedeck.jpg" style="width:100%" onclick="currentSlide(1)" alt="AGGTE Cladding & Decking">
            </div>
            <div class="column">
                <img class="demo cursor" src="img/portfolio/school-project.jpg" style="width:100%" onclick="currentSlide(2)" alt="School Project: Computer Science, Grade 9, Fame Academy of Science and Technology">
            </div>
            <div class="column">
                <img class="demo cursor" src="img/portfolio/03.jpg" style="width:100%" onclick="currentSlide(3)" alt="...">
            </div>
            <div class="column">
                <img class="demo cursor" src="img/portfolio/04.jpg" style="width:100%" onclick="currentSlide(4)" alt="...">
            </div>
        </div>
        <div class="fullRow" onclick="closeModal()">
    </div>
    </div>
    
                <!-- === -->

    <!-- Clients Section -->
    <div id="clients">
        <div class="overlay">
            <div class="container text-center">
                <div class="section-title">
                    <h2>Our Partners</h2>
                    <hr>
                </div>

                <ul class="clients">
                    <li><a href="#"><img src="img/clients/01.png" class="img-responsive" alt="..."></a></li>
                    <li><a href="#"><img src="img/clients/02.png" class="img-responsive" alt="..."></a></li>
                    <li><a href="#"><img src="img/clients/03.png" class="img-responsive" alt="..."></a></li>
                    <!-- <li><a href="#"><img src="img/clients/04.png" class="img-responsive" alt="..."></a></li> -->
                </ul>
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <div id="about-us">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
                        <h2>About Us</h2>
                        <hr>
                    </div>
                    <p>Go Tech Web Solutions is a small family-run company made out of experienced individuals to make imaginative plans for a website.</p>
                </div>
            </div>
            <div class="space"></div>
            <div class="row">
                <!-- <div class="col-md-10 col-sm-10"> -->
                    <!-- <div class="row"> -->
                        <div class="col-md-4 col-sm-4">
                            <div class="team">
                                <img src="img/team/mayeth.jpg" class="img-responsive img-circle" alt="...">
                                <br>
                                <h4>Mayeth Go</h4>
                                <p class="small">CEO/Founder</p>
                                <hr>
                                <!--  -->
                                <div class="flex-icon">
                                    <a href="" class="fa fa-facebook" id="about-icons"></a>
                                    <a href="" class="fa fa-linkedin" id="about-icons"></a>
                                    <a href="" class="fa fa-youtube" id="about-icons"></a>
                                </div>
                                <!--  -->
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-sm-4">
                            <div class="team">
                                <img src="img/team/02.jpg" class="img-responsive img-circle" alt="...">
                                <br>
                                <h4>Arnel Go</h4>
                                <p class="small">Manager & All Rounder</p>
                                <hr>
                                <!--  -->
                                <div class="flex-icon">
                                    <a href="" class="fa fa-facebook" id="about-icons"></a>
                                    <a href="" class="fa fa-linkedin" id="about-icons"></a>
                                    <a href="" class="fa fa-youtube" id="about-icons"></a>
                                </div>
                                <!--  -->
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="team">
                                <img src="img/team/04.jpg" class="img-responsive img-circle" alt="...">
                                <br>
                                <h4>Janzen Go</h4>
                                <p class="small">Senior Web Coder</p>
                                <hr>
                                <!--  -->
                                <div class="flex-icon">
                                    <a href="" class="fa fa-facebook" id="about-icons"></a>
                                    <a href="" class="fa fa-linkedin" id="about-icons"></a>
                                    <a href="" class="fa fa-youtube" id="about-icons"></a>
                                </div>
                                <!--  -->
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="team">
                                <img src="img/team/justin.jpg" class="img-responsive img-circle" alt="...">
                                <br>
                                <h4>Justin Go</h4>
                                <p class="small">Junior Web Coder</p>
                                <hr>
                                <!--  -->
                                <div class="flex-icon">
                                    <a href="" class="fa fa-facebook" id="about-icons"></a>
                                    <a href="" class="fa fa-linkedin" id="about-icons"></a>
                                    <a href="" class="fa fa-youtube" id="about-icons"></a>
                                </div>
                                <!--  -->
                            </div>
                        </div>

                    <!-- </div> -->
                <!-- </div> -->

                <!-- <div class="col-md-2 col-sm-2">
                    <div class="team hire">
                        <h4>We Are Hiring!</h4>
                        <hr>
                        <div class="space"></div>
                        <a href="#">
                            <span class="fa fa-paper-plane-o fa-2x"></span>
                        </a>
                    </div>
                </div> -->

            </div>

            <div class="text-center">
                <a href="#contact" class="page-scroll down-btn">
                    <span class="fa fa-angle-down"></span>
                </a>
            </div>

        </div>
    </div>

        <!-- Testimonial Section -->
    <div id="testimonials">
        <div class="overlay">
            <div class="container">
                <div class="section-title">
                    <h2>What our Customers Say...</h2>
                    <hr>
                </div>

                <div id="testimonial" class="owl-carousel owl-theme">
                  <div class="item">
                    <h3>Et iusto odio dignissimos ducimus qui blanditiis <br>praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint <br>occaecati cupiditate non provident. </h3>
                    <br>
                    <h6>AGGTEDeck Composite Cladding</h6>
                  </div>

                  <div class="item">
                    <h3>Fusce dapibus, tellus ac cursus commodo, tortor<br> mauris condimentum. Duis mollis, est non commodo luctus, nisi erat </h3>
                    <br>
                    <h6>Kai, Web Geekster</h6>
                  </div>

                  <div class="item">
                    <h3>Cras justo odio, dapibus ac facilisis in, egestas <br>eget quam. Donec id elit non mi porta gravida at eget metus.</h3>
                    <br>
                    <h6>Jenn, Coders' Playground</h6>
                  </div>

                  <div class="item">
                    <h3>Cras justo odio, dapibus ac facilisis in, egestas <br>eget quam. Donec id elit non mi porta gravida at eget metus.</h3>
                    <br>
                    <h6>Jenn, Coders' Playground</h6>
                  </div>

                  <div class="item">
                    <h3>Cras justo odio, dapibus ac facilisis in, egestas <br>eget quam. Donec id elit non mi porta gravida at eget metus.</h3>
                    <br>
                    <h6>Jenn, Coders' Playground</h6>
                  </div>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php'); ?>