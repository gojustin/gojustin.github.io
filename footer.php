
    <!-- Contact Section -->
    <div id="contact">
        <div class="container">
            <div class="section-title text-center">
                <h2>Contact Us</h2>
                <hr>
            </div>
            <div class="space"></div>

            <div class="row">
                <div class="col-md-3">
                    <address>
                        <strong>Address</strong><br><br>
                        Taal, Batangas<br><br>
                            <!-- Separated contacts with icon -->
                        <div class="icon-contacts">
                            <strong>Contacts</strong><br>
                            <br>
                            gotech.websolutions@gmail.com<br>
                            Landline: (043) 723 9500<br>
                            Phone: 0975 2412 350
                        </div>
                            <!---->
                        <ul class="social">
                            <li><a href=""><span class="fa fa-facebook"></span></a></li>
                            <li><a href=""><span class="fa fa-google-plus"></span></a></li>
                            <li><a href=""><span class="fa fa-twitter"></span></a></li>
                            <li><a href=""><span class="fa fa-youtube-play"></span></a></li>
                        </ul>
                    </address>
                </div>

                <div class="col-md-9">
                    <form action="php/contact.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                <input type="tel" name="phoneNumber" class="form-control" placeholder="Phone No." required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                                <input type="text" name="cName" class="form-control" placeholder="Company Name" required>
                            </div>
                        </div>
                        <textarea class="form-control" rows="4" name="message" placeholder="Message" required></textarea>
                        <div class="text-right">
                            <input type="submit" name="submit" class="btn send-btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <nav id="footer">
        <div class="container">
             <div class="pull-left">
                <p>2021 © Go Tech Web Solutions. All Rights Reserved.
            </div>
            <div class="pull-right"> 
                <a href="#home" class="page-scroll">Back to Top <span class="fa fa-angle-up"></span></a>
            </div>
        </div>
    </nav>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jasny-bootstrap.min.js"></script>

    <script src="js/owl.carousel.js"></script>
    <script src="js/typed.js"></script>
    <script>
      $(function(){
          $("#head-title").typed({
            strings: ["We make websites^1000", "24/7 available for hire^1000" ,"Web design with difference^1000"],
            typeSpeed: 100,
            loop: true,
            startDelay: 100
          });
      });
    </script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/img-modal.js"></script>
    <script type="text/javascript" src="js/lightbox.js"></script>
    <script type="text/javascript" src="js/nav-bar.js"></script>

  </body>
</html>