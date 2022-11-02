<!-- registration link -->
<button id="register" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Send Enquiry</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Enquire Us</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST" id="enquiry_form">
                    <div class="form-row">
                        <div class="col-md-12 mb-4">
                            <input type="text" class="control" name="name" id="Name" placeholder="Name" required>
                        </div>
                        <div class="col-md-12 mb-4">
                            <input type="email" class="control" name="email" id="Email" placeholder="Email Id" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-4">
                            <input type="text" class="control" name="phone" id="Phone" placeholder="Mobile" required>
                        </div>
                        <div class="col-md-12 mb-4">
                            <input type="text" class="control" name="location" id="Location" placeholder="Your Location" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-4">
                            <textarea style="resize: none;" class="control" name="msg" id="Msg" placeholder="Message" cols="30" rows="4" required></textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary" id="submit_bu" name="submit" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- //registration link -->
<!-- footer -->
<footer>
    <div class="footer bg-dark">
        <div class="container-fluid">
            <div class="row justify-content-around">
                <div class="col-md-3 col-sm-6 col-12 text-white">
                    <h4>GET IN TOUCH</h4>
                    <address><i class="fa fa-map-marker"></i>
                        AWS Institute (Anya Web Solution) :
                        First Floor, Durgapuri Chawk,<br>
                        On Loni Road, Shahdara<br>
                        Delhi - India (110032)
                    </address>
                    <p class="info"><i class="fa fa-phone"></i> +91-9310245238</p>
                    <p class="info"><i class="fa fa-envelope-open"></i>
                        info@anyawebsolution.in<br>
                        www.anyawebsolution.in
                    </p>
                </div>
                <div class="col-md-3 col-sm-6 col-12 mt-sm-0 mt-lg-0 mt-md-0 mt-5 text-white">
                    <h4>USEFUL LINKS</h4>
                    <ul>
                        <li><i class="fa fa-chevron-right"></i> <a href="index.php">Home</a></li>
                        <li><i class="fa fa-chevron-right"></i> <a href="about.html">About Us</a></li>
                        <li><i class="fa fa-chevron-right"></i> <a href="courses/SEO-Training.html">Courses</a></li>
                        <li><i class="fa fa-chevron-right"></i> <a href="services/search-engine-optimization-seo-services.html">Services</a></li>
                        <li><i class="fa fa-chevron-right"></i> <a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-12 mt-sm-5 mt-lg-0 mt-md-0 mt-5 text-white">
                    <h4>OUR SERVICES</h4>
                    <ul>
                        <li><i class="fa fa-chevron-right"></i> <a href="index">Home</a></li>
                        <li><i class="fa fa-chevron-right"></i> <a href="about">About Us</a></li>
                        <li><i class="fa fa-chevron-right"></i> <a href="courses/SEO-Training.html">Courses</a></li>
                        <li><i class="fa fa-chevron-right"></i> <a href="services/search-engine-optimization-seo-services.html">Services</a></li>
                        <li><i class="fa fa-chevron-right"></i> <a href="contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-12 mt-sm-5 mt-lg-0 mt-md-0 mt-5 text-white">
                    <h4>OTHERS</h4>
                    <address><i class="fa fa-map-marker"></i>
                        Anya Classes :
                        Infront of Degree College,<br>
                        On SBI Bank, 1st Floor,<br>
                        G.T. Road, Aligarh - 202001
                    </address>
                    <p class="info"><i class="fa fa-phone"></i> +91-9675220073</p>
                    <p class="info"><i class="fa fa-envelope-open"></i>
                        info@anyawebsolution.in<br>
                        www.anyawebsolution.in
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="Links text-white d-flex justify-content-lg-between justify-content-md-between justify-content-sm-between flex-lg-row flex-md-row flex-sm-row flex-column">
                    <p>&copy; Copyright . All Rights Reserved &trade;</p>
                    <div class="icons">
                        <a href="#" target="_blank"><i class="fa fa-facebook-f fa-1x rounded-circle border-white"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-twitter fa-1x rounded-circle border-white"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-instagram fa-1x rounded-circle border-white"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-youtube-play fa-1x rounded-circle border-white"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-linkedin fa-1x rounded-circle border-white"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- //footer -->
<!-- Custom Theme files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="scroll.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="js/particles.js"></script>
<script src="js/particle-set.js"></script>
<script src="js/query.js"></script>


<script type="text/javascript">
    $(document).ready(function(e) {

        $(document).on('submit', '#enquiry_form', function(e) {
            e.preventDefault();
            var coldata = new FormData(this);
            $.ajax({
                url: "ajax/enquiry_form.php",
                data: coldata,
                type: "POST",
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#submit_bu').text('wait...');

                },
                success: function(e) {
                    console.log(e.status);
                    window.location.href = "https://www.anyawebsolution.in/thanks";

                },
                error: function(e) {
                    console.error(e);
                }

            });

        });
    });
</script>